<?php  

	if (isset($_GET["page"]) ) {

		$page = $_GET["page"];

		if ($page == "historial_academico") {
			require_once("App/controllers/academic_record_controller.php");

		}else if($page == "mostrar_materias"){
			require_once("App/controllers/subjects_controller.php");
		}else if($page == "nuevo_curricular"){
			require_once("App/controllers/new_curricular_controller.php");
		
		}else if($page == "nuevos_estudiantes"){
			require_once("App/controllers/new_students_controller.php");
		}else{

		}

	}else{
		require_once('estudiantes.html');
	}
?>