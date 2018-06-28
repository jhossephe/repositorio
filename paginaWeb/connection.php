<?php

  require_once "config.php";

  class BaseDatos
  {
    protected $conexion;
    protected $db;

    public function __construct()
    {
        $this->conexion = mysql_connect(HOST, USER, PASS);
        if ($this->conexion == 0) DIE("Lo sentimos, no se ha podido conectar con MySQL: " . mysql_error());
        $this->db = mysql_select_db(DBNAME, $this->conexion);
        if ($this->db == 0) DIE("Lo sentimos, no se ha podido conectar con la base datos: " . DBNAME);

    }

    public function getConecta(){

      return $this->conexion;
    }
  }
  ///CREAR TABLA
  // $sql="CREATE TABLE myGuest(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, firstname VARCHAR(30) NOT NULL, lastname VARCHAR(30) NOT NULL, email VARCHAR(50), reg_date TIMESTAMP )";
  //TIMESTAMP registra la hora actual y la fecha actual

  //INSERTAR DATOS
  //$sql="INSERT INTO myGuest(firstname,lastname,email,reg_date) VALUES('JHonn','Doe','jhon@gmail.com','2018-10-9')";

  // $consulta=$conn->query($sql);
  // if ($consulta===TRUE) {
  //   echo "dato introducido Correctament";
  // }
  // else{
  //   echo "Error creadno datos: ".$conn->error;
  // }

  //*******************************************
  //OTRA manera de iNSERTAR DATOS
  // $stmt=$conn->prepare("INSERT INTO myGuest(firstname,lastname,email) VALUES(?,?,?)");
  // $stmt->bind_param("sss",$firstname,$lastname,$email);
  //
  // //obtener valores
  // $firstname='jhonnn';
  // $lastname='DOEEE';
  // $email="ada@gmail.com";
  // $stmt->execute();
  //
  // $firstname='maria';
  // $lastname='perez';
  // $email="ada@gmail.com";
  // $stmt->execute();
  //
  // $firstname='cris';
  // $lastname='merida';
  // $email="ada@gmail.com";
  // $stmt->execute();
  //
  // $firstname='samuel';
  // $lastname='DOEEE';
  // $email="ada@gmail.com";
  // $stmt->execute();
  //
  // echo "exito al crear datos";
  // $stmt->close();
  // $conn->close();

//*********************************************************

  //CONSULTA SELECT
  // $sql="SELECT id,firstname,lastname,email FROM myGuest";
  // $result=$conn->query($sql);
  //
  // if($result->num_rows>0)
  // {
  //   //salida
  //   while ($row = $result->fetch_assoc()) {
  //     echo "id:".$row['id']." Name: ".$row["firstname"]." ".$row["lastname"]."<br>";
  //   }
  // }
  // else{
  //   echo "0 results";
  // }
  // $conn->close();


  //*************************************************************
  //DELETE
  // $sql="DELETE FROM myGuest WHERE id=3";
  // if ($conn->query($sql)===TRUE) {
  //   echo "Borrado Exitoso";
  // }
  // else{
  //   echo "Error borrando registro: ".$conn->error;
  // }
  //
  // $conn->close();

  //***********************************************************
  //UPDATE
  // $sql="UPDATE myGuest SET lastname='CAMBIADO' WHERE id=2";
  // if ($conn->query($sql)===TRUE) {
  //   echo "REGISTRO ACTUALIZADO";
  // }
  // else{
  //   echo "Registro no actualizado: ".$conn->error;
  // }
  // $conn->close();

  // ***************************
  // LIMIT
  // $sql="SELECT * FROM tabla LIMIT 30";//NOS muestra del 1-30
  // $sql="SELECT * FROM tabla LIMIT 10 offset 15";//NOS muestra del 15-24 le suma 10 registros mas al 15 el 15 incluido
  // $sql="SELECT * FROM tabla LIMIT 15,10";//lo mismo de arriba solo que mas PRO

 ?>
