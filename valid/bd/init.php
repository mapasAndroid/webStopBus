<?php

//include('../validacionRol.php');
include_once("conexion.php");
$bd = new Conexion();
$link = $bd->conectar();

$tabla="CREATE TABLE empresa
(
	nit varchar (30),
	nombre varchar (150) NOT NULL,
	direccion varchar (150) NOT NULL,
	telefono varchar (20) NOT NULL,
	PRIMARY KEY (nit)
	)ENGINE = InnoDB;";
$var = mysqli_query($link, $tabla);
if($var){
	echo "empresa creada correctamente <br>";
}else{
	echo "empresa error <br>";
}


$tabla = "CREATE TABLE pasajero
(
	usuario varchar (20) NOT NULL,
	nombre varchar (150) NOT NULL,
	correo varchar (150) NOT NULL,
	password varchar (45) NOT NULL,
	rol varchar (10) NOT NULL,
	nit_empresa varchar (30) NULL,
	PRIMARY KEY (usuario),
	FOREIGN KEY (nit_empresa) REFERENCES empresa (nit) ON DELETE SET NULL ON UPDATE CASCADE,
		UNIQUE KEY (correo)
	)ENGINE = InnoDB;";
$var = mysqli_query($link, $tabla);
if($var){
	echo "pasajero creada correctamente <br>";
}else{
	echo "pasajero error <br>";
}


$tabla="CREATE TABLE ruta
(
	id_ruta varchar (30),
	nombre varchar (150) NOT NULL,
	PRIMARY KEY (id_ruta)
	)ENGINE = InnoDB;";
$var = mysqli_query($link, $tabla);
if($var){
	echo "ruta creada correctamente <br>";
}else{
	echo "ruta error <br>";
}


$tabla="CREATE TABLE paradero
(
	id_paradero varchar (30),
	nombre varchar (150) NOT NULL,
	direccion varchar(200) NOT NULL,
	latitud varchar (40) NOT NULL,
	longitud varchar (40) NOT NULL,
	PRIMARY KEY (id_paradero)
	)ENGINE = InnoDB;";
$var = mysqli_query($link, $tabla);
if($var){
	echo "paradero creada correctamente <br>";
}else{
	echo "paradero error <br>";
}


$tabla="CREATE TABLE paraderoxruta
(
	id_paradero varchar (30),
	id_ruta varchar (30),
	PRIMARY KEY (id_paradero, id_ruta),
	FOREIGN KEY (id_paradero) REFERENCES paradero (id_paradero) ON DELETE CASCADE ON UPDATE CASCADE,
	FOREIGN KEY (id_ruta) REFERENCES ruta (id_ruta) ON DELETE CASCADE ON UPDATE CASCADE
	)ENGINE = InnoDB;";
$var = mysqli_query($link, $tabla);
if($var){
	echo "paraderoxruta creada correctamente <br>";
}else{
	echo "paraderoxruta error <br>";
}

$tabla="CREATE TABLE bus
(
	placa varchar (10),
	conductor varchar (150) NOT NULL,
	id_ruta varchar (80),
	nit varchar (30) NOT NULL,
	PRIMARY KEY (placa),
	FOREIGN KEY (id_ruta) REFERENCES ruta (id_ruta) ON DELETE SET NULL ON UPDATE CASCADE,
	FOREIGN KEY (nit) REFERENCES empresa (nit) ON DELETE CASCADE ON UPDATE CASCADE
	)ENGINE = InnoDB;";

$var = mysqli_query($link, $tabla);
if($var){
	echo "bus creada correctamente <br>";
}else{
	echo "bus error <br>";
}

$tabla="CREATE TABLE pasajeroxbus
(
	usuario varchar (20),
	placa varchar (10),
	fecha datetime,
	PRIMARY KEY (usuario, placa, fecha),
	FOREIGN KEY (usuario) REFERENCES pasajero (usuario) ON DELETE CASCADE ON UPDATE CASCADE,
	FOREIGN KEY (placa) REFERENCES bus (placa) ON DELETE CASCADE ON UPDATE CASCADE
	)ENGINE = InnoDB;";
$var = mysqli_query($link, $tabla);
if($var){
	echo "pasajeroxbus creada correctamente <br>";
}else{
	echo "pasajeroxbus error <br>";
}

$tabla="CREATE TABLE waypoints
(
	id_ruta varchar (30),
	latitud varchar (40),
	longitud varchar (40),
	PRIMARY KEY (id_ruta, latitud, longitud),
	FOREIGN KEY (id_ruta) REFERENCES ruta (id_ruta) ON DELETE CASCADE ON UPDATE CASCADE
	)ENGINE = InnoDB;";
$var = mysqli_query($link, $tabla);
if($var){
	echo "waypoints creada correctamente <br>";
}else{
	echo "waypoints error <br>";
}

mysqli_close($link);
?>
