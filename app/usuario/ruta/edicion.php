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

   <!-- antes del formulario, hacemos la consulta de las empersas nuevamente-->
   <?php 
   include_once("../../../valid/bd/conexion.php");
   $bd = new Conexion();
   $link = $bd->conectar();
   ?>
   <!--termino de hacer la consulta-->


   <!-- ACA EMPIEZA EL FORMULARIO DE EDICION-->
   <div class="container">
    <div class="row margin-edit">
      <div class="col s12">
        <div class="row">
          <form method="post" action="editar.php" class="col s12 ">
            <h4 class="center-align titulo">Editar ruta</h4>

            <div class="row">
              <div class="input-field col s8 offset-s2">
                <select name="ruta">
                  <!-- llenarlos con la consulta-->
                  <?php 
                  $consulta = "SELECT * from ruta";
                  $resultado = mysqli_query($link, $consulta);

                  $contador = 0;
                  while($fila = mysqli_fetch_array($resultado)){
                    echo '<option value="'.$fila['id_ruta'].'">'.$fila['nombre'].'</option>';
                    $contador++;
                  }
                  if($contador == 0){
                    echo '<option value="">No hay rutas</option>';
                  }
                  ?>
                  <!-- fin de llenado -->
                </select>
                <label>Ruta</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s6">
                <i class="material-icons prefix">forward_5</i>
                <input id="nit" type="text" class="validate" required name="id_ruta">
                <label for="text">Ruta No</label>
              </div>
              <div class="input-field col s6">
                <i class="material-icons prefix">textsms</i>
                <input id="nombre" type="text" class="validate" required name="nombre">
                <label for="text">Nombre</label>
              </div>
            </div>

            
            <div class="row">
              <div class="col s4 offset-s4">
                <div class="col boton-formulario-editar s12">
                  <?php 

                  if ($contador == 0){
                    echo '<a class="btn disabled">Enviar</a>';
                  }else{
                    echo '<button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                    <i class="material-icons">send</i>
                    </button>';
                  }

                  ?>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--ACA SE ACABA EL FORMULARIO EDICION -->

  <div class="divider">  </div>
  <!-- ACA EMPIEZA EL FORMULARIO ELIMINAR -->
  <div class="container">
    <div class="row">
      <div class="col s12">
        <form method="post" action="eliminar.php" class="col s12 ">
          <div class="row">
            <h4 class="center-align titulo">Eliminar ruta</h4>
            <div class="input-field col s8 offset-s2">
              <select name="ruta">
                <!-- llenarlos con la consulta-->
                <?php 
                $consulta = "SELECT * from ruta";
                $resultado = mysqli_query($link, $consulta);

                $cont = 0;  
                while($fila = mysqli_fetch_array($resultado)){
                  echo '<option value="'.$fila['id_ruta'].'">'.$fila['nombre'].'</option>';
                  $cont++;
                }

                if($cont == 0){
                  echo '<option value="">No hay rutas</option>';
                }

                $bd->desconectar();
                ?>
                <!-- fin de llenado -->
              </select>
              <label>Ruta</label>
            </div>
          </div>

          <div class="row">
            <div class="col s4 offset-s4">
              <div class="col boton-formulario-editar s12">
                <?php 
                if($cont == 0){
                  echo '<a class="btn disabled">Eliminar</a>';
                }else{
                  echo ' <button class="btn waves-effect waves-light" type="submit" name="action">Eliminar
                  <i class="material-icons">send</i>
                  </button>';
                }
                ?>
              </div>
            </div>
          </div>
        </form>
      </div>
      <!--ACA SE ACABA EL FORMULARIO -->


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
