<?php
//VALIDACION DEL ROL
include("../../../valid/validacionUser.php");
include_once("../../../valid/bd/conexion.php");
$paraderoActual = $_POST['paradero'];
$id_ubicacion = $_POST['id_paradero'];
$nombre = $_POST['nombre'];
$latitud = $_POST['latitud'];
$longitud = $_POST['longitud'];

//nos conectamos con la bd y hacemos el udpate
          $bd = new Conexion();
          $link = $bd->conectar();

          $consulta = "update paradero set id_paradero= '".$id_ubicacion."', nombre = '".$nombre."' , latitud = '".$latitud."' , longitud= '".$longitud."' where id_paradero = '".$paraderoActual."'";

          $resultado = mysqli_query($link, $consulta);
          $bd->desconectar();

          
        
          	$_SESSION['mensaje'] = "paradero " . $nombre . " actualizado correctamente";
		  	$_SESSION['tipo'] = 'success';
        	header('Location: /stopbus/app/usuario/paradero/');

          
          
?>