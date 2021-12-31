<?php
include 'conexion.php';

// Verifico que, en caso de modificar el correo o el dni, no ingrese uno que ya este
// en la base de datos(a excepcion del que ya estaba asignado a este usuario)
$id = $_POST['id'];
$consulta = mysqli_query($conexion, "SELECT * FROM oradores WHERE id != $id");
include 'verificar.php';

if ($dniRepetido == true){
    header("location: ../modificar.php?dni_repetido=true&id=".$id);
}else{
    if ($correoRepetido == true){
        header("location: ../modificar.php?correo_repetido=true&id=".$id);
    }else{
        // En este punto, el mail y DNI ingresados no estaban en la base de datos(exceptuando el que ya
        // estaba asignado a este usuario)
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $password = $_POST['password'];

        $actualizar = "UPDATE oradores SET nombre='$nombre', apellido='$apellido', dni='$dni', telefono='$telefono', correo='$correo', password='$password' WHERE id='$id'";

        // Actualizo la base de datos
        $actualizo = mysqli_query($conexion, $actualizar);

        // Redirecciono a la tabla con los datos
        header("location: ../listado.php");
    }
}
?>