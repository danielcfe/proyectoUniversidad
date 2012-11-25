<h1><a class = "btn" type = "link" href = "/IUSPO/index.php/departamento/agregar">Insertar un nuevo departamento</a><h1>

<table class="table table-striped table-condensed" >
<thead>
	<tr>
		<th>Id </th>
		<th>Departamento</th>		
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
			<?php echo anchor("departamento/editar/".$departamento['id'], 'Actualizar'); ?>
		</td>
		<td>
			<?php echo anchor("departamento/eliminar/".$departamento['id'], 'Eliminar'); ?>
		</td>
	</tr>

<?php 
		

}

 ?>
</tbody>
 </table>