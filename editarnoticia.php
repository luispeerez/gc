<?php 
include('headerAdmin.php'); 
include('controladores/encriptador.php');

if(isset($_GET['id_noticia'])){
  $idNoticia = $_GET['id_noticia'];
  $db = new Conexion();
  $rs = $db->makeQuery("SELECT *FROM noticia WHERE id_noticia=".$idNoticia." LIMIT 1");
  while($reg = $db->makeArray($rs)){
	  $tituloNoticia = $reg['titulo_noticia'];
	  $tipoNoticia = $reg['tipo_noticia'];
	  $contenidoNoticia = $reg['contenido_noticia'];
	  $contenidoNoticia = desencriptarMensaje($contenidoNoticia);
	  $fecha = $reg['fecha'];
	  $autor = $reg['autor'];
  }
}
?>

	<h1>Editar noticia</h1>
	<form action="/controladores/editpost.php" method="POST">
		<div class="row">
			<div class="col-lg-7">
				<div class="input-group">
					<span class="input-group-addon">@</span>
					<input type="text" class="form-control" placeholder="Nombre del post" name="tituloNoticia" value="<?php echo $tituloNoticia; ?>">
				</div>
			</div>
		</div>
		<select name="tipoNoticia" value="<?php echo $tipoNoticia ?>">
			<option value="noticia">Noticia</option>
			<option value="resena">Reseña</option>
			<option value="destacado">Destacado</option>
		</select>
		<textarea name="contenidoNoticia" id="newPost" cols="120" rows="10"><?php echo $contenidoNoticia ?></textarea>
		<input type="hidden" name="fecha" value="<?php echo $fecha ?>">
		<input type="hidden" name="autor" value="<?php echo $autor ?>">
		<input type="hidden" name="idNoticia" value="<?php echo $idNoticia ?>">
		<button type="submit" class="btn btn-default">Editar noticia</button>
	</form>

<?php include('footerAdmin.php'); ?>