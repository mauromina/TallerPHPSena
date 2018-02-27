<!DOCTYPE html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
  <div class="container-fluid">
    <h1>Ferretería</h1>
    <p>Determina mayor y menor de una lista de números </p>
    <p>Digite los cinco numeros:</p>
<?php
$nombre = '';
$metros = 0;
$tipo = "";
$valor = 0;
$total = 0;
if (isset($_POST['nombre']))
{
  $nombre = $_POST['nombre'];
  $metros = (int)$_POST['metros'];
  $tipo = $_POST['tipo'];
  $tipo = strtoupper($tipo);
  $valor = 0;
  $total = 0;
    if($tipo == 'A'){
      $valor = 20000;
      $total = $valor * $metros;
    }
    if($tipo == 'B'){
      $valor = 35000;
      $total = $valor * $metros;
    }
}


?>
    <h1>Nombre del Cliente: <?php echo $nombre; ?></h1>
    <h1>Tipo de Cable: <?php echo $tipo; ?></h1>
    <h1>Valor por metro: <?php echo $metros; ?></h1>
    <h1>Costo Total: <?php echo $total; ?></h1>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <form action="index.php" method="post" class="form-inline">
       <br>
         <label for="campo1"> Nombre de Cliente: </label>
         <input type="text" name="nombre" class="form-control" placeholder="Nombre de Cliente" id="campo1"/>
       <br>
         <label for="campo2"> Tipo de Cable: </label>
         <input type="text"name="tipo" class="form-control" placeholder="Tipo de Cable" id="campo2"/>
       <br>
         <label for="campo3"> Metros de Cable </label>
         <input type="number" name="metros" class="form-control" placeholder="Metros" id="campo3"/>
       <button type="submit" class="btn btn-primary mb-2">Calcular</button>
      </form>
    </div>
  </div>
  </body>
</html>
