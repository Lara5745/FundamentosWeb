<?php
echo '<!DOCTYPE HTML>
<html>
<head>
  <title>Tarea 7</title>
  <link rel="stylesheet" type="text/css" href="index.css"><!--Aqui mando llamar los estilos-->
</head>
<body>';

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "orchid";
    
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if (!$conn) 
    {
        die("No hay conexión: ".mysqli_connect_error());
    }
    
    $nombre = $_POST["txtusuario"];
    $pass = $_POST["txtpassword"];
    
    
    $query = mysqli_query($conn,"SELECT * FROM login WHERE usuario = '".$nombre."' and password = '".$pass."'");
    $nr = mysqli_num_rows($query);
    
    if($nr == 1)
    {
        //header("Location: pagina.html")
        echo "<h1 style='font-size:30px'>Bienvenido $nombre</h1>"; 
        echo "<section id='php'> Disfruta de tus beneficios como socio.
        <a href='index.html'>Volver al inicio.</a></section>";
    }
    else if ($nr == 0) 
    {
        //header("Location: index.html");
        echo "<h1 style='font-size:30px'>Lo lamentamos, AÚN NO formas parte de nuestro equipo.</h1>"; 
        echo "<section id='php'> En caso que si seas miebro, por favor, revisa bien tus datos.
        <a href='index.html'>Volver a intentar</a></section>";
    }
        
?>