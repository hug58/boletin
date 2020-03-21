<?php
	
	if (file_exists("App/models/basemodel.php")) {
		require_once("App/models/basemodel.php");
	}else{
		require_once("../models/basemodel.php");
	}

	class Student extends BaseModel{

		private $RESULT_LIMIT = 10;

		function __construct(){
			parent::__construct('ESTUDIANTE');
		}


		public function get_row($q){

			$result_set = array();
			$query =  "SELECT * FROM $this->table WHERE id_ci  LIKE '%$q%'  OR nombres LIKE '%$q%' LIMIT $this->RESULT_LIMIT";

			$result = $this->db->query($query);


			while($row= $result->fetch_assoc()) {
			 		$result_set[]=$row;
			 	} 

			return $result_set;		
	
		}

		public function get_page($num_page){
			
			$result_set = array();
			$query = "SELECT * FROM $this->table LIMIT $this->RESULT_LIMIT";

			$result = $this->db->query($query);
		

			while ($row = $result->fetch_assoc()) {
           		$result_set[]=$row;
        	}
         
	        return $result_set;

		}


		public function create($data){


			$query = "INSERT INTO `ESTUDIANTE` (`id_ci`, `nombres`, `apellidos`, `anio_actual`) VALUES ('".$data['id_ci']."','".$data['nombres']."','".$data['apellidos']."','".$data['anio_actual']."');";


			$result = $this->db->query($query);
			return  $result;
		}


	}


  ?>