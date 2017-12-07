<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function(){
    document.getElementById("mens").className+="active";
  });
</script>
</head>
<body>
  <?php include_once('../Navbar/index.html'); ?>
  <div class="container">

 <div class="panelNuev">
      <div class="panel-heading">Cambiar contraseña</div>
      <div class="panel-body">
    <div class="form-group">
      <label for="pwd">Contraseña actual:</label>
      <input type="password" class="form-control" id="pwd">
    </div>

    <div class="form-group">
      <label for="pwd">Nueva contraseña:</label>
      <input type="password" class="form-control" id="pwd">
    </div>

   <div class="form-group">
      <label for="pwd">Confirma nueva contraseña:</label>
      <input type="password" class="form-control" id="pwd">
    </div>


  </div><hr>

  <button type="button" class="btn btn-success">Guardar cambios</button>
    
  </div>

  </div>
