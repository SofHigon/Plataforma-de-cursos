<?php
session_start();
require '../conexion.php';

// Verificar que sea un estudiante
if (!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'estudiante') {
    header("Location: ../iniciar-sesion.html");
    exit();
}

// Obtener los pagos del estudiante actual
$sql = "SELECT p.estado, p.fecha_pago, c.nombre AS curso
        FROM pago p
        JOIN curso c ON p.curso_id = c.id
        WHERE p.estudiante_id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$_SESSION['id']]);
$pagos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Mis Pagos - Estudiante</title>
    <link rel="stylesheet" href="../css/temas.css" />
    
</head>

<body>

    <h1>Curso Profesional de PHP</h1>
<nav>
    <?php include 'menu.html'; ?>
</nav>
    <table>
        
        <tr>
            <th>Curso</th>
            <th>Fecha de pago</th>
            <th>Estado</th>
        </tr>
        <?php foreach ($pagos as $pago): ?>
            <tr>
                <td><?= htmlspecialchars($pago['curso']) ?></td>
                <td><?= htmlspecialchars($pago['fecha_pago']) ?></td>
                <td class="<?= $pago['estado'] === 'pagado' ? 'estado-pagado' : 'estado-pendiente' ?>">
                    <?= ucfirst($pago['estado']) ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>