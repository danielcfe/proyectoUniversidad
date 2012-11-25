<html>
<head>
<title>Listar Requisitos</title>
</head>

<body>
	<?php
		/*if( isset($datos) && !empty($datos) )
			$datos = $datos[0];*/
	?>

	<h2>Listado de Requisitos - IUSPO</h2>
	<table class="table table-striped table-condensed">
		<thead>
			<tr>
				<td> <strong>Codigo</strong> </td>
				<td> <strong>Descripcion</strong> </td>
				<td> <strong>Requerido</strong> </td>
				<td> <strong>Visibilidad</strong> </td>
				<td colspan="2"></td>
			</tr>
		</thead>
	
		<tbody>
			<?php
				// ********* Switch ********* 
				switch ($msj) 
				{
					case '':
						foreach ($datos as $row) 
						{
			?>
							<tr>
								<td> <?php echo $row['id']; ?> </td>
								<td> <?php echo $row['descripcion']; ?> </td>
								<td> <?php echo $row['requerido_text']; ?> </td>
								<td> <?php echo $row['oculto_text']; ?> </td>
								<td> <i class="icon-circle-arrow-up"></i> <?php echo anchor('ControllerRequisitos/modificar/' . $row['id'], 'Actualizar'); ?> </td>
								<td> <i class="icon-remove-sign"></i> <?php echo anchor('ControllerRequisitos/eliminar/' . $row['id'], 'Eliminar'); ?> </td>
							</tr>
					
			<?php 		}
					break;
					
					default:
			?>
						<tr>
							<td Colspan="6"> <?php echo $msj; ?> </td>
						</tr>

			<?php	break;
				}
				// ********* Fin Switch *********
			?>
		</tbody>

	</table>

</body>

</html>