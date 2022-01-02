<?php

  session_start();
  include_once('modulos/controladorUsuarios.php');
  include_once('modulos/enrutadorUsuarios.php');

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="icon" href="assets/img/icono_login.ico">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Inicio de sesión para acceder al sistema de altas bajas y modificaciones">
    <title>Login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/icofont/icofont.min.css">
    <link rel="stylesheet" href="assets/estilos/style.css">
</head>
<body>
  <header>
    <?php if(@$_SESSION['validada'] == "SI") { ; ?>

      <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
			<a href="index.php" class="navbar-brand">Inico</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item dropdown active">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icofont-ui-user"></i> Usuario</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a href="#" class="dropdown-item"><?php echo $_SESSION['nombre']; ?></a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" style="cursor: pointer;" onclick="cerrar();">Cerrar sesi&oacute;n</a>
						</div>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Version 1.0</a>
					</li>
				</ul>
			</div>
		</nav>


    <?php } ?>
  </header>

    <section>
      <?php 
        $enrutadorUsuarios = new enrutadorUsuarios();
        if($enrutadorUsuarios->validarGET(@$_GET['cargar'])){
          $enrutadorUsuarios->cargarVista($_GET['cargar']);
        }
      ?>
    </section>
  <script src="assets/jquery/Jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/sweetalert/dist/sweetalert.min.js"></script>
  <script language='javascript'>
    	function cerrar(){
		swal({
			title: "¿QUIERE SALIR?",
			icon: "warning",
			buttons: true,
		})
		.then((value) => {
			if(value==true){
				window.location.href='?cargar=cerrar';
			} else {
				
				
			}
		});
	}
  </script>
</body>
</html>