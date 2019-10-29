<?php
//include"init.php;
include "init.php";

if($auth->usuarioLogueado()){
  header("Location:home.php");
  exit;
}


$errores = [];
$nombreOk = "";
$apellidoOk = "";
$emailOk = "";


//si el formulario viene por POST;

if($_POST){

  //tenemos que detectar errores y mostrarlos al usuario.
  $errores = Validator::validarRegistro($_POST);
   var_dump($errores);
  $nombreOk = trim($_POST["name"]);
  $apellidoOk = trim($_POST["apellido"]);
  $emailOk = trim($_POST["email"]);

  $hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
  $okPass = password_verify("123", $hash);


  //Si no hay errores;
  if(!$errores){
    // Crear un usuario
    $usuario = new Usuario($_POST);

   $db->guardarUsuario($usuario, $file);
    //Guardarlo en alguna parte
    //guardarUsuario($usuario);
    $ext = pathinfo($_FILES['name'], PATHINFO_EXTENSION);

    //Loguea el usuario en SESSION
    $auth->loguearUsuario($_POST['email']);
    //Redirige a página Exito y coloca el dato nombre en Nav


    header("Location:home.php");
    exit;
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link href="css/style.css" rel="stylesheet" />
  <title>BRONX</title>
</head>

<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <img id="comp-jadduam9imgimage" style="object-position: 50% 50%; width: 195px; height: 54px; object-fit: cover;" alt="" data-type="image" itemprop="image"
        src="https://static.wixstatic.com/media/36efdc_5a49fbf9400e46bcaa1f89c065243e3b~mv2.png/v1/fill/w_390,h_108,al_c,q_80,usm_0.66_1.00_0.01/36efdc_5a49fbf9400e46bcaa1f89c065243e3b~mv2.webp" />
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="home.php">HOME <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">REGISTER</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">LOGIN</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="card bg-light">
      <!-- div de todo login -->
      <article class="card-body mx-auto" style="max-width: 400px;">
        <h4 class="card-title mt-3 text-center">Crear cuenta</h4>

        <?php if($errores):?>
              <ul class="col-md-6 offset-md-3 alert alert-danger">

                <?php foreach ($errores as $error): ?>
                  <li><?= $error  ?></li>
                <?php endforeach ?>

              </ul>
        <?php endif ?>

        <form method="POST" action="#">
          <div class="form-group input-group">

            <!-- cuadradito nombre-->
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="fa fa-user"></i>
              </span>
            </div>

              <?php if(isset($errores["nombre"])):?>
            <!--  Si hay errores mostramos el campo input vacío  -->

            <input type="text" id="name" class="form-control" placeholder="Nombre" name="nombre" value="">

            <span class="small"></span>

            <?php else: ?>
            <input type="text" id="name" class="form-control" placeholder="Nombre" name="nombre" value="<?= $nombreOk ?>">
            <?php endif ?>
            </div>
          <!-- form-group// -->
          <div class="form-group input-group">
            <!-- cuadradito apellido-->
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="fa fa-user"></i>
              </span>
            </div>

            <?php if(isset($errores["apellido"])):?>
            <input name="apellido" class="form-control" placeholder="Apellido" type="text" value ="" />
            <span class="small"></span>
          <?php else: ?>
          <input type="text" id="apellido" class="form-control" placeholder="Apellido" name="apellido" value="<?= $apellidoOk ?>">
          <?php endif ?>
          </div>


          <div class="form-group input-group">


            <!-- cuadradito email-->
              <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="fa fa-envelope"></i>
              </span>
              </div>

            <?php if(isset($errores["email"])):?>

            <input name="email" class="form-control" placeholder="Email" type="email" />
          <?php else: ?>
           <input type="text" id="email" class="form-control" placeholder="email" name="email" value="<?= $emailOk?>">
          <?php endif?>

          </div>
          <!-- form-group// -->


          <!-- form-group// -->
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="fa fa-lock"></i>
              </span>
            </div>
            <?php if(isset($errores["password"])):?>
            <input name="password" class="form-control" placeholder="Contraseña" type="password" />
          <?php else: ?>
           <input type="password" id="pass" class="form-control" placeholder="Contraseña" name="password" value="">
         <?php endif?>
          </div>
          <!-- form-group// -->


          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="fa fa-lock"></i>
              </span>
            </div>
            <?php if(isset($errores["repetirContrasenia"])):?>
            <input name="repetirContrasenia" class="form-control" placeholder="Repetir Contraseña" type="password" />
          <?php else: ?>
           <input type="password" id="pass" class="form-control" placeholder="Repetir contraseña" name="pass2" value="">
         <?php endif?>
          </div>
          <!-- form-group// -->

          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">
              Crear Cuenta
            </button>
          </div>
          <!-- form-group// -->

          <p class="text-center">Tenes una cuenta? <a href="">LOGIN</a></p>
        </form>
      </article>
    </div>
    <!--Facebook-->
    <hr />

    <!-- Footer -->
    <footer class="page-footer font-small stylish-color-dark pt-4">
      <!-- Footer Links -->
      <div class="container text-center">
        <!-- Grid row -->
        <div class="">
          <!-- Grid column -->
          <div class="">
            <div class="">
              <h5 class="font-weight-bold text-uppercase mt-3 mb-4">
                WELCOME TO THE BRONX
              </h5>
            </div>
            <div class="row col-12">
              <div class="col-4">
                <p>
                  Somos un emprendimiento de muebles y objetos de decoración.
                  Realizamos todos nuestros productos de forma artesanal
                  alrededor de la nobleza y durabilidad del hierro. Nuestro
                  objetivo es combinar diseño, funcionalidad, minimalismo,
                  robustez y durabilidad. Eso es Bronx!
                </p>
              </div>
              <div class="col-4">
                <ul class="text-uppercase">
                  <li>
                    <p href="#!">Contacto</p>
                  </li>
                  <li>
                    <a href="#!"></a>
                  </li>
                  <li>
                    <p>Estomba 2887, Coghlan</p>
                  </li>
                  <li>
                    <p>Buenos Aires, Argentina</p>
                  </li>
                </ul>
              </div>
              <div class="col-4">
                <ul class="text-uppercase mt-3 mb-4">
                  <li>
                    <p>Mie-Sab 15 a 20</p>
                  </li>
                  <li>
                    <p>Tel 1165075229</p>
                  </li>
                  <li>
                    <p>hola@broxdecor.com.<br />ar</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Grid column -->
          <hr class="clearfix w-100 d-md-none" />

          <!-- Grid column -->
          <div class=""></div>
          <!-- Grid column -->
          <hr class="clearfix w-100 d-md-none" />

          <div class=""></div>
          <!-- Grid column -->
          <hr class="clearfix w-100 d-md-none" />
        </div>
      </div>
    </footer>
    <div class="">
      <ul class="social-media">
        <li>
          <a href="#"><span class="ion-social-facebook"></span></a>
        </li>
        <li>
          <a href="#"><span class="ion-social-twitter"></span></a>
        </li>
        <li>
          <a href="#"><span class="ion-social-instagram"></span></a>
        </li>
      </ul>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </div>
</body>

</html>
