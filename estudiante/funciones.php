<?php
require_once("chequeoSession.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Funciones en PHP</title>
    <link rel="stylesheet" href="../css/menu.css">
</head>

<body>
    <h1>Curso Profesional de PHP</h1>
    <nav>
        <?php include 'menu.html'; ?>
    </nav>

    <section>

        <!-- Imagen principal -->
        <div style="text-align: left;">
            <img src="../imagenes/funcion.png" width="115%" alt="Imagen principal">

        </div>

        <section id="concepto">
            <h2>¿Qué son las funciones en PHP?</h2>
            <p>
                Aprende cómo se definen y utilizan funciones en PHP para reutilizar código de manera eficiente.
                En PHP, una función es un bloque de código que realiza una tarea específica.
                Las funciones se pueden reutilizar varias veces dentro del mismo programa, lo que permite escribir
                código más limpio, modular y eficiente.
            </p>
            <p>Las funciones permiten:</p>
            <ul>
                <li>Reutilizar código sin tener que escribirlo nuevamente.</li>
                <li>Mejorar la organización y legibilidad del código.</li>
                <li>Separar tareas específicas dentro de un programa.</li>
            </ul>

            <p>Ejemplo básico en PHP:</p>

            <!-- Imagen de ejemplo de función -->
            <div style="text-align: left;">
                <img src="../imagenes/funcionphp.jpeg" alt="Ejemplo función PHP" width="50%">
                <p>Imagen: definición básica de una función en PHP</p>
            </div>

            <!-- Imagen de sección siguiente -->
            <div style="text-align: left;">
                <img src="../imagenes/tmas4.png" width="115%" alt="Imagen principal">
            </div>

            <h2>Ejemplo Práctico: Duplicador de Número</h2>
            <p><strong>Proyecto:</strong> Crear una función en PHP que reciba un número y devuelva el doble de su valor.
            </p>
            <p><strong>Objetivo:</strong> Mostrar cómo declarar y utilizar funciones con parámetros en PHP.</p>

            <!-- Imagen del ejemplo práctico -->
            <div style="text-align: left;">
                <img src="../imagenes/practicafuncion.jpg" alt="Ejemplo práctico función" width="50%">
                <p>Imagen: ejemplo práctico de una función que duplica el valor de un número</p>
            </div>

            <!-- Imagen siguiente -->
            <div style="text-align: left;">
                <img src="../imagenes/tmas3.png" width="115%" alt="Imagen principal">
            </div>

            <!-- Video -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/BuWgF6ArmzQ?si=y3XAiLp7Rg6jsBTk"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
            </iframe>

            <!-- Imagen adicional -->
            <div style="text-align: left;">
                <img src="../imagenes/tmas5.png" width="115%" alt="Imagen principal">
            </div>

            <!-- Juego -->
            <div style="margin-top: 30px; text-align: left;">
                <h3>¿Quieres practicar funciones jugando?</h3>
                <p>Haz clic en el siguiente enlace para poner a prueba tus conocimientos sobre funciones en PHP.</p>
                <a href="https://www.proprofs.com/quiz-school/story.php?title=php-quiz_14" target="_blank"
                    style="font-size: 18px; color: blue;">
                    Jugar Funciones
                </a>
            </div>
        </section>
    </section>
    <footer> &copy; 2025 Tutor Virtual PHP - Aprende programando.</footer>
</body>

</html>