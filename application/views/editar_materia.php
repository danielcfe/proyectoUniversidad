<html>
<head>
<title>Gestion de Materia</title>
</head>
	<body>
		<?php  echo form_open($this->uri->uri_string());
		if (isset($datos_materia[0]))
		$datos_materia = $datos_materia[0];

		 echo form_open('materia/editar', "class = ' well'"); ?>
		
		 <h1>  Materia - IUSPO </h1>    

		<h4>Codigo </h4>
		<input type="text" name="codigo" value="<?php echo set_value('codigo',$datos_materia['codigo'])?>" readonly="readonly" size="50" placeholder = "LEC0143"/>
		<?php echo form_error('codigo','<div class="alert alert-error">', '</div>'); ?>

		<h4>Unidad Curricular </h4>
		<input type="text" name="unidad_curricular" value="<?php echo set_value('unidad_curricular',$datos_materia['unidad_curricular'])?>" size="50" placeholder = "Lenguaje y Comunicacion I"/>
		<?php echo form_error('unidad_curricular','<div class="alert alert-error">', '</div>'); ?>

		<h4>Horas Teoricas </h4>
		<input type="text" name="horas_teoricas" value="<?php echo set_value('horas_teoricas',$datos_materia['horas_teoricas'])?>" size="50" placeholder = "2"/>
		<?php echo form_error('horas_teoricas','<div class="alert alert-error">', '</div>'); ?>
		
		<h4>Horas Practicas </h4>
		<input type="text" name="horas_practicas" value="<?php echo set_value('horas_practicas',$datos_materia['horas_practicas'])?>" size="50" placeholder = "2"/>
		<?php echo form_error('horas_practicas','<div class="alert alert-error">', '</div>'); ?>

		<h4>Unidades de Credito </h4>
		<input type="text" name="uni_credito" value="<?php echo set_value('uni_credito',$datos_materia['uni_credito'])?>" size="50" placeholder = "3"/>
		<?php echo form_error('uni_credito','<div class="alert alert-error">', '</div>'); ?>

		<h4>Codigo de Prelacion </h4>
		<input type="text" name="cod_prelacion" value="<?php echo set_value('cod_prelacion',$datos_materia['cod_prelacion'])?>" size="50" placeholder = "LEC0000"/>
		<?php echo form_error('cod_prelacion','<div class="alert alert-error">', '</div>'); ?>

		<div><button class= "btn btn-primary" type="submit" value="Enviar"><i class="icon-user icon-white"></i> Enviar Informacion</button>
			</div>
		</form>
	</body>
</html>