<?php
$conexion = mysqli_connect("localhost", "root", "", "conferencia_bs_as");

    if(mysqli_connect_errno()){
        echo "fallo al conectarse con la base de datos";
    }
?>