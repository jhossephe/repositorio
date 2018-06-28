<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BUY EVERITHING | CATALOGO</title>
    <?php include_once('link.php'); ?>
    <style media="screen">
      img{
        max-width: 100%;
        height:300px;
      }
    </style>
  </head>
  <body>
    <header>
      <?php include_once('menu.php'); ?>
      <br>
      <br>
      <br>
      <div class="view" style="background-image: url('img/paisaje3.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <!-- Mask & flexbox options-->
        <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
          <!-- Content -->
          <div class="container">
            <!--Grid row-->

            <div class="row">
              <!--Grid column-->
                 <a href="" id="comparar" class='btn btn-light-blue btn-md'>Comparar</a>
              <!-- Card deck -->
                      <?php
                            include_once('modelo/producto.php');
                            $producto=new Producto;
                            $producto->listarProductos();
                       ?>
                      <!-- Card -->

                    </div>
                    <!-- Card deck -->
              <!--Grid column-->
            </div>
            <!--Grid row-->
          </div>
          <!--Mask with wave-->
            <!--Mask with wave-->

          <!-- Content -->
        </div>
        <!-- Mask & flexbox options-->
    </header>
    <div class="" style="margin-top:12em;">

      <?php include_once('footer.php'); ?>
    </div>
  </body>
  <?php include_once('scripts.php'); ?>
    <script>
    var productos=[];
    var contador=0;
    $(document).ready(function(){
      $('#comparar').click(function(){
        if (contador<2) {
          alert('debe seleccionar almenos 2 productos');
        }
      });
      $('input[type=checkbox]').on('change', function() {
        if ($(this).is(':checked') ) {
            //alert("Checkbox " + $(this).prop("id") +  " (" + $(this).val() + ") => Seleccionado");
            contador++;
            productos.push($(this).val());
        } else {
            //alert("Checkbox " + $(this).prop("id") +  " (" + $(this).val() + ") => Deseleccionado");
            contador--;

        }
        if(contador>=2){
           //$('input[type=checkbox]').prop("disabled",true);

             $('#comparar').attr("href",'comparar.php?id1='+productos);
         }
      });
    });
    </script>
</script>
</html>
