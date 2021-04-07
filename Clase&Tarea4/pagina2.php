<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Problema</title>
</head>
<body>
  <?php
    if ($_REQUEST['radio1']=="suma"){
      $suma=$_REQUEST['valor1']+$_REQUEST['valor2'];
      echo "La suma es: ".$suma;
    } else if($_REQUEST['radio1']=="resta"){
      $resta=$_REQUEST['valor1']-$_REQUEST['valor2'];
      echo "La respuesta es: ".$resta;
    }
   ?>
</body>
</html>
