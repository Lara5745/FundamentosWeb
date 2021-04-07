<?php  
include 'conn.php';
	/*if (!isset($_GET['id'])) {
		header('Location:login.php');
	}*/
	session_start();

	$id = $_GET['id'];
	$sql = $conexion->prepare("DELETE FROM usuarios WHERE idUser = ?;");
	$resultado = $sql->execute([$id]);

	if ($resultado === TRUE) {
		header('location: index.php');
	}else{
		echo "Error";
	}

?>