<?php

require_once __DIR__ . './Usuario.php';


if (!Usuario::sessionActivada()) {
    header("Location: ../iniciar-sesion.html");
    exit();
}
?>