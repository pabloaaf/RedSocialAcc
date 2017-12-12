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
      <div class="panel-heading">Cuenta</div>
      <div class="panel-body">
    <div class="form-group">
      <label for="usr">Nombre de usuario:</label>
      <input type="text" class="form-control" id="usr">
    </div>

    <div class="form-group">
      <label for="usr">Correo electrónico:</label>
      <input type="text" class="form-control" id="usr">
    </div>

    <div class="form-group">
      <label for="sel1">Idioma:</label>
      <select class="form-control" id="sel1">
        <option>Español</option>
        <option>Inglés</option>
        <option>Chino</option>
        <option>Ruso</option>
      </select>

  </div>

  </div><hr>

 <div class="panelNuev">
    <div class="panel-heading">Seguridad</div>
    <div class="panel-body">

    <div class="checkbox">
      <label><input type="checkbox" value="">Verificación de restablecimiento de contraseña</label>
       <span class="help-block">Después de iniciar sesión, se te enviará un mensaje de texto SMS con un código que necesitarás para acceder a tu cuenta.</span>
    </div>


    <div class="checkbox">
      <label><input type="checkbox" value="">Verificación de inicio de sesión</label>
       <span class="help-block">Para mayor seguridad, confirma tu correo electrónico o tu número de teléfono para restablecer tu contraseña.</span>
    </div>

  </div>

  </div><hr>

  <button type="button" class="btn btn-success">Guardar cambios</button>
    
  </div>

  </div>
