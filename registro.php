<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link rel="stylesheet" href="css/estilo.css">

    <title>Registro | TP integrador N° 1</title>
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
                <a class="nav-link active" aria-current="page" href="registro.php">Registrarse</a>
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
              <h2>Registro</h2>
            </div>
        </div>

        <!-- Inicio del formulario -->

        <form action="control-basedd/insertar.php" method="POST">
        <div class="row">
            <div class="col">
              <input type="text" class="form-control input-regis" placeholder="Nombre" name="nombre"
              <?php
                  // Estas 5 incorporaciones de código PHP son para recuperar los datos con los que
                  // intentó registrarse en caso de que haya elegido un dni o correo que ya estaban en la
                  // base de datos
                  if (isset($_GET['nom'])){ ?> 
                    value="<?=$_GET['nom'] ?>"
            <?php } ?>
              required>
            </div>
            <div class="col">
              <input type="text" class="form-control input-regis" placeholder="Apellido" name="apellido"
              <?php
                  if (isset($_GET['ape'])){ ?> 
                    value="<?=$_GET['ape'] ?>"
            <?php } ?>
              required>
            </div>
        </div>
        <div class="row">
            <div class="col">
              <input type="text" class="form-control input-regis" placeholder="DNI" name="dni"
              <?php
                  if (isset($_GET['dni'])){ ?> 
                    value="<?=$_GET['dni'] ?>"
            <?php } ?>
              required>
            </div>
            <div class="col">
              <input type="text" class="form-control input-regis" placeholder="Teléfono" name="telefono"
              <?php
                  if (isset($_GET['tel'])){ ?> 
                    value="<?=$_GET['tel'] ?>"
            <?php } ?>
              required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
              <input type="email" class="form-control input-regis2" placeholder="Correo" name="correo"
              <?php
                  if (isset($_GET['corr'])){ ?> 
                    value="<?=$_GET['corr'] ?>"
            <?php } ?>
              required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
              <input type="password" class="form-control input-regis2" placeholder="Password" name="password" required>
            </div>
        </div>
        <div>
            <button type="reset" class="btn btn-success btn-form-regis">Borrar</button>
            <button type="submit" class="btn btn-success btn-form-regis">Registrarse</button>
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