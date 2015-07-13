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
			
		//si lo encontro, es xq el usuario ya esta entonces le mostramos un error
		$_SESSION['mensaje'] = 'paradero asignado satisfactoriamente';
		$_SESSION['tipo'] = 'success';
		header('Location: /stopbus/app/admin/ruta/adicionParaderos.php');
		
?>