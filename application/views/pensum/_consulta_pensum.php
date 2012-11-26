<div><h4><a class = "btn btn-primary" type = "link" href = "<?=base_url()?>/pensum/agregar">Insertar una nuevo Pensum</a><h4></div>

<table class="table table-striped table-condensed" >
<thead>
	<tr>
		<th>Id </th>
		<th>Fecha</th>
		<th>Carrera</th>		
	</tr>
</thead>

<tbody>		
<?php 

foreach ($pensum as $pensum) {
?>

	<tr>
		<td><?php echo $pensum['id']; ?></td>
		<td><?php echo $pensum['fecha']; ?></td>
		<td><?php echo $pensum['nombre']; ?></td>
		<td>		
			<?php echo anchor("pensum/editar/".$pensum['id'], 'Actualizar'); ?>
		</td>
		<td>
			<?php echo anchor("pensum/eliminar/".$pensum['id'], 'Eliminar'); ?>
		</td>
		<td>
			<?php echo anchor("semestre/agregar/".$pensum['id'], 'Agregar Semestre'); ?>
		</td>
	</tr>

<?php 
		
}

?>
</tbody>
</table>