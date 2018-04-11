<?php

include '../clases/Conexion.php';
include '../clases/Empleado.php';

$objConexion =new Conexion();
$objEmpleado=new Empleado();
$conexion = $objConexion->conectar();
echo $objEmpleado->eliminar($_GET['id'],$conexion);