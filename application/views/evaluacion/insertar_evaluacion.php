<html>
<head>
<title>Gestion de Evaluaciones</title>
</head>
	<body>

		<?php  echo form_open('evaluacion/insertar', "class = ''"); ?>
		
		 <h2> Agregar Evaluacion - IUSPO </h2>    

		<h4>Descripcion </h4>
		<input type="text" name="descripcion" value="<?php echo set_value('descripcion'); ?>" size="100" placeholder = "Actividad Practica"/>
		<?php echo form_error('Descripcion','<div class="alert alert-error">', '</div>'); ?>

		<h4><label for = "autocomplete">Valor</label></h4>
		<input type="text" autocomplete = "off" id='autocomplete' name="valor" value="<?php echo set_value('valor'); ?>" size="100" placeholder = "20"/>
		<?php echo form_error('valor','<div class="alert alert-error">', '</div>'); ?>

		<h4>Plan de Evaluacion ID </h4>
		<input type="text" name="plan_evaluacion_id" value="<?php echo set_value('plan_evaluacion_id'); ?>" size="100" placeholder = "2"/>
		<?php echo form_error('plan_evaluacion_id','<div class="alert alert-error">', '</div>'); ?>

		<div><button class= "btn btn-primary" type="submit" value="Enviar"><i class="icon-user icon-white"></i> Enviar Informacion</button>
			</div>
		</form>
	</body>
</html>