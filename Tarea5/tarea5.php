<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tarea 5</title>
</head>
<body>
  <?php
  if ($_REQUEST['radio1']=='suma') {
    $operacion=$_REQUEST['valor1']+$_REQUEST['valor2']+$_REQUEST['valor3']+$_REQUEST['valor4'];
    echo "La suma es = ".$operacion;
  } else {
    $operacion=$_REQUEST['valor1']*$_REQUEST['valor2']*$_REQUEST['valor3']*$_REQUEST['valor4'];
    echo "La multiplicación es = ".$operacion;
  }
   ?>
</body>
</html>
