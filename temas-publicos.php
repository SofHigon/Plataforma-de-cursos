<?php
session_start();
require 'conexion.php'; // Aquí se asume que $conn es mysqli

// Definición de temas con curso_id
$temas = [
    'introduccion' => [
        'titulo' => '🌐 Introducción a PHP',
        'descripcion' => 'Descubre qué es PHP y por qué es uno de los lenguajes más utilizados para el desarrollo web del lado del servidor.',
        'aprendizaje' => [
            'Comprender el rol de PHP en aplicaciones web dinámicas',
            'Escribir tus primeros scripts PHP',
            'Configurar tu entorno de desarrollo local (XAMPP, VSCode, etc.)'
        ],
        'curso_id' => 1
    ],
    'variables' => [
        'titulo' => '🔤 Variables y Tipos de Datos',
        'descripcion' => 'Aprende a declarar, almacenar y manipular datos con variables. Conoce cómo PHP maneja diferentes tipos de datos.',
        'aprendizaje' => [
            'Declarar y utilizar variables correctamente',
            'Identificar y utilizar los tipos de datos básicos (string, int, bool, float)',
            'Aplicar conversiones de tipos cuando sea necesario'
        ],
        'curso_id' => 2
    ],
    'condicionales' => [
        'titulo' => '🔁 Condicionales y Bucles',
        'descripcion' => 'Controla el flujo de tu programa con estructuras condicionales y repite tareas con bucles.',
        'aprendizaje' => [
            'Implementar condiciones usando if, else, switch',
            'Repetir acciones con while, for, foreach',
            'Combinar estructuras lógicas para resolver problemas reales'
        ],
        'curso_id' => 3
    ],
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Cursos disponibles - Tutor Virtual PHP</title>
    <link rel="stylesheet" href="css/index.css" />
    <style>
        .boton { padding: 8px 15px; background-color: #007bff; color: white; text-decoration: none; border-radius: 5px; display:inline-block; margin-top: 10px;}
        .boton:hover { background-color: #0056b3; }
        .boton.pagar { background-color: #28a745; }
        .boton.pagar:hover { background-color: #1e7e34; }
        .card { border: 1px solid #ccc; padding: 15px; margin-bottom: 15px; border-radius: 6px; }
    </style>
</head>
<body>

<header>
    <h1>Curso de PHP</h1>
</header>

<nav>
    <ul>
        <li><a href="index.html">Inicio</a></li>
        <li><a href="iniciar-sesion.html">Matricularse</a></li>
        <li><a href="temas-publicos.php">Cursos</a></li>
        <li><a href="Galeria.html">Galería</a></li>
        <li><a href="Creadores.html">Creadores</a></li>
    </ul>
</nav>


<main>
    <?php foreach ($temas as $clave => $tema): ?>
        <div class="card">
            <h2><?php echo htmlspecialchars($tema['titulo']); ?></h2>
            <p><?php echo htmlspecialchars($tema['descripcion']); ?></p>
            <h3>Aprenderás a:</h3>
            <ul>
                <?php foreach ($tema['aprendizaje'] as $item): ?>
                    <li><?php echo htmlspecialchars($item); ?></li>
                <?php endforeach; ?>
            </ul>

            <!-- Botón para iniciar sesión -->
            <a href="iniciar-sesion.html" class="boton">Iniciar sesión para ver</a>
        </div>
    <?php endforeach; ?>
</main>

<footer>
    &copy; 2025 Tutor Virtual PHP - Aprende programando.
</footer>

</body>
</html>
