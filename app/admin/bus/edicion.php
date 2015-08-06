<?php
  //VALIDACION DEL ROL
include("../../../valid/validacionRol.php");
?>

</div>
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

          <!-- antes del formulario, hacemos la consulta de las empersas nuevamente-->
          <?php
          include_once("../../../valid/bd/conexion.php");
          $bd = new Conexion();
          $link = $bd->conectar();
          ?>
          <!--termino de hacer la consulta-->


          <!-- ACA EMPIEZA EL FORMULARIO DE REGISTRO-->
          <div class="row">
            <form method="post" action="editar.php" class="col s12">
              <h4 class="center-align">Editar bus</h4>

                <!--select para listar buses-->
              <div class="row">
                <div class="input-field col s6 offset-s3">

                  <select name="bus">
                    <!-- llenarlos con la consulta-->
                    <?php
                    $consulta = "SELECT * from bus";
                    $resultado = mysqli_query($link, $consulta);

                    $c1 = 0;
                    while($fila = mysqli_fetch_array($resultado)){
                      echo '<option value="'.$fila['placa'].'">'.$fila['placa']." - ".$fila['conductor'].'</option>';
                      $c1++;
                    }
                    if($c1 == 0){
                      echo '<option value="">No hay buses</option>';
                    }
                    ?>
                    <!-- fin de llenado -->
                  </select>
                  <label>Bus</label>
                </div>
              </div>

              <!--campos para placa y conductor-->

               <div class="row">
                <div class="input-field col s7 offset-s2">
                  <i class="material-icons prefix">sort_by_alpha</i>
                  <input id="re_placa" type="text" class="validate" name="placa" required>
                  <label for="text">Placa</label>
                </div>
              </div>

               <div class="row">
                <div class="input-field col s7 offset-s2">
                  <i class="material-icons prefix">person_pin</i>
                  <input id="r_conductor" type="text" class="validate" name="conductor" required>
                  <label for="text">Conductor</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s7 offset-s2">
                  <i class="material-icons prefix">person_pin</i>
                  <input id="r_pos_actual" type="text" class="validate" name="pos_actual" required>
                  <label for="text">Posicion Actual</label>
                </div>
              </div>


              <!--select de empresas-->
              <div class="row">
                <div class="input-field col s6 offset-s3">
                  <select name="empresa">
                    <!-- llenarlos con la consulta-->
                    <?php
                    $consulta = "SELECT * from empresa";
                    $resultado = mysqli_query($link, $consulta);

                    $c2 = 0;
                    while($fila = mysqli_fetch_array($resultado)){
                      echo '<option value="'.$fila['nit'].'">'.$fila['nombre'].'</option>';
                      $c2++;
                    }
                    if($c2 == 0){
                      echo '<option value="">No hay empresas</option>';
                    }
                    ?>
                    <!-- fin de llenado -->
                  </select>
                  <label>Empresa</label>
                </div>
              </div>

               <!--selec de las rutas-->
              <div class="row">
                <div class="input-field col s6 offset-s3">

                  <select name="ruta">
                    <!-- llenarlos con la consulta-->
                    <?php
                    $consulta = "SELECT * from ruta";
                    $resultado = mysqli_query($link, $consulta);

                    $c3 = 0;
                    while($fila = mysqli_fetch_array($resultado)){
                      echo '<option value="'.$fila['id_ruta'].'">'.$fila['id_ruta']." - ".$fila['nombre'].'</option>';
                      $c3++;
                    }
                    if($c3 == 0){
                      echo '<option value="">No hay rutas</option>';
                    }
                    ?>
                    <!-- fin de llenado -->
                  </select>
                  <label>Ruta</label>
                </div>
              </div>

              <div class="row">
                <div class="col s5 offset-s5">
                  <?php

                  if ($c1 == 0 || $c2 == 0 || $c3 == 0){
                    echo '<a class="btn disabled">Guardar</a>';
                  }else{
                    echo '
                    <button class="btn waves-effect waves-light" type="submit" name="action">Guardar
                    </button>
                    ';
                  }

                  ?>
                </div>
              </div>
            </form>
          </div>
          <!--ACA SE ACABA EL FORMULARIO -->

          <div class="divider">  </div>

          <!-- ACA EMPIEZA EL FORMULARIO DE ELIMINAR-->

           <div class="row">
            <form method="post" action="eliminar.php" class="col s12">
              <h4 class="center-align">Eliminar bus</h4>

          <div class="row">
                <div class="input-field col s6 offset-s3">

                  <select name="bus">
                    <!-- llenarlos con la consulta-->
                    <?php
                    $consulta = "SELECT * from bus";
                    $resultado = mysqli_query($link, $consulta);

                    $contador = 0;
                    while($fila = mysqli_fetch_array($resultado)){
                      echo '<option value="'.$fila['placa'].'">'.$fila['placa']." - ".$fila['conductor'].'</option>';
                      $contador++;
                    }
                    if($contador == 0){
                      echo '<option value="">No hay buses</option>';
                    }
                    ?>
                    <!-- fin de llenado -->
                  </select>
                  <label>Bus</label>
                </div>
              </div>



              <div class="row">
                <div class="col s5 offset-s5">
                  <?php

                  if ($contador == 0){
                    echo '<a class="btn disabled">Eliminar</a>';
                  }else{
                    echo '
                    <button class="btn waves-effect waves-light" type="submit" name="action">Eliminar
                    <i class="material-icons">send</i>
                    </button>
                    ';
                  }

                  ?>
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
