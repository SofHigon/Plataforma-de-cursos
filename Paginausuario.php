<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>

<body bgcolor=black text="beige">
    <form action="Paginausuario.php" method="POST">
        <table border="10" align="center">
            <tr>
                <th colspan=2> Datos usuarios</th>
            </tr>

            <tr>
                <th>Id_usuario</th>
                <td> <input type="text" name="id"> </td>
            </tr>

            <tr>
                <th>Nombre</th>
                <td> <input type="text" name="nombre"> </td>
            </tr>

            <tr>
                <th>Apellido</th>
                <td> <input type="text" name="apellido"> </td>
            </tr>

            <tr>
                <th>Correo</th>
                <td> <input type="text" name="correo"> </td>
            </tr>

            <tr>
                <td><input type="submit" name="Registrar" value="Registrar"></td>
                <td><input type="submit" name="Eliminar" value="Eliminar"></td>
            </tr>
            <tr>
                <td><input type="submit" name="Modificar" value="Modificar"></td>
                <td><input type="reset"></td>
            </tr>


        </table>
    </form>
    
    <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require 'conexion.php';

    if (isset($_POST['Eliminar'])) {

        require_once 'Docente.php';
        $base = new Docente();
        $id = $_POST['id'];
        $base->eliminar(1);   
        echo "<h2>Usuario Eliminado</h2>";
    }

    if (isset($_POST['Registrar'])) {

        require_once 'Docente.php';
        $base = new Docente();
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
        $base->registrar($nombre,$apellido,$correo);
        echo "<h2>Usuario Registrado</h2>";
    }

     if (isset($_POST['Modificar'])) {

        require_once 'Docente.php';
        $base = new Docente();
        $base->modificar(1,"Lucas", "Trado", "lola@hotmail.com");

     }

     $docente = $base->consultarTodo();
     foreach($docente as $e){
        echo "{$e['id_docente'] } - {$e['nombre'] } {$e['apellido'] } {$e['correo'] } <br> ";
     }

    

}
?>

</body>

</html>