<?php
//VALIDACION DEL ROL
include("../../../valid/validacionRol.php");
include_once("../../../valid/bd/conexion.php");
$paraderoActual = $_POST['paradero'];

//nos conectamos con la bd y hacemos el udpate
          $bd = new Conexion();
          $link = $bd->conectar();

          $consulta = "delete from paradero where id_paradero = '".$paraderoActual."'";

          $resultado = mysqli_query($link, $consulta);
          $bd->desconectar();
          $_SESSION['mensaje'] = "paradero eliminado correctamente";
          $_SESSION['tipo'] = "success";
          header('Location: /stopbus/app/admin/paradero/');
?>