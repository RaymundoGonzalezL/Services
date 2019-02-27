<?php
	require 'script/db.php';
	header("Content-Type: application/json; charset=UTF-8");
	$query = 'SELECT nombre FROM estudiantes';

	$consulta = mysqli_query($conexion, $query);

	$resultado = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
	
	echo json_encode($resultado);
?>