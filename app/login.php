<?php
	session_start();

	include_once("../valid/bd/conexion.php");
	$bd = new Conexion();
	$link = $bd->conectar();

	$query = "SELECT * FROM pasajero WHERE (usuario ='".$_POST['nombreuser']."' AND password= '".sha1($_POST['contra'])."');";
	$result = mysqli_query($link, $query);
	$bd->desconectar();

	$nombre = "";
	$rol = "";
	$cont = 0;
	$usuario = "";
	while($fila = mysqli_fetch_array($result)){
		$nombre = $fila['nombre'];
		$rol = $fila['rol'];
		$usuario = $fila['usuario'];
		$cont++;
	}

	if($cont != 1){//si esta mas de una vez o no esta en la db, error
		$_SESSION['mensaje'] = 'Usuario y contraseña no coinciden';
		$_SESSION['tipo'] = 'error';
		header("Location: /stopbus/");
	}else{

		$_SESSION['nombre'] = $nombre;
		$_SESSION['rol'] = $rol;

		if($rol == 'usuario'){
			$_SESSION['usuario'] = $usuario;
			header('Location: /stopbus/app/usuario/');
		}else{
			header('Location: /stopbus/app/admin/');
		}
	}


?>
