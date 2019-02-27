<?php

	//Llamada EJEMPLO: http://localhost/Services/setEvaluacion.php?estudiante=Cansino%20Jacome%20Fernando&evaluador=Pepe%20Mendez&asesores=Torreblanca&tipoPosgrado=1&tipoEvaluacion=2&compresion=10&organizacion=10&profundidad=5&calidad=10&manejo=5&capacidad=10&integracion=8&nivel=10&audiovisuales=5&presentacion=4&gramatica=5&tiempo=5&comentarios=Muy%20Chido
	require 'script/db.php';

	//Obtain ID
	$nombreEstudiante = $_GET['estudiante'];
	$query = 'SELECT idEstudiante FROM estudiantes WHERE nombre = "'.$nombreEstudiante.'"';
	$resultado = mysqli_query($conexion, $query); 
	$row = mysqli_fetch_array($resultado, MYSQLI_NUM);
	$idEstudiante = $row[0];

	//------
	$evaluador = 		$_GET['evaluador'];
	$asesores = 		$_GET['asesores'];
	$tipoPosgrado = 	$_GET['tipoPosgrado'];
	$tipoEvaluacion = 	$_GET['tipoEvaluacion'];
	$compresion = 		$_GET['compresion'];
	$organizacion =		$_GET['organizacion'];
	$profundidad = 		$_GET['profundidad'];
	$calidad =			$_GET['calidad'];
	$manejo =			$_GET['manejo'];
	$capacidad = 		$_GET['capacidad'];
	$integracion =		$_GET['integracion'];
	$nivel =			$_GET['nivel'];
	$audiovisuales =	$_GET['audiovisuales'];
	$presentacion =		$_GET['presentacion'];
	$gramatica =		$_GET['gramatica'];
	$tiempo =			$_GET['tiempo'];
	$comentarios =		isset($_GET['comentarios']) ? $_GET['comentarios'] : "Ningún Comentario";
	//------

	$query = 'INSERT INTO evaluaciones (idEstudiante, evaluador, asesores, tipoPosgrado, tipoEvaluacion, compresion, organizacion, profundidad, calidad, manejo, capacidad, integracion, nivel, audiovisuales, presentacion, gramatica, tiempo, comentarios) VALUES('.$idEstudiante.',"'.$evaluador.'","'.$asesores.'",'.$tipoPosgrado.','.$tipoEvaluacion.','.$compresion .','.$organizacion.','.$profundidad.','.$calidad.','.$manejo.','.$capacidad.','.$integracion.','.$nivel.','.$audiovisuales.','.$presentacion.','.$gramatica.','.$tiempo.',"'.$comentarios.'")';

	$resultado = mysqli_query($conexion, $query);
	if($resultado){
		echo "OK";
	}else{
		echo "ERROR";
	}
?>