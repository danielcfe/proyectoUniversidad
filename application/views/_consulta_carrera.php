<div><h1><a class = "btn btn-primary" type = "link" href = "<?=base_url()?>/carrera/agregar">Insertar una nueva Carrera</a><h4></div>

<table class="table table-striped table-condensed" >
<thead>
	<tr>
		<th>Id </th>
		<th>Carrera</th>
		<th>Departamento</th>		
	</tr>
</thead>

<tbody>		
<?php 

foreach ($carreras as $carreras) {
?>

	<tr>
		<td><?php echo $carreras['id']; ?></td>
		<td><?php echo $carreras['nombre']; ?></td>
		<td><?php echo $carreras['departamento_id']; ?></td>
		<td>		
			<?php echo anchor("carrera/editar/".$carreras['id'], 'Actualizar'); ?>
		</td>
		<td>
			 <?php echo anchor("carrera/eliminar/".$carreras['id'], 'Eliminar');?>
		</td>
	</tr>

<?php 
		
}

 ?>
</tbody>
</table>