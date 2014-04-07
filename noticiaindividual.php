<?php 
include("header.php"); 
include("clases/conexion.php");

if(isset($_GET['id_noticia'])){
  $idNoticia = $_GET['id_noticia'];
  $db = new Conexion();
  $rs = $db->makeQuery("SELECT *FROM noticia WHERE id_noticia=".$idNoticia." LIMIT 1");
  while($reg = $db->makeArray($rs)){
	  $tituloNoticia = $reg['titulo_noticia'];
	  $tipoNoticia = $reg['tipo_noticia'];
	  $contenidoNoticia = $reg['contenido_noticia'];
	  $fecha = $reg['fecha'];
	  $autor = $reg['autor'];
  }
}
?>

 	<div class="container">
 		<div class="review card">
	 		<div class="imagepost"><div class="overlay"></div><img src="img/gta.jpg" alt="Grand Theft Auto V"></div>
			<section class="singlepost">
		 		<div class="postTitle">
			 		<h2>Nuestra recomendacion</h2>
			 		<h1><?php echo $tituloNoticia ?></h1>
		 		</div>
				<p><?php echo $contenidoNoticia; ?></p>
				<div class="videobox"><div class="video_container"><iframe  src="//www.youtube.com/embed/N-xHcvug3WI" frameborder="0" allowfullscreen></iframe></div></div>
			</section>

			<div class="fb-comments" data-href="http://www.gc.com/" data-width="890" data-numposts="5" data-colorscheme="light"></div>
 		</div>
	</div>

<?php include("footer.php"); ?>


