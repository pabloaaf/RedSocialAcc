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
    $("#panelNuev").hide();
    $("#nuevo").click(function(){
      $("#panelNuev").show(); 
      $("#panelGen").hide();
    });
    $("#enviar").click(function(){
      $("#panelNuev").hide();
      $("#panelGen").show(); 
    });
  });
</script>
</head>
<body>
  <?php include_once('../Navbar/index.html'); ?>
  <div class="container">
    <div id="panelNuev">
      <div class="panel-heading"><div class="row">
          <div class="col-xs-3 col-md-3">Mensaje nuevo</div>
          <div class="col-xs-3 col-md-3 col-md-offset-6"><input type="button" class="btn btn-default btn-block"  id="enviar" value="Mis mensajes"></input></div>
        </div>
      </div>
      <div class="panel-body">
        Usuario<input type="text" class="form-control" placeholder="Enviar a" /><br>
        Mensaje<textarea class="form-control" rows="5" id="comment"></textarea><br>
        <button type="button" id="enviar" class="btn btn-success">Enviar</button>
      </div>
    </div>

    <div class="panel" id="panelGen">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-3 col-md-3">Mensajes</div>
          <div class="col-xs-3 col-md-3 col-md-offset-6"><input type="button" class="btn btn-default btn-block"  id="nuevo" value="Nuevo Mensaje"></input></div>
        </div>
      </div>
      <div class="panel-body">
        <div class="row">
         <div class="col-sm-2 col-md-2 ima">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Selena_Gomez_-_Walmart_Soundcheck_Concert.jpg/492px-Selena_Gomez_-_Walmart_Soundcheck_Concert.jpg" class="img-circle" alt="profile pic" width="50" height="50">
        </div>
        <div class="col-sm-10 col-md-10 ima">
          <a href="./EJmens/Selena.php">
          <h4><b>Selena Gómez</b></h4>
          <p>Que tal guapi</p>
          </a>
        </div>
      </div><hr>
      <div class="row">
        <div class="col-sm-2 col-md-2 ima">
          <img src="http://images6.fanpop.com/image/polls/1271000/1271423_1377665739255_full.png?v=1377665877" class="img-circle" alt="profile pic" width="50" height="50">
        </div>
        <div class="col-sm-10 col-md-10 ima">
          <h4><b>Taylor Swift</b></h4>
          <p>Escucha mi nuevo disco</p>
        </div>
      </div><hr>
      <div class="row">
        <div class="col-sm-2 col-md-2 ima">
        <img src="https://www.hola.com/imagenes/actualidad/2017090899092/kiko-rivera-caribe/0-485-320/kiko-t.jpg" class="img-circle" alt="profile pic" width="50" height="50">
        </div>
        <div class="col-sm-10 col-md-10 ima">
          <h4><b>Kiko Rivera</b></h4>  
          <p>Que tal todo</p>
        </div>
      </div><hr>
      <div class="row">
        <div class="col-sm-2 col-md-2 ima">
        <img src="http://los40es00.epimg.net/los40/imagenes/2017/01/17/album/1484675309_894438_1484675936_album_normal.jpg" class="img-circle" alt="profile pic" width="50" height="50">
        </div>
        <div class="col-sm-10 col-md-10 ima">
          <h4><b>Demi Lovato</b></h4>  
          <p>Hi!!!</p>
        </div>
      </div><hr>
      <div class="row">
        <div class="col-sm-2 col-md-2 ima">
        <img src="https://i.axs.com/2016/07/promoted-media-optimized_5776cc52b3816.jpg" class="img-circle" alt="profile pic" width="50" height="50">
        </div>
        <div class="col-sm-10 col-md-10 ima">
          <h4><b>Justin Bieber</b></h4>  
          <p>Let's make a collab!!</p>
        </div>
      </div><hr>
      <div class="row">
        <div class="col-sm-2 col-md-2 ima">
        <img src="http://i.telegraph.co.uk/multimedia/archive/02510/justin2_2510378b.jpg" class="img-circle" alt="profile pic" width="50" height="50">
        </div>
        <div class="col-sm-10 col-md-10 ima">
          <h4><b>Justin Timberlake</b></h4>  
          <p>Holaaaa!!</p>
        </div>
      </div><hr>
    </div>
    </div>


 

</body>
</html>