<!DOCTYPE html>
<html>

<body>

	<div class="search">
<table class="tabla_datos">
	<thead>
		<tr>
			<th style="text-align: center;" colspan="5" rowspan="5">Informacion Del Estudiante</th>
		</tr>
		
	</thead>
		<td><?php echo "Nombre:".$estudiante[0]["nombres"]?></td>
			<td><?php echo "Apellido:".$estudiante[0]["apellidos"] ?></td>
			<td><?php echo "Cedula:".$estudiante[0]["ci"]?></td>
			<td><?php echo "Curso:".$estudiante[0]["anio_actual"] ?></td>
			<td><?php echo "ID:".$estudiante[0]["id_estudiante"]?></td>
		</table>
	</div>



	<div id="datos">

		<div class="tabla_datos">  
			<a href=index.php?page=historial_academico&id=<?php echo $estudiante[0]["id_estudiante"] . "&new"; ?>>
					Nuevo año/s 
				 
			</a>
		</div>


		<table class = 'tabla_datos' >
				<thead>
					<tr>
						<td> Año </td>
						<td> Seccion </td>
						<td> Opciones </td>
					</tr>
				</thead>
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
