<?php

	require_once("models/students_model.php");

	if (isset($_GET['id_ci'])) {
		$estudiante = $_GET['id_ci'];
		$info_estudiante = new Student();	
		$info_estudiante = $info_estudiante->get_by("id_ci",$estudiante);
	
		require_once("views/academic_records_views.php");

	}else{
		echo "Estudiante no encontrado";
	}


  ?>