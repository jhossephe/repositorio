<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BUY EVERITHING</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/registro.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <header >
<!--Navbar-->
<?php include_once('menu.php'); ?>
  <div class="" >

          <section class="view intro-2 hm-gradient">
                <div class="full-bg-img">
                    <div class="container flex-center">
                        <div class="d-flex align-items-center content-height">
                            <div class="row flex-center pt-5 mt-3">
                                <div class="col-md-6 text-center text-md-left mb-5">
                                    <div class="white-text">
                                        <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">Registrate en nuestra pagina </h1>
                                        <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
                                        <h6 class="wow fadeInLeft" data-wow-delay="0.3s">Registrate para poder vender o comprar productos.</h6>
                                        <br>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xl-5 offset-xl-1">
                                    <!--Form-->
                                    <div class="card wow fadeInRight" data-wow-delay="0.3s">
                                        <div class="card-body">
                                            <!--Header-->
                                            <div class="text-center">
                                                <h3 class="white-text"><i class="fa fa-user white-text"></i> Registro:</h3>
                                                <hr class="hr-light">
                                            </div>

                                            <!--Body-->
                                            <form class="form" action="controller/userController.php?operacion=4" method="post">

                                            <div class="md-form">
                                                <i class="fa fa-user prefix white-text active"></i>
                                                <input type="text" id="form3" class="form-control" name="nombre">
                                                <label for="form3" class="active">Nombre</label>
                                            </div>
                                            <!-- Material input -->
                                            <div class="md-form">
                                                <i class="fa fa-user prefix white-text active"></i>
                                                <input type="text" id="inputIconEx2" class="form-control" name="apellido">
                                                <label for="inputIconEx2">Apellido</label>
                                            </div>
                                            <div class="form-group">
                                              <i class="fa fa-calendar prefix  white-text active"></i>
                                              <label for="fecha" style="color:white;">Fecha de Nacimiento</label>
                                                <input  type="date"  class="form-control" value="05/07/2018" name="fechaNacimiento">
                                            </div>
                                            <div class="file-field white-text">
                                              <span>Selecciona un logotipo/foto</span>
                                              <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile" name="logotipo">
                                                <i class="fa fa-file-upload prefix white-text active"></i>
                                                <label class="custom-file-label" for="customFile">Selecciona un archivo</label>
                                              </div>
                                            </div>
                                            <div class="md-form">
                                                <i class="fa fa-envelope prefix white-text active"></i>
                                                <input type="email" id="form2" class="form-control" name="email">
                                                <label for="form2" class="active">Your email</label>
                                            </div>

                                            <div class="md-form">
                                              <i class="fa fa-user prefix white-text active"></i>
                                              <input type="text" id="form3" class="form-control" name="user">
                                              <label for="form3" class="active">Nombre</label>
                                            </div>
                                            <div class="md-form">
                                                <i class="fa fa-lock prefix white-text active"></i>
                                                <input type="password"  class="form-control" name="password">
                                                <label for="form4" class="active">Your password</label>
                                            </div>
                                            <label class="white-text active">Escoja el tipo de usuario</label>
                                            <select class="form-control" name="rol">
                                              <option value="" disabled selected>Seleccione un Rol</option>
                                              <option value="12">Proveedor</option>
                                              <option value="13">Comprador</option>
                                          </select>
                                            <label class="white-text active">Escoja el tipo de tarjeta</label>
                                            <select class="form-control" name="tipoTarjeta">
                                              <option value="" disabled selected>Seleccione una Tarjeta de Credito</option>
                                              <option value="BNB">BNB</option>
                                              <option value="PAYPAL"><i class="fa fa-cc-paypal"></i>PAYPAL</option>
                                              <option value="PRODEM"><i class="fa fa-cc-paypal"></i>PRODEM</option>
                                          </select>
                                          <div class="md-form">
                                            <i class="fa fa-credit-card prefix white-text active"></i>
                                            <input type="number"  class="form-control" name="numeroCuenta">
                                            <label for="numeroCuenta" class="active">Numero de Cuenta</label>
                                          </div>
                                            <div class="text-center">
                                                <button class="btn btn-indigo" type="submit">Registrarse</button>
                                                <a href="login.php" class="btn btn-grey">Ya tengo Cuenta!!</a>
                                                <hr class="hr-light mb-3 mt-4">

                                                    <div class="inline-ul text-center d-flex justify-content-center">
                                                        <a class="icons-sm tw-ic"><i class="fa fa-twitter white-text"></i></a>
                                                        <a class="icons-sm li-ic"><i class="fa fa-linkedin white-text"> </i></a>
                                                        <a class="icons-sm ins-ic"><i class="fa fa-instagram white-text"> </i></a>
                                                    </div>
                                            </div>
                                          </form>

                                        </div>
                                    </div>
                                    <!--/.Form-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
  </div>
</header>
<!-- Footer -->
<div class="" style="margin-top:15em;">

<?php include_once('footer.php'); ?>
</div>
<!-- Footer -->
<!-- JQuery -->
    <!-- SCRIPTS -->


    <?php include_once('scripts.php'); ?>

</body>

</html>
