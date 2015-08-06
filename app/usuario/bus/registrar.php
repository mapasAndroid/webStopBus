<?php
	session_start();

	include_once("../../../valid/bd/conexion.php");
	$bd = new Conexion();
	$link = $bd->conectar();

	$consulta = "SELECT * from bus where nit = '".$_POST['placa']."';";
	$resultado = mysqli_query($link, $consulta);
	
	$cont = 0;
	while($fila = mysqli_fetch_array($resultado)){
		$cont++;
	}

	if($cont == 0) {
		//es porque no encontro a nadie

		$consulta = "select nit_empresa from pasajero where usuario = '".$_SESSION['usuario']."';";
		$nit_empresa = mysqli_query($link, $consulta);
		$nit_empresa = mysqli_fetch_array($nit_empresa)[0];
		if($nit_empresa == ""){
			$_SESSION['mensaje'] = "no puede crear buses " ;
			$_SESSION['tipo'] = 'error';
			header('Location: /stopbus/app/usuario/bus/');
		}else{

		$consulta= "INSERT INTO bus VALUES('".$_POST['placa']."', '".$_POST['conductor']."','".$_POST['ruta']."','".$_POST['empresa']."','".$_POST['pos_actual']."');";
		$resultado = mysqli_query($link, $consulta);


		if($resultado == 0 ){
			//es porque se encontro un error
			$_SESSION['mensaje'] = 'Error, Verifique de nuevo.';
			$_SESSION['tipo'] = 'error';
			header('Location: /stopbus/app/usuario/bus/registro.php');
		}else{
			//todo bien con el registro vayase pa algun lado
			$_SESSION['mensaje'] = 'Se registro correctamente.';
			$_SESSION['tipo'] = 'success';
			header('Location: /stopbus/app/usuario/bus/');
		}
	}}else{
		
		//si lo encontro, es xq el usuario ya esta entonces le mostramos un error
		$_SESSION['mensaje'] = 'Este nit ya se encuentra registrado';
		$_SESSION['tipo'] = 'error';
		header('Location: /stopbus/app/usuario/bus/registro.php');
	}
?>