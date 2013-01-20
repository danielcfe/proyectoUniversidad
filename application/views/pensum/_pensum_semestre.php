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
	<div class="row-fluid">

		<?php
		if(!empty($semest))
		{
		?>
			<div class="accordion">
		<?php
			foreach ($semest as $value) 
			{
		?>
				
					<div class="accordion-group">

						<div class="accordion-heading">
							<a href="#collapseOne" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle">
                     	 		Semestre <?php echo $value['semestre']; ?>
                    		</a>
						</div>

						<div class="accordion-body in collapse">
							<div class="accordion-inner">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. 
							</div>
						</div>

					</div>
		<?php		
			}
		?>
			</div>
		<?php
		}
		else
		{
		?>
			<h3>El Pensum no tiene ningun semestre agregado</h3>
		<?php	
		}
		?>

	</div>


</body>

</html>	