<?php
  include('valid/validacion.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/css/estilos.css">
	<link rel="shortcut icon" type="text/css" href="public/imagenes/icono.ico">
	<link rel="stylesheet" type="text/css" href="public/dist/sweetalert.css">
	<link rel="stylesheet" href="public/css/guia_rapida/animate.css">
	<title>..::StopBus::..</title>
</head>
<body>
	<!-- HEADER -->
	<?php include('plantillas/header.html'); ?>
	
	<!-- JUMBOTRON -->
	<section class="jumbotron">
		<div class="container">
			<h1 class="titulo-blog" id="algo">
				Bienvenido
			</h1>

		</div>
	</section>

	<!-- SECCION MAIN -->
	<section class="main container">
		<div id="melocoton" class="row">
			<section class="posts col-md-8" >

				<article class="post clearfix">
					<a id="logo" class="thumb pull-left">
						<img class="animated zoomIn" src="public/imagenes/logo.png" alt="imagen1" draggable="false">
					</a>
					<h2 class="post-title text-center">
						APLICACIÓN MÓVIL APOYADA EN GEO-REFERENCIACIÓN QUE PERMITA OPTIMIZAR EL USO DEL TRANSPORTE PÚBLICO EN LA CIUDAD DE CÚCUTA (STOPBUS).
					</h2>
					
					<p class="post-contenido text-center">El sistema de transporte público es un instrumento primordial en cualquier tipo de población que es accesible para los diferentes desplazamientos en la vida cotidiana de las personas que usan el servicio. Con la aplicación móvil STOPBUS se pretende mantener informados y actualizados a todos los usuarios del transporte público en la ciudad de Cúcuta, mostrando datos de interés acerca de los itinerarios que realizan los vehículos con respecto a la persona que desee tomar el servicio.
					</p>
				</article>


			</section>

<div class="col-md-1"></div>
			
			<aside id="amor" class="col-md-3">
				<div id="wrapper" class="wrap">
					<section id="cuerpo">
						<h2><span class="glyphicon glyphicon-user"></span></h2>

						<form id="login" action="app/login.php" method="post">
							<input id="user" type="text" name="nombreuser" placeholder="Usuario" required>
							<input id="contra" type="password" name="contra" placeholder="Contraseña" required >
							<input  type="submit" value="Ingresar" id="boton" >
							<!--<p id="registro" class="text-center"><a href="registro.php">Registrarse</a></p>-->
						</form>
					</section>
				</div>
			</aside>


		</div>
	</section>
	
	<!-- FOOTER -->
	<?php include('plantillas/footer.html'); ?>

	<script src="public/js/jquery-1.11.3.min.js"> </script>
	<script src="public/js/bootstrap.min.js"></script>
	<script src="public/js/mais.js"></script>
	<script src="public/dist/sweetalert.min.js"></script>
<?php
include("plantillas_php/alerta.php");
?>
</body>
</html>