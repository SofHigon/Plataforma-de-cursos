<?php
session_start();
require '../conexion.php';

// Verifica si el usuario inició sesión como docente
if (!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'docente') {
    header("Location: ../iniciar-sesion.html");
    exit();
}

$id = $_SESSION['id'];

// Obtener datos del docente
$sql = "SELECT * FROM docentes WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);
$docente = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Perfil</title>
    <link rel="stylesheet" href="../css/perfil-docente.css">
</head>
<body>

     <h1>Panel del Docente</h1>
    <?php include 'menu.html'; ?>

    <main class="perfil-container">
        <section class="perfil-card">
            <div class="perfil-img">
                <?php if (!empty($docente['imagen'])): ?>
                    <img src="../imagenes/docentes/<?= htmlspecialchars($docente['imagen']) ?>" alt="Foto de perfil">
                <?php else: ?>
                    <img src="../imagenes/default-profile.png" alt="Foto de perfil por defecto">
                <?php endif; ?>
            </div>

            <div class="perfil-info">
                <h2><?= htmlspecialchars($docente['nombre'] . " " . $docente['apellido']) ?></h2>
                <p><strong>Usuario:</strong> <?= htmlspecialchars($docente['usuario']) ?></p>
                <?php if (!empty($docente['descripcion'])): ?>
                    <p class="descripcion"><?= nl2br(htmlspecialchars($docente['descripcion'])) ?></p>
                <?php else: ?>
                    <p class="descripcion vacia">Este docente aún no ha añadido una descripción profesional.</p>
                <?php endif; ?>

                <a href="editar-perfil.php" class="btn-editar">Editar Perfil</a>
            </div>
        </section>
    </main>

</body>
</html>
