<?php  

	require_once("App/models/basemodel.php");

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

