<?php

	require_once("App/models/students_model.php");
	require_once("App/models/subject_matter_model.php");


	if (isset($_GET['id_ci'])) {
		$estudiante = $_GET['id_ci'];
		$info_estudiante = new Student();	
		$info_estudiante = $info_estudiante->get_by("id_ci",$estudiante);
	

		$historial_academico = new SubjectMatter();
		$historial_academico = $historial_academico ->get_by('id_ci',$estudiante);

		require_once("App/views/academic_records_views.php");

	}else{
		echo "Estudiante no encontrado";
	}


  ?>