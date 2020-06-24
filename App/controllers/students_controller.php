
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

		public function index($num_page){

			$total_paginas = $this->model->num_page_totaly;


			//Si la pagina actual es mayor que el total de paginas o si es 0:
			//si la pagina actual es menor o igual que 0:
			//redirigir a pagina 1
			if ($num_page > $total_paginas && $total_paginas != 0 || $num_page <= 0 ) {
				header("Location: index.php?num_page=1");
			}
			
			$students =  $this->model->get_page($num_page-1);


			$title = "Estudiantes";

			require_once("App/views/header.php");
			require_once("App/views/students_views.php");
		}

		public function create(){


			if (isset($_POST["send"])) {
			
				$ci = $_POST["ci"];
				$nombres = $_POST["nombres"];
				$apellidos = $_POST["apellidos"];
				$anio_actual = $_POST["anio_actual"];
			

				$data = ["ci"  => $ci,
						"nombres" =>$nombres,
						"apellidos" => $apellidos,
						"anio_actual" => $anio_actual];

				$this->model->create($data);

				header("Location: index.php?num_page=1");

			}else{

				$title = "Registro de estudiantes";
				require_once("App/views/header.php");
				require_once("App/views/form_new_students_views.php");
			}

		}


		public function create_with_csv(){

			if(isset($_POST["send"])){

				$data = $_FILES["fichero_estudiantes"];

				if($data["tmp_name"]){


					$handle_file = fopen($data["tmp_name"],"r");
					$row = 0;

					while ( $datos = fgetcsv($handle_file,1000,",")) {


						if ($row > 0) {
							$data = [
								"ci"  => $datos[0],
								"nombres" =>$datos[1],
								"apellidos" => $datos[2],
								"anio_actual" => $datos[3] . $datos[4],
							];


							$this->model->create($data);
						}else{
							$row ++;
						}

					}

					header("Location: index.php?num_page=1");


				}else{
					echo "Error no se pudo copiar el archivo";
				}



			}else{

				$title = "Registro de estudiantes";
				require_once("App/views/header.php");
				require_once("App/views/read_csv_students_view.php");

			}



		}

	}

?>