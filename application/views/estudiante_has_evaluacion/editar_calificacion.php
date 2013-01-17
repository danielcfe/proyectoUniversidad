<html>
<head>
<title>Gestion de Calificacion</title>
</head>
	<body>
		<?php  echo form_open($this->uri->uri_string());
		if (isset($datos_evaluacion[0]))
		$datos_evaluacion = $datos_evaluacion[0];

		 echo form_open('estudiante_has_evaluacion/editar', "class = ' well'"); ?>
		
		 <h1>  Calificaciones - IUSPO </h1>

		<h4>Cedula del Estudiante </h4>
		<input type="text" name="estudiante_datos_usuarios_id" value="<?php echo set_value('estudiante_datos_usuarios_id',$datos_evaluacion['estudiante_datos_usuarios_id'])?>" size="50" readonly="readonly" placeholder = "20659987"/>
		<?php echo form_error('estudiante_datos_usuarios_id','<div class="alert alert-error">', '</div>'); ?>    

		<h4>Seleccione la evaluacion </h4>
		<input type="text" name="evaluacion_id" value="<?php echo set_value('evaluacion_id',$datos_evaluacion['evaluacion_id'])?>" size="50" placeholder = "Taller grupal"/>
		<?php echo form_error('evaluacion_id','<div class="alert alert-error">', '</div>'); ?>

		<h4>Calificacion </h4>
		<input type="text" name="calificacion" value="<?php echo set_value('calificacion',$datos_evaluacion['calificacion'])?>" size="50" placeholder = "16"/>
		<?php echo form_error('calificacion','<div class="alert alert-error">', '</div>'); ?>

		<div><button class= "btn btn-primary" name= "cheta" type="submit" value="Enviar"><i class="icon-user icon-white"></i> Enviar Informacion</button>
			</div>
		</form>
	</body>
</html>