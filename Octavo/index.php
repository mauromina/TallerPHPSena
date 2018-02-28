<!DOCTYPE html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
  <div class="container-fluid">
    <h1>¡Sumatoria!</h1>
    <p>Digite los Diez numeros:</p>
<?php

$reversed = array();
$arraynumerico = array();
if (isset($_POST['primero']))
{
  $arraynumerico = array(
    (int)$_POST['primero'],
    (int)$_POST['segundo'],
    (int)$_POST['tercero'],
    (int)$_POST['cuarto'],
    (int)$_POST['quinto'] ,
    (int)$_POST['sexto'],
    (int)$_POST['septimo'],
    (int)$_POST['octavo'],
    (int)$_POST['noveno'],
    (int)$_POST['decimo']
  );
$reversed = array_reverse($arraynumerico);
}

?>
    <h1>Sumatoria:
    <?php
    $sumatoria = 0;
      for ($i = 0; $i < count($arraynumerico) ; $i++)
       {
         $sumatoria += $arraynumerico[$i];

       }
       echo $sumatoria;
    ?>
  </h1>

  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <form action="index.php" method="post" class="form-inline">
       <br>
         <label for="campo1"> Primer # </label>
         <input type="number" name="primero" class="form-control" placeholder="primero" id="campo1"/>
       <br>
         <label for="campo2"> Segundo # </label>
         <input type="number"name="segundo" class="form-control" placeholder="segundo" id="campo2"/>
       <br>
         <label for="campo3"> Tercer # </label>
         <input type="number" name="tercero" class="form-control" placeholder="tercero" id="campo3"/>

       <br>
         <label for="campo4"> Cuarto # </label>
         <input type="number" name="cuarto" class="form-control" placeholder= "cuarto" id="campo4"/>

       <br>
         <label for="campo5"> Quinto # </label>
         <input type="number" name="quinto" class="form-control" placeholder="quinto" id="campo5" />
       <br>
       <label for="campo6"> Sexto # </label>
       <input type="number" name="sexto" class="form-control" placeholder="sexto" id="campo6"/>
     <br>
       <label for="campo7"> Septimo # </label>
       <input type="number"name="septimo" class="form-control" placeholder="septimo" id="campo7"/>
     <br>
       <label for="campo8"> Octavo # </label>
       <input type="number" name="octavo" class="form-control" placeholder="octavo" id="campo8"/>

     <br>
       <label for="campo9"> Noveno # </label>
       <input type="number" name="noveno" class="form-control" placeholder= "noveno" id="campo9"/>

     <br>
       <label for="campo10"> Decimo # </label>
       <input type="number" name="decimo" class="form-control" placeholder="decimo" id="campo10" />


       <button type="submit" class="btn btn-primary mb-2">Calcular</button>
      </form>
    </div>
  </div>
  </body>
</html>
