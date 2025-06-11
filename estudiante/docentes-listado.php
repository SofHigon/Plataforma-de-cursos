<?php
session_start();
require '../conexion.php';

if (!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'estudiante') {
    header("Location: ../iniciar-sesion.html");
    exit();
}

// Obtener todos los docentes
$sql = "SELECT id, nombre, apellido FROM docentes";
$stmt = $pdo->query($sql);
$docentes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Listado de Docentes</title>
    <link rel="stylesheet" href="../css/listdocente.css">
</head>
<body>
    <h1>Docentes Registrados</h1>

    <nav>
        <?php include 'menu.html'; ?>
    </nav>

    <ul class="lista-docentes">
        <?php foreach ($docentes as $docente): ?>
            <li>
                <?= htmlspecialchars($docente['nombre'] . ' ' . $docente['apellido']) ?> - 
                <a href="docentes.php?id=<?= $docente['id'] ?>">Ver Perfil</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
