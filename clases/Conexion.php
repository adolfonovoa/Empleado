<?php

class conexion {
public function conectar() {

$link = mysqli_connect("localhost", "root", "", "emple");

        if ($link === false) {
             die("ERROR: Could not connect." .mysqli_connect_error());
        }
        return $link; 
    }
}
