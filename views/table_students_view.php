<!DOCTYPE html>
<html>
<head>
	<title> Estudiantes nuevos </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>

	
			


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

			<?php foreach ($result as $fila): ?>

				<tr>
					<td> 

					<a href=index?page=historial_academico&id=<?php echo $fila["id_estudiante"]; ?> > <?php echo $fila["id_estudiante"]; ?>  </a></td>
					<td><?php echo $fila['ci']; ?></td>
					<td><?php echo utf8_encode($fila['nombres']); ?></td>
					<td><?php echo utf8_encode($fila['apellidos']); ?></td>
					<td><?php echo $fila["anio_actual"]; ?></td>
				</tr>
					 

			<?php endforeach ?>	
			
			</tbody>
	</table>


</body>
</html>



