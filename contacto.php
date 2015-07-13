<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/css/estilos.css">
	<link rel="shortcut icon" type="text/css" href="public/imagenes/icono.ico">
	<link rel="stylesheet" type="text/css" href="public/dist/sweetalert.css">
	<title>Contacto</title>
</head>
<body>
	<!-- HEADER -->
	<?php include('plantillas/header.html'); ?>

	<!--Aqui va el jumbotron-->

	<section class="jumbotron">
		<div class="container">
			<h1 class="titulo-blog" id="algo">
				Contactanos
			</h1>

		</div>
	</section>

	<section class="main container">
		<div class="row">

			<section class="posts col-lg-5 col-md-6">
				<form id="contact_form" action="plantillas_php/enviar_correo.php" method="POST" enctype="multipart/form-data">
					<div>
						<label for="name">Tu nombre:</label><br>
						<input id="name" class="input col-xs-12" name="name" type="text" value="" size="69" required/><br>
					</div>
					<div>
						<label for="email">Tu email:</label><br>
						<input id="email" class="input col-xs-12" name="email" type="email" value="" size="69" required/><br><br>
					</div>
					<div>
						<label for="message">Tu mensaje:</label><br>
						<textarea id="message" class="input row-caja col-xs-12" name="message" rows="7" cols="70" required></textarea><br>
					</div>
					<input id="submit_button" type="submit" value="Enviar email" />
				</form>
			</section>

			<section class=" margin-left-small posts col-lg-5 col-md-6">
				<a id="logo" href="index.php" class="thumb pull-left">
						<img src="public/imagenes/logo.png" alt="imagen1" width="300" draggable="false">
					</a>
			</section>



		</div>
	</section>



	<!-- footer -->
	<?php include('plantillas/footer.html'); ?>

	<script src="public/js/jquery-1.11.3.min.js"> </script>
	<script src="public/js/bootstrap.min.js"></script>
	<script src="public/js/mais.js"></script>


</body>
</html>
