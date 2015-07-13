<?php
//VALIDACION DEL ROL
include("../../../valid/validacionRol.php");
include_once("../../../valid/bd/conexion.php");
$empresaActual = $_POST['empresa'];
$nit = $_POST['nit'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];

//nos conectamos con la bd y hacemos el udpate
          $bd = new Conexion();
          $link = $bd->conectar();

          $consulta = "update empresa set nit = '".$nit."', nombre = '".$nombre."' , direccion = '".$direccion."' , telefono= '".$telefono."' where nit = '".$empresaActual."'";

          $resultado = mysqli_query($link, $consulta);
          $bd->desconectar();

          
        
          	$_SESSION['mensaje'] = "empresa " . $nombre . " actualizada correctamente";
		  	$_SESSION['tipo'] = 'success';
        	header('Location: /stopbus/app/admin/empresa/');

          
          
?>