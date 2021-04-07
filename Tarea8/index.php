<?php
    session_start();
    if (!isset($_SESSION['nameUser'])) {
        header('Location: login.php');
    } elseif (isset($_SESSION['nameUser'])) {
        include 'conn.php';
        $sql = $conexion->query("SELECT * FROM usuarios;");
        $usuarios = $sql->fetchAll(PDO::FETCH_OBJ);
    } else {
        echo "Error en el sistema";
    }


    
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Lista de usuarios</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="master.css">
</head>
<body>
	
		<div class="head" style="margin-bottom:2%">
		<div  style="display:inline-block;width:60%">
		<label style="font-size: 33px;margin-left:2%;">Bienvenido: <?php echo $_SESSION['nameUser'] ?></label>
		</div>
		
		<label style="margin-left:29%;font-size: 21px;" for=""><a href="logout.php">Cerrar Sesión</a></label>
		</div>
		<center>
		<h3>Lista de usuarios</h3>
		<table style="width:80%;" class="table  table-dark">
		<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Usuario</th>
				<th scope="col">Contraseña</th>
				<th scope="col">Editar</th>
				<th scope="col">Eliminar</th>
			</tr>
			</thead>
			<tbody>

			<?php
                foreach ($usuarios as $row) {
                    ?>
					<tr>
						<th scope="row"><?php echo $row->idUser; ?></th>
						<td><?php echo $row->nameUser; ?></td>
						<td><?php echo $row->passUser; ?></td>
						<td><a class="btn btn-block btn-info" href="update.php?id=<?php echo $row->idUser; ?>">Editar</a></td>
						<td><a class="btn btn-block btn-danger" onclick="return check();" href="delete.php?id=<?php echo $row->idUser; ?>">Eliminar</a></td>
					</tr>
					<?php
                }
            ?>
			</tbody>
			
		</table>

	</center>
	<script>
	function check(){
		var mensaje=confirm("¿Estas seguro de querer eliminar este registro?");
		//Detectamos si el usuario denegó el mensaje
		if(!mensaje) {
			alert("¡Operación Cancelada!");
		}
		return mensaje;
	}
	</script>
</body>
</html>