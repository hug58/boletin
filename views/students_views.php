
<!DOCTYPE html>
<html>

<body>
	<header>
		<h1>Lista de Estudiantes</h1>
	</header>

	<section class="principal">


		<div class="buttons-students" style="margin-top:10px;">

			<a href= index.php?page=nuevos_estudiantes> 
				 Añadir Estudiante/s 
			</a> 

			<a href= index.php?page=buscar_estudiante> 
				 Buscar
			</a>

		</div>

		<table class="tabla_datos">
			<thead>
				<tr>
					<td> ID </td>
					<td> CI </td>
					<td> Nombres </td>
					<td> Apellido </td>
					<td> Año </td>
			</thead>
			<tbody>	

			<?php foreach ($students as $fila): ?>

				<tr>
					<td> 

					<a href=index.php?page=historial_academico&id=<?php echo $fila["id_estudiante"]; ?> > <?php echo $fila["id_estudiante"]; ?>  </a></td>
					<td><?php echo $fila['ci']; ?></td>
					<td><?php echo utf8_encode($fila['nombres']); ?></td>
					<td><?php echo utf8_encode($fila['apellidos']); ?></td>
					<td><?php echo $fila["anio_actual"]; ?></td>
				</tr>
					 

			<?php endforeach ?>	
			
			</tbody>
		</table>


		<?php  require_once("pagination.php");?>		


	</section>

</body>
</html>

