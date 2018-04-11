<?php

include '../clases/Conexion.php';
include '../clases/Empleado.php';

$objConexion =new Conexion();
$objEmpleado=new Empleado();
$conexion = $objConexion->conectar();
echo $objEmpleado->editar($conexion, $_POST['nombre'], $_POST ['apellido'],$_POST['celular'], $_POST['usuario'],$_POST['roll']);