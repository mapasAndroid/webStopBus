<?php
  //$ruta = $_GET['id_ruta'];
  include_once("../valid/bd/conexion.php");
	$bd = new Conexion();
	$link = $bd->conectar();


  $query = "SELECT * FROM pasajero WHERE (usuario ='".$_POST['usuario']."' AND password = '".$_POST['contrasenia']."')
   OR(correo ='".$_POST['usuario']."' AND password = '".$_POST['contrasenia']."');";
  $result = mysqli_query($link, $query);

  $nombre = "";
  $cont = 0;
  while($fila = mysqli_fetch_array($result)){
  		$nombre = $fila['nombre'];
  		$cont++;
  	}

  	if($cont != 1){
  		echo "0";
  	}else{
  		echo $nombre;
  	}

    $bd->desconectar();

?>
