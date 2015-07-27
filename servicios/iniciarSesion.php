<?php
  include_once("../valid/bd/conexion.php");
	$bd = new Conexion();
	$link = $bd->conectar();


  $query = "SELECT * FROM pasajero WHERE (usuario ='".$_POST['usuario']."' AND password = '".$_POST['contrasenia']."')
   OR(correo ='".$_POST['usuario']."' AND password = '".$_POST['contrasenia']."');";
  $result = mysqli_query($link, $query);

  $usuario = "";
  $cont = 0;
  $correo = "";
  while($fila = mysqli_fetch_array($result)){
  		$usuario = $fila['usuario'];
      $correo = $fila['correo'];
  		$cont++;
  	}

  	if($cont != 1){
  		echo "0";
  	}else{
  		echo $usuario."&".$correo;
  	}

    $bd->desconectar();

?>
