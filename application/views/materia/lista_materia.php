<h3>Listado de Materias - IUSPO</h3>
<table class="display table table-striped table-bordered dataTable" id="tablamateria">
<thead>
	<tr>
		<th>Codigo</th>
		<th>Unidad Curricular</th>
		<th>HT</th>
		<th>HP</th>
		<th>TH</th>
		<th>UC</th>
		<th>Prelacion</th>
		<th></th>
		<th></th>		
	</tr>
</thead>

<tbody>		
<?php 

foreach ($datos_materia as $datos_materia) {
?>

	<tr>
		<td><?php echo $datos_materia['codigo']; ?></td>
		<td><?php echo $datos_materia['unidad_curricular']; ?></td>
		<td><?php echo $datos_materia['horas_teoricas']; ?></td>
		<td><?php echo $datos_materia['horas_practicas']; ?></td>
		<td><?php echo $datos_materia['total_horas']; ?></td>
		<td><?php echo $datos_materia['uni_credito']; ?></td>
		<td><?php echo $datos_materia['cod_prelacion']; ?></td>

		<td>		
			<?php echo anchor("materia_c/editar/".$datos_materia['codigo'], '<i class="icon-circle-arrow-up"></i> Actualizar', 'class = "btn btn-small btn-warning"'); ?>
		</td>
		<td>
			<?php echo anchor('materia_c#', '<i class="icon-remove-sign"></i> Eliminar'," class='delete btn btn-small btn-danger' data-uc='".$datos_materia['unidad_curricular']."' data-id='".$datos_materia["codigo"]."' data-url ='".base_url()."materia_c/eliminar/'"); ?>
		</td>
	</tr>

<?php 
		

}

 ?>
</tbody>
	<tfoot>
	<tr>
		<th>Codigo</th>
		<th>Unidad Curricular</th>
		<th>HT</th>
		<th>HP</th>
		<th>TH</th>
		<th>UC</th>
		<th>Prelacion</th>
		<th></th>
		<th></th>		
	</tr>
	</tfoot>
 </table>