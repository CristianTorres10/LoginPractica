<body  id="login">
	<div class="container mt-5">
	<div class="d-flex justify-content-center h-100">
		<div class="card mt-5">
			<div class="card-header">
				<h3><center><i class="fas fa-user fa-2x"></i></center></h3>
			</div>
			<div class="card-body">
				<form action="modulos/controladorLogin.php" method="POST">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Usuario" name="usuario">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Contraseña" name="pass">
					</div>
					<center>
					<div class="form-group">
						<button type="submit" class="btn btn-success"><i class="fas fa-sign-in-alt"></i> Entrar</button>
					</div>
					</center>					
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center">
					<!-- Footer del card-->
				</div>
			</div>
		</div>
	</div>
</div>
</body>