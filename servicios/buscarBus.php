<?php
/*if($_POST['usuario'] != 'stopbus'  || $_POST['contrasenia'] != '990f2c3394b450ba65c04a7ffab18e2b9688ae84'){
  echo "0";
  exit();
}*/

$usuario_usuario = $_POST['usuario_usuario'];
$nombre_usuario = $_POST['nombre_usuario'];
$id_ruta = $_POST['id_ruta'];
$ubicacion_actual = explode("&", $_POST['ubicacion_actual']);

include_once("../valid/bd/conexion.php");
$bd = new Conexion();
$link = $bd->conectar();


echo makeUrlJsonReady($ubicacion_actual[0], $ubicacion_actual[1]);

echo "/";
$consulta = "SELECT * from bus where id_ruta = '".$id_ruta."'";
$resultado = mysqli_query($link, $consulta);
$rows = array();
while($r = mysqli_fetch_array($resultado)) {
  $rows[] = $r;
}
echo json_encode($rows, JSON_FORCE_OBJECT);

$consulta = "SELECT * FROM bus WHERE id_ruta = '".$id_ruta."' ORDER BY RAND() LIMIT 1;";
$resultado = mysqli_query($link, $consulta);

$placa = "";
while($fila = mysqli_fetch_array($resultado)){
  $placa = $fila['placa'];
}

$insercion = "insert into pasajeroxbus values('".$usuario_usuario."','".$placa."',NOW());";
mysqli_query($link, $insercion);

$bd->desconectar();

function makeUrlJsonReady($lat, $lon){
  $url = "http://nominatim.openstreetmap.org/reverse?format=json&addressdetails=0&zoom=16&lat=".$lat."&lon=".$lon;
  $response = json_decode(file_get_contents($url));
  return $response->display_name;
}

?>