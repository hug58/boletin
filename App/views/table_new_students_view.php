<!DOCTYPE html>
<html>
<head>
	<title> Estudiantes nuevos </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>

	<?php  

		$salida = "";

		$salida .= "<table class = 'tabla_datos' >
						<thead>
							<tr>
								<td> CI </td>
								<td> Nombres </td>
								<td> Apellidos </td>
								<td> Año </td>
						</thead>
						<tbody>
			";			




		foreach ($students as $fila) {

			$salida .= "
			<tr>
				<td>".$fila['id_ci']."</td>
				<td>".utf8_encode($fila['nombres'])."</td>
				<td>".utf8_encode($fila['apellidos'])."</td>
				<td>".$fila['anio_actual']."</td>
			</tr>"; 
					
		}

		$salida.= '</tbody></table>';

		echo $salida;

	?>


</body>
</html>



