<?php  

	/* 
	
		RUTAS DE LA APP, POR EL MOMENTO USARÉ ESTO, 
		ESTO CAMBIARA CON RUTAS MÁS LIMPIAS MODIFICANDO EL acceso de apache
	
	*/


	if (isset($_GET["page"]) ) {

		$page = $_GET["page"];

		if ($page == "historial_academico") {
			if (isset($_GET["id"])) {
				require_once("App/controllers/academic_record_controller.php");
				$id = $_GET["id"];
				$controller = new AcademicController($id);

				if (isset($_GET["new"])) {

					$controller -> create();

				}else{
					$controller -> index();
				}

			}else{
				header("Location: index.php?num_page=1");
			}





		}else if($page == "mostrar_materias"){
			require_once("App/controllers/subjects_controller.php");
		}else if($page == "nuevo_curricular"){
			require_once("App/controllers/new_curricular_controller.php");
		




		}else if($page == "nuevos_estudiantes"){

			require_once('App/controllers/students_controller.php');
			$controller = new StudentController();
			$controller -> create();


		}else if($page == "buscar_estudiante"){
			require_once("estudiantes.html");
		}else if($page == "csv_estudiante"){

			require_once('App/controllers/students_controller.php');
			$controller = new StudentController();
			$controller -> create_with_csv();
		}

	}else{


		require_once('App/controllers/students_controller.php');
		
		$num_page = 1;
		if (isset($_GET["num_page"])) {
			$num_page = intval($_GET["num_page"]);
		}else{

			header('Location:index.php?num_page=1');
		}

		
		$controller = new StudentController();
		$controller -> index($num_page);

	}
?>