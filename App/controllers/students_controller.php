<?php	
	require_once("../models/students_model.php");

	$estudiantes = new Student();
	$busqueda = $estudiantes->get_all();

	if(isset($_POST['consulta'])){
		$q = $_POST['consulta'];
		$busqueda = $estudiantes -> get_row($q);
	}


	require_once("../views/students_views.php");



?>

