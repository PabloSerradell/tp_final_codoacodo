<?php
include 'conexion.php';

$id = $_GET['id'];

$accion = "DELETE FROM oradores WHERE id = $id";

// Borro el registro de la id que traje del front
$borrar = mysqli_query($conexion, $accion);

// Redirecciono a la tabla con los datos
header("location: ../listado.php");
?>