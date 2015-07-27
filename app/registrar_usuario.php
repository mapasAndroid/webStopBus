<?php
	session_start();

	include_once("../valid/bd/conexion.php");
	$bd = new Conexion();
	$link = $bd->conectar();

	$consulta = "SELECT * from pasajero where usuario = '".$_POST['usuario']."';";
	$resultado = mysqli_query($link, $consulta);

	$cont = 0;
	while($fila = mysqli_fetch_array($resultado)){
		$cont++;
	}

	if($cont == 0) {
		//es porque no encontro a nadie
		$consulta= "INSERT INTO pasajero VALUES('".$_POST['usuario']."', '".$_POST['nombre']."','".$_POST['email']."','".sha1($_POST['contra'])."','usuario', NULL);";
		$resultado = mysqli_query($link, $consulta);
		$bd->desconectar();

		if($resultado == 0){
			//es porque se encontro otro email igual
			$_SESSION['mensaje'] = 'Email ya existe';
			$_SESSION['tipo'] = 'error';
			header('Location: /stopbus/registro.php');
		}else{
			//todo bien con el registro vayase pa algun lado
			$_SESSION['rol'] = "usuario";
			$_SESSION['nombre'] = $_POST['nombre'];
			$_SESSION['usuario'] = $_POST['usuario'];
			$_SESSION['mensaje'] = 'Usuario registrado satisfactoriamente';
			$_SESSION['tipo'] = 'success';
			header('Location: /stopbus/app/usuario/');
		}
	}else{
		$bd->desconectar();
		//si lo encontro, es xq el usuario ya esta entonces le mostramos un error
			$_SESSION['mensaje'] = 'Usuario ya existe';
			$_SESSION['tipo'] = 'error';
			header('Location: /stopbus/registro.php');
	}
?>
