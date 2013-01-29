<html>
<head>
<title>Gestion de Plan de evaluacion</title>
</head>
	<body>

		<?php  echo form_open('plan_evaluacion/insertar', "class = ''"); ?>
		
		 <h2> Agregar Plan de Evaluacion - IUSPO </h2>    

		<h4>Seleccione el departamento</h4>

		<?php echo form_dropdown('Depar',$id_departamento,"", "id = 'depar' onchange = 'seleccion()'");?>
		<br>
		<h4>Seleccione la carrera</h4>
		<?php	 
			  echo form_dropdown('carre',$id_carrera, "","id = 'carre'"); 
		?>
		<br>			 
		<h4>Nombre del plan de evaluacion</h4>
		<input type="text" name="descripcion" value="<?php echo set_value('descripcion'); ?>" size="100" placeholder = "Plan Evaluacion matematicas"/>
		<?php echo form_error('Descripcion','<div class="alert alert-error">', '</div>'); ?>

		<h4>Seleccione el profesor</h4>
		<?php	 
			  echo form_dropdown('profesor_datos_usuarios_id',$id_profesor, "","id = 'profe'"); 
		?>
		<br>

		<h4>Materia</h4>
		<input type="text" name="materia_codigo" value="<?php echo set_value('materia_codigo'); ?>" size="100" placeholder = "2"/>
		<?php echo form_error('materia_codigo','<div class="alert alert-error">', '</div>'); ?>
		
		<div><button class= "btn btn-primary" type="submit" value="Enviar"><i class="icon-user icon-white"></i> Enviar Informacion</button>
			</div>
		</form>
	</body>
</html>