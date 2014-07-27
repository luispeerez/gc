<?php 
include("header.php");
include("clases/conexion.php");
include('controladores/encriptador.php');

?>
	<div class="container">
			<?php 
			$db = new Conexion();
			$rs = $db->makeQuery("SELECT *FROM noticia ORDER BY fecha DESC");
			$imagenes = array('img/gmc.png','img/gtavbg.png','img/titan.jpg');
			while($reg = $db->makeArray($rs)):
				$idNoticia = $reg['id_noticia'];
				$tituloNoticia = $reg['titulo_noticia'];
				$tipoNoticia = $reg['tipo_noticia'];
				$contenidoNoticia = $reg['contenido_noticia'];
				$contenidoNoticia = desencriptarMensaje($contenidoNoticia);
				$fecha = $reg['fecha'];
				$autor = $reg['autor'];
				if($tipoNoticia == 'destacado')
					$imagenPost = $imagenes[0];
				else if($tipoNoticia == 'resena')
					$imagenPost = $imagenes[1];
				else
					$imagenPost = $imagenes[2];
			?>
			<div class="news card">
				<div class="imagenews"><a href="noticiaindividual.php?id_noticia=<?php echo $idNoticia; ?>"><img src="<?php echo $imagenPost ?>" alt="GC" width= 180 height=110></a></div>
				<div class="text">
					<h2><a href="noticiaindividual.php?id_noticia=<?php echo $idNoticia; ?>"><?php echo $tituloNoticia; ?></a></h2>
					<h3><?php echo $fecha; ?> | Autor: <?php echo $autor; ?></h3>
					<p><?php echo $contenidoNoticia; ?></p>
				</div>
				<a class="<?php echo $tipoNoticia; ?> arrow" href="noticiaindividual.php?id_noticia=<?php echo $idNoticia; ?>"></a>
				<div class="clear"></div>
			</div>
		<?php	
		 	endwhile;
		?>
		<!--
		<div class="news card">
			<div class="imagenews"><img src="img/gmc.png" alt="GC" width= 180 height=110></div>
			<div class="text">
				<h2>El estelar del mes</h2>
				<h3>01-Abril-2014 | Autor: Redactor</h3>
				<p>Conoce nuestro novedoso sistema de trabajo y forma parte de la industria de los video juegos. Si deseas saber cómo, te recomendamos leer nuestra nota completa.</p>
			</div>
			<a class="destacado arrow" href="#"></a>
			<div class="clear"></div>
		</div>
		<div class="news card">
			<div class="imagenews"><img src="img/gtavbg.png" alt="GTA V" width= 180 height=110></div>
			<div class="text">
				<h2>La recomendación: Grand Theft Auto V</h2>
				<h3>02-Abril-2014 | Autor: Redactor</h3>
				<p>!La espera termino! Ya podemos disfrutar de la nueva entraga de Rock Star,</p>
				<p>sin lugar a dudas Grand Theft Auto V es el título más ambicioso de los</p>
				<p>últimos 7 años, la calidad gráfica, variedad de juego y...</p>
			</div>
			<a class="resena arrow" href="review.php"></a>
			<div class="clear"></div>
		</div>
		<div class="news card">
			<div class="imagenews"><img src="img/titan.jpg" alt="Titan" width= 180 height=110></div>
			<div class="text">
				<h2>La Xbox One con diseño de Titanfall no se comercializará.</h2>
				<h3>03-Abril-2014 | Autor: Redactor</h3>
				<p>La Xbox One con diseño de Titanfall que un supuesto trabajador de Microsoft filtró, finalmente no se comercializara. Resulta que...</p>
				<br>
			</div>
			<a class="noticia arrow" href="#"></a>
			<div class="clear"></div>
		</div>
		<div class="news card">
			<div class="imagenews"><img src="img/Castlevania.jpg" alt="Castlevania" width= 180 height=110></div>
			<div class="text">
				<h2>Se viene primer DLC de Castlevania: Lords of Shadow 2.</h2>
				<h3>04-Abril-2014 | Autor: Redactor</h3>
				<p>Konami confirma el primer DLC donde podremos jugar con Alucard en este primer contenido descargable de Castlevania: Lords of Shadow 2. Este DLC,sera llamado "Revelations", se pondrá a la venta el...</p>
			</div>
			<a class="noticia arrow" href="#"></a>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	-->
	</div>
<?php include("footer.php");?>