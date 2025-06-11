<?php
session_start();
require '../conexion.php';

if (!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'docente') {
    header("Location: ../iniciar-sesion.html");
    exit();
}

// Obtener todos los cursos predefinidos
$sqlCursos = "SELECT id, nombre, descripcion FROM curso";
$stmtCursos = $pdo->query($sqlCursos);
$cursos = $stmtCursos->fetchAll(PDO::FETCH_ASSOC);

//  estudiantes inscritos por curso (según tabla pagos)
$sqlInscritos = "
    SELECT c.id AS curso_id, c.nombre AS curso, e.nombre AS estudiante
    FROM pago p
    JOIN estudiantes e ON p.estudiante_id = e.id
    JOIN curso c ON p.curso_id = c.id
";
$stmtInscritos = $pdo->query($sqlInscritos);
$inscritosPorCurso = [];

while ($row = $stmtInscritos->fetch(PDO::FETCH_ASSOC)) {
    $cursoId = $row['curso_id'];
    $inscritosPorCurso[$cursoId][] = $row['estudiante'];
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Panel Docente</title>
    <link rel="stylesheet" href="../css/curso.css">
    <style>
        .estudiantes {
            display: none;
            margin-left: 20px;
        }

        button {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <h1>Panel del Docente</h1>
    <?php include 'menu.html'; ?>

    <h1 id="titulo-intermedio">Cursos Disponibles</h1>

    <main>
        <?php if (count($cursos) > 0): ?>
            <?php foreach ($cursos as $curso): ?>
                <section>
                    <h3><?= htmlspecialchars($curso['nombre']) ?></h3>
                    <p><?= htmlspecialchars($curso['descripcion']) ?></p>

                    <button onclick="toggleEstudiantes('estudiantes-<?= $curso['id'] ?>')">Ver Estudiantes</button>

                    <div id="estudiantes-<?= $curso['id'] ?>" class="estudiantes">
                        <?php if (isset($inscritosPorCurso[$curso['id']])): ?>
                            <ul>
                                <?php foreach ($inscritosPorCurso[$curso['id']] as $estudiante): ?>
                                    <li><?= htmlspecialchars($estudiante) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php else: ?>
                            <p>No hay estudiantes inscritos.</p>
                        <?php endif; ?>
                    </div>
                </section>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No hay cursos disponibles.</p>
        <?php endif; ?>
    </main>

    <script>
        function toggleEstudiantes(id) {
            const div = document.getElementById(id);
            div.style.display = div.style.display === 'none' ? 'block' : 'none';
        }
    </script>
</body>

</html>