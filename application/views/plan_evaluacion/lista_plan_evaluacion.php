
<table class="table table-striped table-condensed" >
<thead>
	<tr>
		<th>ID</th>
		<th>Descripcion</th>
		<th>Id del docente</th>
		<th>Codigo de la materia</th>
		<th></th>
		<th></th>		
	</tr>
</thead>

<tbody>		
<?php 

foreach ($datos_plan_evaluacion as $datos_plan_evaluacion) {
?>

	<tr>
		<td><?php echo $datos_plan_evaluacion['id']; ?></td>
		<td><?php echo anchor("evaluacion/insertar/".$datos_plan_evaluacion['id'],$datos_plan_evaluacion['descripcion']); ?></td>
		<td><?php echo $datos_plan_evaluacion['profesor_datos_usuarios_id']; ?></td>
		<td><?php echo $datos_plan_evaluacion['materia_codigo']; ?></td>
		<td>		
			<?php echo anchor("plan_evaluacion/editar/".$datos_plan_evaluacion['id'], 'Actualizar'); ?>
		</td>
		<td>
			<?php echo anchor("plan_evaluacion/eliminar/".$datos_plan_evaluacion['id'], 'Eliminar'); ?>
		</td>
	</tr>

<?php 
		

}

 ?>
</tbody>
 </table>