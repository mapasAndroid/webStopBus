<?php
	session_start();

	include_once("../../../valid/bd/conexion.php");
	$bd = new Conexion();
	$link = $bd->conectar();

	$consulta = "SELECT * from ruta where id_ruta = '".$_POST['id_ruta']."';";
	$resultado = mysqli_query($link, $consulta);
	
	$cont = 0;
	while($fila = mysqli_fetch_array($resultado)){
		$cont++;
	}

	echo $cont;

	if($cont == 0) {
		//es porque no encontro a nadie
		$consulta= "INSERT INTO ruta VALUES('".$_POST['id_ruta']."', '".$_POST['nombre']."');";
		$resultado = mysqli_query($link, $consulta);


		if($resultado == 0 ){
			//es porque se encontro un error
			$_SESSION['mensaje'] = 'Error, Verifique de nuevo.';
			$_SESSION['tipo'] = 'error';
			header('Location: /stopbus/app/admin/ruta/registro.php');
		}else{
			//todo bien con el registro vayase pa algun lado
			$_SESSION['mensaje'] = 'Se registro correctamente.';
			$_SESSION['tipo'] = 'success';
			header('Location: /stopbus/app/admin/ruta/');
		}
	}else{
		
		//si lo encontro, es xq el usuario ya esta entonces le mostramos un error
		$_SESSION['mensaje'] = 'Esta ruta ya se encuentra registrada';
		$_SESSION['tipo'] = 'error';
		header('Location: /stopbus/app/admin/ruta/registro.php');
	}
?>