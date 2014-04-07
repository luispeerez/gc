<?php include('headerAdmin.php'); ?>

	<h1>Nueva noticia</h1>
	<form action="/controladores/addpost.php" method="POST">
		<div class="row">
			<div class="col-lg-7">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Nombre del post" name="tituloNoticia">
				</div>
			</div>
		</div>
		<select name="tipoNoticia">
			<option value="noticia">Noticia</option>
			<option value="resena">Reseña</option>
			<option value="destacado">Destacado</option>
		</select>
		<textarea name="contenidoNoticia" id="newPost" cols="120" rows="10"></textarea>
		<button type="submit" class="btn btn-default">Crear noticia</button>
		<input type="hidden" name="autor" value="<?php echo $usuarioActivo; ?>">
	</form>

<?php include('footerAdmin.php'); ?>