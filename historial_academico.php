<!DOCTYPE html>
<html>
<head>
	
	<title>Historial académico</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

	<section class="principal">
		<div class="form">
			<?php  
				require('datos_conexion.php');
				$mysqli = new mysqli($db_host,$db_usuario,$db_password,$db_nombre);
				mysqli_set_charset($mysqli,"utf-8");

				$estudiante = $_GET['id_ci'];	
				$query = "SELECT * FROM ESTUDIANTE WHERE id_ci='$estudiante'";



				$resultado = $mysqli->query($query);
				$salida = "";
				

				if ($resultado != false) {
					if ($resultado -> num_rows > 0) {
						$fila = $resultado ->fetch_assoc();

						$salida = "<h3>".$fila['nombres']." ".$fila['apellidos']."<h3>";
						$salida .= "<h4> CI: ".$fila['id_ci']."   Año actual: ".$fila['anio_actual']."</h4>";
						echo $salida;
					}
				}

				$salida = "";

				$mysqli -> close();
			?>
		
		</div>

		<br>

		<div id="datos">
			<?php include('anio_curricular.php') ?>	
		</div>		

	</section>

</body>
</html>