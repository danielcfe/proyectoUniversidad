<div><h3>Listado de Acciones - IUSPO</h3>
	<!-- <h4><a class = "btn" type = "link" href = "<?=base_url()?>/departamento/agregar">Insertar un nuevo departamento</a><h4> -->
	</div>

<table class="table table-striped table-condensed" id= "tablaauditoria">
<thead>
	<tr>
		<th>Hora</th>
		<th>Fecha</th>		
		<th>Rol</th>
		<th>Usuario</th>
		<th>Acciòn</th>
	</tr>
</thead>

<tbody>		
<?php 

foreach ($auditoria as $auditoria) {
?>

	<tr>
		<td><?php echo $auditoria['hora']; ?></td>
		<td><?php echo date("d-m-Y",strtotime($auditoria['fecha']));?></td>
		<td><?php echo $auditoria['name']; ?></td>
		<td><?php echo $auditoria['username']; ?></td>
		<td><?php echo $auditoria['accion']; ?></td>

	</tr>

<?php 
		

}

 ?>
</tbody>
 </table>