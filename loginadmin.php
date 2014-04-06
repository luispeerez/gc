<?php include('headerAdmin.php');
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
      $_SESSION['usuarioActivoID'] = $reg['id_usuario'];
      $_SESSION['tipoUsuario'] = $reg['tipo_usuario'];
      $_SESSION['usuarioActivo'] = $usuario;
      header('Location: /indexadmin.php');
    }
    else{
      $alert = "Usuario o contraseña incorrecta";
    }
  }
  $db->close(); 
}

?>
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
              <div class="panel-heading">
                  <div class="panel-title">Iniciar Sesión</div>
              </div>     
              <div style="padding-top:30px" class="panel-body" >
                  <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                  <div class="alert alert-warning"><p><?php echo $alert ?></p></div>
                  <form id="loginform" class="form-horizontal" role="form" action="/loginadmin.php" method="POST">
                      <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input id="login-username" type="text" class="form-control" name="username" value="" autofocus placeholder="Usuario">                                        
                      </div>
                      <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input id="login-password" type="password" class="form-control" name="password" placeholder="Contraseña">
                      </div>
                      <div style="margin-top:10px" class="form-group">
                          <div class="col-sm-12 controls">
                            <!--<a id="btn-login" href="#" class="btn btn-success">Iniciar Sesión  </a>-->
                              <button type="submit" class="btn btn-default">Iniciar Sesión</button>
                          </div>
                      </div>
                    </form>     
                </div>                     
              </div>  
        </div>

<?php include('footerAdmin.php'); ?>