<!DOCTYPE html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
  <div class="container-fluid">
    <h1>Primer Punto</h1>
    <p>Determina mayor y menor de una lista de números </p>
    <p>Digite los cinco numeros:</p>
<?php
  $arraynumerico = array((int)$_POST['primero'], (int)$_POST['segundo'], (int)$_POST['tercero'], (int)$_POST['cuarto'], (int)$_POST['quinto']);
  sort($arraynumerico);
  $mayor = $arraynumerico[4];
  $menor = $arraynumerico[0];
?>
    <h1>Numero Menor: <?php echo $menor; ?></h1>
    <h1>Numero Mayor: <?php echo $mayor; ?></h1>
    <?php echo $_POST['segundo']; ?>
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

         <?php
         for ($x = 0; $x <= 10; $x++) {

             echo '<br>
             <label for="campo2"> Segundo # </label>
             <input type="number"name="segundo" class="form-control" placeholder="segundo" id="campo2"/>';
         }
         ?>

       <button type="submit" class="btn btn-primary mb-2">Calcular</button>
      </form>
    </div>
  </div>
  </body>
</html>
