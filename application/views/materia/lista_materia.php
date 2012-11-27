
<table class="table table-striped table-condensed" id="tablamateria">
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
			<?php echo anchor("materia_c/editar/".$datos_materia['codigo'], 'Actualizar'); ?>
		</td>
		<td>
			<?php echo anchor("materia_c/eliminar/".$datos_materia['codigo'], 'Eliminar'); ?>
		</td>
	</tr>

<?php 
		

}

 ?>
</tbody>
 </table>