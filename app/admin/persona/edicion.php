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


          <!-- ACA EMPIEZA EL FORMULARIO DE EDICION-->
          <div class="row">
            <h4 class="center-align">Editar persona</h4>
            <form method="post" action="editar.php" class="col s12">
              <div class="row">
                <div class="input-field col s6 offset-s3">
                  <select name="persona">
                    <!-- llenarlos con la consulta-->
                    <?php
                    $consulta = "SELECT * from pasajero";
                    $resultado = mysqli_query($link, $consulta);

                    $c1 = 0;
                    while($fila = mysqli_fetch_array($resultado)){
                      echo '<option value="'.$fila['usuario'].'">'.$fila['nombre'].'</option>';
                    $c1++;
                    }
                    if($c1 == 0){
                      echo '<option value="">No hay personas</option>';
                    }
                    ?>
                    <!-- fin de llenado -->
                  </select>
                  <label>Persona</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s6 offset-s3">
                  <select name="empresa">
                    <option value="ninguna">No pertenece a ninguna empresa</option>
                    <?php
                    $consulta = "SELECT * from empresa";
                    $resultado = mysqli_query($link, $consulta);

                    $c2 = 0;
                    while($fila = mysqli_fetch_array($resultado)){
                      echo '<option value="'.$fila['nit'].'">'.$fila['nombre'].'</option>';
                    $c2++;
                    }
                    if($c2 == 0){
                      echo '<option value="">No hay empersas</option>';
                    }
                    ?>
                    <!-- fin de llenado -->
                  </select>
                  <label>Empresa</label>
                </div>
              </div>


              <div class="row">
                <div class="input-field col s4">
                  <i class="material-icons prefix">person_pin</i>
                  <input id="e_usuario" type="text" class="validate" required name="usuario">
                  <label for="text">Usuario</label>
                </div>
                <div class="input-field col s4">
                  <i class="material-icons prefix">textsms</i>
                  <input id="e_nombre" type="text" class="validate" required name="nombre">
                  <label for="text">Nombre</label>
                </div>
                <div class="input-field col s4">
                  <i class="material-icons prefix">email</i>
                  <input id="e_correo" type="email" class="validate" required name="correo">
                  <label for="text">Correo</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s4">
                  <i class="material-icons prefix">vpn_key</i>
                  <input id="e_contra" type="password" class="validate" required name="password">
                  <label for="text">Contraseña</label>
                </div>
                
                <div class="input-field col s4">

                  <select name="rol" id="e_rol">
                    <option value="admin">Administrador</option>
                    <option value="usuario">Usuario</option>
                  </select>
                  <label for="text">Rol</label>
                </div>

              </div>


              <div class="row">
                <div class="col s4 offset-s5">
                  <?php

                  if ($c1 == 0){
                      echo '<a class="btn disabled">Enviar</a>';
                  }else{
                      echo '<button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                            </button>';
                  }

                  ?>



                </div>
              </div>
            </form>
          </div>
          <!--ACA SE ACABA EL FORMULARIO EDICION -->

          <div class="divider">  </div>
          <!-- ACA EMPIEZA EL FORMULARIO ELIMINAR -->
          <div class="row">
            <h4 class="center-align">Eliminar persona</h4>
            <form method="post" action="eliminar.php" class="col s12">
              <div class="row">
                <div class="input-field col s6 offset-s3">
                  <select name="persona">
                    <!-- llenarlos con la consulta-->
                    <?php
                    $consulta = "SELECT * from pasajero";
                    $resultado = mysqli_query($link, $consulta);

                    $cont = 0;
                      while($fila = mysqli_fetch_array($resultado)){
                      echo '<option value="'.$fila['usuario'].'">'.$fila['nombre'].'</option>';
                      $cont++;
                    }

                    if($cont == 0){
                      echo '<option value="">No hay personas</option>';
                    }

                    $bd->desconectar();
                    ?>
                    <!-- fin de llenado -->
                  </select>
                  <label>Persona</label>
                </div>
              </div>
              <div class="row">
                <div class="col s4 offset-s5">
                  <?php
                  if($cont == 0){
                      echo '<a class="btn disabled">Eliminar</a>';
                    }else{
                      echo ' <button class="btn waves-effect waves-light" type="submit" name="action">Eliminar
                            </button>';
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
