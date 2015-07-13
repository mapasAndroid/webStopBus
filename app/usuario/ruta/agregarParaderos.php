<?php
	session_start();

	include_once("../../../valid/bd/conexion.php");
	$bd = new Conexion();
	$link = $bd->conectar();

	$ruta = $_POST['ruta'];
	$paradero = $_POST['paradero'];

	$consulta= "INSERT INTO paraderoxruta VALUES('".$paradero."', '".$ruta."');";
	$resultado = mysqli_query($link, $consulta);
	$bd->desconectar();

	$_SESSION['mensaje'] = 'paradero asignado satisfactoriamente';
	$_SESSION['tipo'] = 'success';
	header('Location: /stopbus/app/usuario/ruta/adicionParaderos.php');
?>
