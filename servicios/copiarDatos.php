<?php
  //$ruta = $_GET['id_ruta'];
  include_once("../valid/bd/conexion.php");
	$bd = new Conexion();
	$link = $bd->conectar();



  echo '{"0":';
    $consulta = "SELECT * from empresa";
    $resultado = mysqli_query($link, $consulta);
    $rows = array();
     while($r = mysqli_fetch_array($resultado)) {
       $rows[] = $r;
     }
    echo json_encode($rows, JSON_FORCE_OBJECT);

  echo ',"1":';

  $consulta = "SELECT * from pasajero";
  $resultado = mysqli_query($link, $consulta);
  $rows = array();
   while($r = mysqli_fetch_array($resultado)) {
     $rows[] = $r;
   }
  echo json_encode($rows, JSON_FORCE_OBJECT);

  echo ',"2":';

  $consulta = "SELECT * from recientes";
  $resultado = mysqli_query($link, $consulta);
  $rows = array();
   while($r = mysqli_fetch_array($resultado)) {
     $rows[] = $r;
   }
  echo json_encode($rows, JSON_FORCE_OBJECT);

  echo ',"3":';

  $consulta = "SELECT * from ruta";
  $resultado = mysqli_query($link, $consulta);
  $rows = array();
   while($r = mysqli_fetch_array($resultado)) {
     $rows[] = $r;
   }
  echo json_encode($rows, JSON_FORCE_OBJECT);

  echo ',"4":';

  $consulta = "SELECT * from paradero";
  $resultado = mysqli_query($link, $consulta);
  $rows = array();
   while($r = mysqli_fetch_array($resultado)) {
     $rows[] = $r;
   }
  echo json_encode($rows, JSON_FORCE_OBJECT);

  echo ',"5":';

  $consulta = "SELECT * from paraderoxruta";
  $resultado = mysqli_query($link, $consulta);
  $rows = array();
   while($r = mysqli_fetch_array($resultado)) {
     $rows[] = $r;
   }
  echo json_encode($rows, JSON_FORCE_OBJECT);

  echo ',"6":';

  $consulta = "SELECT * from bus";
  $resultado = mysqli_query($link, $consulta);
  $rows = array();
   while($r = mysqli_fetch_array($resultado)) {
     $rows[] = $r;
   }
  echo json_encode($rows, JSON_FORCE_OBJECT);

  echo ',"7":';

  $consulta = "SELECT * from pasajeroxbus";
  $resultado = mysqli_query($link, $consulta);
  $rows = array();
   while($r = mysqli_fetch_array($resultado)) {
     $rows[] = $r;
   }
  echo json_encode($rows, JSON_FORCE_OBJECT);


  echo '}';
  $bd->desconectar();
?>
