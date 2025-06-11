<?php

require_once("chequeoSession.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Ciclos en PHP</title>
    <link rel="stylesheet" href="../css/menu.css">
</head>

<body>
    <h1>Curso Profesional de PHP</h1>
    <nav>
        <?php include 'menu.html'; ?>
    </nav>


    <section>
        <img src="../imagenes/ciclo.png" width="115%" alt="Imagen de conceptos de ciclos">


        <section id="concepto">
            <h2>Tipos de Ciclos en PHP</h2>
            <p>Explora cómo se usan los ciclos en PHP para repetir acciones según una condición.
                PHP tiene varios tipos de ciclos para ejecutar código repetidamente:</p>
            <ul>
                <li><strong>While:</strong> Ejecuta el bloque de código mientras la condición sea verdadera.</li>
                <li><strong>Do-While:</strong> Ejecuta el bloque de código al menos una vez y luego repite mientras la
                    condición sea verdadera.</li>
                <li><strong>For:</strong> Ejecuta el bloque de código un número determinado de veces.</li>
            </ul>

            </div>
            <!-- Ejemplo de ciclo While -->
            <h3>Ejemplo de ciclo while en PHP</h3>
            <img src="../imagenes/ejemplo1ciclo.jpeg" alt="Imagen de ejemplo de ciclo" align="left" width="300">
            <div style="clear: both;"></div>
            <p>Este ciclo while imprimirá los números del 1 al 5.</p>

            <!-- Ejemplo de ciclo Do-While -->
            <h3>Ejemplo de ciclo do-while en PHP</h3>
            <img src="../imagenes/ejemplo2ciclo.jpeg" alt="Imagen de ejemplo de ciclo" align="left" width="300">
            <div style="clear: both;"></div>
            <p>Este ciclo do-while también imprimirá los números del 1 al 5, pero asegura que el bloque de código se
                ejecute al menos una vez.</p>

            <!-- Ejemplo de ciclo For -->
            <h3>Ejemplo de ciclo for en PHP</h3>
            <img src="../imagenes/ejemplociclos.jpeg" alt="Imagen de ejemplo de ciclo" align="left" width="300">
            <div style="clear: both;"></div>
            <p>Este ciclo for se usa para repetir instrucciones un número determinado de veces.</p>

            <p>Este ciclo for también imprimirá los números del 1 al 5, pero se define con tres componentes:
                inicialización, condición y actualización.</p>

            <!-- Imagen siguiente -->
            <div style="text-align: left;">
                <img src="../imagenes/tmas4.png" width="115% " alt="">

                <h2>Ejemplo Práctico: Contador con Ciclo For</h2>
                <p><strong>Proyecto:</strong> Crear un contador en PHP usando un ciclo <code>for</code> para contar del
                    1 al
                    3.</p>
                <p><strong>Objetivo:</strong> Usar un ciclo <code>for</code> en PHP para imprimir una lista de números
                    del 1
                    al 3.</p>

                <img src="../imagenes/ciclosphp.jpeg" alt="Imagen de ejemplo de ciclo" align="left">

                <div style="clear: both;"></div>

                <!-- Video de YouTube -->
                <div style="text-align: left;">
                    <img src="../imagenes/tmas3.png" width="115% " alt="">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Pgm966AnBp0?si=vTl0Hmc9e40Dcl4I"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    </iframe>
                    <br>
                    <div style="text-align: left;">
                        <img src="../imagenes/tmas5.png" width="115% " alt="">

                        <!-- Enlace a juego interactivo -->
                        <h3>¿Quieres practicar ciclos jugando?</h3>
                        <p>Haz clic en el siguiente enlace para jugar un juego de lógica que usa ciclos.</p>
                        <a href="https://www.studocu.com/es/quiz/actividad-3-ciclos-en-php/619052?shareType=u&sid=01747247144"
                            target="_blank" style="font-size: 18px; color: blue;">
                            Quiz sobre ciclos
                        </a>

        </section>
    </section>

    <footer> &copy; 2025 Tutor Virtual PHP - Aprende programando.</footer>
</body>

</html>