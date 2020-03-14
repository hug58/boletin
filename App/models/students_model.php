<?php
	
	if (file_exists("../models/conexion.php")) {
		require_once('../models/conexion.php');
	}
	else{
		require_once('models/conexion.php');
	}

	class BaseModel {

		protected $table;
		protected $db;

		function __construct($table){
			$this->db= Connect::conectar();
			$this->table = (string) $table;
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



	}


	class Student extends BaseModel{

		function __construct(){
			parent::__construct('ESTUDIANTE');
		}


		public function get_row($q){

			$result_set = array();
			$query =  "SELECT * FROM $this->table WHERE id_ci  LIKE '%$q%'  OR nombres LIKE '%$q%' ";

			$result = $this->db->query($query);


			while($row= $result->fetch_assoc()) {
			 		$result_set[]=$row;
			 	} 

			return $result_set;		
	
		}


	}

	

	class SubjectMatter extends BaseModel{

		function __construct(){
			parent::__construct('UNIDAD_CURRICULAR');
		}

	}

	class Subject extends BaseModel{
		function __construct(){
			parent::__construct('MATERIA');
		}
	}


 ?>
