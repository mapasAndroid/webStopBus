<?php
	session_start();

	include_once("../../../valid/bd/conexion.php");
	$bd = new Conexion();
	$link = $bd->conectar();

	$ruta = $_POST['ruta'];
	$paradero = $_POST['paradero'];

	$consulta= "delete from paraderoxruta where id_paradero = '".$paradero."' AND id_ruta ='".$ruta."';";
	$resultado = mysqli_query($link, $consulta);
	$bd->desconectar();
			
		//si lo encontro, es xq el usuario ya esta entonces le mostramos un error
		$_SESSION['mensaje'] = 'paradero eliminado satisfactoriamente';
		$_SESSION['tipo'] = 'success';
		header('Location: /stopbus/app/usuario/ruta/adicionParaderos.php');
		
?>