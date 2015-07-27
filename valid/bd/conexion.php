<?php
 class Conexion{
	private $host = "sandbox2.ufps.edu.co";
	private $usuario = "ufps_61";
	private $bd = "ufps_61";
	private $pass = "ufps_90";
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
