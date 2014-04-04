<?php 
	unset($_SESSION['usuarioActivo']);
	session_destroy();
	header('Location: /loginadmin.php');
?>