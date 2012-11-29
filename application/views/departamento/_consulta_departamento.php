<div><h3>Listado de Departamentos - IUSPO</h3>
	<!-- <h4><a class = "btn" type = "link" href = "<?=base_url()?>/departamento/agregar">Insertar un nuevo departamento</a><h4> -->
	</div>

<table class="table table-striped table-condensed" id= "tabladepartamento">
<thead>
	<tr>
		<th>Id </th>
		<th>Departamento</th>		
		<th></th>
		<th></th>
	</tr>
</thead>

<tbody>		
<?php 

foreach ($departamento as $departamento) {
?>

	<tr>
		<td><?php echo $departamento['id']; ?></td>
		<td><?php echo $departamento['nombre']; ?></td>
		<td>		
			<i class="icon-circle-arrow-up"></i><?php echo anchor("departamento/editar/".$departamento['id'], 'Actualizar'); ?>
		</td>
		<td>
			<i class="icon-remove-sign"></i><?php echo anchor("departamento#".$departamento['id'], 'Eliminar'," class='delete' data-uc='".$departamento['nombre']."' data-id='".$departamento["id"]."' data-url ='".base_url()."departamento/eliminar/'"); ?>
		</td>
	</tr>

<?php 
		

}

 ?>
</tbody>
 </table>