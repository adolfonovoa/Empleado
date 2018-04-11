<?php

class Empleado {

    public function registrar($conexion, $nombre, $apellido, $password,$celular, $usuario, $roll ) {
        $query = "INSERT INTO emple(nombre,apellido,password, celular,usuario,roll) VALUES('$nombre','$apellido','$password','$celular','$usuario','$roll')";
        $consulta = mysqli_query($conexion, $query);
        if ($consulta) {
            $respuesta = "registrado con exito";
        } else {
            $respuesta = "problema con el registro";
        }
        return $respuesta;
    }

    public function consular($conexion) {
        $query = "SELECT * FROM emple";
        $consulta = mysqli_query($conexion, $query);
        return $consulta;
    }

    public function consularId($conexion, $id) {
        $query = "SELECT * FROM emple WHERE id= $id";
        $consulta = mysqli_query($conexion, $query);
        return $consulta;
    }

    public function editar($conexion, $nombre, $apellido,$celular, $usuario, $roll, $id) {
        $query = "UPDATE emple SET nombre='$nombre',apellido='$apellido', celular='$celular', usuario='$usuario', roll='$roll' WHERE id=$id";
        $consulta = mysqli_query($conexion, $query);
        if ($consulta) {
            $respuesta = "Editado con exito";
        } else {
            $respuesta = "problema con la edicion";
        }
        return $respuesta;
    }

    public function eliminar($id, $conexion ) {
        $query = "DELETE FROM emple WHERE id=$id";
        $consulta = mysqli_query($conexion, $query);
        if ($consulta) {
            $respuesta = "Eliminado con exito";
        } else {
            $respuesta = "problema con la eliminacion";
        }
        return $respuesta;
       }
   
}