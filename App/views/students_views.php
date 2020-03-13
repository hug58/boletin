

<?php  

	$salida = "";

	if ($busqueda) {

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


		foreach ($busqueda as $es) {
			# $es es el estudiante
			$salida .= "
				<tr>
				<td> 
					<a href=historial_academico.php?id_ci=".$es['id_ci'].">".$es['id_ci']."</a>
				</td>
				<td>".$es['nombres']."</td>
				<td>".$es['apellidos']."</td>
				<td>".$es['anio_actual']."</td>
				</tr>
			"; 

		}
		
		$salida.= '</tbody></table>';


	}else{
		$salida .= "No hay datos :/";
	}

	echo $salida;

?>

