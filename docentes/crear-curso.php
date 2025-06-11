<?php
session_start();
require '../conexion.php';

// Verificar que sea docente
if (!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'docente') {
    header("Location: ../iniciar-sesion.html");
    exit();
}

$mensaje = "";

// Guardar curso si se envió el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = trim($_POST['nombre']);
    $descripcion = trim($_POST['descripcion']);

    if (!empty($nombre) && !empty($descripcion)) {
        $sql = "INSERT INTO curso (nombre, descripcion, docente_id) VALUES (?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nombre, $descripcion, $_SESSION['id']]);
        $mensaje = "Curso creado exitosamente.";
    } else {
        $mensaje = "Por favor, completa todos los campos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Curso</title>
    <link rel="stylesheet" href="../css/docentes.css">
</head>
<body>

    <h1>Panel del Docente</h1>
    <?php include 'menu.html'; ?>

    <h1 id="titulo-intermedio">Crear Nuevo Curso</h1>

    <div class="formulario-curso">
        <?php if ($mensaje): ?>
            <p class="mensaje"><?= htmlspecialchars($mensaje) ?></p>
        <?php endif; ?>

        <form method="POST">
            <label for="nombre">Nombre del curso</label>
            <input type="text" name="nombre" id="nombre" required placeholder="Ej. Fundamentos de PHP">

            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" id="descripcion" rows="5" required placeholder="Describe el contenido del curso..."></textarea>

            <button type="submit">Crear curso</button>
        </form>
    </div>

</body>
</html>
