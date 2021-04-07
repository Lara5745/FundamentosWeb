<?php 
if (!isset($_POST['oculto'])) {
	header('location: index.php');
}
	include 'conn.php';
	$id2 = $_POST['id2'];
	$name = $_POST['nameUser'];
	$pass = $_POST['passUser'];

	$sql = $conexion->prepare("UPDATE usuarios SET nameUser = ?, passUser = ? WHERE idUser = ?;");
	$resultado = $sql->execute([$name,$pass,$id2]);

	if ($resultado === TRUE) {
		header('location: index.php');
	}else{
		echo "Error";
	}
?>