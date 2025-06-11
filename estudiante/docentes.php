<?php
session_start();
require '../conexion.php';

if (!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'estudiante') {
    header("Location: ../iniciar-sesion.html");
    exit();
}

if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "No se especificó el docente.";
    exit();
}

$docente_id = (int) $_GET['id'];

$sql = "SELECT nombre, apellido, usuario, descripcion, imagen FROM docentes WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$docente_id]);
$docente = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$docente) {
    echo "Docente no encontrado.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <title>Perfil del Docente</title>
    <link rel="stylesheet" href="../css/listdocente.css" />
</head>

<body>

    <h1>Perfil del Docente</h1>

    <nav>
        <?php include 'menu.html'; ?>
    </nav>

    <div class="perfil-container">
        <div class="perfil-card">
            <div class="perfil-img">
                <img src="../imagenes/docentes/<?= htmlspecialchars($docente['imagen'] ?? 'default.png') ?>"
                    alt="Foto de <?= htmlspecialchars($docente['nombre'] . ' ' . $docente['apellido']) ?>"
                    class="perfil-foto" />
            </div>
            <div class="perfil-info">
                <h2 class="perfil-nombre"><?= htmlspecialchars($docente['nombre'] . ' ' . $docente['apellido']) ?></h2>
                <p class="perfil-usuario"><strong>Usuario:</strong> <?= htmlspecialchars($docente['usuario']) ?></p>
                <h3 class="perfil-titulo">Profesor de Curso de PHP</h3>
                <p class="perfil-descripcion">
                    <?= nl2br(htmlspecialchars($docente['descripcion'] ?? 'Sin descripción.')) ?></p>
                <a href="docentes-listado.php" class="btn-regresar">Volver al listado</a>
            </div>
        </div>
    </div>

</body>

</html>