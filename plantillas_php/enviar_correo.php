<?php
session_start();
/*DATOS DEL USUARIO*/
$nombre = $_POST['name'];
$email = $_POST['email'];

$para      = 'mibobrek@gmail.com';
$titulo    = 'contacto StopBus';

$mensaje = "Correo de contacto StopBus \r\n";
$mensaje .= "Nombre: ".$nombre."\r\n";
$mensaje .= "Email: ".$email."\r\n";
$mensaje .= "Mensaje: \r\n".$_POST['message'];

$cabeceras = 'From: StopBus contacto <cristhian.leonlizarazo@gmail.com>' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if(mail($para, $titulo, $mensaje, $cabeceras)){
  $_SESSION['mensaje'] = "Gracias!!. Mensaje enviado correctamente.";
  $_SESSION['tipo'] = "success";
  header('Location: /stopbus/');
}else{
  $_SESSION['mensaje'] = "Lo sentimos!!. Algo ha fallado, intentalo nuevamente.";
  $_SESSION['tipo'] = "error";
  header('Location: /stopbus/');
}

?>
