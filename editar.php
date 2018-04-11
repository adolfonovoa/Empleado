<?php
include './clases/conexion.php';
include './clases/Usuario.php';

$objConexion = new conexion();
$objUsuario = new Usuario();

$conexion = $objConexion->conectar();

$id = $_GET['id'];

$datos = $objUsuario->consularId($conexion, $id);

$nombre;
$correo;
while ($row = mysqli_fetch_array($datos)) {

    $nombre = $row['nombre'];
    $correo = $row['correo'];
}
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3>Editar Usuario</h3>
        <form action="controlador/editar.php" method="post">
            <input name="id" type="hidden" value="<?php echo $id; ?>">
            <label>Nombre: </label><input type="text" name="nombre" value="<?php echo $nombre; ?>"><br><br>
            <label>Apellido: </label><input type="text" name="apellido" value=" <?php echo $apellido; ?>"><br><br>
            <label>Celular: </label><input type="text" name="celular" value=" <?php echo $celular; ?>"><br><br>
            <label>Usuario: </label><input type="text" name="usuario value=" <?php echo $usuario; ?>"><br><br>
            <label>Roll: </label><input type="text" name="rool" value=" <?php echo rool; ?>"><br><br>
            
            <input type="submit" value="modificar">
        </form>

        <?php
        // put your code here
        ?>
    </body>
</html>