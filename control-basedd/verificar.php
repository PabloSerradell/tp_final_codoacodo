<?php
$dni = $_POST['dni'];
$correo = $_POST['correo'];

$dniRepetido = false;
$correoRepetido = false;

while($listadoArray = mysqli_fetch_array($consulta)){

    if ($listadoArray['dni'] == $dni){
        $dniRepetido = true;
        break;
    }else{
        if ($listadoArray['correo'] == $correo){
            $correoRepetido = true;
            break;
        }
    }
}
?>