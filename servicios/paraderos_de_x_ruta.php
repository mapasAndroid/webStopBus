<?php
  $ruta = $_GET['id_ruta'];
  include_once("../valid/bd/conexion.php");
	$bd = new Conexion();
	$link = $bd->conectar();
  $consulta = "SELECT p.id_paradero , p.nombre from paradero as p , paraderoxruta as inter where inter.id_ruta = '".$ruta."' and p.id_paradero= inter.id_paradero";
  $resultado = mysqli_query($link, $consulta);
  $bd->desconectar();

  $rows = array();
   while($r = mysqli_fetch_array($resultado)) {
     $rows[] = $r;
   }
  echo json_encode($rows, JSON_FORCE_OBJECT);

?>
