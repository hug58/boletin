<!DOCTYPE html>
<html>

<body>

			

	<div id="datos">

		<div class="tabla_datos">  
			<a href=index.php?page=historial_academico&id=<?php echo $estudiante[0]["id_estudiante"] . "&new"; ?>>
				<button class="btn succes">
					Nuevo año/s 
				</button> 
			</a>
		</div>


		<table class="tabla_datos">
	<thead>
		<tr>
			<th colspan="5" rowspan="5">Informacion Del Estudiante</th>
		</tr>
		
	</thead>

		<tbody>
			<td><?php echo "Nombre:".$estudiante[0]["nombres"]?></td>
			<td><?php echo "Apellido:".$estudiante[0]["apellidos"] ?></td>
			<td><?php echo "Cedula:".$estudiante[0]["ci"]?></td>
			<td><?php echo "Curso:".$estudiante[0]["anio_actual"] ?></td>
			<td><?php echo "ID:".$estudiante[0]["id_estudiante"]?></td>
			

			<tr>
				<th colspan="5">Informacion Academica</th>

			</tr>

			<tr>
				<th>Materias</th>
				<th>Lapso 1</th>
				<th>Lapso 2</th>
				<th>Lapso 3</th>
				<th rowspan="1">Promedio</th>
			</tr>

			<tr>
				
			<?php
				//Se define lo que se define
				$route = "data/secciones.json";
				$data = file_get_contents($route);
				$secciones = json_decode($data,true);
				$anio=0;

					if ($estudiante[0]["anio_actual"] == "1-A"|| $estudiante[0]["anio_actual"] == "1-B"){
						$anio=1;
					}	
					else if ($estudiante[0]["anio_actual"] == "2-A"|| $estudiante[0]["anio_actual"] == "2-B"){
						$anio=2;
					}
					else if ($estudiante[0]["anio_actual"] == "3-A"|| $estudiante[0]["anio_actual"] == "3-B"){
						$anio=3;
					}
					else if ($estudiante[0]["anio_actual"] == "4-A"|| $estudiante[0]["anio_actual"] == "4-B"){
						$anio=4;
					}
					else if ($estudiante[0]["anio_actual"] == "5-A"|| $estudiante[0]["anio_actual"] == "5-B"){
						$anio=5;
					}
					else{
						echo "Soy un error,Repórtalo con los de la vela";
					}
				//Si alguna Condición llega a Cumplirse ejecutara esto
				if ($anio >= 1 && $anio <= 5 ) {
				foreach ($secciones[$anio] as $seccion) {
					echo "<tr><th>".$seccion."<td>"."Nota1"."</td>"."<td>"."Nota2"."</td>"."<td>"."Nota3"."</td>"."</th></tr>";
				}
			}
			?> 



			</tr>

		</tbody>



</table>
				
				<tbody>


					<?php foreach ($historial_academico as $fila): ?>

					<tr>
						<td>
							<a href=index.php?page=mostrar_materias&anio= <?php  echo $fila["anio"]; ?> ><?php echo $fila["anio"] ?></a>
						</td>
							<?php echo $fila["seccion"];?>
						<td>

						<td>
							<a href=""> Editar </a>	
						</td>

					</tr>

					<?php endforeach ?>	


				</tbody>
		</table>

		
	</div>	


</body>

</html>
