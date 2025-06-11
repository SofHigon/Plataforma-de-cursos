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
            <img src="../imagenes/archivos.png" width="115%" alt="Imagen principal">

        </div>

        <section id="concepto">
            <h2>¿Qué son los archivos en PHP?</h2>
            <p>
                PHP permite trabajar con archivos del sistema para almacenar y recuperar información.
                Esto incluye abrir, leer, escribir y cerrar archivos. Es útil para guardar datos sin usar bases de
                datos.
            </p>

            <p>Operaciones básicas con archivos:</p>
            <ul>
                <li><strong>Apertura:</strong> Usando <code>fopen()</code> para abrir archivos en diferentes modos
                    (lectura, escritura, etc.).</li>
                <li><strong>Lectura:</strong> Leer contenido usando <code>fread()</code>, <code>fgets()</code> o
                    <code>file_get_contents()</code>.</li>
                <li><strong>Escritura:</strong> Guardar información con <code>fwrite()</code>.</li>
                <li><strong>Cierre:</strong> Siempre cerrar el archivo con <code>fclose()</code>.</li>
            </ul>

            <h3>Ejemplo básico en PHP:</h3>
            <div style="text-align: left;">
                <img src="../imagenes/ejemploarchivo.png" alt="Ejemplo archivo" width="30%">
                <p>Imagen: ejemplo de código para manejo básico de archivos en PHP</p>
            </div>

            <!-- Imagen de sección siguiente -->
            <div style="text-align: left;">
                <img src="../imagenes/tmas4.png" width="115%" alt="Imagen principal">
            </div>

            <h2>Ejemplo Práctico: Registro de Calificaciones</h2>
            <p><strong>Proyecto:</strong> "Registro de Calificaciones en Archivo"</p>
            <p><strong>Objetivo:</strong> Aplicar manejo de archivos para guardar y mostrar las notas de varios
                estudiantes desde un archivo de texto.</p>

            <!-- Imagen del ejemplo práctico -->
            <div style="text-align: left;">
                <img src="../imagenes/archivoos.png" alt="Registro de calificaciones" width="50%">
                <p>Imagen: ejemplo práctico usando archivos para guardar notas</p>
            </div>

            <!-- Imagen siguiente -->
            <div style="text-align: left;">
                <img src="../imagenes/tmas3.png" width="115%" alt="Imagen principal">
            </div>

            <!-- Video -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/_5beLBA_NRc?si=awOgejWjxwxHFQB_"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
            </iframe>

            <div style="text-align: left;">
                <img src="../imagenes/tmas5.png" width="115%" alt="Imagen principal">
            </div>

            <!-- Actividad interactiva -->
            <div style="margin-top: 30px; text-align: left;">
                <h3>¿Quieres practicar archivos con ejercicios interactivos?</h3>
                <p>Haz clic en el siguiente enlace para resolver actividades sobre archivos en PHP.</p>
                <a href="https://quizizz.com/admin/quiz/62434bd2b04122001e044942/parcial-php" target="_blank"
                    style="font-size: 18px; color: blue;">
                    Practicar Archivos
                </a>
            </div>
        </section>
    </section>

    <footer> &copy; 2025 Tutor Virtual PHP - Aprende programando.</footer>
</body>

</html>