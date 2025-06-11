<?php
require_once("chequeoSession.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Página inicial</title>
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
            <img src="../imagenes/tmas2.png" width="115%" alt="Imagen principal">
        </div>

        <section id="concepto">
            <h2>¿Qué son los condicionales en PHP?</h2>
            <p>
                En PHP, los condicionales son estructuras fundamentales que permiten que
                un programa tome decisiones. Son parte de la lógica de control de flujo y se usan para ejecutar
                instrucciones dependiendo de si una condición se cumple o no.
            </p>
            <p>Las principales estructuras condicionales en PHP son:</p>
            <ul>
                <li><strong>if - else:</strong> Ejecuta un bloque si la condición es verdadera y otro bloque si la
                    condición es falsa.</li>
                <li><strong>switch:</strong> Permite elegir entre múltiples opciones según el valor de una variable.
                </li>
            </ul>

            <p>Ejemplo básico en PHP:</p>

            <!-- Imagen de ejemplo de condicionales -->
            <div style="text-align: left;">
                <img src="../imagenes/ejemplocondicionales.jpg" alt="Ejemplo condicionales" width="50%">
                <p>Imagen: estructura básica if-else en PHP</p>
            </div>

            <!-- Imagen de sección siguiente -->
            <div style="text-align: left;">
                <img src="../imagenes/tmas4.png" width="115% " alt="">
            </div>

            <h2>Ejemplo Práctico: Calculadora de Descuentos</h2>
            <p><strong>Proyecto:</strong> Crear una calculadora en PHP que aplique descuentos según el monto de la
                compra.</p>
            <p><strong>Objetivo:</strong> Usar condicionales en PHP para calcular y mostrar el monto con descuento.</p>

            <!-- Imagen del ejemplo práctico -->
            <div style="text-align: left;">
                <img src="../imagenes/condicionales.jpg" alt="Calculadora con condicionales" width="50%">
                <p>Imagen: ejemplo práctico de condicionales aplicando descuentos</p>
            </div>

            <!-- Imagen siguiente -->
            <div style="text-align: left;">
                <img src="../imagenes/tmas3.png" width="115% " alt="">
            </div>

            <!-- Video -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/db243B1t5EY?si=JKboJlakKTaLjaoE"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                <br>
            </iframe>

            <!-- Imagen siguiente -->
            <div style="text-align: left;">
                <img src="../imagenes/tmas5.png" width="115% " alt="">
            </div>

            <!-- Juego -->
            <div style="margin-top: 30px; text-align: left;">
                <h3>¿Quieres practicar condicionales jugando?</h3>
                <p>Haz clic en el siguiente enlace para jugar un juego de lógica que usa condicionales.</p>
                <a href="https://quizizz.com/admin/quiz/60ad0066d2f55a001f971fda/evaluacion-condicional-if-en-php"
                    target="_blank" style="font-size: 18px; color: blue;">
                    Jugar Condicionales
                </a>
            </div>
        </section>
    </section>
    <footer> &copy; 2025 Tutor Virtual PHP - Aprende programando.</footer>
</body>

</html>