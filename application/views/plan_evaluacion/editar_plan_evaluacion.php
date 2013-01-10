<html>
<head>
<title>Gestion de Plan de Evaluacion</title>
</head>
	<body>
		<?php  echo form_open($this->uri->uri_string());
		if (isset($datos_plan_evaluacion[0]))
		$datos_plan_evaluacion = $datos_plan_evaluacion[0];

		 echo form_open('plan_evaluacion/editar', "class = ' well'"); ?>
		
		 <h1>  Plan_evaluacion - IUSPO </h1>    

		<h4>ID </h4>
		<input type="text" name="id" value="<?php echo set_value('id',$datos_plan_evaluacion['id'])?>" readonly="readonly" size="50" placeholder = "LEC0143"/>
		<?php echo form_error('id','<div class="alert alert-error">', '</div>'); ?>

		<h4>Descripcion </h4>
		<input type="text" name="descripcion" value="<?php echo set_value('descripcion',$datos_plan_evaluacion['descripcion'])?>" size="50" placeholder = "Lenguaje y Comunicacion I"/>
		<?php echo form_error('descripcion','<div class="alert alert-error">', '</div>'); ?>

		<h4>Id del profesor </h4>
		<input type="text" name="profesor_datos_usuarios_id" value="<?php echo set_value('profesor_datos_usuarios_id',$datos_plan_evaluacion['profesor_datos_usuarios_id'])?>" size="50" placeholder = "2"/>
		<?php echo form_error('profesor_datos_usuarios_id','<div class="alert alert-error">', '</div>'); ?>
		
		<h4>Codigo de la Materia </h4>
		<input type="text" name="materia_codigo" value="<?php echo set_value('materia_codigo',$datos_plan_evaluacion['materia_codigo'])?>" size="50" placeholder = "2"/>
		<?php echo form_error('materia_codigo','<div class="alert alert-error">', '</div>'); ?>

		<div><button class= "btn btn-primary" type="submit" value="Enviar"><i class="icon-user icon-white"></i> Enviar Informacion</button>
			</div>
		</form>
	</body>
</html>