<html>
<head>
<title>Gestion de Evaluaciones</title>
</head>
	<body>
		<?php  echo form_open($this->uri->uri_string());
		if (isset($datos_evaluacion[0]))
		$datos_evaluacion = $datos_evaluacion[0];

		 echo form_open('evaluacion/editar', "class = ' well'"); ?>
		
		 <h1>  Evaluaciones - IUSPO </h1>

		<h4>ID </h4>
		<input type="text" name="id" value="<?php echo set_value('id',$datos_evaluacion['id'])?>" size="50" readonly="readonly" placeholder = "Taller grupal"/>
		<?php echo form_error('id','<div class="alert alert-error">', '</div>'); ?>    

		<h4>Descripcion </h4>
		<input type="text" name="descripcion" value="<?php echo set_value('descripcion',$datos_evaluacion['descripcion'])?>" size="50" placeholder = "Taller grupal"/>
		<?php echo form_error('descripcion','<div class="alert alert-error">', '</div>'); ?>

		<h4>Valor </h4>
		<input type="text" name="valor" value="<?php echo set_value('valor',$datos_evaluacion['valor'])?>" size="50" placeholder = "25"/>
		<?php echo form_error('valor','<div class="alert alert-error">', '</div>'); ?>

		<h4>Horas Teoricas </h4>
		<input type="text" name="plan_evaluacion_id" value="<?php echo set_value('plan_evaluacion_id',$datos_evaluacion['plan_evaluacion_id'])?>" size="50" placeholder = "2"/>
		<?php echo form_error('plan_evaluacion_id','<div class="alert alert-error">', '</div>'); ?>

		<div><button class= "btn btn-primary" name= "cheta" type="submit" value="Enviar"><i class="icon-user icon-white"></i> Enviar Informacion</button>
			</div>
		</form>
	</body>
</html>