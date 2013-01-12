
<div>
	<h3 style = "pisition:relative">Listado de Carreras - IUSPO</h3>
	<!-- <a style = "float:right" class = "btn" type = "link" href = "<?=base_url()?>/carrera/agregar">Insertar una nueva Carrera</a> -->

	<?php echo anchor("carrera/agregar", "Agregar Carrera", "class= 'btn btn-primary'; style= 'float:right; margin-bottom:15px'") ?>

	</div>

<table class="table table-striped table-condensed" id = "tablacarrera">
<thead>
	<tr>
		<th>Id </th>
		<th>Carrera</th>
		<th>Departamento</th>
		<td></td>
		<td></td>		
	</tr>
</thead>

<tbody>		
<?php 

foreach ($carreras as $carreras) {
?>

	<tr>
		<td><?php echo $carreras['id']; ?></td>
		<td><?php echo $carreras['nombre']; ?></td>
		<td><?php echo $carreras['nombre_d']; ?></td>
		<td>		
			<i class="icon-circle-arrow-up"></i><?php echo anchor("carrera/editar/".$carreras['id'], 'Actualizar'); ?>
		</td>
		<td>
			 <i class="icon-remove-sign"></i><?php echo anchor("carrera#".$carreras['id'], 'Eliminar'," class='delete' data-uc='".$carreras['nombre']."' data-id='".$carreras["id"]."' data-url ='".base_url()."carrera/eliminar/'");?>
		</td>
	</tr>

<?php 
		
}

 ?>
</tbody>
</table>