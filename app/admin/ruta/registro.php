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
    <div class="row margen-admin">
      <div class="col s12">
        <div class="row">
          <form id="registro" action="registrar.php" method="post">
            <h4 class="center-align titulo">Registrar rutas</h4>

            <div class="row">
                <div class="input-field col s8 offset-s2">
                  <i class="material-icons prefix">forward_5</i>
                  <input id="re_email" type="text" class="validate" name="id_ruta" required>
                  <label for="text">Ruta No</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s8 offset-s2">
                  <i class="material-icons prefix">textsms</i>
                  <input id="re_email" type="text" class="validate" name="nombre" required>
                  <label for="text">Nombre</label>
                </div>
              </div>

               <div class="row">
                <div class="input-field col s6 offset-s5">
                  <button class="btn waves-effect waves-light" type="submit" name="action">Registrar
                  </button>
                </div>
              </div>

            </form>
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



