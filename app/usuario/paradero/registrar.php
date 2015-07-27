<?php
	session_start();

	include_once("../../../valid/bd/conexion.php");
	$bd = new Conexion();
	$link = $bd->conectar();


	$consulta = "SELECT * from paradero where id_ubicacion = '".$_POST['id_ubicacion']."';";
	$resultado = mysqli_query($link, $consulta);

	$cont = 0;
	while($fila = mysqli_fetch_array($resultado)){
		$cont++;
	}

	echo $cont;

	if($cont == 0) {
		//es porque no encontro a nadie
		$consulta= "INSERT INTO paradero VALUES('".$_POST['tipo']."$".$_POST['id_ubicacion']."', '".$_POST['nombre']."','".$_POST['direccion']."','".$_POST['latitud']."','".$_POST['longitud']."');";
		$resultado = mysqli_query($link, $consulta);


		if($resultado == 0 ){
			//es porque se encontro un error
			$_SESSION['mensaje'] = 'Error, Verifique de nuevo.';
			$_SESSION['tipo'] = 'error';
			header('Location: /stopbus/app/usuario/paradero/registro.php');
		}else{
			//todo bien con el registro vayase pa algun lado
			$_SESSION['mensaje'] = 'Se registro correctamente.';
			$_SESSION['tipo'] = 'success';
			header('Location: /stopbus/app/usuario/paradero/');
		}
	}else{

		//si lo encontro, es xq el usuario ya esta entonces le mostramos un error
		$_SESSION['mensaje'] = 'Este id de paradero ya esta registrado';
		$_SESSION['tipo'] = 'error';
		header('Location: /stopbus/app/usuario/paradero/registro.php');
	}
?>
