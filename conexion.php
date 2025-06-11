<?php
$servidor = 'sql100.infinityfree.com';
$base_datos = 'if0_39200996_tutorvirtual';
$usuario = 'if0_39200996';
$clave = 'sofgfgh1234567';

try {
    $pdo = new PDO("mysql:host=$servidor;dbname=$base_datos;charset=utf8", $usuario, $clave);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: ". $e->getMessage());
}
?>



