<html>
<head>
<title>Listar Requisitos</title>
</head>

<body>

	<div class="row-fluid">
		<div class="span9">
			<h2>Listado de Requisitos - IUSPO</h2>
		</div>
		<!--<div class="span3">
			
			<form action="<?=base_url()?>ControllerRequisitos/listar" method="post" accept-charset="utf-8">
				<input type="text" class="input-medium search-query" name="buscar" value="" placeholder="Buscar..."/>
				<button type="submit" class="btn btn-primary"><i class="icon-search icon-white"></i></button>
			</form>

		</div> -->
	</div>

	<div class="row-fluid">
		<div class="12">
			<!-- ********* Table ********* -->
			<table class="table table-striped table-condensed" id ="tablarequisitos">
				<thead>
					<tr>
						<td> <strong>Codigo</strong> </td>
						<td> <strong>Descripcion</strong> </td>
						<td> <strong>Requerido</strong> </td>
						<td> <strong>Visibilidad</strong> </td>
						<td></td>
						<td></td>
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
										<td> <?php echo anchor("ControllerRequisitos/modificar/".$row['id'], '<i class="icon-circle-arrow-up"></i> Actualizar', 'class = "btn btn-small btn-warning"'); ?></td>
										<td> <?php echo anchor('ControllerRequisitos#', '<i class="icon-remove-sign"></i> Eliminar'," class='delete btn btn-small btn-danger' data-uc='".$row['descripcion']."' data-id='".$row["id"]."' data-url ='".base_url()."ControllerRequisitos/eliminar/'"); ?> </td>
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
			<!-- ********* Fin Table ********* -->
		</div>
	</div>

	

</body>

</html>