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
      <div class="panel-heading">Actividad relacionada contigo y tus publicaciones</div>
      <div class="panel-body">

  <p>Enviarme un correo electrónico cuando:</p>
  <form>
    <div class="checkbox">
      <label><input type="checkbox" value="">Tienes notificaciones nuevas</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Te envían un Mensaje Directo</label>
    </div>
  </form>
</div>

</div><hr>

 <div class="panelNuev">
    <div class="panel-heading">Actividad de tu red</div>
    <div class="panel-body">
    <p>Recibirás correos electrónicos con:</p>
      <form>
        <div class="checkbox">
          <label><input type="checkbox" value="">Publicaciones relevantes</label>
        </div>
        <select class="form-control" id="sel1">
        <option>Diariamente</option>
        <option>Semanalmente</option>
        <option>Periódicamente</option>
        </select>
        <div class="checkbox">
          <label><input type="checkbox" value="">Actualizaciones sobre la repercusión de tus publicaciones</label>
        </div>
      </form>
    </div>

  </div><hr>

 <div class="panelNuev">
    <div class="panel-heading">Actualizaciones de la aplicación</div>
    <div class="panel-body">
    <p>Recibirás correos electrónicos con:</p>
    <form>
        <div class="checkbox">
          <label><input type="checkbox" value="">Noticias sobre productos y actualizaciones de características de la aplicación</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" value="">Consejos para sacar el máximo partido de la aplicación</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" value="">Cosas que te perdiste desde tu última sesión</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" value="">Sugerencias de cuentas recomendadas</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" value="">Sugerencias basadas en tus seguimientos recientes</label>
        </div>
      </form>


  </div><hr>

  <button type="button" class="btn btn-success">Guardar cambios</button>
    
  </div>

  </div>
