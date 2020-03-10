<?php  
	
	require("datos_conexion.php");

	$mysqli = new mysqli($db_host,$db_usuario,$db_password,$db_nombre);

	$id_ci = $_POST["id_ci"];
	$nombres = $_POST["nombres"];
	$apellidos = $_POST["apellidos"];
	$anio_actual = $_POST["anio_actual"];



	$query = "INSERT INTO estudiante (`id_ci`, `nombres`, `apellidos`, `anio_actual`) VALUES ('$id_ci','$nombres','$apellidos','$anio_actual')";


	$resultado = $mysqli->query($query);


	if ($resultado != false) {
		echo "estudiante guardado!";
	}else{
		echo "estudiante ya registrado";
	}



	$mysqli->close()

?>