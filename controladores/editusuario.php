<?php 

include("../clases/conexion.php");
session_start();
if(isset($_SESSION['usuarioActivo'])){
$usuarioActivo = $_SESSION['usuarioActivo'];
}

if( (isset($_POST['nombreUsuario'])) /*&& (isset($_POST['contrasenaUsuario']))*/ && (isset($_POST['idUsuarioModificado']))  ) {
  $nombreUsuario = $_POST['nombreUsuario'];
  //$contrasenaUsuario = $_POST['contrasenaUsuario'];
  //$contrasenaUsuario = md5($contrasenaUsuario);ar
  $idUsuario = $_POST['idUsuarioModificado'];
  $tipoUsuario = $_POST['tipoUsuario'];
  $db = new Conexion();
  $rs = $db->makeQuery("UPDATE usuario SET nombre_usuario='".$nombreUsuario."' , tipo_usuario='".$tipoUsuario."' WHERE id_usuario=".$idUsuario.";");
  $db->close(); 
}
header('Location: /listausuarios.php');


?>