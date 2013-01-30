
<div class="row-fluid">
		<div class="span9">
			<h2>Listado de Evaluaciones - IUSPO</h2>
		</div>
	</div>

<?php echo anchor("evaluacion/insertar", "Agregar Evaluacion", "class= 'btn btn-primary'; style= 'float:right; margin-bottom:15px'") ?>

<table class="table table-striped table-condensed" id= "tablaevaluaciones">
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
		<td><?php echo $datos_evaluacion['descripcion']; ?></td>
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