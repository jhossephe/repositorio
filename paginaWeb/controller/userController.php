<?php
session_start();
include_once('../modelo/user.php');
include_once('../modelo/tarjeta_credito.php');
include_once('../connection.php');


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

function insert($user,$tarjeta){
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
  //$conexion->desconectar();
}


if (isset($_GET['operacion'])==1) {
  insert($user,$tarjeta);
  $_SESSION['nomUs']=$user->user;
  header('Location: '.'../index.php');
}


?>
