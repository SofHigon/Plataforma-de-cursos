<?php
session_start();
require 'conexion.php'; // Tu conexión PDO

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = trim($_POST['usuario']);
    $clave = $_POST['clave'];

    if (empty($usuario) || empty($clave)) {
        header("Location: iniciar-sesion.html?error=campos_vacios");
        exit();
    }

    // Buscar en estudiantes
    $stmt = $pdo->prepare("SELECT * FROM estudiantes WHERE usuario = ?");
    $stmt->execute([$usuario]);
    $user = $stmt->fetch();

    if ($user && password_verify($clave, $user['clave'])) {
        $_SESSION['id'] = $user['id'];
        $_SESSION['usuario'] = $user['usuario'];
        $_SESSION['rol'] = 'estudiante';
        $_SESSION['activo'] = true;
        header("Location: estudiante/index.php");
        exit();
    }

    // Buscar en docentes
    $stmt = $pdo->prepare("SELECT * FROM docentes WHERE usuario = ?");
    $stmt->execute([$usuario]);
    $user = $stmt->fetch();

    if ($user && password_verify($clave, $user['clave'])) {
        $_SESSION['id'] = $user['id'];
        $_SESSION['usuario'] = $user['usuario'];
        $_SESSION['rol'] = 'docente';
        $_SESSION['activo'] = true;
        header("Location: docentes/index.php");
        exit();
    }

    // Si no encuentra o contraseña incorrecta
    header("Location: iniciar-sesion.html?error=credenciales");
    exit();
}
?>
