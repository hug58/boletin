<?php 

	require('datos_conexion.php');
	$mysqli = new mysqli($db_host,$db_usuario,$db_password,$db_nombre);


	$salida = "";
	$query = "SELECT * FROM estudiante";

	if (isset($_POST['consulta'])) {
		# code...
		$q = $mysqli -> real_escape_string($_POST['consulta']);
		$query =  "SELECT * FROM ESTUDIANTE WHERE ci  LIKE '%$q%'  OR nombres LIKE '%$q%' ";  


	}


	$resultado = $mysqli -> query($query);
	mysqli_set_charset($mysqli,"utf-8");

	if($resultado != false){

		if ($resultado -> num_rows > 0) {

			$salida .= "<table class = 'tabla_datos' >
						<thread>
							<tr>
								<td> CI </td>
								<td> NOMBRES </td>
								<td> APELLIDOS </td>
								<td> AÑO </td>
						</thread>
						<tbody>
			";		

			while ($fila = $resultado ->fetch_assoc()) {
				# code...
				$salida .= "
					<tr>
					<td>".$fila['ci']."</td>
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