<!DOCTYPE html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
  <div class="container-fluid">
    <h1> Factorial </h1>
<?php

$grado = 0;
if (isset($_POST['centigrados']))
{
    $grado = (int)$_POST['centigrados'];
}

function Factorial($grado){
    $total = 1;
    for ($i = 1; $i <= $grado; $i++) {
        $total = $i * $total;
    }
    return $total;

}



?>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <form action="index.php" method="post" class="form-inline">
       <br>
         <label for="campo1"> Ingrese Numero: </label>
         <input type="text" name="centigrados" class="form-control" placeholder="numero!" id="campo1"/>
       <br>
            <p>Numero: <?php echo  $grado; ?>! </p>
            <p>Factorial: <?php echo  Factorial($grado); ?>! </p>

       <br>
       <button type="submit" class="btn btn-primary mb-2">Calcular</button>
      </form>
    </div>
  </div>
  </body>
</html>
