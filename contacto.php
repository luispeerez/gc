<?php include("header.php"); ?>

	<div class="container">
		<div class="contactbox card">
			<h1>Nos interesa tu opinion</h1><hr>
			<h3>Es muy importante que dejes tu numero telefonico para que nos pongamos en contacto contigo.</h3>
			
			<form action="#">
			
				<p><label for="nombre">Nombre</label><p>
				<p><input type="text" name="nombre" placeholder="Ingresa aqui tu Nombre"></p>
				<p><label for="email">Email</label></p>
				<p><input type="text" name="email" placeholder="Ingresa aqui tu Email"></p>
				<p><label for="telefono">Telefono</label></p>
				<p><input type="text" name="telefono" placeholder="Ingresa tu numero de telefono"></p>
				<p><label for="asunto">Asunto</label></p>
				<p><input type="text" name="asunto"  placeholder="Asunto" ></p>
				<p><label for="mensaje">Mensaje</label></p>					
				<p><textarea name="mensaje" placeholder="Mensaje" id="" cols="30" rows="10"></textarea>
				<style type="text/css">
  .boton{
        font-size:30px;
        font-family:Arial;
        font-weight:bold;
        color:white;
        background:#638cb5;
        border:0px;
        width:180px;
        height:39px;
		
       }

</style>
<div align ="center">
  <input type="submit" value="ENVIAR" class="boton">
  </form>
</div>
     	<h1 class="heading">Ayudanos a </h1>
		<h1 class="heading">Mejorar</h1>
			</form>
		</div>
	</div>

<?php include("footer.php"); ?>