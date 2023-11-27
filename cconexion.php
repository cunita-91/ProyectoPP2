<?php
    $server = "localhost";
    $user = "root";
    $pass = " ";
    $db = "turnoscardio";

    $conexion = new mysqli ($server, $user, $pass, $db);
    if ($conexion->connect_errno) {
        die("conexion ha fallado". $conexion->connect_errno);
    }
     
    else
     {
        echo "conectado a la bd turnosCardio";
     }

?>