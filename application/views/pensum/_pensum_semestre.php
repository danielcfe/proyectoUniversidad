<html>
<head><title>.:Semestre_Pensum:.></title></head>

<body>

	<div class="row-fluid">
		
		<div class="span6">
			<h2>Pensum - Semestres</h2>
		</div>

		<div class="span2 offset4">
			<a class="btn btn-primary" href="<?=base_url()?>semestre/agregar_semestre/<?php echo $pensum[0]['id']; ?>"><i class="icon-plus icon-white"></i> Agregar Semestre</a>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span4">
			<h3>Departamento</h3>

			<input type="text" name="departamento" value="<?php echo $pensum[0]['nombre_dep']; ?>" disabled>
		</div>

		<div class="span4">
			<h3>Carrera</h3>

			<input type="text" name="carrera" value="<?php echo $pensum[0]['nombre_carrera']; ?>" disabled>
		</div>

		<div class="span4">
			<h3>Fecha Creacion</h3>

			<input type="text" name="carrera" value="<?php echo $pensum[0]['fecha']; ?>" disabled>
		</div>
	</div>



	<!-- SEMESTRE -->
	<?php
	if(!empty($semest))
	{
		$i = 0;
		foreach ($semest as $value) 
		{
			switch ($i) 
			{
				case 0:
	?>
				<div class="row-fluid">
					<div class="span4">
						<div class="span5"><h4>Semestre <?php echo $value['semestre']?></h4></div>
						<div class="span6">
							<a href="#" class="btn btn-small btn-warning"><i class="icon-circle-arrow-up"></i> Ver</a>
							<a href="#" class="delete btn btn-small btn-danger"><i class="icon-remove-sign"></i> Eliminar</a>
						</div>
					</div>	
	<?php		
				break;
				
				case 2:
	?>
					<div class="span4">
						<div class="span5"><h4>Semestre <?php echo $value['semestre']?></h4></div>
						<div class="span6">
							<a href="#" class="btn btn-small btn-warning"><i class="icon-circle-arrow-up"></i> Ver</a>
							<a href="#" class="delete btn btn-small btn-danger"><i class="icon-remove-sign"></i> Eliminar</a>
						</div>
					</div>
				</div>
	<?php
				$i = 0;
				break;

				default:
	?>
				<div class="span4">
					<div class="span5"><h4>Semestre <?php echo $value['semestre']?></h4></div>
					<div class="span6">
						<a href="#" class="btn btn-small btn-warning"><i class="icon-circle-arrow-up"></i> Ver</a>
						<a href="#" class="delete btn btn-small btn-danger"><i class="icon-remove-sign"></i> Eliminar</a>
					</div>
				</div>

	<?php			
				break;
			}

			$i++;
		}
	}
	else
	{
	?>

		<div class="row-fluid">
			<h3>El Pensum no tiene ningun semestre agregado</h3>
		</div>

	<?php	
	}
	?>


</body>

</html>	