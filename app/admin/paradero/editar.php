<?php
//VALIDACION DEL ROL
include("../../../valid/validacionRol.php");
include_once("../../../valid/bd/conexion.php");
$paraderoActual = $_POST['paradero'];
$id_ubicacion = $_POST['id_paradero'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$latitud = $_POST['latitud'];
$longitud = $_POST['longitud'];

//nos conectamos con la bd y hacemos el udpate
$bd = new Conexion();
$link = $bd->conectar();

$x= explode("$", $paraderoActual);
$consulta = "update paradero set id_paradero='".$x[0]."$".$id_ubicacion."', nombre = '".$nombre."' , direccion= '".$direccion."', latitud= '".$latitud."' , longitud= '".$longitud."' where id_paradero = '".$paraderoActual."'";

$resultado = mysqli_query($link, $consulta);

$bd->desconectar();



$_SESSION['mensaje'] = "paradero " . $nombre . " actualizado correctamente";
$_SESSION['tipo'] = 'success';
header('Location: /stopbus/app/admin/paradero/');



?>
