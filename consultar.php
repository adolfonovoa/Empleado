<?php
include "clases/Conexion.php";
include "clases/Empleado.php";

$objConexion = new conexion();
$objEmpleado = new empleado();

$conexion = $objConexion->conectar();
$datos = $objEmpleado->consular($conexion);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Consultar NYD</title>
    </head>
    <body>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Celular</th>
                <th>Usuario</th>
                <th>Roll</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            <?php
            while ($dato = mysqli_fetch_array($datos)){
              
            ?>
            <tr>
                <td><?php echo $dato['id'] ?></td>
                <td><?php echo $dato['nombre'] ?></td>
                <td><?php echo $dato['apellido'] ?></td>
                <td><?php echo $dato['celular'] ?></td>
                <td><?php echo $dato['usuario'] ?></td>
                <td><?php echo $dato['roll'] ?></td>
                <td><a href="editar.php?id=<?php echo $dato['id'];?>">Editar</a></td>
                <td><a href="controlador/eliminar.php?id=<?php echo $dato['id'];?>">Eliminar</a></td>
            </tr>
            <?php
            }
             ?>
            
        </table>
        
        <a href="index.php">Inicio</a>
    </body>
    
</html>