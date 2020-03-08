<?php  
	
	require("datos_conexion.php");

	$mysqli = new mysqli($db_host,$db_usuario,$db_password,$db_nombre);

	$ci = $_GET["ci"];
	$nombres = $_GET["nombres"];
	$apellidos = $_GET["apellidos"];
	$anio_actual = $_GET["anio_actual"];



	$query = "INSERT INTO estudiante (`ci`, `nombres`, `apellidos`, `anio_actual`) VALUES ('$ci','$nombres','$apellidos','$anio_actual')";


	$resultado = $mysqli->query($query);


	if ($resultado != false) {
		echo "estudiante guardado!";
	}else{
		echo "estudiante ya registrado";
	}



	$mysqli->close()


?>