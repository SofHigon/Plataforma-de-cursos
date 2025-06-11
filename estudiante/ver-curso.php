<?php
session_start();
require_once '../conexion.php';

// Validación de sesión
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit;
}

$curso_id = $_GET['curso_id'] ?? null;

if (!$curso_id) {
    echo "Curso no especificado.";
    exit;
}

// Verificar si el estudiante pagó el curso
$sql = "SELECT * FROM pago WHERE estudiante_id = ? AND curso_id = ? AND estado = 'pagado'";
$stmt = $pdo->prepare($sql);
$stmt->execute([$_SESSION['id'], $curso_id]);
$pagoValido = $stmt->fetch();

if (!$pagoValido) {
    echo "⚠️ No tienes acceso a este curso. Debes realizar el pago.";
    exit;
}

// Curso: HTML con acordeón

$temas = [
    'introduccion' => [
        'titulo' => '🌐 Introducción a PHP',
        'contenido' => '
        <h2>¿Qué es PHP?</h2>
        <p>PHP (Hypertext Preprocessor) es un lenguaje de programación de código abierto ampliamente utilizado que se ejecuta en el servidor y se especializa en la creación de aplicaciones web dinámicas.</p>
        
        <h2>¿Por qué aprender PHP?</h2>
        <ul>
            <li>Es fácil de aprender para principiantes.</li>
            <li>Compatible con la mayoría de los servidores web (Apache, Nginx).</li>
            <li>Se integra muy bien con bases de datos como MySQL.</li>
            <li>Hay una gran comunidad y mucha documentación disponible.</li>
        </ul>

        <h2>¿Cómo funciona PHP?</h2>
        <p>Cuando un usuario solicita una página web .php, el servidor ejecuta el código PHP y luego envía el resultado (HTML generado) al navegador.</p>

        <h2>Tu primer script PHP</h2>
        <p>Crea un archivo llamado <code>index.php</code> con este contenido:</p>
        <pre><code>&lt;?php
echo "¡Hola, mundo desde PHP!";
?&gt;</code></pre>

        <p>Guárdalo en la carpeta <code>htdocs</code> de XAMPP y accede desde tu navegador a <code>http://localhost/index.php</code>.</p>

        <h2>Recomendaciones iniciales</h2>
        <ul>
            <li>Instala <strong>XAMPP</strong> para tener Apache y MySQL en tu PC.</li>
            <li>Utiliza <strong>VSCode</strong> o cualquier editor de código para programar.</li>
            <li>Coloca tus archivos dentro de la carpeta <code>htdocs</code> para probarlos localmente.</li>
        </ul>
        '
    ],
    'variables' => [
        'titulo' => '🔤 Variables y Tipos de Datos',
        'contenido' => '
        <h2>¿Qué es una variable en PHP?</h2>
        <p>Una variable es un contenedor para almacenar información. En PHP, todas las variables comienzan con el signo <code>$</code>.</p>

        <h2>Declarar una variable</h2>
        <pre><code>&lt;?php
$nombre = "Juan";
$edad = 20;
$es_estudiante = true;
?&gt;</code></pre>

        <p>Las variables pueden contener diferentes tipos de datos.</p>

        <h2>Tipos de datos principales en PHP</h2>
        <ul>
            <li><strong>String (cadena de texto):</strong> <code>$nombre = "María";</code></li>
            <li><strong>Integer (entero):</strong> <code>$edad = 25;</code></li>
            <li><strong>Float (decimal):</strong> <code>$precio = 19.99;</code></li>
            <li><strong>Boolean (lógico):</strong> <code>$activo = true;</code></li>
            <li><strong>Array:</strong> <code>$colores = array("rojo", "azul", "verde");</code></li>
            <li><strong>NULL:</strong> Representa una variable sin valor asignado.</li>
        </ul>

        <h2>Concatenación de variables</h2>
        <p>Puedes combinar texto y variables con el punto <code>.</code>.</p>
        <pre><code>&lt;?php
$nombre = "Laura";
echo "Hola, " . $nombre;
?&gt;</code></pre>

        <h2>Buenas prácticas</h2>
        <ul>
            <li>Utiliza nombres de variables claros y significativos.</li>
            <li>Recuerda que PHP es case-sensitive: <code>$Nombre</code> y <code>$nombre</code> son diferentes.</li>
            <li>Evita usar caracteres especiales en los nombres de variables.</li>
        </ul>
        '
    ],
    'condicionales' => [
        'titulo' => '🔁 Condicionales y Bucles',
        'contenido' => '
        <h2>Estructuras Condicionales en PHP</h2>
        <p>Las condicionales permiten tomar decisiones según condiciones que se cumplan o no.</p>

        <h3>If - Else</h3>
        <pre><code>&lt;?php
$edad = 18;

if ($edad >= 18) {
    echo "Eres mayor de edad.";
} else {
    echo "Eres menor de edad.";
}
?&gt;</code></pre>

        <h3>Elseif</h3>
        <pre><code>&lt;?php
$nota = 85;

if ($nota >= 90) {
    echo "Excelente";
} elseif ($nota >= 70) {
    echo "Bueno";
} else {
    echo "Necesitas mejorar";
}
?&gt;</code></pre>

        <h2>Bucles en PHP</h2>
        <p>Los bucles permiten repetir bloques de código varias veces.</p>

        <h3>While</h3>
        <pre><code>&lt;?php
$i = 1;
while ($i <= 5) {
    echo $i . " ";
    $i++;
}
?&gt;</code></pre>

        <h3>For</h3>
        <pre><code>&lt;?php
for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";
}
?&gt;</code></pre>

        <h3>Foreach</h3>
        <pre><code>&lt;?php
$colores = ["rojo", "verde", "azul"];
foreach ($colores as $color) {
    echo $color . " ";
}
?&gt;</code></pre>

        <h2>Consejos</h2>
        <ul>
            <li>Usa condicionales para controlar el flujo de tu programa.</li>
            <li>Elige el bucle adecuado según la situación.</li>
            <li>Evita bucles infinitos incrementando correctamente las variables.</li>
        </ul>
        '
    ]
];


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contenido del Curso</title>
    <link rel="stylesheet" href="../css/temas.css" />
</head>
<body>
     <h1>Curso Profesional de PHP</h1>
         <nav>
        <?php include 'menu.html'; ?>
    </nav>
   
    <div class="contenedor">
       
        <div class="acordeon">
            <?php foreach ($temas as $clave => $tema): ?>
                <div class="acordeon-item">
                    <button class="acordeon-boton"><?= $tema['titulo'] ?></button>
                    <div class="acordeon-contenido">
                        <?= $tema['contenido'] ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script>
        const botones = document.querySelectorAll('.acordeon-boton');
        botones.forEach(boton => {
            boton.addEventListener('click', () => {
                boton.classList.toggle('activo');
                const contenido = boton.nextElementSibling;
                contenido.style.display = (contenido.style.display === 'block') ? 'none' : 'block';
            });
        });
    </script>

    
    <footer> &copy; 2025 Tutor Virtual PHP - Aprende programando.</footer>
</body>
</html>
