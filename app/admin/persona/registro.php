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
            <h4 class="center-align titulo">Registrar persona</h4>

             <?php 
              include_once("../../../valid/bd/conexion.php");
              $bd = new Conexion();
              $link = $bd->conectar();
            ?>


             <div class="row">
                <div class="input-field col s7 offset-s3">
                  <select name="empresa">
                    <option value="ninguna">No pertenece a ninguna empresa</option>
                   <?php 
                    $consulta = "SELECT * from empresa";
                    $resultado = mysqli_query($link, $consulta);

                    $contador = 0;
                    while($fila = mysqli_fetch_array($resultado)){
                      echo '<option value="'.$fila['nit'].'">'.$fila['nombre'].'</option>';
                    $contador++;
                    }
                    if($contador == 0){
                      echo '<option value="">No hay empresas</option>';
                    }
                    ?>
                  </select>
                  <label>Empresa</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s7 offset-s3">
                  <select name="rol">
                   <option value="admin">Adminsitrador</option>
                   <option value="usuario">Usuario Basico</option>
                  </select>
                  <label>Rol</label>
                </div>
              </div>


              <div class="row">
                <div class="input-field col s8 offset-s2">
                  <i class="material-icons prefix">person_pin</i>
                  <input id="re_usuario" type="text" class="validate" name="usuario" required>
                  <label for="text">Usuario</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s8 offset-s2">
                  <i class="material-icons prefix">textsms</i>
                  <input id="re_nombre" type="text" class="validate" name="nombre" required>
                  <label for="text">Nombre</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s8 offset-s2">
                  <i class="material-icons prefix">email</i>
                  <input id="re_email" type="text" class="validate" name="email" required>
                  <label for="text">Email</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s8 offset-s2">
                  <i class="material-icons prefix">vpn_key</i>
                  <input id="re_contra" type="text" class="validate" name="contra" required>
                  <label for="text">Contraseña</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s6 offset-s5">
                  <button class="btn waves-effect waves-light" type="submit" name="action">Registrar
                  </button>
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
  $('select').material_select();
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



