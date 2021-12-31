<?php
include 'conexion.php';

$consulta = mysqli_query($conexion, "SELECT * FROM oradores");
include 'verificar.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];

if ($dniRepetido == true){

    // Si ingresó un dni que ya estaba registrado, lo redirecciono a registro.php con los
    // mismos datos con los que intentó registrarse, salvo la contraseña y el dni
    header("location: ../registro.php?dni_repetido=true&nom=".$nombre."&ape=".$apellido."&tel=".$telefono."&corr=".$correo);

}else{
    if ($correoRepetido == true){

        // Si ingresó un correo que ya estaba registrado, lo redirecciono a registro.php con los
        // mismos datos con los que intentó registrarse, salvo la contraseña y el correo
        header("location: ../registro.php?correo_repetido=true&nom=".$nombre."&ape=".$apellido."&dni=".$dni."&tel=".$telefono);

    }else{
        // En este punto, el mail y DNI ingresados no estaban en la base de datos
        $password = $_POST['password'];

        $insertar = "INSERT INTO oradores(id, nombre, apellido, dni, telefono, correo, password) VALUES (null, '$nombre', '$apellido', '$dni', '$telefono', '$correo', '$password')";

        // Guardo lo que traje del front en la base de datos
        $insert = mysqli_query($conexion, $insertar);

        // Redirecciono a la tabla con los datos
        header("location: ../listado.php");
    }
}
?>