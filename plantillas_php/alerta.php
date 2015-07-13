<?php 
if(isset($_SESSION['mensaje'])){
	$tipo = $_SESSION['tipo'];
	$titulo = "";
	switch ($tipo) {
		case 'error':
			$titulo = "Error";
			break;
		case 'success':
			$titulo = "Correcto";
			break;
	}
  echo "<script>sweetAlert('".$titulo."', '".$_SESSION['mensaje']."', '".$_SESSION['tipo']."');</script>";
  unset($_SESSION['mensaje']); 
}
?>