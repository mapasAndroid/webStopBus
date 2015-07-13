<?php
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
		$consulta= "INSERT INTO pasajero VALUES('".$_POST['usuario']."', '".$_POST['nombre']."','".$_POST['correo']."','".$_POST['contrasenia']."','no','usuario', NULL);";
		$resultado = mysqli_query($link, $consulta);
		$bd->desconectar();

		if($resultado == 0){
			//es porque se encontro otro email igual
			echo "email_duplicado";
		}else{
			//todo bien con el registro vayase pa algun lado
			echo $_POST['nombre'];
		}
	}else{
		$bd->desconectar();
		//si lo encontro, es xq el usuario ya esta entonces le mostramos un error
			echo "usuario_duplicado";
	}
?>
