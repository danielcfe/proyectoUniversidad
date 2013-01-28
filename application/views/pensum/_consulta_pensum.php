<html>
<head><title>.:Semestre_Pensum:.></title></head>

<body>

	<h2>Lista de Pensum</h2>

	<table class="table">
		<thead>
			<tr>
				<td>id</td>
				<td>Fecha de cracion</td>
				<td>Departamento</td>
				<td>Carrera</td>
				<td></td>
			</tr>
		</thead>

		<tbody>
			<?php
				if(empty($data))
				{
			?>
					<tr>
						<td colspan="5">No hay registro</td>
					</tr>
			<?php		
				}else
				{
					foreach ($data as $val) 
					{
			?>
					<tr>
						<td><?php echo $val['id'];?></td>
						<td><?php echo $val['fecha'];?></td>
						<td><?php echo $val['nombre_dep'];?></td>
						<td><?php echo $val['nombre_carrera'];?></td>
						<td><a href="<?=base_url()?>pensum/actualizar/<?php echo$val['id'];?>" class="btn btn-small btn-warning"><i class="icon-circle-arrow-up"></i>Actualizar</a></td>
					</tr>
			<?php
					}		
				}
			?>
		</tbody>
	</table>

</body>

</html>