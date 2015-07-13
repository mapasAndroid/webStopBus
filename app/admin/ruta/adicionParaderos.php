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

         <div class="listaEmpresas">

          <!-- antes del formulario, hacemos la consulta de las empersas nuevamente-->
          <?php
          include_once("../../../valid/bd/conexion.php");
          $bd = new Conexion();
          $link = $bd->conectar();
          ?>
          <!--termino de hacer la consulta-->


          <!-- ACA EMPIEZA EL FORMULARIO AGREGAR-->
          <div class="row">
            <h4 class="center-align">Asignar Paradero</h4>
            <form method="post" action="agregarParaderos.php" class="col s12">
              <div class="row">
                <div class="input-field col s6 offset-s3">

                  <select name="ruta" id="selectAgregarRuta">
                    <!-- llenarlos con la consulta-->
                    <?php
                    $consulta = "SELECT * from ruta";
                    $resultado = mysqli_query($link, $consulta);

                    $c1 = 0;
                    while($fila = mysqli_fetch_array($resultado)){
                      echo '<option value="'.$fila['id_ruta'].'">'.$fila['id_ruta']." - ".$fila['nombre'].'</option>';
                      $c1++;
                    }
                    if($c1 == 0){
                      echo '<option value="">No hay rutas</option>';
                    }
                    ?>
                    <!-- fin de llenado -->
                  </select>
                  <label>Ruta</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s6 offset-s3 nene">

                  <select name="paradero" id="selectAgregarParadero">
                  <!-- LLENAR CNO JQAVASCRIPT -->
                  </select>
                  <label>Paradero</label>
                </div>
              </div>

              <div class="row">
                <div class="col s4 offset-s5">
                  <?php

                  if ($c1 == 0){
                    echo '<a class="btn disabled">Asignar</a>';
                  }else{
                    echo '
                    <button class="btn waves-effect waves-light" type="submit" name="action">Asignar
                    <i class="material-icons">send</i>
                    </button>
                    ';
                  }

                  ?>
                </div>
              </div>
            </form>
          </div>
          <!--ACA SE ACABA EL FORMULARIO AGREGAR -->

          <div class="divider">  </div>



          <!-- ACA EMPIEZA EL FORMULARIO ELIMINAR -->

          <div class="row">
            <h4 class="center-align">Remover Paradero</h4>
            <form method="post" action="removerParaderos.php" class="col s12">
              <div class="row">
                <div class="input-field col s6 offset-s3">
                  <select name="ruta" id="selectEliminarRuta">
                    <!-- llenarlos con la consulta-->
                    <?php
                    $consulta = "SELECT * from ruta";
                    $resultado = mysqli_query($link, $consulta);

                    $c1 = 0;
                    while($fila = mysqli_fetch_array($resultado)){
                      echo '<option value="'.$fila['id_ruta'].'">'.$fila['id_ruta']." - ".$fila['nombre'].'</option>';
                      $c1++;
                    }
                    if($c1 == 0){
                      echo '<option value="">No hay rutas</option>';
                    }
                    ?>
                    <!-- fin de llenado -->
                  </select>
                  <label>Ruta</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s6 offset-s3 nena">
                  <select name="paradero" id="selectEliminarParadero">
                  <!-- LLENAR CNO JQAVASCRIPT -->
                  </select>
                  <label>Paradero</label>
                </div>
              </div>
              <div class="row">
                <div class="col s4 offset-s5">
                  <?php

                  if ($c1 == 0){
                    echo '<a class="btn disabled">Remover</a>';
                  }else{
                    echo '
                    <button class="btn waves-effect waves-light" type="submit" name="action">Remover
                    <i class="material-icons">send</i>
                    </button>
                    ';
                  }
                  ?>
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

  $(".button-collapse").sideNav();
  $('.collapsible').collapsible({
    accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
  });
  $('select').material_select();

  cargarSelectEliminar($( "#selectEliminarRuta option:selected" ).val());
  cargarSelectAgregar($( "#selectAgregarRuta option:selected" ).val());

  $('#selectEliminarRuta').change(function(){
    cargarSelectEliminar($(this).val());
  });

  $('#selectAgregarRuta').change(function(){
    cargarSelectAgregar($(this).val());
  });


  function cargarSelectAgregar(value){
    $.get("../../../servicios/paraderos_no_x_ruta.php", { id_ruta : value },
      function(respuesta){
          var json = JSON.parse(respuesta);
          var model = $('#selectAgregarParadero');
          var x = "";
          var i = 0;
          $.each(json, function(index, element) {
            x += "<option value='"+(element[0])+ "'>" + (element[1]) + "</option>";
            i++;
          });
          if(i == 0){
            x = "<option value=''>No hay paraderos</option>";
          }
          model.html(x);
          $('#selectAgregarParadero').material_select();
          $('.nene > span:first').remove();

        });
  }

  function cargarSelectEliminar(value){
    $.get("../../../servicios/paraderos_de_x_ruta.php", { id_ruta : value },
      function(respuesta){
          var json = JSON.parse(respuesta);
          var model = $('#selectEliminarParadero');
          var x = "";
          var i = 0;
          $.each(json, function(index, element) {
            x += "<option value='"+(element[0])+ "'>" + (element[1]) + "</option>";
            i++;
          });
          if(i == 0){
            x = "<option value=''>No tiene paraderos</option>";
          }
          model.html(x);
          $('#selectEliminarParadero').material_select();
          $('.nena > span:first').remove();

        });
  }



});
</script>


<?php
include("../../../plantillas_php/alerta.php");
?>

</body>
</html>
