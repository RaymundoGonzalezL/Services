<?php
	$server = "134.209.10.83";
	$username = "root";
	$password = "innercircle1";
	$db = "services";
	$conexion = mysqli_connect($server, $username, $password, $db);
	if(!$conexion){
		die("Fallo en la Conexión: ".mysqli_connect_error());
	}

?>