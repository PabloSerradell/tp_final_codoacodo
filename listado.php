<?php
include 'control-basedd/conexion.php';

$consulta = mysqli_query($conexion, "SELECT * FROM oradores");
?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link rel="stylesheet" href="css/estilo.css">

    <title>Listado | TP integrador N° 1</title>
  </head>
  <body>

  <header>
      
    <!-- Inicio del navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid space-araund">
          <a class="navbar-brand" href="index.html">Conf Bs As</a>
          <div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-link" href="index.html">La conferencia</a>
                <a class="nav-link" href="#">Los oradores</a>
                <a class="nav-link" href="#">El lugar y la fecha</a>
                <a class="nav-link" href="registro.php">Registrarse</a>
                <a class="nav-link active" aria-current="page" href="listado.php">Listado</a>
                <a class="nav-link txt-comprar" href="tickets.html">Comprar tickets</a>
              </div>
            </div>
          </div>
        </div>
    </nav>

    <!-- Fin del navbar -->

  </header>


  <main>

    <section>
    <div class="container-form pt-4 pb-4">

        <!-- Título -->
        <div class="row">
            <div class="col text-uppercase text-center">
              <h2>Listado usuarios registrados</h2>
            </div>
        </div>

        <!-- Inicio del listado -->
        <div class="row">
        <table class="table">
            <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Dni</th>
                  <th scope="col">Telefono</th>
                  <th scope="col">Correo</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                
                <?php
                while($listadoArray = mysqli_fetch_array($consulta)){ ?>
                  <tr>
                    <td> <?php echo $listadoArray['id']; ?> </td>
                    <td> <?php echo $listadoArray['nombre']; ?> </td>
                    <td> <?php echo $listadoArray['apellido']; ?> </td>
                    <td> <?php echo $listadoArray['dni']; ?> </td>
                    <td> <?php echo $listadoArray['telefono']; ?> </td>
                    <td> <?php echo $listadoArray['correo']; ?> </td>
                    <td> <a href="modificar.php?id=<?php echo $listadoArray['id']; ?>">Modificar</a> </td>
                    <td> <a href="control-basedd/eliminar.php?id=<?php echo $listadoArray['id']; ?>">Eliminar</a></td>
                  </tr>
                <?php } 
                mysqli_close($conexion);?>
              
            </tbody>
        </table>
        </div>

        <!-- Fin del listado -->
    
    </div>
    </section>

  </main>

  <footer>
    
    <div class="container">
      <div class="row text-center centrar-row">
        <div class="col col-footer"><a href="#">Preguntas frecuentes</a></div>
        <div class="col col-footer"><a href="#">Contáctanos</a></div>
        <div class="col col-footer"><a href="#">Prensa</a></div>
        <div class="col col-footer"><a href="#">Conferencias</a></div>
        <div class="col col-footer"><a href="#">Términos y condiciones</a></div>
        <div class="col col-footer"><a href="#">Privacidad</a></div>
        <div class="col col-footer"><a href="#">Estudiantes</a></div>
      </div>
    </div>
    
  </footer>

    <!-- JavaScript: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>