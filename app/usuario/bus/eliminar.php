<?php
//VALIDACION DEL ROL
include("../../../valid/validacionRol.php");
include_once("../../../valid/bd/conexion.php");
$placa = $_POST['bus'];

//nos conectamos con la bd y hacemos el udpate
          $bd = new Conexion();
          $link = $bd->conectar();

           $consulta = "delete from bus where placa = '".$placa."' ;";

          $resultado = mysqli_query($link, $consulta);
          $bd->desconectar();
          $_SESSION['mensaje'] = "empresa eliminada correctamente";
          $_SESSION['tipo'] = "success";
          header('Location: /stopbus/app/usuario/bus/');
?>