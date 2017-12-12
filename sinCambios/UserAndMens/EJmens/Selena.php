<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style >
    .yo {
      border: 2px solid green;
      border-radius: 5px;
      background-color: lightgreen;
      height: 50px;
      margin-top: 2px;
      margin-bottom: 2px;
    }
    .selena {
      border: 2px solid grey;
      border-radius: 5px;
      background-color: #C3CDCA;
      height: 50px;
      margin-top: 2px;
      margin-bottom: 2px;
    }
    input.mensaje {
      border: 2px solid ;
      border-radius: 8px;
    }
  </style>
<script>
  $(document).ready(function(){
    document.getElementById("mens").className+="active";
  });
</script>
</head>
<body>
  <?php include_once('../../Navbar/index.html'); ?>
  <div class="container">
    <div class="panelGen" border>
      <div class="panel-heading">
          <h1><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Selena_Gomez_-_Walmart_Soundcheck_Concert.jpg/492px-Selena_Gomez_-_Walmart_Soundcheck_Concert.jpg" class="img-circle" alt="profile pic" width="50" height="50">
          Selena Gomez</h1>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-sm-1 col-md-1 col-md-offset-1 ima ">
          10:15 20/6/2017
        </div>
        <div class="col-sm-6 col-md-6 ima yo">
          Que tal guapi
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-4 ima selena">
          Todo bien, tú?
        </div>
        <div class="col-sm-1 col-md-1 ima ">
          10:21 20/6/2017
        </div>
      </div>
      <div class="row">
        <div class="col-sm-1 col-md-1 col-md-offset-1 ima ">
          10:53 20/6/2017
        </div>
        <div class="col-sm-6 col-md-6 ima yo">
          A ver si saco nuevo disco
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-4 ima selena">
          A ver si es verdad
        </div>
        <div class="col-sm-1 col-md-1 ima ">
          12:17 20/6/2017
        </div>
      </div>
      <div class="row">
        <div class="col-sm-1 col-md-1 col-md-offset-1 ima ">
          13:14 20/6/2017
        </div>
        <div class="col-sm-6 col-md-6 ima yo">
          Espera sentao
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-2 ima">
          <input type="text" class="form-control mensaje" placeholder="Escribe aquí tu mensaje."></input>
        </div>
        <div class="col-sm-2 col-md-2 ima">
          <input class="btn btn-default btn-block" value="Enviar"></input>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>