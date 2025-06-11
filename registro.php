<?php
session_start();
require_once 'conexion.php';

// Solo admin puede acceder
if (!isset($_SESSION['activo']) || $_SESSION['rol'] !== 'admin') {
    echo "<h2>Acceso denegado</h2>";
    echo "<p>Esta sección solo está disponible para administradores.</p>";
    exit();
}

try {
    $stmt = $pdo->query("SELECT usuario, fecha_hora, ip FROM logs ORDER BY fecha_hora DESC");
    $logs = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error al obtener los registros: " . $e->getMessage());
}

if (empty($logs)) {
    echo "<h2>No hay registros de inicio de sesión.</h2>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Registros de Inicio de Sesión</title>
    <link rel="stylesheet" href="estilos.css" />
</head>
<body>
    <h1>Registros de Inicio de Sesión</h1>

    <table>
        <thead>
            <tr>
                <th>Usuario</th>
                <th>Fecha y Hora</th>
                <th>IP</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($logs as $log): ?>
                <tr>
                    <td><?= htmlspecialchars($log['usuario']) ?></td>
                    <td><?= htmlspecialchars($log['fecha_hora']) ?></td>
                    <td><?= htmlspecialchars($log['ip']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="boton-contenedor">
        <a href="index.html" class="boton-volver">Volver al menú</a>
    </div>
</body>
</html>
