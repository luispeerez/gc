<?php
include("../clases/conexion.php");
 $alert = "";
$usuario = "";
$password = "";
$encontroUsuario = false;
if(isset($_POST['username']) && isset($_POST['password'])){
  $usuario = $_POST['username'];
  $password = $_POST['password'];
  $db = new Conexion();
  $rs = $db->makeQuery("SELECT *FROM usuario");
  $password = md5($password);

  while($reg = $db->makeArray($rs)){
    if( ($usuario === $reg['nombre_usuario']) && ($password === $reg['contrasena'])){
      session_start();
      $_SESSION['usuarioActivoID'] = $reg['id_usuario'];
      $_SESSION['usuarioActivo'] = $usuario;
      $_SESSION['tipoUsuario'] = $reg['tipo_usuario'];
      header('Location: /indexadmin.php');
      exit();
    }
    else{
      $encontroUsuario = false;
    }
  }
  if(!$encontroUsuario){
      session_start();
      $_SESSION['error'] = "Usuario o contraseña incorrecta";
      header('Location: /loginadmin.php');
  }
  $db->close(); 
}

?>