<?php
//VALIDACION DEL ROL
include("../../../valid/validacionRol.php");
include_once("../../../valid/bd/conexion.php");
$busActual = $_POST['bus']; //id del bus que voy a editar
$ruta = $_POST['ruta'];
$empresa = $_POST['empresa'];
$placa = $_POST['placa'];
$conductor = $_POST['conductor'];


//nos conectamos con la bd y hacemos el udpate
          $bd = new Conexion();
          $link = $bd->conectar();

          $consulta = "update bus set placa = '".$placa."', conductor = '".$conductor."' , 
          id_ruta = '".$ruta."' , nit= '".$empresa."' where placa = '".$busActual."';";

          $resultado = mysqli_query($link, $consulta);
          $bd->desconectar();

          
        
          	$_SESSION['mensaje'] = "bus actualizado correctamente";
		  	$_SESSION['tipo'] = 'success';
        	header('Location: /stopbus/app/admin/bus/');

          
          
?>