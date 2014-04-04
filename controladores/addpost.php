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
  //$fecha = $_POST['fecha'];
  //$autor = $_POST['autor'];
  $db = new Conexion();
  $rs = $db->makeQuery("UPDATE noticia SET titulo_noticia='".$tituloNoticia."' , tipo_noticia='".$tipoNoticia."' , contenido_noticia='".$contenidoNoticia."' WHERE id_noticia=".$idNoticia);
  $db->close(); 
}
header('Location: /indexadmin.php');


?>