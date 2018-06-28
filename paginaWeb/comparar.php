<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BUY EVERITHING | CATALOGO</title>
    <?php include_once('link.php'); ?>
    <style media="screen">
      h1{
        text-align: center;
        font-size: 2em;
      }
      .titulo{
        width: 100%;

      }
    </style>
  </head>
  <body>
    <header>
      <?php include_once('menu.php'); ?>
      <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/architecture.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <!-- Mask & flexbox options-->
        <div class="mask rgba-gradient d-flex justify-content-center align-items-center">


            <!-- Content -->
            <!--Grid row-->
            <div class="row" >
              <div class="container titulo">
                <h1 style="color:white">COMPARACION</h1>
              </div>
                      <?php
                        include_once('modelo/producto.php');
                        $producto=new Producto;
                        $producto->comparar($_GET['id1'][0],$_GET['id1'][2]);

                       ?>

              <!--Grid column-->
            </div>
            <!--Grid row-->

          <!-- Content -->
        </div>
        <!-- Mask & flexbox options-->
      </div>
    </header>
    <?php include_once('footer.php'); ?>
  </body>
  <?php include_once('scripts.php'); ?>

</html>
