<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gamecentral</title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/jquery.bxslider.css">
	<link rel="stylesheet" href="css/supersized.css">
	<link href="http://static.wixstatic.com/ficons/f0ce39_5bd31518a05d46fe8f0d57b61526d03e_fi.ico" rel="icon" type="image/x-icon" />

<script>
	<?php 
	if (file_exists('img/bg/bg1.jpg')) {
	    echo "var bodyBackground = 'bg1.jpg';";
	} else {
	    echo "var bodyBackground = 'bg1.png';";
	}
	?>
</script>

</head>
<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=287929584699013";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<div id="supersized"></div>
	<div id="wrap">
		<div id="topBackRepeat">	
			<div id="main">
				<header>
					<div class="shadowblock">
						<div class="logobar">
							<a href="/indexadmin.php"><img src="img/Logo.png" alt="GameCentral"></a>
							<div class="social">
								<a href="#" class="fb transition animated fadeInDown"></a>
								<a href="#" class="tw transition animated fadeInDown"></a>
								<a href="#" class="yt transition animated fadeInDown"></a>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<nav class="animated">
						<ul>
						<li><a href="/">Inicio</a></li>
						<li><a href="/review.php">Reseñas</a></li>
						<li><a href="/catalogo.php">Catalogo</a></li>
						<li><a href="/sucursales.php">Sucursales</a></li>
						<li><a href="/contacto.php">Contacto</a></li>							
						</ul>
					</nav>
					<div class="mist"></div>
				</header>
				<div id="content">

