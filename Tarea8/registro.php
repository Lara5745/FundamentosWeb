<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="master.css">
</head>
<body>
<center>
<!--************ 
				start INSERT
			***************** -->
            <h1>Qué espearas para formar parte?!</h1>
<div class="container">
		<img src="new.png" alt="">
		<br>
		<label for=""> Nuevo usuario:</label>
		<form method="POST" action="insertar.php">
					<input type="text" name="nameUser" required>
					<label for="">Contraseña:</label> 
					<input type="password" name="passUser" required>
					<input type="hidden" name="oculto" value="1">
                    <br>
					<input type="submit" value="Registrar" onclick="return check()">
                    <br>
                    <a style="display:block;color:#710041;font-weight:bold;font-size:17px" href="login.php">¿Ya tienes cuenta con nosotros?</a>
                    <br>
                    
		</form>
			<!--************ 
				end INSERT
			*****************-->
		</div>
        <script>
            function check(){
            var mensaje=confirm("¿Estas seguro de tus datos?");
            //Detectamos si el usuario denegó el mensaje
            if(!mensaje) {
                alert("¡Operación Cancelada!");
            }
            return mensaje;
	        }
	    </script>