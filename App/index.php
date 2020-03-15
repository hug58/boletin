<?php  

	if (isset($_GET["page"]) ) {

		$page = $_GET["page"];

		if ($page == "historial_academico") {
			require_once("controllers/academic_record_controller.php");

		}else if($page == "mostrar_materias"){
			require_once("controllers/subjects_controller.php");
		}else{
		}

	}else{
		require_once('estudiantes.html');
	}
?>