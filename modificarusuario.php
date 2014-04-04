<?php include('headerAdmin.php');

if(isset($_GET['id_usuario'])){
  $idUsuario = $_GET['id_usuario'];
  $db = new Conexion();
  $rs = $db->makeQuery("SELECT *FROM usuario WHERE id_usuario=".$idUsuario." LIMIT 1");
  while($reg = $db->makeArray($rs)){
	  $nombreUsuario = $reg['nombre_usuario'];
	  $contrasenaUsuario = $reg['contrasena'];
	  $tipoUsuario = $reg['tipo_usuario'];
  }
}
?>

	<h1>Modificar información de usuario</h1>
	<form action="/controladores/addusuario.php" method="POST">
		<div class="row">
			<div class="col-lg-5">
				<div class="form-group">
					<input type="text" class="form-control" value="<?php echo $nombreUsuario; ?>" placeholder="Nombre de usuario" name="nombreUsuario">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-5">
				<div class="form-group">
					<input type="text" class="form-control" value="<?php echo $contrasenaUsuario; ?>" placeholder="Contraseña de usuario" name="contrasenaUsuario">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-5">
				<div class="form-group">
					<select name="tipoUsuario" value="<?php echo $tipoUsuario; ?>">
						<option value="administrador">Administrador</option>
						<option value="colaborador">Colaborador</option>
					</select>
				</div>
			</div>
		</div>
		<button type="submit" class="btn btn-default">Editar usuario</button>
	</form>

<?php include('footerAdmin.php'); ?>