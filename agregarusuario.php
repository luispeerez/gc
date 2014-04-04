<?php include('headerAdmin.php'); ?>

	<h1>Agregar usuario</h1>
	<form action="/controladores/addusuario.php" method="POST">
		<div class="row">
			<div class="col-lg-5">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Nombre de usuario" name="nombreUsuario">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-5">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Contraseña de usuario" name="contrasenaUsuario">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-5">
				<div class="form-group">
					<select name="tipoUsuario">
						<option value="administrador">Administrador</option>
						<option value="colaborador">Colaborador</option>
					</select>
				</div>
			</div>
		</div>
		<button type="submit" class="btn btn-default">Agregar usuario</button>
	</form>

<?php include('footerAdmin.php'); ?>