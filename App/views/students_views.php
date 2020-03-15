<?php  
	header("Content-Type: text/html;charset=utf-8");

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

			$nombres = utf8_encode($es['nombres']);
			$apellidos = utf8_encode($es['apellidos']);

			$salida .= "
				<tr>
				<td> 
					<a href=index?page=historial_academico&id_ci=".$es['id_ci'].">".$es['id_ci']."</a>
				</td>
				<td>".$nombres."</td>
				<td>".$apellidos."</td>
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

