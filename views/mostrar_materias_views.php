<!DOCTYPE html>
<html>
<head>
	<title>Historial Academico </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div class="form">
		


	</div>

	<div id="datos">

		<?php  

			$salida = "";

			$salida .= "<table class = 'tabla_datos' >
							<thead>
								<tr>
									<td> Materia </td>
									<td> Lapso 1 </td>
									<td> Lapso 2</td>
									<td> Lapso 3</td>
									<td> Final</td>
							</thead>
							<tbody>
			";			




			foreach ($materias as $fila) {

				$nota_final = ($fila['nota_1'] + $fila['nota_2'] + $fila['nota_3']);
				$nota_final = intdiv($nota_final,3);

				$salida .= "
					<tr>
					<td>".utf8_encode($fila['nombre'])."</td>
					<td>".$fila['nota_1']."</td>
					<td>".$fila['nota_2']."</td>
					<td>".$fila['nota_3']."</td>
					<td>".$nota_final."</td>
					</tr>
				"; 
				
			}

			$salida.= '</tbody></table>';

			echo $salida;



		?>

		
	</div>	


</body>
</html>
