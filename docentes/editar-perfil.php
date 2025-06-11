<?php
session_start();
require '../conexion.php';

// Verifica que sea un docente autenticado
if (!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'docente') {
    header("Location: ../iniciar-sesion.html");
    exit();
}

$id = $_SESSION['id'];
$mensaje = "";

// Procesar el formulario si se envió
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $descripcion = $_POST['descripcion'];

    // Manejo de imagen
    $imagen = null;
    if (!empty($_FILES['imagen']['name'])) {
        $nombreImagen = uniqid() . "_" . $_FILES['imagen']['name'];
        $rutaTemporal = $_FILES['imagen']['tmp_name'];
        move_uploaded_file($rutaTemporal, "../imagenes/docentes/" . $nombreImagen);
        $imagen = $nombreImagen;
    }

    // Actualizar en la base de datos
    if ($imagen) {
        $sql = "UPDATE docentes SET nombre = ?, apellido = ?, descripcion = ?, imagen = ? WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nombre, $apellido, $descripcion, $imagen, $id]);
    } else {
        $sql = "UPDATE docentes SET nombre = ?, apellido = ?, descripcion = ? WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nombre, $apellido, $descripcion, $id]);
    }

    $mensaje = "Perfil actualizado correctamente.";
    header("Location: perfil.php");
    exit();
}

// Obtener los datos actuales del docente
$sql = "SELECT * FROM docentes WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);
$docente = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Perfil</title>
    <link rel="stylesheet" href="../css/editarperfil.css">
</head>
<body>
     
     <h1>Panel del Docente</h1>
    <?php include 'menu.html'; ?>

    <div class="formulario-contenedor">
        <form method="POST" enctype="multipart/form-data">
            <label>Nombre</label>
            <input type="text" name="nombre" value="<?= htmlspecialchars($docente['nombre']) ?>" required>

            <label>Apellido</label>
            <input type="text" name="apellido" value="<?= htmlspecialchars($docente['apellido']) ?>" required>

            <label>Descripción profesional</label>
            <textarea name="descripcion" rows="5"><?= htmlspecialchars($docente['descripcion'] ?? '') ?></textarea>

            <label>Imagen de perfil</label>
            <input type="file" name="imagen" accept="image/*">

            <button type="submit">Guardar cambios</button>
        </form>
    </div>
</body>
</html>
