<?php
//VALIDACION DEL ROL
include("../../../valid/validacionRol.php");
include_once("../../../valid/bd/conexion.php");
$personaActual = $_POST['persona'];

//nos conectamos con la bd y hacemos el udpate
          $bd = new Conexion();
          $link = $bd->conectar();

          $consulta = "delete from pasajero where usuario = '".$personaActual."'";

          $resultado = mysqli_query($link, $consulta);
          $bd->desconectar();
          $_SESSION['mensaje'] = "usuario " . $personaActual . " eliminado correctamente";
          $_SESSION['tipo'] = "success";
          header('Location: /stopbus/app/admin/persona/');
?>