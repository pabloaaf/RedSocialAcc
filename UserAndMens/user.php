<!DOCTYPE html>
<html>
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
    publicaciones();
  });
  function publicaciones() {
    $("#public").show();
    $("#sig").hide();
    $("#seg").hide();
  }
  function seguidores() {
    $("#public").hide();
    $("#sig").hide();
    $("#seg").show();
  }
  function siguiendo() {
    $("#public").hide();
    $("#sig").show();
    $("#seg").hide();
  }
  </script>
</head>
<body>
  <?php include_once('../Navbar/index.html'); ?>
  <div class="container">
    <div class="row">
      <div class="col-sm-3 col-md-2 ima">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Selena_Gomez_-_Walmart_Soundcheck_Concert.jpg/492px-Selena_Gomez_-_Walmart_Soundcheck_Concert.jpg" class="img-circle" alt="profile pic" width="150" height="150">
      </div>
      <div class="col-sm-9 col-md-10 main">
        <h1>User Name</h1>
        <p>Texto descripcion del usuario</p>
        <nav class="navbar" role="navigation">
          <div>
            <ul class="nav navbar-nav">
              <li class="active"><a href="#" onclick="publicaciones()"><span class="badge">32</span>Publicaciones</a></li>
              <li><a href="#" onclick="seguidores()"><span class="badge">4</span>Seguidores</a></li>
              <li><a href="#" onclick="siguiendo()"><span class="badge">2</span>Siguiendo</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-target="dp2"><span class="glyphicon glyphicon-cog gi-2x"></span><span class="caret gi-2x"></span></a>
                <ul class="dropdown-menu" id="dp2">
                  <li><a href="./cuenta.php">Editar Perfil</a></li>
                  <li><a href="./suscripcion.php">Notificacions por Correo</a></li>
                  <li><a href="./contraseña.php">Cambiar Contraseña</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Cerrar sesión</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>

    <div id = "public">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h3>Column 1</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        </div>
        <div class="col-sm-12 col-md-6">
          <h3>Column 2</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        </div>
        <div class="col-sm-12 col-md-6">
          <h3>Column 3</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        </div>
      </div>
    </div>

    <div id = "seg">
      <div class="row">
        <a href="#">
          <div class="col-sm-1 col-md-1 ima">
            <img src="https://scontent-mad1-1.cdninstagram.com/t51.2885-19/s150x150/16906849_105390733475092_7640936403735412736_a.jpg" class="img-circle" width= "50px" height= "50px">
          </div>
          <div class="col-sm-11 col-md-11 main">
            <p><b>Pablo</b></p>
            <p>@pabloalvarez</p>
          </div>
        </a>
      </div>

      <div class="row">
        <a href="#">
          <div class="col-sm-1 col-md-1 ima">
            <img src="https://pbs.twimg.com/profile_images/757924077629743105/D-8v_kZh.jpg" class="img-circle" width= "50px" height= "50px">
          </div>
          <div class="col-sm-11 col-md-11 main">
            <p><b>Juan</b></p>
            <p>@juanito</p>
          </div>
        </a>
      </div>

      <div class="row">
        <a href="#">
          <div class="col-sm-1 col-md-1 ima">
            <img src="https://morellobookings.com/wp-content/uploads/2017/08/John-Wood-Jan-14-JOHN-WOOD-HEAD-Jan14_2014_1001.jpg" class="img-circle" width= "50px" height= "50px">
          </div>
          <div class="col-sm-11 col-md-11 main">
            <p><b>John</b></p>
            <p>@john</p>
          </div>
        </a>
      </div>

      <div class="row">
        <a href="#">
          <div class="col-sm-1 col-md-1 ima">
            <img src="https://image.freepik.com/foto-gratis/chica-posando-con-gafas-de-sol_1153-1985.jpg" class="img-circle" width= "50px" height= "50px">
          </div>
          <div class="col-sm-11 col-md-11 main">
            <p><b>María</b></p>
            <p>@mariaaa</p>
          </div>
        </a>
      </div>
    </div>

    <div id = "sig">
      <div class="row">
        <a href="#">
          <div class="col-sm-1 col-md-1 ima">
            <img src="https://i.axs.com/2016/07/promoted-media-optimized_5776cc52b3816.jpg" class="img-circle" width= "50px" height= "50px">
          </div>
          <div class="col-sm-11 col-md-11 main">
            <p><b>Justin Bieber</b></p>
            <p>@justinBieber</p>
          </div>
        </a>
      </div>

      <div class="row">
        <a href="#">
          <div class="col-sm-1 col-md-1 ima">
            <img src="http://los40es00.epimg.net/los40/imagenes/2017/01/17/album/1484675309_894438_1484675936_album_normal.jpg" class="img-circle" width= "50px" height= "50px">
          </div>
          <div class="col-sm-11 col-md-11 main">
            <p><b>Demi Lovato</b></p>
            <p>@demiLovato</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</body>
</html>
