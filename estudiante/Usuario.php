<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

class Usuario
{
    private $nombre;
    private $apellido;
    private $username;
    private $clave;

    public function __construct($nombre, $apellido, $username, $clave)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->username = $username;
        $this->clave = $clave;
    }

    public function getNombre()
    {
        return $this->nombre;
    }
    public function getApellido()
    {
        return $this->apellido;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function getClave()
    {
        return $this->clave;
    }

    public static function registrar($nombre, $apellido, $username, $clave)
    {
        if (!isset($_SESSION['usuarios'])) {
            $_SESSION['usuarios'] = [];
        }

        foreach ($_SESSION['usuarios'] as $usuario) {
            if ($usuario instanceof Usuario && $usuario->getUsername() === $username) {
                return false; // Ya existe
            }
        }

        $claveHash = password_hash($clave, PASSWORD_DEFAULT);
        $nuevoUsuario = new Usuario($nombre, $apellido, $username, $claveHash);
        $_SESSION['usuarios'][] = $nuevoUsuario;

        return true;
    }

    public static function validar($username, $claveIngresada)
    {
        if (!isset($_SESSION['usuarios'])) {
            return false;
        }

        foreach ($_SESSION['usuarios'] as $usuario) {
            //array
            if (
                isset($usuario['usuario']) &&
                $usuario['usuario'] === $username &&
                password_verify($claveIngresada, $usuario['clave'])
            ) {
                $_SESSION['activo'] = true;
                $_SESSION['usuario_actual'] = $usuario;
                return true;
            }
        }

        return false;
    }



    public static function sessionActivada()
    {
        return isset($_SESSION['activo']) && $_SESSION['activo'] === true;
    }
}



?>