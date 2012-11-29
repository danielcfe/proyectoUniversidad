
<table class="table table-striped table-condensed" >
<thead>
	<tr>
		<th>Departamento</th>
		<th>Carrera</th>
		<th>Semestre</th>
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

foreach ($datos_semestre as $datos_semestre) {
?>

	<tr>
		<td><?php echo $datos_semestre['departamento']; ?></td>
		<td><?php echo $datos_semestre['carrera']; ?></td>
		<td><?php echo $datos_semestre['semestre']; ?></td>
		<td><?php echo $datos_semestre['codigo']; ?></td>
		<td><?php echo $datos_semestre['unidad_curricular']; ?></td>
		<td><?php echo $datos_semestre['horas_teoricas']; ?></td>
		<td><?php echo $datos_semestre['horas_practicas']; ?></td>
		<td><?php echo $datos_semestre['total_horas']; ?></td>
		<td><?php echo $datos_semestre['uni_credito']; ?></td>
		<td><?php echo $datos_semestre['cod_prelacion']; ?></td>

		<td>		
			<?php echo anchor("semestre/editar/".$datos_semestre['codigo'], 'Actualizar'); ?>
		</td>
		<td>
			<?php echo anchor("semestre/eliminar/".$datos_semestre['codigo'], 'Eliminar'); ?>
		</td>
	</tr>

<?php 
		

}

 ?>
</tbody>
 </table>