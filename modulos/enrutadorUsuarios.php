<?php
	class enrutadorUsuarios{
		public function cargarVista($vista){
			if (@$_SESSION['validada']=="SI") {
				switch ($vista) {
					case 'registrarUsuarios':
						include_once('vistas/'.$vista.'.php');
						break;

					case 'editarUsuarios':
						include_once('vistas/'.$vista.'.php');
						break;

					case 'consultarUsuarios':
						include_once('vistas/'.$vista.'.php');
						break;

					case 'eliminarUsuarios':
						include_once('vistas/'.$vista.'.php');
						break;

					case 'cerrar':
						session_destroy();
						echo "<script>window.location='index.php';</script>";
						break;
				}
			}else{
				include_once('vistas/login.php');
			}
		}

		public function validarGet($variable){
			if (isset($variable)){
				return true;
			}else{
				if (@$_SESSION['validada']=="SI")
					include_once('index.php');
					//esta es la pagina que se vera al iniciar sesion
				else
					include_once('vistas/login.php');
			}
		}
	}
?>