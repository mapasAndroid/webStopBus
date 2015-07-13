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
         <h4 class="center-align">Rutas</h4>
         <div class="listaRutas">
           <div class="listaRutas">
            <!-- ESTA ES LA LISTA DE LAS EMPRESAS -->
            <ul class="collapsible" data-collapsible="accordion">
              <!--este li es el que siemore se repite para todas las empresas-->
              <?php 
              include_once("../../../valid/bd/conexion.php");
              $bd = new Conexion();
              $link = $bd->conectar();

              $consulta = "SELECT * from ruta";
              $resultado = mysqli_query($link, $consulta);
              $cont = 0;
              while($fila = mysqli_fetch_array($resultado)){
               echo ' <li>
               <div class="collapsible-header active"><i class="material-icons">business</i>'.$fila["nombre"].'</div>
               <div class="collapsible-body">
               <p>
               <b>Ruta No: </b> '.$fila['id_ruta'].'<br>
               <b>Nombre: </b> '.$fila['nombre'].'
               </p>
               </div>
               </li>';
               $cont++;
             }

             if($cont == 0){
              echo ' <li>
              <div class="collapsible-header active"><i class="material-icons">filter_drama</i>No hay rutas aun</div>
              </li>';
            }

            $bd->desconectar();
            ?>
            
          </ul>
        </div>
        <div class="row margin-top-small">
          <div class="col s4 offset-s4">
            <div class="row">
              <div class="col boton-formulario-editar s12">
                <a href="registro.php" class="waves-effect waves-light btn">Registrar</a>
              </div>
            </div>
            <div class="row">
              <div class="col boton-formulario-editar s12">
                <a href="edicion.php" class="waves-effect waves-light btn">Editar</a>
              </div>
            </div>
          <div class="row">
          <div class="col boton-formulario-editar s12">
            <a class="waves-effect waves-light btn" href="adicionParaderos.php"><i class="material-icons left"></i>Paraderos</a>
          </div>
          </div>
          </div>
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
