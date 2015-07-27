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
            <h4 class="center-align titulo">Editar paradero</h4>

            <div class="row">
              <div class="input-field col s8 offset-s2">
                <select name="paradero">
                  <!-- llenarlos con la consulta-->
                  <?php 
                  $consulta = "SELECT * from paradero";
                  $resultado = mysqli_query($link, $consulta);

                  $contador = 0;
                  while($fila = mysqli_fetch_array($resultado)){
                    echo '<option value="'.$fila['id_paradero'].'">'.$fila['id_paradero']." - ".$fila['nombre'].'</option>';
                    $contador++;
                  }
                  if($contador == 0){
                    echo '<option value="">No hay paraderos</option>';
                  }
                  ?>
                  <!-- fin de llenado -->
                </select>
                <label>Paradero</label>
              </div>
            </div>


            <div class="input-field col s6">
              <i class="material-icons prefix">payment</i>
              <input id="paradero" type="text" class="validate" required name="id_paradero">
              <label for="text">Id</label>
            </div>
            
            <div class="input-field col s6">
              <i class="material-icons prefix">textsms</i>
              <input id="nombre" type="text" class="validate" required name="nombre">
              <label for="text">Nombre</label>
            </div>

            <div class="row">
              <div class="input-field col s8 offset-s2">
                <i class="material-icons prefix">business</i>
                <input id="r_direccion" type="text" class="validate" name="direccion" required>
                <label for="text">Direcci&oacute;n</label>
              </div>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix">my_location</i>
              <input id="latitud" type="text" class="validate" required name="latitud">
              <label for="text">Latitud</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix">my_location</i>
              <input id="longitud" type="text" class="validate" required name="longitud">
              <label for="text">Longitud</label>
            </div>

            <div class="row">
              <div class="col s5 offset-s4">
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
            <h4 class="center-align titulo">Eliminar paradero</h4>
            <div class="input-field col s8 offset-s2">
              <select name="paradero">
                <!-- llenarlos con la consulta-->
                <?php 
                $consulta = "SELECT * from paradero";
                $resultado = mysqli_query($link, $consulta);

                $cont = 0;  
                while($fila = mysqli_fetch_array($resultado)){
                  echo '<option value="'.$fila['id_paradero'].'">'.$fila['id_paradero']." - ".$fila['nombre'].'</option>';
                  $cont++;
                }

                if($cont == 0){
                  echo '<option value="">No hay paraderos</option>';
                }

                $bd->desconectar();
                ?>
                <!-- fin de llenado -->
              </select>
              <label>Paradero</label>
            </div>
          </div>

          <div class="row">
            <div class="col s5 offset-s4">
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
    </div>
  </div>
  <!--ACA SE ACABA EL FORMULARIO -->
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
