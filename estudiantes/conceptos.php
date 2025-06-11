<?php

require_once("chequeoSession.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Conceptos de PHP</title>
    <link rel="stylesheet" href="../css/menu.css">
</head>

<body>
    <h1>Curso Profesional de PHP</h1>
    <nav>
        <?php include 'menu.html'; ?>
    </nav>

    <section>

        <img src="../imagenes/tmas1.png" width="115% " alt="">

        <section id="concepto">
            <h2>¿Qué es PHP?</h2>
            <p>
                Aprende sobre los conceptos fundamentales del lenguaje PHP, utilizado ampliamente para el desarrollo web
                del lado del servidor.
                PHP es un lenguaje de programación de código abierto, ampliamente utilizado para desarrollar
                aplicaciones web dinámicas.
                Permite incrustar código dentro de HTML para gestionar contenido, sesiones, formularios, bases de datos
                y más.
            </p>

            <h2>Principales Características de PHP</h2>
            <ul>
                <li><strong>Orientado a la Web:</strong> Diseñado específicamente para el desarrollo de sitios
                    dinámicos.</li>
                <li><strong>Fácil de Aprender:</strong> Sintaxis sencilla y amigable para principiantes.</li>
                <li><strong>Integración con HTML:</strong> Puede mezclarse fácilmente con HTML.</li>
                <li><strong>Soporte para Bases de Datos:</strong> PHP tiene soporte para múltiples motores como MySQL,
                    PostgreSQL, etc.</li>
            </ul>

            <h2>Elementos Comunes en PHP</h2>
            <ul>
                <li><strong>Variables:</strong> Se definen con el signo $ y almacenan datos.</li>
                <li><strong>Condicionales:</strong> Estructuras como if, else, switch controlan el flujo del programa.
                </li>
                <li><strong>Bucles:</strong> while, for, foreach se usan para repetir instrucciones.</li>
                <li><strong>Entrada/Salida:</strong> PHP usa formularios, echo, print para interactuar con el usuario.
                </li>
            </ul>

            <img src="../imagenes/tema2.png" alt="">

            <h2>Ejemplo Básico en PHP</h2>
            <pre>
           <img src="../imagenes/conceptos.jpeg" alt="">
        </pre>

            <p>En este ejemplo, el usuario ingresa su nombre en un formulario, y PHP responde con un saludo.</p>

            <img src="../imagenes/tema3.png" alt="">

            <iframe width="560" height="315" src="https://www.youtube.com/embed/nPCJAx5c1uE?si=-1q4TKxpNC15QEuK"
                title="YouTube video player" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
            encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin"
                allowfullscreen>
            </iframe>


        </section>
    </section>

    <footer> &copy; 2025 Tutor Virtual PHP - Aprende programando.</footer>
</body>

</html>