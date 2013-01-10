<html>
<head>
<title>Gestion de Plan de evaluacion</title>
</head>
	<body>

		<?php  echo form_open('plan_evaluacion/insertar', "class = ''"); ?>
		
		 <h2> Agregar Plan de Evaluacion - IUSPO </h2>    

		<h4>Descripcion </h4>
		<input type="text" name="descripcion" value="<?php echo set_value('descripcion'); ?>" size="100" placeholder = "Plan Evaluacion matematicas"/>
		<?php echo form_error('Descripcion','<div class="alert alert-error">', '</div>'); ?>

		<h4><label for = "autocomplete">Id del docente</label></h4>
		<input type="text" autocomplete = "off" id='autocomplete' name="profesor_datos_usuarios_id" value="<?php echo set_value('profesor_datos_usuarios_id'); ?>" size="100" placeholder = "1"/>
		<?php echo form_error('profesor_datos_usuarios_id','<div class="alert alert-error">', '</div>'); ?>

		<h4>Codigo de materia </h4>
		<input type="text" name="materia_codigo" value="<?php echo set_value('materia_codigo'); ?>" size="100" placeholder = "2"/>
		<?php echo form_error('materia_codigo','<div class="alert alert-error">', '</div>'); ?>
		
		<div><button class= "btn btn-primary" type="submit" value="Enviar"><i class="icon-user icon-white"></i> Enviar Informacion</button>
			</div>
		</form>
	</body>
</html>