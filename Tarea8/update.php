<?php  
	session_start();
	if (!isset($_GET['id'])) {
		header('location: index.php');
	}

	


	if (!isset($_SESSION['nameUser'])) {
		header('location: login.php');
	}elseif(isset($_SESSION['nameUser'])){
		include 'conn.php';
		$id = $_GET['id'];

		$sql = $conexion->prepare("SELECT * FROM usuarios WHERE idUser = ?;");
		$sql->execute([$id]);
		$persona = $sql->fetch(PDO::FETCH_OBJ);
		
	}else{
		echo "Error en el sistema";
	}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Editar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="master.css">
</head>
<body>
<div class="head" style="margin-bottom:2%">
		<div  style="display:inline-block;width:60%">
		<label style="font-size: 33px;margin-left:2%;">Editanto a: <?php echo $persona->nameUser; ?></label>
		</div>
		
		<label style="margin-left:29%;font-size: 21px;" for=""><a href="index.php">Regresar</a></label>
		</div>

	<center>
		
		<form method="POST" action="updateAction.php">
			<table style="width:80%;" class="table  table-dark">
			<thead>
				<tr>
					<th scope="col">Nombre</th>
					<th scope="col">Contraseña</th>
					
				</tr>
			</thead>
			<tbody>
				<tr>
				<td><input type="text" name="nameUser" value="<?php echo $persona->nameUser; ?>"></td>
				<td><input type="text" name="passUser" value="<?php echo $persona->passUser; ?>"></td>
				</tr>
				<tr>
				<input type="hidden" name="oculto">
					<input type="hidden" name="id2" value="<?php echo $persona->idUser; ?>">
					<td colspan="2"><input type="submit" value="Editar Usuario"></td>
				</tr>
				</tbody>
			</table>
		</form>
	</center>
</body>
</html>