<?php	
	require_once("../models/students_model.php");

	$students = new Student();
	$result = $students->get_page(0);

	if(isset($_POST['consulta'])){
		$q = $_POST['consulta'];
		$result = $students -> get_row($q);
	}


	require_once("../views/table_students_view.php");



?>