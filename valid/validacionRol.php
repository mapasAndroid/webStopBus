<?php 
session_start();

if(isset($_SESSION['rol'])){
	if($_SESSION['rol'] != 'admin'){
		header("Location: /stopbus/app/".$_SESSION['rol']."/");
	}
}else{
	session_destroy();
	header("Location: /stopbus/");
}

?>