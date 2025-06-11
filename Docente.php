<?php

class Docente{
    private $conexion;
    private $servidor = 'localhost';
    private $base_datos = 'bd_programacion';
    private $usuario = 'root';
    private $clave = '';

    public function __construct(){
        
        try {
            $this->conexion = new PDO("mysql:host=$this->servidor;dbname=$this->base_datos;charset=utf8", $this->usuario, $this->clave);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error de conexión: ". $e->getMessage());
        }
     }
    
    public function registrar($nombre, $apellido, $correo){

        $sql = "INSERT INTO docente  (nombre, apellido, correo) VALUES ( ?, ? , ?)";
        $sentencia = $this->conexion->prepare($sql);
        return $sentencia->execute([$nombre, $apellido, $correo]);
 
    }

     public function modificar($id_docente, $nombre, $apellido, $correo){

        $sql = "UPDATE docente SET nombre = ?, apellido = ?, correo = ? WHERE id_docente= ?";
        $sentencia = $this->conexion->prepare($sql);
        return $sentencia->execute([$nombre, $apellido, $correo, $id_docente]);

    }
     public function eliminar($id_docente){

        $sql = "DELETE FROM docente WHERE id_docente = ?";
         $sentencia = $this->conexion->prepare($sql);
        return $sentencia->execute([$id_docente]);

    }

    public function consultarTodo(){

        $sql = "SELECT * from docente";
        $sentencia = $this->conexion->query($sql);
        return  $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    public function consultarID($id){

        $sql = "SELECT * FROM docente WHERE id_docente = ?";
        $sentencia = $this->conexion->query($sql);
        $sentencia->execute([$id]);
        return $sentencia->fetch(PDO::FETCH_ASSOC);


    }
    







    }
?>