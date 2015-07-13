<?php
//VALIDACION DEL ROL
include("../../../valid/validacionUser.php");
include_once("../../../valid/bd/conexion.php");
$busActual = $_POST['bus']; //id del bus que voy a editar
$ruta = $_POST['ruta'];
$empresa = $_POST['empresa'];
$placa = $_POST['placa'];
$conductor = $_POST['conductor'];


//nos conectamos con la bd y hacemos el udpate
$bd = new Conexion();
$link = $bd->conectar();

$consulta = "select nit_empresa from pasajero where usuario = '".$_SESSION['usuario']."';";
$nit_empresa = mysqli_query($link, $consulta);
if($nit_empresa != null){
	$_SESSION['mensaje'] = 'No tiene empresa asociada para poder editar buses';
	$_SESSION['tipo'] = 'error';
	header('Location: /stopbus/app/usuario/bus/');
}
//este es como el else :P

$consulta = "update bus set placa = '".$placa."', conductor = '".$conductor."' , 
id_ruta = '".$ruta."' , nit= '".$nit_empresa."' where placa = '".$busActual."';";

$resultado = mysqli_query($link, $consulta);
$bd->desconectar();



$_SESSION['mensaje'] = "bus actualizado correctamente";
$_SESSION['tipo'] = 'success';
header('Location: /stopbus/app/usuario/bus/');



?>