<?php 
	$host='localhost';
	$user = 'root';
	$pass = '';
	$db= 'orchid';

	try {
		$conexion = new PDO(
			'mysql:host='.$host.';
			dbname='.$db,
			$user,
			$pass,
			array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
		);
	} catch (Exception $e) {
		echo "Error de conexión ".$e->getMessage();
	}

?>