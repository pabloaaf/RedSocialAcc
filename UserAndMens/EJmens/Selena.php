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
  <?php include_once('../../Navbar/index.html'); ?>
  <div class="container">
    <div class="panelGen">
      <div class="panel-heading">Selena Gomez</div>
      <div class="panel-body">
        <div class="row">
         <div class="col-sm-2 col-md-2 ima">
        </div>
        <div class="col-sm-10 col-md-10 ima">
          <p>Que tal guapi</p>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>