<html>
<head>
<title>Gestion de Materia</title>
</head>
	<body>
	<div class = "autocontent">
		<?php  echo form_open('materia_c/insertar', "class = 'form-horizontal'"); ?>
		
		 <h2> Agregar Materia - IUSPO </h2>    

	<div class = "control-group"> 
		 <label class="control-label" for="codigo">Codigo</label>
		<div class = "controls"><input  id = "codigo" type="text" name="codigo" value="<?php echo set_value('codigo'); ?>" size="30" placeholder = "LEC0143"/></div>
		<?php echo form_error('codigo','<div class="alert alert-error">', '</div>'); ?>
	</div>

	<div class = "control-group">
		 <label class="control-label" for="unidad_curricular">Unidad Curricular</label>
		<div class = "controls"><input id = "unidad_curricular" type="text" name="unidad_curricular" value="<?php echo set_value('unidad_curricular'); ?>" size="30" placeholder = "Lenguaje y Comunicacion I"/></div>
		<?php echo form_error('unidad_curricular','<div class="alert alert-error">', '</div>'); ?>
	</div>

	<div class = "control-group">
		 <label class="control-label" for="horas_teoricas">Horas Teoricas</label>
		<div class = "controls"><input type="text" name="horas_teoricas" value="<?php echo set_value('horas_teoricas'); ?>" size="30" placeholder = "2"/></div>
		<?php echo form_error('horas_teoricas','<div class="alert alert-error">', '</div>'); ?>
	</div>

	<div class = "control-group">	
		 <label class="control-label" for="horas_practicas">Horas Practicas</label>
		<div class = "controls"><input id = "horas_practicas" type="text" name="horas_practicas" value="<?php echo set_value('horas_practicas'); ?>" size="30" placeholder = "2"/></div>
		<?php echo form_error('horas_practicas','<div class="alert alert-error">', '</div>'); ?>
	</div>

	<div class = "control-group">
		 <label class="control-label" for="uni_credito">Unidades de Credito</label>
		<div class = "controls"><input id = "uni_credito" type="text" name="uni_credito" value="<?php echo set_value('uni_credito'); ?>" size="30" placeholder = "3"/></div>
		<?php echo form_error('uni_credito','<div class="alert alert-error">', '</div>'); ?>
	</div>

	<div class = "control-group">
		 <label class="control-label" for="cod_prelacion">Codigo de Prelacion</label>
		<div class = "controls"><input id = "cod_prelacion" type="text" name="cod_prelacion" value="<?php echo set_value('cod_prelacion'); ?>" size="30" placeholder = "LEC0000"/></div>
		<?php echo form_error('cod_prelacion','<div class="alert alert-error">', '</div>'); ?>
	</div>
		<div><button class= "btn btn-primary" type="submit" value="Enviar"><i class="icon-plus icon-white"></i> Agregar Materia</button>
			</div>
	<?php echo form_close()?>
	</div>
	</body>
</html>