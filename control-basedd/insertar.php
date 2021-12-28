<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$password = $_POST['password'];

$insertar = "INSERT INTO oradores(id, nombre, apellido, dni, telefono, correo, password) VALUES (null, '$nombre', '$apellido', '$dni', '$telefono', '$correo', '$password')";

// Guardo lo que traje del front en la base de datos
$insert = mysqli_query($conexion, $insertar);

// Redirecciono a la tabla con los datos
header("location: ../listado.php");

mysqli_close($conexion);
?>