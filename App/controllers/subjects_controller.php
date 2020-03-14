<?php  
	
	require_once("models/students_model.php");

	if (isset($_GET["anio"])) {

		$anio = $_GET["anio"];
		$materias = new Subject();
		$materias = $materias -> get_by('id_curricular',intval($anio));

		require_once('views/mostrar_materias_views.php');

	}


?>