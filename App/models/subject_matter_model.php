<?php  

	require_once("App/models/basemodel.php");

	class SubjectMatter extends BaseModel{

		function __construct(){
			parent::__construct('unidad_curricular');
		}

		public function create($id,$anio,$seccion){
			

			#$query = "INSERT INTO $this->table (id__estudiante,anio,seccion) VALUES ('".$id. "' , '".$anio."' , '". $seccion . "');";
			$query = "INSERT INTO $this->table (id__estudiante,anio,seccion) VALUES ('$id','$anio','$seccion')";
			
			$result = $this->db->query($query);
			return  $result;
			
		}

	}

	class Subject extends BaseModel{
		function __construct(){
			parent::__construct('materia');
		}

		public function create($id_curricular,$nombre,$notas){

		}
	}



?>

