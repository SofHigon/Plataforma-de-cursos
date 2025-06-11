<?php
//session_start();
require_once("chequeoSession.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Vectores en PHP</title>
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
            <img src="../imagenes/vectores.png" width="120%" alt="Imagen ilustrativa de vectores">

        </div>

        <!-- Concepto -->
        <section id="concepto">
            <h2>¿Qué son los vectores en PHP?</h2>
            <p>
                En PHP, un vector (también conocido como arreglo) es una estructura que permite almacenar múltiples
                valores bajo un mismo nombre, pero en posiciones diferentes. Estos valores se acceden mediante un
                índice.
            </p>
            <p>
                Los vectores son muy útiles cuando necesitas almacenar grandes cantidades de datos del mismo tipo, como
                una lista de números o nombres. Cada elemento del vector tiene un índice único, comenzando generalmente
                desde 0.
            </p>
            <ul>
                <li><strong>Definición de un vector:</strong> Se crea un arreglo usando la función <code>array()</code>
                    o la sintaxis de corchetes <code>[]</code>.</li>
                <li><strong>Acceso a elementos:</strong> Utilizas el índice del vector para acceder a los valores
                    almacenados en cada posición.</li>
            </ul>

            <p>Ejemplo básico en PHP:</p>
            <!-- Imagen del ejemplo básico -->
            <div style="text-align: left;">
                <img src="../imagenes/ejemplovectores.jpg" alt="Ejemplo práctico sobre el uso de vectores" width="50%">
                <p>Imagen: ejemplo básico de vector en PHP</p>
            </div>

            <!-- Imagen siguiente -->
            <div style="text-align: left;">
                <img src="../imagenes/tmas4.png" width="115%" alt="Imagen ilustrativa de vectores">
            </div>

            <!-- Ejemplo práctico -->
            <h2>Ejemplo Práctico: Cálculo de Promedio de Edades</h2>
            <p><strong>Proyecto:</strong> Crear un programa en PHP que use vectores para almacenar edades y calcular el
                promedio.</p>
            <p><strong>Objetivo:</strong> Aplicar el uso de vectores en un contexto real, como el análisis de edades de
                un grupo.</p>

            <!-- Imagen del ejemplo práctico -->
            <div style="text-align: left;">
                <img src="../imagenes/vectoresphp.jpg" alt="Ejemplo práctico sobre el uso de vectores" width="50%">
                <p>Imagen: uso de vectores para calcular promedios</p>
            </div>

            <!-- Imagen siguiente -->
            <div style="text-align: left;">
                <img src="../imagenes/tmas3.png" width="115%" alt="Imagen ilustrativa de vectores">
            </div>

            <!-- Video -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/rtPLOzK4Thk?si=fcJIzVmbh5VCkHxm"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
            </iframe>

            <!-- Imagen siguiente -->
            <div style="text-align: left;">
                <img src="../imagenes/tmas5.png" alt="Gráfico de cálculo de promedio de edades" width="115%">
            </div>

            <!-- Juego -->
            <div style="margin-top: 30px; text-align: left;">
                <h3>¿Quieres practicar con vectores jugando?</h3>
                <p>Haz clic en el siguiente enlace para practicar el uso de vectores con un juego interactivo.</p>
                <a href="https://quizizz.com/admin/quiz/6578585cc4e97d9cde1be2d0/repaso-php" target="_blank"
                    style="font-size: 18px; color: blue;">
                    Jugar con Vectores
                </a>
            </div>
        </section>
    </section>

    <footer> &copy; 2025 Tutor Virtual PHP - Aprende programando.</footer>
</body>

</html>