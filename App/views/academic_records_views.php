<!DOCTYPE html>
<html>
<head>
	<title>Historial Academico </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

	<div class="form">
		
		<?php  

			foreach ($info_estudiante as $fila) {
		
				$salida = "<h3>".$fila['nombres']." ".$fila['apellidos']."<h3>";
				$salida .= "<h4> CI: ".$fila['id_ci']."   Año actual: ".$fila['anio_actual']."</h4>";
				echo $salida;
			}

			$salida = "";

		?>


	</div>

	<div id="datos">

		<?php  

			$salida .= "<table class = 'tabla_datos' >
							<thead>
								<tr>
									<td> Año </td>
									<td> Seccion </td>
							</thead>
							<tbody>
				";		


				foreach ($historial_academico as $fila) {


					$salida .= "
						<tr>
						<td> 
							<a href=mostrar_materias.php?anio=".$fila['anio'].">".$fila['anio']."</a>
						</td>
						<td>".$fila['seccion']."</td>
						</tr>
					"; 
				}

			$salida.= '</tbody></table>';

			echo $salida;



		?>

		
	</div>	


</body>
</html>
