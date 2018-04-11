<?php

include '../clases/Conexion.php';
include '../clases/Empleado.php';

$objConexion =new Conexion();
$conexion = $objConexion->conectar();
$objEmpleado=new Empleado();
echo $objEmpleado->registrar($conexion, $_POST['nombre'], $_POST ['apellido'], $_POST['password'],$_POST['celular'], $_POST['usuario'],$_POST['roll']);
