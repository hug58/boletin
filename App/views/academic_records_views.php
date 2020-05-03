<!DOCTYPE html>
<html>

<body>

	<div class="search">

		<h3> <?php echo $estudiante[0]["nombres"]." ".$estudiante[0]["apellidos"] ?></h3>
		<h4> CI: <?php echo $estudiante[0]["ci"] ."   Año actual: ". $estudiante[0]["anio_actual"] ?></h4>
		
	</div>



	<div id="datos">

		<div class="tabla_datos">  
			<a href=index.php?page=historial_academico&id=<?php echo $estudiante[0]["id_estudiante"] . "&new"; ?>>
				<button class="btn succes">
					Nuevo año/s 
				</button> 
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
