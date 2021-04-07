<?php 
	session_start();
	if (isset($_SESSION['nameUser'])) {
		header('Location: index.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Inicio de Sesión</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="master.css">
</head>
<body>
	<center>
		<h1>Inicia sesión para disfutar!</h1>
		<div class="container">
		<form method="POST" action="loginAction.php">
			<img src="logo" alt="">
			<br>
			<label>Usuario: </label>
			<br>
			<input type="text" name="txtUsu" required>
			<br>
			<label>Password: </label>
			<br>
			<input type="password" name="txtPass" required>
			<br>
			<input type="submit" value="Iniciar sesión">
			<br>
			<a style="display:block;color:#710041;font-weight:bold;font-size:17px;" href="registro.php">¿Eres nuevo?</a>
			<br>

		</form>
		</div>

	</center>
	
</html>