<?php
session_start();
require '../conexion.php';

if (!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'estudiante') {
    header("Location: ../iniciar-sesion.html");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['curso_id'], $_POST['nombre'], $_POST['email'], $_POST['metodo'])) {
    $curso_id = $_POST['curso_id'];
    $nombre = $_POST['nombre']; 
    $email = $_POST['email'];   
    $metodo = $_POST['metodo'];
    $estudiante_id = $_SESSION['id']; 
    $estado = 'pagado';
    $fecha_pago = date('Y-m-d H:i:s');

    try {
        $sql = "INSERT INTO pago (estudiante_id, curso_id, metodo, estado, fecha_pago) 
                VALUES (?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$estudiante_id, $curso_id, $metodo, $estado, $fecha_pago]);

        header("Location: temas-estudiante.php");
        exit();
    } catch (PDOException $e) {
        echo " Error al registrar el pago: " . $e->getMessage();
    }
} else {
    echo " Datos del formulario incompletos.";
    exit();
}
