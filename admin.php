<?php
session_start();

// Verificar si ya existe una lista de usuarios
if (!isset($_SESSION['usuarios'])) {
    $_SESSION['usuarios'] = [];
}

// Comprobar si el admin ya está creado
$adminExiste = false;
foreach ($_SESSION['usuarios'] as $usuario) {
    if (isset($usuario['usuario']) && $usuario['usuario'] === 'admin') {
        $adminExiste = true;
        break;
    }
}

if (!$adminExiste) {
    $_SESSION['usuarios'][] = [
        'usuario' => 'admin',
        'nombre' => 'Administrador',
        'apellido' => 'DelSistema',
        'clave' => password_hash('admin123', PASSWORD_DEFAULT),
        'rol' => 'admin'
    ];
    echo "<h3>✅ Usuario admin creado correctamente</h3>";
    echo "<p>Usuario: <strong>admin</strong></p>";
    echo "<p>Contraseña: <strong>admin123</strong></p>";
} else {
    echo "<h3>ℹ️ El usuario admin ya existe.</h3>";
}
?>