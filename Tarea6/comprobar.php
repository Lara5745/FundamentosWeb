<?php
echo '<!DOCTYPE HTML>
      <html>
      <head>
        <title>Tarea 6</title>
        <link rel="stylesheet" type="text/css" href="index.css"><!--Aqui mando llamar los estilos-->
      </head>
      <body>';
  echo "<h1>Hola, por favor verifica que tus datos sean correctos</h1>";

  echo "<span>Nombre:</span>".$_POST['nombre']."<br/>";
  echo "<span>Apellidos:</span>".$_POST['apellido']."<br/>";
  echo "<span>E-mail:</span>".$_POST['email']."<br/>";
  echo "<span>Contraseña:</span>".$_POST['pass']."<br/>";
  echo "<span>Sexo:</span>".$_POST['sexo']."<br/>";
  echo "<span>Estudios:</span>".$_POST['nivel']."<br/>";
  echo "<span>Aficiones:</span>".$_POST['temas']."<br/>";
  echo "<span>Día de la semana:</span>".$_POST['dia']."<br/>";
  echo "<span>Tu comentario:</span>".$_POST['opin']."<br/>";
  echo "<br>";
  echo "Comprueba tus datos antes de enviarlos, si no están bien vuelve a escribirlos<br>";

  echo "<a href='index.html'>Regresar</a><a href='enviar.php'>Enviar</a>";
 ?>
