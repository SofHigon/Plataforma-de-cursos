<?php
session_start();
require '../conexion.php';

if (!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'estudiante') {
    header("Location: ../iniciar-sesion.html");
    exit();
}

$curso_id = $_GET['curso_id'] ?? null;

if (!$curso_id) {
    echo "Curso no especificado.";
    exit();
}

// Obtener el nombre del curso seleccionado
$sqlCurso = "SELECT nombre FROM curso WHERE id = ?";
$stmtCurso = $pdo->prepare($sqlCurso);
$stmtCurso->execute([$curso_id]);
$curso = $stmtCurso->fetch(PDO::FETCH_ASSOC);
$nombre_curso = $curso['nombre'] ?? 'Curso desconocido';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Confirmar Pago - Tutor Virtual PHP</title>
    <link rel="stylesheet" href="../css/menu.css">
    <style>
        form {
            background: rgba(17, 24, 39, 0.7);
            backdrop-filter: blur(10px);
            padding: 1.5rem;
            border-radius: 16px;
            max-width: 400px;
            margin: 2rem auto;
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.4);
            border: 1px solid rgba(255, 255, 255, 0.15);
            color: #f8fafc;
            font-family: 'Roboto', sans-serif;
        }

        form p {
            font-size: 1rem;
            margin-bottom: 1rem;
            color: #94a3b8;
        }

        label {
            display: block;
            margin-bottom: 0.4rem;
            font-weight: 500;
            color: #94a3b8;
            font-size: 0.95rem;
        }

        input[type="text"],
        input[type="email"],
        select {
            width: 80%;
            padding: 0.75rem 1rem;
            margin: 0 auto 1.2rem;
            display: block;
            background: rgba(30, 41, 59, 0.85);
            border: 1px solid rgba(148, 163, 184, 0.5);
            border-radius: 10px;
            color: #f0f9ff;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            outline: none;
            cursor: pointer;
        }

        input[type="text"]::placeholder,
        input[type="email"]::placeholder {
            color: #c5c7c9b6;
            opacity: 1;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        select:focus {
            border-color: #38bdf8;
            box-shadow: 0 0 6px rgba(56, 189, 248, 0.4);
            background: rgba(30, 41, 59, 1);
        }

        button.boton {
            width: 80%;
            padding: 0.8rem;
            background: linear-gradient(135deg, #2563eb, #1e40af);
            color: white;
            font-weight: 600;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            margin: 1rem auto 0;
            display: block;
            box-shadow: 0 4px 15px rgba(37, 99, 235, 0.3);
        }

        button.boton:hover {
            background: linear-gradient(135deg, #1e40af, #2563eb);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(37, 99, 235, 0.4);
        }
    </style>
</head>

<body>

    <header>
        <h1>Confirmar Pago del Curso</h1>
    </header>

    <nav>
        <?php include 'menu.html'; ?>
    </nav>

    <main>
        <form action="pago.php" method="post">

            <p><strong>Curso seleccionado:</strong> <?= htmlspecialchars($nombre_curso) ?></p>
            <input type="hidden" name="curso_id" value="<?= htmlspecialchars($curso_id) ?>">

            <label for="nombre">Nombre completo:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" required>

            <label for="metodo">Método de pago:</label>
            <select id="metodo" name="metodo" required>
                <option value="transferencia">Transferencia Bancaria</option>
                <option value="tarjeta">Tarjeta de Crédito</option>
                <option value="nequi">Nequi</option>
            </select>

            <button type="submit" class="boton">Confirmar pago</button>
        </form>
    </main>

    <footer>
        &copy; 2025 Tutor Virtual PHP - Aprende programando.
    </footer>

</body>

</html>