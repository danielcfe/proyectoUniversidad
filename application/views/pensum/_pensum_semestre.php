<html>
<head><title>.:Semestre_Pensum:.></title></head>

<body>
	<input type="hidden" name="idSemestre" id="idSemestre" value="<?php echo $pensum[0]['id']; ?>">
	<div class="row-fluid">
		
		<div class="span6">
			<h2>Pensum - Semestres</h2>
		</div>

		<div class="span2 offset4">
			<a class="btn btn-primary" href="#" name="agregarSemes" id="agregarSemes"><i class="icon-plus icon-white"></i> Agregar Semestre</a>
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
		<div class="accordion" id="accordionSemestre">
		<?php
		if(!empty($semest))
		{
			foreach ($semest as $value) 
			{
				$i = $value['semestre'];
		?>
				<div class="accordion-group">
					<div class="accordion-heading">
						<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionSemestre" href="#semestre<?php echo $i;?>">
							<h3>Semestre #<?php echo $i;?></h3>
						</a>
					</div>
					<div id="semestre<?php echo $i;?>" class="accordion-body collapse">
						<div class="accordion-inner">
							<input type="hidden" value="<?php echo $i;?>", name="semestre" id="semestre">
							<input type="hidden" value="" name="materia_id" id="materia_id">
							<div class="span1"> <h4>Materia</h4> </div>
							<div class="span3"> <input type="text" value="" name="materia" id="materia"> </div>
							<div class="span12">
								<table class="table" id="tableMateria">
									<tr>
										<td><h5>Codigo</h5></td>
										<td><h5>Unidad Curricular</h5></td>
										<td><h5>H. Teoricas</h5></td>
										<td><h5>H. Practicas</h5></td>
										<td><h5>Total Horas</h5></td>
										<td><h5>Uni. Credito</h5></td>
										<td><h5>Cod. Prelacion</h5></td>
										<td></td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
		<?php		
			}
		?>
			<input type="hidden" value="<?php echo $i;?>" name="numSemes" id="numSemes">
		<?php
		}
		else
		{
		?>
			<input type="hidden" value="0" name="numSemes" id="numSemes">
			<h3 class="penNoSeme">El Pensum no tiene ningun semestre agregado</h3>
		<?php	
		}
		?>
		</div>
	</div>


</body>

</html>	