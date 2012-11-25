<h1><a class = "btn" type = "link" href = "/IUSPO/index.php/pensum/agregar">Insertar una nuevo Pensum</a><h1>

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
		<td><?php echo $pensum['carrera_id']; ?></td>
		<td>		
			<?php echo anchor("pensum/editar/".$pensum['id'], 'Actualizar'); ?>
		</td>
		<td>
			<?php echo anchor("pensum/eliminar/".$pensum['id'], 'Eliminar'); ?>
		</td>
	</tr>

<?php 
		
}

?>
</tbody>
</table>