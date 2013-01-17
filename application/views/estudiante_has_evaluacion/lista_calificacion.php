
<table class="table table-striped table-condensed" >
<thead>
	<tr>
		<th>Cedula del Estudiante</th>
		<th>Descripcion de Evaluacion</th>
		<th>Ponderacion</th>
		<th></th>
		<th></th>	
	</tr>
</thead>

<tbody>		
<?php 

foreach ($datos_evaluacion as $datos_evaluacion) {
?>
	<tr>
		<td><?php echo $datos_evaluacion['estudiante_datos_usuarios_id']; ?></td>
		<td><?php echo $datos_evaluacion['evaluacion_id']; ?></td>
		<td><?php echo $datos_evaluacion['calificacion']; ?></td>

		<td>		
			<?php echo anchor("estudiante_has_evaluacion/editar/".$datos_evaluacion['estudiante_datos_usuarios_id'], 'Actualizar'); ?>
		</td>
		<td>
			<?php echo anchor("estudiante_has_evaluacion/eliminar/".$datos_evaluacion['estudiante_datos_usuarios_id'], 'Eliminar'); ?>
		</td>
	</tr>

<?php 
	
}

 ?>
</tbody>
 </table>