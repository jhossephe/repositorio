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

  <header>
<!--Navbar-->
  <?php include_once('menu.php'); ?>
  <section class="view intro-2 hm-gradient">
                <div class="full-bg-img">
                    <div class="container flex-center">
                        <div class="d-flex align-items-center content-height">
                            <div class="row flex-center pt-5 mt-3">
                                <div class="col-md-6 text-center text-md-left mb-5">
                                    <div class="white-text">
                                        <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">Iniciar Sesion ahora</h1>
                                        <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
                                        <h6 class="wow fadeInLeft" data-wow-delay="0.3s">Inicia sesion en nuestra pagina para poder comprar o vender</h6>
                                        <br>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xl-5 offset-xl-1">
                                    <!--Form-->
                                    <div class="card wow fadeInRight" data-wow-delay="0.3s">
                                        <div class="card-body">
                                            <!--Header-->
                                            <div class="text-center">
                                                <h3 class="white-text"><i class="fa fa-user white-text"></i> LOGIN</h3>
                                                <hr class="hr-light">
                                            </div>

                                            <!--Body-->
                                            <div class="md-form">
                                                <i class="fa fa-user prefix white-text active"></i>
                                                <input type="text" id="form3" class="form-control">
                                                <label for="form3" class="active">Nombre de Usuario</label>
                                            </div>


                                            <div class="md-form">
                                                <i class="fa fa-lock prefix white-text active"></i>
                                                <input type="password" id="form4" class="form-control">
                                                <label for="form4" class="active">Contraseña</label>
                                            </div>

                                            <div class="text-center">
                                              <button class="btn btn-indigo" type="submit">Iniciar</button>
                                              <a href="registro.php" class="btn btn-grey">No tengo Cuenta!!</a>
                                              <hr class="hr-light mb-3 mt-4">

                                                    <div class="inline-ul text-center d-flex justify-content-center">
                                                        <a class="icons-sm tw-ic"><i class="fa fa-twitter white-text"></i></a>
                                                        <a class="icons-sm li-ic"><i class="fa fa-linkedin white-text"> </i></a>
                                                        <a class="icons-sm ins-ic"><i class="fa fa-instagram white-text"> </i></a>
                                                    </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!--/.Form-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
</header>
<!-- Footer -->
<div class="">
  <?php include_once('footer.php'); ?>
</div>
<!-- Footer -->
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript">
      new WOW().init();
    </script>
</body>

</html>
