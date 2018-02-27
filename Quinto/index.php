<!DOCTYPE html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
  <div class="container-fluid">
    <h1>Covertidor Kelvin y Farhenheit </h1>
<?php

$grado = 0;
if (isset($_POST['centigrados']))
{
    $grado = (int)$_POST['centigrados'];
}

function Kelvin($grado){
    return (9 * ($grado/5)) + 32;
}
function Farhenheit($grado){
    return $grado + 273;
}


?>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <form action="index.php" method="post" class="form-inline">
       <br>
         <label for="campo1"> Ingrese Grados Centigrados: </label>
         <input type="text" name="centigrados" class="form-control" placeholder="Centigrados" id="campo1"/>
       <br>
            <p>Kelvin: <?php echo Kelvin($grado); ?> </p>
            <p>Farhenheit: <?php echo Farhenheit($grado);?> </p>
       <br>
       <button type="submit" class="btn btn-primary mb-2">Calcular</button>
      </form>
    </div>
  </div>
  </body>
</html>
