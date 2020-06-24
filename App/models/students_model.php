<?php
	
	if (file_exists("App/models/basemodel.php")) {

		require_once("App/models/basemodel.php");


	}else{
		require_once("../models/basemodel.php");
	}

	class Student extends BaseModel{

		private $RESULT_LIMIT = 10;
		public $num_page_totaly;

		function __construct(){
			parent::__construct('estudiante');


			//Contando el numero de paginas totales
			$this->num_page_totaly = $this->db->query("SELECT * FROM db_juan_bosco.estudiante;") ->num_rows;

			//redondear a positivo
			$this->num_page_totaly = ceil($this->num_page_totaly/$this->RESULT_LIMIT);
		}


		public function get_row($q){

			$result_set = array();
			$query =  "SELECT * FROM $this->table WHERE ci  LIKE '%$q%'  OR nombres LIKE '%$q%' LIMIT $this->RESULT_LIMIT";

			$result = $this->db->query($query);


			while($row= $result->fetch_assoc()) {
			 		$result_set[]=$row;
			 	} 

			return $result_set;		
	
		}

		public function get_page($num_page){
			
			$result_set = array();
			$num_page = $num_page*$this->RESULT_LIMIT;

			$query = "SELECT * FROM $this->table ORDER BY id_estudiante DESC LIMIT $num_page,$this->RESULT_LIMIT";

			$result = $this->db->query($query);
			

			while ($row = $result->fetch_assoc()) {
           		$result_set[]=$row;
        	}
         
	        return $result_set;

		}


		public function create($data){


			$ci = $data['ci'];
			$nombres = $data['nombres'];
			$apellidos = $data['apellidos'];
			$anio_actual = $data['anio_actual'];


			#$query = "INSERT INTO $this->table (`ci`, `nombres`, `apellidos`, `anio_actual`) VALUES ('".."','".$data['nombres']."','".$data['apellidos']."','".$data['anio_actual']."')  ON DUPLICATE KEY UPDATE anio_actual = '".$data['anio_actual']."',nombres='".$data['nombres']. "', apellidos= '".$data['apellidos']. "';";
			

			$query = "INSERT INTO $this->table (`ci`, `nombres`, `apellidos`, `anio_actual`) VALUES ('$ci','$nombres','$apellidos','$anio_actual') ON DUPLICATE KEY UPDATE anio_actual= '$anio_actual',nombres= '$nombres',apellidos= '$apellidos'";

			$result = $this->db->query($query);
			return  $result;
		}




	}


  ?>