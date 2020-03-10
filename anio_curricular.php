<?php

	require('datos_conexion.php');
	$mysqli = new mysqli($db_host,$db_usuario,$db_password,$db_nombre);
	mysqli_set_charset($mysqli,"utf-8");

	$estudiante = $_GET['id_ci'];	
	$query = "SELECT * FROM UNIDAD_CURRICULAR WHERE id_ci= '$estudiante'";


	$resultado = $mysqli -> query($query);
	//cambiar el formato para aceptar 'ñ '
	mysqli_set_charset($mysqli,"utf-8");

	if($resultado != false){

		if ($resultado -> num_rows > 0) {

			$salida .= "<table class = 'tabla_datos' >
						<thead>
							<tr>
								<td> Año </td>
								<td> Seccion </td>
						</thead>
						<tbody>
			";		

			while ($fila = $resultado ->fetch_assoc()) {
				# code...
				$salida .= "
					<tr>
					<td> 
						<a href=show_materias.php?anio=".$fila['anio'].">".$fila['anio']."</a>
					</td>
					<td>".$fila['seccion']."</td>
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