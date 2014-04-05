<?php
  $usuarioActivo = "";
  include("clases/conexion.php");
  $foo = explode( ".php", basename($_SERVER['PHP_SELF']));
  $paginaActual = $foo[0];
  session_start();
  if(isset($_SESSION['usuarioActivo'])){
  $usuarioActivo = $_SESSION['usuarioActivo'];
  $usuarioActivoID = $_SESSION['usuarioActivoID'];
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamecentral Administrador</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/mainAdmin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  </head>
  <body>
    <div id="wrapper" class="<?php echo $paginaActual ?>">
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Administrador Gamecentral <?php echo $usuarioActivo."".$usuarioActivoID ?></a>
        </div>
        
        <!--Solo en el usuario loggeado-->
        <?php  if( $paginaActual != 'loginadmin'): ?>      
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <!--Sidebar-->
            <ul class="nav navbar-nav side-nav">
              <li class="<?php if($paginaActual=='indexadmin') echo 'active'; ?>"><a href="/indexadmin.php"><i class="fa fa-dashboard"></i> Menu Principal</a></li>
              <li class="<?php if($paginaActual=='crearnoticia') echo 'active'; ?>"><a href="/crearnoticia.php"><i class="fa fa-plus"></i> Nueva noticia</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-group"></i> Usuarios <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="/agregarusuario.php">Agregar usuario</a></li>
                  <li><a href="/listausuarios.php">Lista de usuarios</a></li>
                </ul>
              </li>
              <li class="<?php if($paginaActual=='cambiarbg') echo 'active'; ?>"><a href="/cambiarbg.php"><i class="fa fa-picture-o"></i> Cambiar background</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right navbar-user">
              <li class="dropdown user-dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $usuarioActivo ?> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <!--<li><a href="#"><i class="fa fa-user"></i> Profile</a></li>-->
                  <li><a href="/modificarusuario.php?id_usuario=<?php echo $usuarioActivoID ?>"><i class="fa fa-gear"></i> Configuracion</a></li>
                  <li class="divider"></li>
                  <li><a href="controladores/logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>
                </ul>
              </li>
            </ul>
          </div>
        <?php endif; ?>

      </nav>

      <div id="page-wrapper">