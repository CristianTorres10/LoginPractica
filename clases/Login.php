<?php

	require_once 'conexion.php';

	class Login {
		public function __construct($user,$contrasenia) {
			$this->user=$user;
			$this->contrasenia=$contrasenia;
		}

		public function validar (){
			$con = new conexion();
			$sql="select nombre from usuarios where pass='$this->contrasenia' and user='$this->user'";

				$res = $con->consultaRetorno($sql);

				while ($fila=mysqli_fetch_assoc($res)) {
					@session_start();
					$_SESSION['nombre']=$fila['nombre'];
					$_SESSION['user']=$this->user;
					$_SESSION['validada']="SI";
				}
		}
	}

?>