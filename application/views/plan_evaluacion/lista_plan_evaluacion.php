
	<div class="row-fluid">
		<div class="span9">
			<h2>Listado de Planes de evaluacion - IUSPO</h2>
		</div>
	</div>


<table class="table table-striped table-condensed" id ="tablaplan_evaluacion" >
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
			<?php echo anchor("plan_evaluacion/editar/".$datos_plan_evaluacion['id'], '<i class="icon-circle-arrow-up"></i> Actualizar', 'class = "btn btn-small btn-warning"');  ?>
		</td>
		<td>
			<?php echo anchor('plan_evaluacion#', '<i class="icon-remove-sign"></i> Eliminar'," class='delete btn btn-small btn-danger' data-uc='".$datos_plan_evaluacion['descripcion']."' data-id='".$datos_plan_evaluacion["id"]."' data-url ='".base_url()."plan_evaluacion/eliminar/'"); ?>
		</td>
	</tr>

<?php 
		

}

 ?>
</tbody>
 </table>