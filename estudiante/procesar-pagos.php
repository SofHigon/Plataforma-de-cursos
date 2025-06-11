<?php
session_start();
require 'conexion.php';

if (!isset($_SESSION['id_estudiante'])) {
    echo "Error: No has iniciado sesión.";
    exit;
}

$estudiante_id = $_SESSION['id_estudiante'];
$curso_id = $_POST['id_curso'] ?? null;
$metodo = $_POST['metodo_pago'] ?? null;

if (!$curso_id || !$metodo) {
    echo "Faltan datos. Asegúrate de seleccionar un curso y un método de pago.";
    exit;
}

$fecha_pago = date('Y-m-d H:i:s');
$estado = 'pendiente';

try {
    $sql = "INSERT INTO pago (estudiante_id, curso_id, metodo, fecha_pago, estado)
            VALUES (:estudiante_id, :curso_id, :metodo, :fecha_pago, :estado)";
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':estudiante_id' => $estudiante_id,
        ':curso_id' => $curso_id,
        ':metodo' => $metodo,
        ':fecha_pago' => $fecha_pago,
        ':estado' => $estado
    ]);

    echo "✅ Pago registrado correctamente. Estado: $estado";
} catch (PDOException $e) {
    echo "❌ Error al registrar el pago: " . $e->getMessage();
}
?>
