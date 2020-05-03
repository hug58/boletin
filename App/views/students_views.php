
<!DOCTYPE html>
<html>

<body>

	<section class="principal">


		<div class="tabla_datos" style="margin-top:10px;">

			<a href= index.php?page=nuevos_estudiantes> 
				<button class= 'btn succes'> Añadir Estudiante/s </button> 
			</a> 

			<a href= index.php?page=buscar_estudiante> 
				<button class= 'btn succes' > Buscar </button> 
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

