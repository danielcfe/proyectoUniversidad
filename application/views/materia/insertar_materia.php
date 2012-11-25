<html>
<head>
<title>Gestion de Materia</title>
</head>
	<body>

		<?php  echo form_open('materia_c/insertar', "class = ''"); ?>
		
		 <h2> Agregar Materia - IUSPO </h2>    

		<h4>Codigo </h4>
		<input type="text" name="codigo" value="<?php echo set_value('codigo'); ?>" size="100" placeholder = "LEC0143"/>
		<?php echo form_error('codigo','<div class="alert alert-error">', '</div>'); ?>

		<h4><label for = "autocomplete">Unidad Curricular</label></h4>
		<input type="text" autocomplete = "off" id='autocomplete' name="unidad_curricular" value="<?php echo set_value('unidad_curricular'); ?>" size="100" placeholder = "Lenguaje y Comunicacion I"/>
		<?php echo form_error('unidad_curricular','<div class="alert alert-error">', '</div>'); ?>

		<h4>Horas Teoricas </h4>
		<input type="text" name="horas_teoricas" value="<?php echo set_value('horas_teoricas'); ?>" size="100" placeholder = "2"/>
		<?php echo form_error('horas_teoricas','<div class="alert alert-error">', '</div>'); ?>
		
		<h4>Horas Practicas </h4>
		<input type="text" name="horas_practicas" value="<?php echo set_value('horas_practicas'); ?>" size="100" placeholder = "2"/>
		<?php echo form_error('horas_practicas','<div class="alert alert-error">', '</div>'); ?>

		<h4>Unidades de Credito </h4>
		<input type="text" name="uni_credito" value="<?php echo set_value('uni_credito'); ?>" size="100" placeholder = "3"/>
		<?php echo form_error('uni_credito','<div class="alert alert-error">', '</div>'); ?>

		<h4>Codigo de Prelacion </h4>
		<input type="text" name="cod_prelacion" value="<?php echo set_value('cod_prelacion'); ?>" size="100" placeholder = "LEC0000"/>
		<?php echo form_error('cod_prelacion','<div class="alert alert-error">', '</div>'); ?>

		<div><button class= "btn btn-primary" type="submit" value="Enviar"><i class="icon-user icon-white"></i> Enviar Informacion</button>
			</div>
		</form>
	</body>
</html>