<?php
//VALIDACION DEL ROL
include("../../../valid/validacionRol.php");
include_once("../../../valid/bd/conexion.php");
$rutaActual = $_POST['ruta'];

//nos conectamos con la bd y hacemos el udpate
          $bd = new Conexion();
          $link = $bd->conectar();

          $consulta = "delete from ruta where id_ruta = '".$rutaActual."'";

          $resultado = mysqli_query($link, $consulta);
          $bd->desconectar();
          $_SESSION['mensaje'] = "ruta eliminada correctamente";
          $_SESSION['tipo'] = "success";
          header('Location: /stopbus/app/admin/ruta/');
?>