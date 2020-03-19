<?php	
	require_once("App/models/students_model.php");

	$estudiantes = new Student();

	if (isset($_POST['send'])) {
	
		$id_ci = $_POST['id_ci'];
		$nombres = $_POST['nombres'];
		$apellidos = $_POST['apellidos'];
		$anio_actual = $_POST['anio_actual'];
	

		$data = ["id_ci"  => $id_ci,
				"nombres" =>$nombres,
				"apellidos" => $apellidos,
				"anio_actual" => $anio_actual];

		$estudiantes ->create($data);
		
		$students = $estudiantes ->get_by("id_ci",$id_ci);

		#Redirigir o Recargar form de nuevo

		require_once("App/views/table_new_students_view.php");
	}

	else{
		require_once("App/views/form_new_students_views.php");
	}



?>
