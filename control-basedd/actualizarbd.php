<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$password = $_POST['password'];
$id = $_POST['id'];

$actualizar = "UPDATE oradores SET nombre='$nombre', apellido='$apellido', dni='$dni', telefono='$telefono', correo='$correo', password='$password' WHERE id='$id'";

// Actualizo la base de datos
$actualizo = mysqli_query($conexion, $actualizar);

// Redirecciono a la tabla con los datos
header("location: ../listado.php");

mysqli_close($conexion);
?>