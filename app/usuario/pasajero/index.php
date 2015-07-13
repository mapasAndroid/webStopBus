<?php
  //VALIDACION DEL ROL
include("../../../valid/validacionUser.php");
?>

<!DOCTYPE html>
<html>
<!-- HEAD -->
<?php include("../../../plantillas/headUser.html"); ?>

<body>
	<!-- BARRA DE NAVEGACION -->
	<?php include ("../../../plantillas/navbarUser.html");?>

	<main>
		<!--CONTENIDO DE LA PAGINA  -->
		<div class="container">
			<div class="row contenedor">
				<div class="col s12">
					<h4 class="center-align">Actividad de la aplicaci&oacute;n</h4>
					<div class="listaEmpresas">
						<!-- ESTA ES LA LISTA DE LAS EMPRESAS -->

						
						<table class="centered striped">
							<thead>
								<tr>
									<th data-field="usuario">Usuario</th>
									<th data-field="nombre">Nombre</th>
									<th data-field="placa">Placa</th>
									<th data-field="conductor">Conductor</th>
									<th data-field="fecha">Fecha</th>
								</tr>
							</thead>

							<tbody>
								<?php 
								include_once("../../../valid/bd/conexion.php");
								$bd = new Conexion();
								$link = $bd->conectar();

								$consulta = "SELECT p.usuario, p.nombre, b.placa, b.conductor, o.fecha from pasajero as p, bus as b, pasajeroxbus as o where p.usuario = o.usuario and b.placa = o.placa";
								$resultado = mysqli_query($link, $consulta);
								$bd->desconectar();

								while($fila = mysqli_fetch_array($resultado)){
									echo "<tr>
									<td> ".$fila['usuario']." </td>
									<td> ".$fila['nombre']." </td>
									<td> ".$fila['placa']." </td>
									<td> ".$fila['conductor']." </td>
									<td> ".$fila['fecha']." </td>
									</tr>";
								}

								?>
							</tbody>
						</table>
					</div>
					
				</div>
			</div>
		</div>
</main>



<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../../../public/js/materialize.min.js"></script>
<script src="../../../public/dist/sweetalert.min.js"></script>
<script> 
$(document).ready(function(){
	$(".button-collapse").sideNav();

	$('.collapsible').collapsible({
      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
  });
});
</script>
<?php
include("../../../plantillas_php/alerta.php");
?>
</body>
</html>
