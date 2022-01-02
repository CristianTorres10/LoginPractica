<?php

class conexion {
	//atributos
	private $host;
	private $user;
	private $pass;
	private $bd;
	private $con;

	//metodos
	public function __construct(){
		$this->host="localhost";
		$this->user="root";
		$this->pass="";
		$this->bd="practica";

		$this->con=mysqli_connect($this->host,$this->user,$this->pass,$this->bd);
		if($this->con)
			mysqli_select_db($this->con,$this->bd);
			$this->con->set_charset("UTF8");
	}

	public function consultaRetorno($sql){
		$consulta=mysqli_query($this->con,$sql);

		return $consulta;
	}
	public function consultaSimple($sql){
		$consulta=mysqli_query($this->con,$sql);
	}
}

?>