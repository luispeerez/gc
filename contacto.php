<?php include("header.php"); ?>

	<div class="container">
		<div class="contactbox card">
			<h1>Nos interesa tu opinion</h1><hr>
			<h3>Es muy importante que dejes tu numero telefonico para que nos pongamos en contacto contigo.</h3>
			<form action="#">
				<p><label for="nombre">Nombre</label><p>
				<p><input type="text" name="nombre" placeholder="Tu nombre aqui"></p>
				<p><label for="email">Email</label></p>
				<p><input type="text" name="email" placeholder="Email"></p>
				<p><label for="asunto">Asunto</label></p>
				<p><input type="text" name="asunto"  placeholder="Asunto del mensaje"></p>
				<p><label for="mensaje">Mensaje</label></p>					
				<p><textarea name="mensaje" placeholder="Mensaje" id="" cols="30" rows="10"></textarea>
			</form>
		</div>
	</div>

<?php include("footer.php"); ?>