<?php 

include("../clases/conexion.php");
include("../controladores/encriptador.php");

session_start();
if(isset($_SESSION['usuarioActivo'])){
$usuarioActivo = $_SESSION['usuarioActivo'];
}

if( (isset($_POST['tituloNoticia'])) && (isset($_POST['tipoNoticia'])) && (isset($_POST['contenidoNoticia'])) ) {
  $idNoticia = $_POST['idNoticia'];
  $tituloNoticia = $_POST['tituloNoticia'];
  $tipoNoticia = $_POST['tipoNoticia'];
  $contenidoNoticia = $_POST['contenidoNoticia'];

  //Encriptando la noticia 
  $contenidoNoticia = encriptarMensaje($contenidoNoticia);


  $fecha = date('Y-m-d', time());
  $autor = $usuarioActivo;
  $db = new Conexion();
  $rs = $db->makeQuery("UPDATE noticia SET titulo_noticia='".$tituloNoticia."' , tipo_noticia='".$tipoNoticia."' , contenido_noticia='".$contenidoNoticia."' WHERE id_noticia=".$idNoticia);
  $db->close(); 
}
header('Location: /indexadmin.php');


?>