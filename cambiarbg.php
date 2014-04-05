<?php include('headerAdmin.php'); ?>

<h1>Background activo</h1>
<div class="row cambiarbg">
  <div class="col-lg-6">
    <img src="/img/bg/bg1" alt="Background">
  </div>
</div>
<div class="row">
  <div class="col-lg-6">
    <form action="/controladores/changebg.php" method="POST"enctype="multipart/form-data">
    <label for="file">Seleccionar nueva imagen</label>
    <input type="file" name="file" id="file"><br>
    <button type="submit" class="btn btn-default">Cambiar fondo de pantalla</button>
    </form>
  </div>
</div>

<?php include('footerAdmin.php'); ?>