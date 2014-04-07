<?php 

include("../clases/conexion.php");
session_start();
if(isset($_SESSION['usuarioActivo'])){
$usuarioActivo = $_SESSION['usuarioActivo'];
}

if( (isset($_POST['tituloNoticia'])) && (isset($_POST['tipoNoticia'])) && (isset($_POST['contenidoNoticia'])) ) {
  $idNoticia = $_POST['idNoticia'];
  $tituloNoticia = $_POST['tituloNoticia'];
  $tipoNoticia = $_POST['tipoNoticia'];
  $contenidoNoticia = $_POST['contenidoNoticia'];
  $fecha = date('Y-m-d');
  $autor = $_POST['autor'];
  $db = new Conexion();
    $rs = $db->makeQuery("INSERT INTO noticia values('', '".$tituloNoticia."' , '".$tipoNoticia."' , '".$contenidoNoticia."' , '".$fecha."' , '".$autor."')");
  $db->close(); 
}
header('Location: /indexadmin.php');


?>