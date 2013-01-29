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
		<td><?php echo anchor("departamento/consulta_dep_carrera/".$departamento['id'], $departamento['nombre']); ?></td>
		<td>		
			<?php echo anchor("departamento/editar/".$departamento['id'], '<i class="icon-circle-arrow-up"></i> Actualizar', 'class = "btn btn-small btn-warning"'); ?>
		</td>
		<td>
			<?php echo anchor('departamento#', '<i class="icon-remove-sign"></i> Eliminar'," class='delete btn btn-small btn-danger' data-uc='".$departamento['nombre']."' data-id='".$departamento["id"]."' data-url ='".base_url()."departamento/eliminar/'"); ?>
		</td>
	</tr>

<?php 
		

}

 ?>
</tbody>
 </table>