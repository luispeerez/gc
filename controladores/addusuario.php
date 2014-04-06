<?php 

include("../clases/conexion.php");
session_start();
if(isset($_SESSION['usuarioActivo'])){
$usuarioActivo = $_SESSION['usuarioActivo'];
}

if( (isset($_POST['nombreUsuario'])) && (isset($_POST['contrasenaUsuario'])) && (isset($_POST['tipoUsuario']))  ) {
  $nombreUsuario = $_POST['nombreUsuario'];
  $contrasenaUsuario = $_POST['contrasenaUsuario'];
  $tipoUsuario = $_POST['tipoUsuario'];
  $db = new Conexion();
    $rs = $db->makeQuery("INSERT INTO usuario VALUES('', '".$nombreUsuario."', '".$contrasenaUsuario."' , '".$tipoUsuario."')");
  $db->close(); 
}
header('Location: /listausuarios.php');


?>