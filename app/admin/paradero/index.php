<?php
  //VALIDACION DEL ROL
  include("../../../valid/validacionRol.php");
?>

<!DOCTYPE html>
<html>
  <!-- HEAD -->
  <?php include("../../../plantillas/head.html"); ?>

<body>
  <!-- BARRA DE NAVEGACION -->
 <?php include ("../../../plantillas/navbar.html");?>

  <main>
   <!--CONTENIDO DE LA PAGINA  -->
   <div class="container">
     <div class="row contenedor">
       <div class="col s12">
         <h4 class="center-align">Paraderos</h4>
         <div class="listaParadero">
           <div class="listaRutas">
            <!-- ESTA ES LA LISTA DE LAS EMPRESAS -->
            <ul class="collapsible" data-collapsible="accordion">
              <!--este li es el que siemore se repite para todas las empresas-->
              <?php 
              include_once("../../../valid/bd/conexion.php");
              $bd = new Conexion();
              $link = $bd->conectar();

              $consulta = "SELECT * from paradero";
              $resultado = mysqli_query($link, $consulta);
              $cont = 0;
              while($fila = mysqli_fetch_array($resultado)){
               echo ' <li>
               <div class="collapsible-header active"><i class="material-icons">business</i>'.$fila["nombre"].'</div>
               <div class="collapsible-body">
               <p>
               <b>Paradero No: </b> '.$fila['id_paradero'].'<br>
               <b>Nombre: </b> '.$fila['nombre'].'<br>
               <b>Direccion: </b> '.$fila['direccion'].'<br>
               <b>Latitud: </b> '.$fila['latitud'].'<br>
               <b>Longitud: </b> '.$fila['longitud'].'<br>
               </p>
               </div>
               </li>';
               $cont++;
             }

             if($cont == 0){
              echo ' <li>
              <div class="collapsible-header active"><i class="material-icons">filter_drama</i>No hay paraderos aun</div>
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
