<?php include('headerAdmin.php');
    $alert = $_SESSION['error'];
    $_SESSION = array();

    // Si se desea destruir la sesión completamente, borre también la cookie de sesión.
    // Nota: ¡Esto destruirá la sesión, y no la información de la sesión!
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
    session_destroy();
?>
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
              <div class="panel-heading">
                  <div class="panel-title">Iniciar Sesión</div>
              </div>     
              <div style="padding-top:30px" class="panel-body" >
                  <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"><?php echo $alert?></div>
                  <div class="alert alert-warning"><p><?php echo $alert ?></p></div>
                  <form id="loginform" class="form-horizontal" role="form" action="/controladores/login.php" method="POST">
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