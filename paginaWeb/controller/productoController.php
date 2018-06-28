<?php
include_once('../modelo/producto.php');
include_once('../connection.php');


function insert($user,$tarjeta){
  $request=$_REQUEST;
  $user=new Usuario;
  $tarjeta=new Tarjeta_credito;
  $tarjeta->tipo=$request['tipoTarjeta'];
  $tarjeta->numeroCuenta=$request['numeroCuenta'];
  $user->nombre=$request['nombre'];
  $user->apellido=$request['apellido'];
  $user->fechaNacimiento=$request['fechaNacimiento'];
  $user->password=$request['password'];
  $user->email=$request['email'];
  $user->user=$request['user'];
  $user->idRol=$request['rol'];
  $user->logotipo=$request['logotipo'];
  $conexion=new BaseDatos;
  $idUsuario=0;
  $sql="INSERT INTO usuario (nombre,apellido,email,fechaNacimiento,logotipo,user,password,id_rol) VALUES ('$user->nombre','$user->apellido','$user->email','$user->fechaNacimiento','$user->logotipo','$user->user','$user->password',$user->idRol)";
  $stm = mysql_query($sql,$conexion->getConecta()) or die("Error en: $sql: " . mysql_error());
  $rs = mysql_query("SELECT @@identity AS id");
  if ($row = mysql_fetch_row($rs)) {
    $idUsuario = trim($row[0]);
  }
  $sql2="INSERT INTO tarjeta_credito (tipo,numeroCuenta,id_user) VALUES ('$tarjeta->tipo','$tarjeta->numeroCuenta','$idUsuario')";
  $stm = mysql_query($sql2,$conexion->getConecta()) or die("Error en: $sql: " . mysql_error());
  $conexion->desconectar();
}

function listarProductos(){
  $conexion=new BaseDatos;
  $sql="SELECT * FROM producto";
  $stm = mysql_query($sql,$conexion->getConecta()) or die("Error en: $sql: " . mysql_error());
  while ($row = mysqli_fetch_array($stm))  {
     echo '<div class="card mb-4">';
     echo '<div class="view overlay">';
     echo "<img class='card-img-top' src='{$row[5]}' alt='Card image cap'>";
     echo '<div class="mask waves-effect rgba-white-slight"></div>';
     echo '<div class="card-body">';
     echo "  <h4 class='card-title'>{$row[1]}</h4>";
     echo "<p class='card-text'>{$row[2]}</p>";
     echo "<p class='card-text'><b> {$row[3]}</b></p>";
     echo '<button type="button" class="btn btn-light-blue btn-md">Mas informacion</button>';
     echo "</div>";
     echo "</div>";
 }
  $conexion->desconectar();
}
if (isset($_GET['operacion'])==1) {
  insert($user,$tarjeta);
  $_SESSION['nomUs']=$user->user;
  header('Location: '.'../index.php');
}


?>
