<?php
include 'control-basedd/conexion.php';

$id = $_GET['id'];

$consulta = mysqli_query($conexion, "SELECT * FROM oradores WHERE id = $id");

$fila = mysqli_fetch_array($consulta);
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

    <title>Modificar registro | TP integrador N° 1</title>
  </head>
  <body>

    <?php
    if (isset($_GET['dni_repetido'])){
      ?> <script>alert("Ya hay una persona registrada con ese DNI")</script> <?php
    }
    if (isset($_GET['correo_repetido'])){
      ?> <script>alert("Ya hay una persona registrada con ese correo")</script> <?php
    }
    ?>

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
                <a class="nav-link" href="index.html#seccion-oradores">Los oradores</a>
                <a class="nav-link" href="index.html#seccion-lugar">El lugar y la fecha</a>
                <a class="nav-link" href="registro.php">Registrarse</a>
                <a class="nav-link" href="listado.php">Listado</a>
                <a class="nav-link txt-comprar" href="tickets.html">Comprar tickets</a>
              </div>
            </div>
          </div>
        </div>
    </nav>

    <!-- Fin del navbar -->

  </header>


  <main>

    <section class="pt-3 pb-3">
    <div class="container-form">

        <!-- Título -->
        <div class="row">
            <div class="col text-uppercase text-center">
              <small>id</small>
              <h2>Modificar</h2>
            </div>
        </div>

        <!-- Inicio del formulario -->

        <form action="control-basedd/actualizarbd.php" method="POST">
        <div class="row">
            <div class="col">
              <input type="text" class="form-control input-regis" placeholder="Nombre" maxlength="20" name="nombre" value="<?php echo $fila['nombre'] ?>" required>
            </div>
            <div class="col">
              <input type="text" class="form-control input-regis" placeholder="Apellido" maxlength="30" name="apellido" value="<?php echo $fila['apellido'] ?>" required>
            </div>
        </div>
        <div class="row">
            <div class="col">
              <input type="text" class="form-control input-regis" placeholder="DNI" maxlength="12" name="dni" value="<?php echo $fila['dni'] ?>" required>
            </div>
            <div class="col">
              <input type="text" class="form-control input-regis" placeholder="Teléfono" maxlength="20" name="telefono" value="<?php echo $fila['telefono'] ?>" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
              <input type="email" class="form-control input-regis2" placeholder="Correo" maxlength="45" name="correo" value="<?php echo $fila['correo'] ?>" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
              <input type="password" class="form-control input-regis2" placeholder="Password" maxlength="20" name="password" value="<?php echo $fila['password'] ?>" required>
              <input type="hidden" name="id" value="<?php echo $fila['id'] ?>">
              <?php mysqli_close($conexion); ?>
            </div>
        </div>
        <div>
            <button type="reset" class="btn btn-success btn-form-regis">Borrar</button>
            <button type="submit" class="btn btn-success btn-form-regis">Actualizar</button>
        </div>
        </form>

        <!-- Fin del formulario -->
    
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