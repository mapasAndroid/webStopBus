<?php
	session_start();

	include_once("../../../valid/bd/conexion.php");
	$bd = new Conexion();
	$link = $bd->conectar();

	$consulta = "SELECT * from pasajero where usuario = '".$_POST['usuario']."';";
	$resultado = mysqli_query($link, $consulta);
	
	$cont = 0;
	while($fila = mysqli_fetch_array($resultado)){
	$cont++;
	}

	echo $cont;

	if($cont == 0) {
		//es porque no encontro a nadie
		$empresa = "'".$_POST['empresa']."'";
		if($_POST['empresa'] === 'ninguna'){
			$empresa = "null";
		}


		$consulta= "INSERT INTO pasajero VALUES('".$_POST['usuario']."', '".$_POST['nombre']."','".$_POST['email']."','".$_POST['contra']."','no','".$_POST['rol']."', ".$empresa.");";
		$resultado = mysqli_query($link, $consulta);


		if($resultado == 0 ){
			//es porque se encontro un error
			$_SESSION['mensaje'] = 'El correo registrado ya existe';
			$_SESSION['tipo'] = 'error';
			header('Location: /stopbus/app/admin/persona/registro.php');
		}else{
			//todo bien con el registro vayase pa algun lado
			$_SESSION['mensaje'] = 'Se registro correctamente.';
			$_SESSION['tipo'] = 'success';
			header('Location: /stopbus/app/admin/persona/');
		}
	}else{
		
		//si lo encontro, es xq el usuario ya esta entonces le mostramos un error
		$_SESSION['mensaje'] = 'Este usuario ya se encuentra registrado';
		$_SESSION['tipo'] = 'error';
		header('Location: /stopbus/app/admin/persona/registro.php');
	}
?>