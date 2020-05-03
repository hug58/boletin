<?php




	require_once("App/models/students_model.php");
	require_once("App/models/subject_matter_model.php");


	class AcademicController{

		private $model;

		function __construct($id){
			$this->model = new SubjectMatter();
			$this->id = $id;
		}

		public function index(){


			$estudiante = new Student();
			$estudiante = $estudiante -> get_by("id_estudiante",$this->id);

			$historial_academico = new SubjectMatter();

			//temporal hasta que acomode la db
			$historial_academico = $historial_academico ->get_by('id_estudiante',$estudiante[0]["id_estudiante"]);



			$title = "Historial Academico";
			require_once("App/views/header.php");
			require_once("App/views/academic_records_views.php");

		}

		public function create(){

			//Comprobamos que sea un año valido

			$anio = 1;

			if ($anio >= 1 && $anio <= 5 ) {
				$route = "data/secciones.json";
				$data = file_get_contents($route);
				$secciones = json_decode($data,true);
		
				//var_dump($secciones);


				foreach ($secciones[$anio] as $seccion) {
					echo $seccion . "<br>";
				}
			}else{
				header('Location: index?');
			}


		}

	}


  ?>