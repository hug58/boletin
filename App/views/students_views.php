
<!DOCTYPE html>
<html>
<head>
	
	<title>Estudiantes</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

	<section class="principal">



<div class="tabla_datos">

	<a href= index?page=nuevos_estudiantes> <button class= 'btn succes' > Añadir Estudiante/s </button> 
	</a> 

	<a href= index?page=buscar_estudiante> <button class= 'btn succes' > Buscar </button> 
	</a>

</div>


	<?php  
		header("Content-Type: text/html;charset=utf-8");


	$salida = "";

	if ($busqueda) {


		$salida .= "<table class = 'tabla_datos' >
						<thead>
							<tr>
								<td> CI </td>
								<td> Nombres </td>
								<td> Apellido </td>
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
		$salida .= "<h3 style= 'text-align:center;'> Estudiante no encontrado &#128517 </h3>";
	}

	echo $salida;

		?>

			
		</div>		

	</section>



</body>
</html>

