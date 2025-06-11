<?php
session_start();
require 'conexion.php'; // Tu conexión PDO

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = trim($_POST['usuario']);
    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);
    $clave = $_POST['clave'];
    $rol = $_POST['rol'];

    if (empty($usuario) || empty($nombre) || empty($apellido) || empty($clave) || empty($rol)) {
        exit("Todos los campos son obligatorios.");
    }

    // Hashear contraseña
    $clave_hashed = password_hash($clave, PASSWORD_DEFAULT);

    // Verificar si el usuario ya existe en cualquiera de las tablas
    $stmt = $pdo->prepare("SELECT usuario FROM estudiantes WHERE usuario = ?");
    $stmt->execute([$usuario]);
    if ($stmt->fetch()) {
        exit("El usuario ya existe como estudiante.");
    }

    $stmt = $pdo->prepare("SELECT usuario FROM docentes WHERE usuario = ?");
    $stmt->execute([$usuario]);
    if ($stmt->fetch()) {
        exit("El usuario ya existe como docente.");
    }

    // Insertar según rol
    if ($rol === 'estudiante') {
        $stmt = $pdo->prepare("INSERT INTO estudiantes (usuario, nombre, apellido, clave) VALUES (?, ?, ?, ?)");
        $stmt->execute([$usuario, $nombre, $apellido, $clave_hashed]);
    } elseif ($rol === 'docente') {
        $stmt = $pdo->prepare("INSERT INTO docentes (usuario, nombre, apellido, clave) VALUES (?, ?, ?, ?)");
        $stmt->execute([$usuario, $nombre, $apellido, $clave_hashed]);
    } else {
        exit("Rol no válido.");
    }

    header("Location: iniciar-sesion.html?registro=exitoso");
    exit();
}
?>
