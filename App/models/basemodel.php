<?php
	
	if (file_exists("../models/conexion.php")) {
		require_once("../models/conexion.php");
	
	}
	else{


		require_once("App/models/conexion.php");
		
	}

	class BaseModel {

		protected $table;
		protected $db;

		function __construct($table){
			$this->db= Connect::conectar();
			$this->table = (string) Connect::$name.".".$table;
			
		}

		public function get_all(){

			$result_set = array();
			$query = "SELECT * FROM $this->table";

			$result = $this->db->query($query);
		

			while ($row = $result->fetch_assoc()) {
           		$result_set[]=$row;
        	}
         
	        return $result_set;


		}

		public function get_by($column,$value){
		
			$result_set = array();
			$query = "SELECT * FROM $this->table WHERE $column = '$value'";

			$result = $this->db->query($query);
		

			while ($row = $result->fetch_assoc()) {
           		$result_set[]=$row;
        	}
         
	        return $result_set;

		}


		public function delete($id){
			#code...
		}


	}

	


 ?>
