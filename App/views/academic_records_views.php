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

		?>


	</div>


</body>
</html>
