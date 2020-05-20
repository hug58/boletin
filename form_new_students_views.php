<!DOCTYPE html>
<html>

<body>


		<div id="principal">

			<div class="box">

				<h2> Registrar Estudiante</h2>	
				
				<form  method="POST">

					<input type="number" name="ci" id="ci" placeholder="CI" required="">
					
					<input type="text" name="nombres" id="nombres" placeholder="Nombres" required="">

					<input type="text" name="apellidos" id="apellidos" placeholder="apellidos" required="">

					<select name="anio_actual" id="anio_actual">
						<option value="1-A">1-A</option>
						<option value="1-B">1-B</option>
						<option value="2-A">2-A</option>
						<option value="2-B">2-B</option>
						<option value="3-A">3-A</option>
						<option value="3-B">3-B</option>
						<option value="4-A">4-A</option>
						<option value="4-B">4-B</option>
						<option value="5-A">5-A</option>
						<option value="5-B">5-B</option>
					</select>

					<button id="submit"  name="send">Registrar</button>

				</form>

				<p> <a href="index.php?page=csv_estudiante" style="color: var(--blue-color);"> Subir estudiantes por un archivo csv </a></p>

			</div>

		</div>		




</body>
</html>