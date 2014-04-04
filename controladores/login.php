<?php 
$alert = "";
$usuario = "";
$password = "";
if(isset($_POST['username']) && isset($_POST['password'])){
  $usuario = $_POST['username'];
  $password = $_POST['password'];
  $db = new Conexion();
  $rs = $db->makeQuery("SELECT *FROM usuario");
  while($reg = $db->makeArray($rs)){
    if( ($usuario === $reg['nombre_usuario']) && ($password === $reg['contrasena'])){
      session_start();
      $_SESSION['usuarioActivo'] = $usuario;
      header('Location: /indexadmin.php');
    }
    else{
      header('Location: /indexadmin.php');
      $alert = "Usuario o contraseña incorrecta";
    }
  }
  $db->close(); 
}

?>