
<table class="table table-striped table-condensed" >
<thead>
	<tr>
		<th>ID</th>
		<th>Descripcion</th>
		<th>Valor</th>
		<th>Plan evaluacion id</th>
		<th></th>
		<th></th>	
	</tr>
</thead>

<tbody>		
<?php 

foreach ($datos_evaluacion as $datos_evaluacion) {
?>
	<tr>
		<td><?php echo $datos_evaluacion['id']; ?></td>
		<td><?php echo anchor("estudiante_has_evaluacion/insertar/".$datos_evaluacion['id'],$datos_evaluacion['descripcion']); ?></td>
		<td><?php echo $datos_evaluacion['valor']; ?></td>
		<td><?php echo $datos_evaluacion['plan_evaluacion_id']; ?></td>

		<td>		
			<?php echo anchor("evaluacion/editar/".$datos_evaluacion['id'], 'Actualizar'); ?>
		</td>
		<td>
			<?php echo anchor("evaluacion/eliminar/".$datos_evaluacion['id'], 'Eliminar'); ?>
		</td>
	</tr>

<?php 
	
}

 ?>
</tbody>
 </table>