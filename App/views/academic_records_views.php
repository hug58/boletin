<!DOCTYPE html>
<html>
<head>
	<title>Historial Academico </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">


</head>
<body>

	<div class="search">
		
		<?php  

			foreach ($info_estudiante as $fila) {
		
				$nombres = utf8_encode($fila['nombres']);
				$apellidos = utf8_encode($fila['apellidos']);
				$id_ci = $fila['id_ci'];



				$salida = "<h3>".$nombres." ".$apellidos."<h3>";
				$salida .= "<h4> CI: ".$id_ci."   Año actual: ".$fila['anio_actual']."</h4>";
				echo $salida;
			}

			$salida = "";

		?>


	</div>

	<div id="datos">

		<div class="tabla_datos">
			<?php  
			

				$salida = "<button class= 'btn succes' >"."
					<a href= index?page=nuevo_curricular&id_ci=".$id_ci."> Nuevo año/s</a> </button> ";
		
				echo $salida;
				$salida = "";
			?>	
		</div>

		<?php  

			$salida .= "<table class = 'tabla_datos' >
							<thead>
								<tr>
									<td> Año </td>
									<td> Seccion </td>
									<td> Opciones </td>
							</thead>
							<tbody>
				";		


				foreach ($historial_academico as $fila) {


					$salida .= "
						<tr>
						<td> 
							<a href=index?page=mostrar_materias&anio=".$fila['anio'].">".$fila['anio']."</a>
						</td>
						<td>".$fila['seccion']."</td>


						<td>"."Editar"."</td>

						</tr>
					"; 
				}

			$salida.= '</tbody></table>';

			echo $salida;



		?>

		
	</div>	


</body>

</html>
