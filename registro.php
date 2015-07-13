
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/css/estilos.css">
	<link rel="shortcut icon" type="text/css" href="public/imagenes/icono.ico">
	<link rel="stylesheet" type="text/css" href="public/dist/sweetalert.css">
	<title>Registro</title>
</head>
<body>
	<!-- HEADER -->
	<?php include('plantillas/header.html'); ?>

	<!--Aqui va el jumbotron-->

	<section class="jumbotron">
		<div class="container">
			<h1 class="titulo-blog" id="algo">
				Registro
			</h1>
			
		</div>
	</section>

	<section class="main container">

		<div class="row">
			<aside id="r_registro" class="col-md-4 col-md-offset-4">
				<div id="wrapper" class="wrap">
					<section id="cuerpo">
						<h2><span class="glyphicon glyphicon-pencil"></span></h2>
						<form id="registro" action="app/registrar_usuario.php" method="post">

							<input id="r_usuario" type="text" name="usuario" placeholder="Usuario" required >

							<input id="r_nombrer" type="text" name="nombre" placeholder="Nombre" required >

							<input id="r_email" name="email" type="email" placeholder="Email" value="" size="69" required >

							<input id="r_contra" type="password" name="contra" placeholder="Contraseña" required >

							<input  type="submit" value="Registrar" id="boton" >
							
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