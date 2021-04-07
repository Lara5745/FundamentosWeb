<?php 
	include_once 'conn.php';
	session_start();
	$user = $_POST['txtUsu'];
	$pass = $_POST['txtPass'];
	$query = $conexion->prepare('select * from usuarios where nameUser = ? and passUser = ?;');
	$query->execute([$user, $pass]);
	$respuesta = $query->fetch(PDO::FETCH_OBJ);

	if ($respuesta === FALSE) {
		echo 
		'<script>
			alert("Lo lamento, datos incorrectos\n Intentalo de nuevo");
			window.location.href="login.php";
		</script>';
		
		//header('Location: login.php');
	}elseif($query->rowCount() == 1){
		$_SESSION['nameUser'] = $respuesta->nameUser;
		header('location: index.php');
	}
?>