<?php
session_start();

if (!isset($_SESSION['activo']) || $_SESSION['activo'] !== true) {
    header("Location: ../iniciar-sesion.html"); // Redirige al login si no hay sesión
    exit();
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <title> Pagina inicial </title>
    <link rel="stylesheet" href="../css/menu.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>

    <h1>Curso Profesional de PHP</h1>
    <nav>
        <?php include 'menu.html'; ?>
    </nav>


    <h1 id="titulo-intermedio">Bienvenido al Curso Profesional de PHP <?= htmlspecialchars($_SESSION['usuario_actual']) ?>
    </h1>

    <main>
        <section class="bienvenida">
            <?php

            ?>


            <h2>CURSO VIRTUAL DE PHP</h2>
            <p>Aprende PHP desde cero hasta nivel avanzado con proyectos reales.</p>
        </section>

        <section class="informacion-curso">
            <h2>Información del curso</h2>
            <ul>
                <li>Duración: 8 semanas</li>
                <li>Modalidad: 100% online</li>
                <li>Acceso: 24/7 a los contenidos</li>
                <li>Certificación al finalizar</li>
            </ul>
        </section>

        <section class="proximas-clases">
            <h2>Próximas clases</h2>
            <ul>
                <li><strong>Semana 1:</strong> Introducción a PHP</li>
                <li><strong>Semana 2:</strong> Variables y estructuras de control</li>
                <li><strong>Semana 3:</strong> Funciones y formularios</li>
                <li><strong>Semana 4:</strong> Programación orientada a objetos</li>
            </ul>
        </section>

        <aside class="recursos">
            <h2>Recursos adicionales</h2>
            <ul>
                <li><a href="#">Manual de PHP</a></li>
                <li><a href="#">Videos de apoyo</a></li>
                <li><a href="#">Foro de estudiantes</a></li>
                <li><a href="#">Ejercicios prácticos</a></li>
            </ul>
        </aside>
    </main>
    <footer>
        &copy; 2025 Tutor Virtual PHP - Aprende programando.
    </footer>
</body>

</html>