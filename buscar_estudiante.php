<?php 

	require('datos_conexion.php');
	$mysqli = new mysqli($db_host,$db_usuario,$db_password,$db_nombre);


	$salida = "";
	$query = "SELECT * FROM estudiante";

	if (isset($_POST['consulta'])) {
		# code...
		$q = $mysqli -> real_escape_string($_POST['consulta']);
		$query =  "SELECT * FROM ESTUDIANTE WHERE id_ci  LIKE '%$q%'  OR nombres LIKE '%$q%' ";  


	}


	$resultado = $mysqli -> query($query);
	//cambiar el formato para aceptar 'ñ '
	mysqli_set_charset($mysqli,"utf-8");

	if($resultado != false){

		if ($resultado -> num_rows > 0) {

			$salida .= "<table class = 'tabla_datos' >
						<thead>
							<tr>
								<td> CI </td>
								<td> Nombres </td>
								<td> Apeliidos </td>
								<td> Año </td>
						</thead>
						<tbody>
			";		

			while ($fila = $resultado ->fetch_assoc()) {
				# code...
				$salida .= "
					<tr>
					<td> 
						<a href=historial_academico.php?id_ci=".$fila['id_ci'].">".$fila['id_ci']."</a>
					</td>
					<td>".$fila['nombres']."</td>
					<td>".$fila['apellidos']."</td>
					<td>".$fila['anio_actual']."</td>
					</tr>
				"; 
			}

			$salida.= '</tbody></table>';

		}else{
			$salida .= "No hay datos :/";
		}


		echo $salida;

	}

	$mysqli -> close();

 ?>