<!DOCTYPE html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
  <div class="container-fluid">
    <h1>Potencia de un Numero</h1>
<?php
$base = 0;
$exponente = 0;
$total = 0;
if (isset($_POST['base']))
{
  $base = (int)$_POST['base'];
  $exponente = (int)$_POST['exponente'];
  $total = pow($base,$exponente);

}


?>
    <h1>Base: <?php echo $base; ?></h1>
    <h1>Exponente: <?php echo $exponente; ?></h1>
    <h1>Costo Total: <?php echo $total; ?></h1>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <form action="index.php" method="post" class="form-inline">
       <br>
         <label for="campo1"> Base: </label>
         <input type="text" name="base" class="form-control" placeholder="Base" id="campo1"/>
       <br>
         <label for="campo2"> Exponente: </label>
         <input type="text"name="exponente" class="form-control" placeholder="exponente" id="campo2"/>
       <br>
       <button type="submit" class="btn btn-primary mb-2">Calcular</button>
      </form>
    </div>
  </div>
  </body>
</html>
