<?php
  session_start();
  if(isset($_SESSION['nombre'])){
      if($_SESSION['rol'] == 'admin'){
        header("Location: /stopbus/app/admin/");
      }else{
        header("Location: /stopbus/app/usuario/");
      }
  }
?>
