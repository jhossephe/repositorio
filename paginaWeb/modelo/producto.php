<?php
include_once('connection.php');
class Producto
{

  public $idProducto;
  public $nombre;
  public $descripcion;
  public $precio;


  function listarProductos(){
    $conexion=new BaseDatos;
    $sql='SELECT producto.id_producto,producto.nombre,descripcion,precio,imagen.ruta FROM producto,imagen where imagen.id_producto=producto.id_producto';
    mysql_query("SET NAMES 'UTF8'");
    $stm = mysql_query($sql,$conexion->getConecta()) or die("Error en: $sql: " . mysql_error());
    echo "<div class='card-deck'>";
    while ($row = mysql_fetch_array($stm, MYSQL_NUM))  {

      echo '<div class="card mb-4">';
           echo '<div class="view overlay">';
               echo "<img class='card-img-top' src='img/productos/{$row[4]}' alt='Card image cap'>";
                echo '<div class="mask waves-effect rgba-white-slight"></div>';
           echo "</div>";

          echo '<div class="card-body">';
               echo "<h4 class='card-title'>{$row[1]}</h4>";
               echo "<p class='card-text'>{$row[2]}</p>";
               echo "<p class='card-text'>Precio:<b> {$row[3]}</b></p>";
               echo '<div class="row">';
                   echo '<div class="col">';
                       //echo "<a href='producto.php?id={$row[0]}' class='btn btn-light-blue btn-md'>Mas informacion</a>";
                   echo '</div>';

                   echo '<div class="col">';
                       echo "<div class='btn-group mr-4' data-toggle='buttons'>";
                       echo "<label class='btn btn-default form-check-label'>";
                             echo "<input type='checkbox' class='form-check-input' id='{$row[0]}' autocomplete='off' value='{$row[0]}'>Comparacion";
                             echo "</label>";
                        echo "</div>";
                    echo '</div>';
               echo '</div>';
         echo "</div>";
       echo "</div>";
     }
     echo "</div>";
  }

  function comparar($producto1,$producto2){
    $conexion=new BaseDatos;
    $contador=0;
        $sql="SELECT p1.nombre as Producto1,carac1.nombre as Caracteristicas,carac1.cantidad as Cantidad,carac1.descripcion as Descripcion,carac1.comparable as COMPARABLE
            from producto p1,caracteristica carac1,categoria_producto cp1,categoria c1, caracteristica_categoria caracCat1
            where p1.id_producto=cp1.id_producto
            and p1.id_producto='$producto1'
            and cp1.id_categoria=c1.id_categoria
            and caracCat1.id_categoria=c1.id_categoria
            and caracCat1.id_caracteristica=carac1.id_caracteristica
            and carac1.comparable='si'";

      $stm = mysql_query($sql,$conexion->getConecta()) or die("Error en: $sql: " . mysql_error());
        mysql_query("SET NAMES 'UTF8'");
        echo "<div class='' style='margin-left:50px;background-color:white;'>";
        $nombre="SELECT producto.nombre FROM producto WHERE producto.id_producto=$producto1";
        $stm2 = mysql_query($nombre,$conexion->getConecta()) or die("Error en: $sql: " . mysql_error());
        if ($nombre=mysql_fetch_row($stm2)) {
          echo "<h1>{$nombre[0]}</h1>";
        }
        echo '<table class="table table-responsive-md">';
        echo "<thead class='cyan lighten-3'>";
        echo '<th class="th-lg">Caracteristicas</th>';
        echo '<th class="th-lg">Descripcion</th>';
        echo '<th class="th-lg">Cantidad</th>';
       echo "</thead>";

        while ($row = mysql_fetch_array($stm, MYSQL_NUM))  {
          echo '<tr>';
          echo "<td>".$row[1]."</td>";
          echo "<td>".$row[3]."</td>";
          echo "<td>".$row[2]."</td>";
          //si dato es datetime en bd, entonces se debe llamar a format para convertir a cadena.
          echo '</tr>';

        }

        echo "</table>";
        echo "</div>";

        $sql="SELECT p1.nombre as Producto1,carac1.nombre as Caracteristicas,carac1.cantidad as Cantidad,carac1.descripcion as Descripcion,carac1.comparable as COMPARABLE
            from producto p1,caracteristica carac1,categoria_producto cp1,categoria c1, caracteristica_categoria caracCat1
            where p1.id_producto=cp1.id_producto
            and p1.id_producto='$producto2'
            and cp1.id_categoria=c1.id_categoria
            and caracCat1.id_categoria=c1.id_categoria
            and caracCat1.id_caracteristica=carac1.id_caracteristica
            and carac1.comparable='si'";

            $nombre="SELECT producto.nombre FROM producto WHERE producto.id_producto=$producto2";
        mysql_query("SET NAMES 'UTF8'");
        $stm = mysql_query($sql,$conexion->getConecta()) or die("Error en: $sql: " . mysql_error());
        echo "<div class=''  style='margin-left:50px;background-color:white;'>";
        $stm2 = mysql_query($nombre,$conexion->getConecta()) or die("Error en: $sql: " . mysql_error());
        if ($nombre=mysql_fetch_row($stm2)) {
          echo "<h1>{$nombre[0]}</h1>";
        }
        echo '<table class="table table-responsive-md">';
        echo "<thead class='cyan lighten-3'>";
        echo '<th class="th-lg">Caracteristicas</th>';
        echo '<th class="th-lg">Descripcion</th>';
        echo '<th class="th-lg">Cantidad</th>';
       echo "</thead>";

        while ($row = mysql_fetch_array($stm, MYSQL_NUM))  {
          echo '<tr>';
          echo "<td>".$row[1]."</td>";
          echo "<td>".$row[3]."</td>";
          echo "<td>".$row[2]."</td>";
          //si dato es datetime en bd, entonces se debe llamar a format para convertir a cadena.
          echo '</tr>';

        }

        echo "</table>";
        echo "</div>";

       /* $sql="SELECT p1.nombre as Producto1,carac1.nombre as Caracteristicas,carac1.cantidad as Cantidad,carac1.descripcion as Descripcion,carac1.comparable as COMPARABLE
            from producto p1,caracteristica carac1,categoria_producto cp1,categoria c1, caracteristica_categoria caracCat1
            where p1.id_producto=cp1.id_producto
            and p1.id_producto='$producto3'
            and cp1.id_categoria=c1.id_categoria
            and caracCat1.id_categoria=c1.id_categoria";*/
           // and caracCat1.id_caracteristica=carac1.id_caracteristica;
            //and carac1.comparable='si';
        mysql_query("SET NAMES 'UTF8'");
        $stm = mysql_query($sql,$conexion->getConecta()) or die("Error en: $sql: " . mysql_error());
        echo "<div class=''  style='margin-left:50px;background-color:white;'>";
        //$nombre="SELECT producto.nombre FROM producto WHERE producto.id_producto=$producto3";
       // $stm2 = mysql_query($nombre,$conexion->getConecta()) or die("Error en: $sql: " . mysql_error());
        /*if ($nombre=mysql_fetch_row($stm2)) {
          echo "<h1 >{$nombre[0]}</h1>";
        }
        echo '<table class="table table-responsive-md">';
        echo "<thead class='cyan lighten-3'>";
        echo '<th class="th-lg">Caracteristicas</th>';
        echo '<th class="th-lg">Descripcion</th>';
        echo '<th class="th-lg">Cantidad</th>';
       echo "</thead>";*/

        while ($row = mysql_fetch_array($stm, MYSQL_NUM))  {
          echo '<tr>';
          echo "<td>".$row[1]."</td>";
          echo "<td>".$row[3]."</td>";
          echo "<td>".$row[2]."</td>";
          //si dato es datetime en bd, entonces se debe llamar a format para convertir a cadena.
          echo '</tr>';

        }

        echo "</table>";
        echo "</div>";
  }
}
 ?>
