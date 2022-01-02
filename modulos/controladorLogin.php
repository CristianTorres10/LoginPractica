<?php

	require_once '../clases/Login.php';
	$usuario=$_POST['usuario'];
	$pass=$_POST['pass'];

	$login=new Login($usuario,$pass);

	$login->validar();

	if (@$_SESSION['validada']=='SI') {
		header("location: ../index.php");
	}else {
		echo '
		<script>
			window.location.href="../index.php";
			alert("usuario o contraseña invalidos");
		</script>';
	}

?>