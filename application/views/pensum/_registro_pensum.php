<html>
<head><title>.:Agregar_Pensum:.></title></head>

<body>

	<h2>Nuevo Pensum</h2>

	<?php echo form_open(); ?>

		<div class="row-fluid">
			<div class="span6">
				<h4>Departamento</h4>

				<?php echo form_dropdown('departamento', $arrayDep, '', 'id="departamento"'); ?>

				<?php echo form_error('departamento', '<div class="alert alert-error">', '</div>'); ?>
			</div>

			<div class="span6">
				<h4>Carrera</h4>

				<?php echo form_dropdown('carrera', $arrayCar, '', 'id="carrera" disabled'); ?>

				<?php echo form_error('carrera', '<div class="alert alert-error">', '</div>'); ?>
			</div>
		</div>

		<div class="row-fluid">
			<div class="span12">	
				<button class="btn btn-primary" type="submit" value="Enviar"><i class="icon-user icon-white"></i> Enviar Informacion</button>
			</div>
		</div>

	</form>

</body>

</html>	