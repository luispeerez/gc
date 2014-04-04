<?php include('headerAdmin.php');
  $db = new Conexion();
  $rs = $db->makeQuery("SELECT *FROM usuario");
?>
  <h2>Usuarios</h2>
  <table class="table table-hover table-bordered">
    <tr>
      <th>ID</th><th>Nombre</th><th>Contraseña</th><th>Tipo de usuario</th><th>Modificacion</th>
    </tr>
    <?php 
    while($reg = $db->makeArray($rs)){
      echo "<td>".$reg['id_usuario']."</td><td>".$reg['nombre_usuario']."</td><td>".$reg['contrasena']."</td><td>".$reg['tipo_usuario']."</td><td><a href='modificarusuario.php?id_usuario=".$reg['id_usuario']."'>Modificar informacion de usuario</a></td></tr>";
    }
    ?>
  </table>

<?php include('footerAdmin.php'); ?>