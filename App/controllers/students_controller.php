
<?php  

	if (file_exists("App/models/students_model.php")) {
			require_once("App/models/students_model.php");
		}else{
			require_once("../models/students_model.php");
		}		

	class StudentController{

		private $model;

		function __construct(){
			$this->model = new Student();
		}

		public function index(){

			$busqueda =  $this->model->get_all();

			if(isset($_POST['consulta'])){
				$q = $_POST['consulta'];
				$busqueda = $estudiantes -> get_row($q);
			}

			require_once("App/views/students_views.php");
		}

		public function create(){


			if (isset($_POST['send'])) {
			
				$id_ci = $_POST['id_ci'];
				$nombres = $_POST['nombres'];
				$apellidos = $_POST['apellidos'];
				$anio_actual = $_POST['anio_actual'];
			

				$data = ["id_ci"  => $id_ci,
						"nombres" =>$nombres,
						"apellidos" => $apellidos,
						"anio_actual" => $anio_actual];

				
				header('Location: index.php');

			}else{
				require_once("App/views/form_new_students_views.php");
			}

		}
	}

?>