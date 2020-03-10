<?php 

	require('datos_conexion.php');
	$mysqli = new mysqli($db_host,$db_usuario,$db_password,$db_nombre);

	$anio_curricular = $_GET['anio'];
	$anio_curricular = intval($anio_curricular);

	$salida = "";
	$query = "SELECT * FROM MATERIA WHERE id_curricular=$anio_curricular";

	$resultado = $mysqli -> query($query);


if($resultado != false){

		if ($resultado -> num_rows > 0) {

			$salida .= "<table class = 'tabla_datos' >
						<thead>
							<tr>
								<td> Materia </td>
								<td> Nota </td>
								<td> Lapso </td>
						</thead>
						<tbody>
			";		

			while ($fila = $resultado ->fetch_assoc()) {
				# code...
				$salida .= "
					<tr>
					<td>".$fila['nombre']."</td>
					<td>".$fila['nota']."</td>
					<td>".$fila['lapso']."</td>
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