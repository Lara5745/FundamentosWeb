	<?php  
	if (!isset($_POST['oculto'])) {
		exit();
	}
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "orchid";
	// Creamos la conexión
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Revisamos la conexión
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	$usuario = $_POST['nameUser'];
	$pass = $_POST['passUser'];
	// Realizamos la consulta para saber si coincide con uno de esos criterios
	$sql = "select * from usuarios where nameUser='$usuario'";
	$result = mysqli_query($conn, $sql);
	
	// Validamos si hay resultados
	if(mysqli_num_rows($result)>0)
	{
		// Si es mayor a cero imprimimos que ya existe el usuario
		echo 
		'<script>
			alert("Lo siento\nAlguien ya te gano ese nombre de usuario  (ツ)_/¯");
			window.location.href="registro.php";
		</script>';
	}
	else
	{

	$sql2 = "INSERT INTO usuarios(nameUser, passUser)VALUES ('$usuario', '$pass')";
	if (mysqli_query($conn, $sql2)) {
		// En caso de que se ingrese correctamente
		echo 
		'<script>
			alert("Operación realizada con Éxito!");
			window.location.href="login.php";
		</script>';
		//header('Location: index.php');
	} else {
		// Mostramos si hay algun error al insertar registro
		echo "Error: " . $sql2 . "" . mysqli_error($conn);
	}
		
	}
?>