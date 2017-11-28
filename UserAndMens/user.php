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
    document.getElementById("nombre").className+="active";
  });
  function publicaciones() {
    document.getElementById("element").innerHTML = `
    <div class="row">
    <div class="col-sm-4">
    <h3>Column 1</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p></div>
    <div class="col-sm-4">
    <h3>Column 2</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
    <h3>Column 3</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    </div>`;
  }
  function seguidores() {
    document.getElementById("element").innerHTML = `
    <div class="row">
    <a href="#">
    <div class="col-sm-1 col-md-1 ima">
    <img src="https://scontent-mad1-1.cdninstagram.com/t51.2885-19/s150x150/16906849_105390733475092_7640936403735412736_a.jpg" width= "30px" height= "30px">
    </div>
    <div class="col-sm-11 col-md-11 main">
    <p><b>Pablo</b></p>
    <p>pabloalvarez</p>
    </div>
    </a>
    </div>
    <div class="row">
    <a href="#">
    <div class="col-sm-1 col-md-1 ima">
    <img src="https://scontent-mad1-1.cdninstagram.com/t51.2885-19/s150x150/16906849_105390733475092_7640936403735412736_a.jpg" width= "30px" height= "30px">
    </div>
    <div class="col-sm-11 col-md-11 main">
    <p><b>Pablo</b></p>
    <p>pabloalvarez</p>
    </div>
    </a>
    </div>
    `;
  }
  function siguiendo() {
    document.getElementById("element").innerHTML = `3`;
  }
  </script>
</head>
<body>
<?php include_once('../Navbar/index.html'); ?>
  <div class="container">
    <div class="row">
      <div class="col-sm-2 col-md-2 ima">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Selena_Gomez_-_Walmart_Soundcheck_Concert.jpg/492px-Selena_Gomez_-_Walmart_Soundcheck_Concert.jpg" class="img-circle" alt="profile pic" width="150" height="150">
      </div>
      <div class="col-sm-10 col-md-10 main">
        <h1>User Name</h1>
        <p>Texto descripcion del usuario</p>
        <nav class="navbar" role="navigation">
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#" onclick="publicaciones()"><span class="badge">32</span>Publicaciones</a></li>
              <li><a href="#" onclick="seguidores()"><span class="badge">167</span>Seguidores</a></li>
              <li><a href="#" onclick="siguiendo()"><span class="badge">309</span>Siguiendo</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog gi-2x"></span><b class="caret gi-2x"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Editar Perfil</a></li>
                  <li><a href="#">Suscripción Correo</a></li>
                  <li><a href="#">Cambiar Contraseña</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Cerrar sesión</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>

    <div id = "element">
      <div class="row">
        <div class="col-sm-4">
          <h3>Column 1</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        </div>
        <div class="col-sm-4">
          <h3>Column 2</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        </div>
        <div class="col-sm-4">
          <h3>Column 3</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
