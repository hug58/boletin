<!DOCTYPE html>
<html>
<head>
	<title>Registro de estudiantes</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="utf-8">
</head>


<body>


		<div id="principal">

			<div class="box">

				<h2> Registrar Estudiante</h2>	
				
				<form  method="POST">

					<input type="number" name="id_ci" id="id_ci" placeholder="CI" required="">
					
					<input type="text" name="nombres" id="nombres" placeholder="Nombres" required="">

					<input type="text" name="apellidos" id="apellidos" placeholder="apellidos" required="">

					<input type="text" name="anio_actual" id="anio_actual" placeholder="Año cursante" required="">

					<button id="submit"  name="send">Registrar</button>

				</form>

				<p> <a href="" style="color: var(--blue-color);"> Subir estudiantes por un archivo csv </a></p>

			</div>

		</div>		




</body>
</html>