<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tarea 5</title>
  <style media="screen">
    h1{color: blue;text-align: center;}
    fieldset{width: 80%;margin: 0 auto;background: darkgrey;}
    legend{font-weight: bold;text-transform: uppercase;background: darkgrey;border:2px solid #6c6c6c;}
    input{margin-bottom: 10px;}
    .centrado{text-align: center;}
  </style>
</head>
<body>
  <div class="centrado">
    <h1>Tarea 5</h1>
    <h4>Suma y multiplicación de 4 números</h4>
    <dialog id="favDialog"></dialog>
    <form action="tarea5.php" method="post">
      <fieldset>
      <legend>Operaciones</legend>
      <label for="label1">Ingrese primer valor: </label>
      <input type="text" name="valor1" required>
      <br>
      <label for="label2">Ingrese segundo valor: </label>
      <input type="text" name="valor2" required>
      <br>
      <label for="label2">Ingrese tercer valor: </label>
      <input type="text" name="valor3" required>
      <br>
      <label for="label2">Ingrese cuarto valor: </label>
      <input type="text" name="valor4" required>
      <br>
      <input type="radio" name="radio1" value="suma" required>Sumar
      <input type="radio" name="radio1" value="multi">Multiplicar
      <br>
      <input type="submit" name="operacion" value="Ejecutar">
      </fieldset>
    </form>
  </div>
</body>
</html>
