<?php
session_start();
require 'conexion.php';

// Validar curso_id recibido
if (!isset($_GET['curso_id']) || !is_numeric($_GET['curso_id'])) {
    die('Curso inválido.');
}
$curso_id = (int)$_GET['curso_id'];

// Validar sesión: solo estudiantes pueden pagar
if (!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'estudiante') {
    // No está logueado o no es estudiante
    header('Location: iniciar-sesion.html?msg=Debes iniciar sesión para pagar');
    exit;
}

$estudiante_id = $_SESSION['id'];

// Verificar si ya pagó ese curso (para evitar pagos duplicados)
$sql_check = "SELECT * FROM pago WHERE estudiante_id = ? AND curso_id = ? AND estado = 'pagado'";
$stmt_check = $conn->prepare($sql_check);
$stmt_check->bind_param("ii", $estudiante_id, $curso_id);
$stmt_check->execute();
$result_check = $stmt_check->get_result();

if ($result_check->num_rows > 0) {
    // Ya pagó el curso
    $stmt_check->close();
    header('Location: temas.php?msg=Ya has pagado este curso. Accede a los temas.');
    exit;
}
$stmt_check->close();

// Procesar pago cuando se envíe formulario POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sql_insert = "INSERT INTO pago (estudiante_id, curso_id, estado, fecha_pago) VALUES (?, ?, 'pagado', NOW())";
    $stmt = $conn->prepare($sql_insert);
    if ($stmt) {
        $stmt->bind_param("ii", $estudiante_id, $curso_id);
        if ($stmt->execute()) {
            // Pago registrado exitosamente
            $stmt->close();
            header('Location: temas.php?msg=Pago realizado correctamente. ¡Disfruta el curso!');
            exit;
        } else {
            $error = "Error al registrar el pago, intenta más tarde.";
        }
    } else {
        $error = "Error en la base de datos, intenta más tarde.";
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Pagar Curso</title>
    <link rel="stylesheet" href="css/index.css" />
</head>
<body>

<header>
    <h1>Confirmar Pago del Curso</h1>
</header>

<main>
    <?php if (!empty($error)): ?>
        <p class="error"><?php echo htmlspecialchars($error); ?></p>
    <?php else: ?>
        <p>Estás por pagar el curso con ID: <strong><?php echo $curso_id; ?></strong></p>
        <form method="POST">
            <button type="submit" class="boton pagar">Confirmar Pago</button>
            <a href="temas.php" class="boton cancelar">Cancelar</a>
        </form>
    <?php endif; ?>
</main>

<footer>
    &copy; 2025 Tutor Virtual PHP - Aprende programando.
</footer>

</body>
</html>
