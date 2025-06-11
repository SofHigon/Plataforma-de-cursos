<?php
session_start();
require_once("chequeoSession.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Página Inicial - Matrices en LPP</title>
    <meta charset="UTF-8">
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
            <img src="../imagenes/matrices.png" width="115% " alt="">
        </div>

        <section id="concepto">
            <h2>¿Qué son las matrices en LPP?</h2>
            <p>
                En PHP, una matriz es una estructura de datos que permite almacenar múltiples valores organizados en
                filas y columnas.
                Son muy útiles para representar tablas, planillas y datos organizados de forma bidimensional.
            </p>

            <p><strong>Características básicas de las matrices:</strong></p>
            <ul>
                <li><strong>Dimensiones:</strong> Una matriz tiene filas y columnas, por ejemplo, una matriz de 3x3
                    tiene 3 filas y 3 columnas.</li>
                <li><strong>Índices:</strong> El acceso a los elementos se realiza usando índices, por ejemplo:
                    <code>matriz[1][2]</code>.</li>
                <li><strong>Inicialización:</strong> Se pueden asignar valores a cada posición de forma manual o con
                    bucles.</li>
            </ul>

            <h3>Ejemplo básico en PHP:</h3>
            <div style="text-align: left;">
                <img src="../imagenes/ejemplomatrices.png" alt="Ejemplo básico de una matriz en PHP" width="50%">
                <p>Imagen: código ejemplo de una matriz en PHP</p>
            </div>

            <!-- Imagen de sección siguiente -->
            <div style="text-align: left;">
                <img src="../imagenes/tmas4.png" width="115% " alt="">
            </div>

            <h2>Ejemplo Práctico: Planilla de Calificaciones</h2>
            <p><strong>Proyecto:</strong> "Planilla de Calificaciones"</p>
            <p><strong>Objetivo:</strong> Aplicar matrices para almacenar y visualizar las notas de varios estudiantes.
            </p>

            <!-- Imagen del ejemplo práctico -->
            <div style="text-align: left;">
                <img src="../imagenes/matricesphp.jpeg" alt="Ejemplo práctico de matriz en PHP" width="50%">
                <p>Imagen: matriz usada para representar notas</p>
            </div>

            <!-- Imagen siguiente -->
            <div style="text-align: left;">
                <img src="../imagenes/tmas3.png" width="115% " alt="">
            </div>

            <!-- Video explicativo -->
            <div style="margin: 20px 0;">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/5VqpoBvpO08?si=IcuZkYYLGVoNJVLv"
                    title="Video explicativo sobre matrices" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                </iframe>
            </div>

            <!-- Imagen final -->
            <div style="text-align: left;">
                <img src="../imagenes/tmas5.png" width="115% " alt="">
            </div>

            <!-- Sección interactiva -->
            <div style="margin-top: 30px; text-align: left;">
                <h3>¿Quieres practicar matrices con un juego interactivo?</h3>
                <p>Haz clic en el siguiente enlace para resolver ejercicios con matrices.</p>
                <a href="https://www.studocu.com/in/quiz/php-arrays/4724454?shareType=u&sid=01747255712" target="_blank"
                    style="font-size: 18px; color: blue;">
                    Practicar Matrices – Wordwall
                </a>
            </div>
        </section>
    </section>

    <footer> &copy; 2025 Tutor Virtual PHP - Aprende programando.</footer>
</body>

</html>