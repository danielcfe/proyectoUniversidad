<html>
<head>
<title>Listar Requisitos</title>
</head>

<body>


	<div>
		<?php
			$this->load->helper('url'); 
			echo anchor('ControllerRequisitos/agregar', 'Agregar'); 
		?>
	</div>

	<table>
		<thead>
			<tr>
				<td> Codigo </td>
				<td> Descripcion </td>
				<td> Requerido </td>
				<td> Visibilidad </td>
				<td> Opciones </td>
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
								<td > <?php echo $row['id']; ?> </td>
								<td > <?php echo $row['descripcion']; ?> </td>
								<td > <?php echo $row['requerido_text']; ?> </td>
								<td > <?php echo $row['oculto_text']; ?> </td>
								<td > 
									<?php echo anchor('ControllerRequisitos/modificar/' . $row['id'], 'Actualizar'); ?>
									<?php echo anchor('ControllerRequisitos/eliminar/' . $row['id'], 'Eliminar'); ?> 
								</td>
							</tr>
					
			<?php 		}
					break;
					
					default:
			?>
						<tr>
							<td Colspan="5"> <?php echo $msj; ?> </td>
						</tr>

			<?php	break;
				}
				// ********* Fin Switch *********
			?>
		</tbody>

	</table>

</body>

</html>