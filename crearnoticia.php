<?php include('headerAdmin.php'); ?>

	<h1>Nueva noticia</h1>
	<form action="/controladores/addpost.php" method="POST">
		<div class="row">
			<div class="col-lg-7">
				<div class="input-group">
					<span class="input-group-addon">@</span>
					<input type="text" class="form-control" placeholder="Nombre del post" name="tituloNoticia">
				</div>
			</div>
		</div>
		<select name="tipoNoticia">
			<option value="Tumama">Tumama</option>
			<option value="Tumama">Tumama</option>
			<option value="Tumama">Tumama</option>
		</select>
		<textarea name="contenidoNoticia" id="newPost" cols="120" rows="10"></textarea>
		<input type="submit" value="Crear noticia">
	</form>

<?php include('footerAdmin.php'); ?>