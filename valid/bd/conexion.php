<?php
 class Conexion{
	private $host = "localhost";
	private $usuario = "root";
	private $bd = "stopbus";
	private $pass = "";
	private $link;

	public function conectar(){

		$link = mysqli_connect($this->host,$this->usuario, $this->pass, $this->bd) or die("Error conexion " . mysqli_error($link));
		$this->link = $link;
		return $this->link;

	}

	public function desconectar(){

		mysqli_close($this->link);

	}
}
?>
