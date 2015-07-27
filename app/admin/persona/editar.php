<?php
//VALIDACION DEL ROL
include("../../../valid/validacionRol.php");
include_once("../../../valid/bd/conexion.php");
$personaActual = $_POST['persona'];
$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$contra = sha1( $_POST['password']);
$actua = $_POST['actualizacion'];
$rol = $_POST['rol'];

//nos conectamos con la bd y hacemos el udpate
$bd = new Conexion();
$link = $bd->conectar();

$empresa = "'".$_POST['empresa']."'";
if($_POST['empresa'] === 'ninguna'){
  $empresa = "null";
}

$consulta = "update pasajero set usuario='".$usuario."', nombre ='".$nombre."', correo='".$correo."' , password='".$contra."', rol='".$rol."', nit_empresa = ".$empresa." where usuario='".$personaActual."'";

$resultado = mysqli_query($link, $consulta);

$bd->desconectar();

if ($resultado == 0){
  $_SESSION['mensaje'] = "Algo ha salido mal";
  $_SESSION['tipo'] = 'error';
  header('Location: /stopbus/app/admin/persona/registro.php');

} else {
  $_SESSION['mensaje'] = "El usuario " . $usuario . " ha sido actualizado correctamente";
  $_SESSION['tipo'] = 'success';
  header('Location: /stopbus/app/admin/persona/');

}
?>
