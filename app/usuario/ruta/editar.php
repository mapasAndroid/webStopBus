<?php
//VALIDACION DEL ROL
include("../../../valid/validacionUser.php");
include_once("../../../valid/bd/conexion.php");
$rutaActual = $_POST['ruta'];
$id = $_POST['id_ruta'];
$nombre = $_POST['nombre'];

//nos conectamos con la bd y hacemos el udpate
$bd = new Conexion();
$link = $bd->conectar();

$consulta = "update ruta set id_ruta = '".$id."', nombre = '".$nombre."' where id_ruta = '".$rutaActual."'";

$resultado = mysqli_query($link, $consulta);

$bd->desconectar();


$_SESSION['mensaje'] = "ruta actualizada correctamente";
$_SESSION['tipo'] = 'success';
header('Location: /stopbus/app/usuario/ruta/');



?>
