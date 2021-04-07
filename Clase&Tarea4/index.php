<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Practica 2</title>
  <style media="screen">
    h1{color: blue;text-align: center;}
    fieldset{width: 80%;margin: 0 auto;}
    input{margin-bottom: 10px;}
    b{font-size: 25px;}
    .centrado{text-align: center;}
  </style>
</head>
<body style="background: powderblue;">
  <h1>Programación Web <br>Ejemplo 1 </h1>
  <?php
    $TXT="Hello World!";
    $X=5;
    $Y=10.5;
    echo "<center>";
    echo $TXT;
    echo "<br>";
    echo $X;
    echo "<br>";
    echo $Y;
    Print "<h3>PHP Es Divertido</h3>"; //Hace lo mismo que echo
    $A=3;
    $B=5;
    $C=$A+$B;
    echo "La suma de dos numeros es: ".$C; //Para concatenar se usa un punto
   ?>
<hr>
  <h1>Ejemplo 2</h1>
  <div class="centrado">
    <dialog id="favDialog"></dialog>
    <form action="pagina2.php" method="post">
      <fieldset>
      <legend>Operaciones</legend>
      <label for="label1">Ingrese primer valor: </label>
      <input type="text" name="valor1">
      <br>
      <label for="label2">Ingrese segundo valor: </label>
      <input type="text" name="valor2">
      <br>
      <input type="radio" name="radio1" value="suma">Sumar
      <br>
      <input type="radio" name="radio1" value="resta">Restar
      <br>
      <input type="submit" name="operar">
      </fieldset>
    </form>
  </div>
<hr>
  <h1>Tarea </h1>
  <h4>Sumatoria interna de 4 números</h4>
  <?php
    $A=1;
    $B=2;
    $C=3;
    $D=4;
    $suma=$A+$B+$C+$D;
    echo "La suma de <b>".$A."</b> + <b>".$B."</b> + <b>".$C."</b> + <b>".$D."</b> es = ".$suma;
   ?>
</body>
</html>
