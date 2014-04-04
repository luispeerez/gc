<?php include('headerAdmin.php');
  $db = new Conexion();
  $rs = $db->makeQuery("SELECT *FROM noticia");
?>
  <h2>Noticias publicadas</h2>
  <table class="table table-hover table-bordered">
    <tr>
      <th>ID</th><th>Titulo</th><th>Tipo de noticia</th><th>Fecha</th><th>Autor</th><th>Editar</th>
    </tr>
    <?php 
    while($reg = $db->makeArray($rs)){
      echo "<td>".$reg['id_noticia']."</td><td>".$reg['titulo_noticia']."</td><td>".$reg['tipo_noticia']."</td><td>".$reg['fecha']."</td><td>".$reg['autor']."</td><td><a href='editarnoticia.php?id_noticia=".$reg['id_noticia']."'>Editar noticia</a></td></tr>";
    }
    ?>
  </table>

<?php include('footerAdmin.php'); ?>