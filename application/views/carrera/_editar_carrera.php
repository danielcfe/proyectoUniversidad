<html>
<head>
<title>Mi Formulario</title>
</head>
	 <body>
		<?php $this->load->helper('form');?>
		<?php  echo form_open('carrera/editar', 'class = "well"');
		 $carrera = $carrera[0];?>		

		 <h1>Edicion de Carreras</h1>     
		
		<h4>Id de la Carrera </h4>
		<input type="text" name="id" readonly="readonly" value="<?php echo $carrera['id'] ?>" size="50" />
		<?php echo form_error('id'); ?>

		<h4>Carrera </h4>
		<input type="text" name="nombre" value="<?php echo $carrera['nombre'] ?>" size="50" />
		<?php echo form_error('nombre','<div class="alert alert-error">', '</div>'); ?>

		<h4>Departamento </h4>
		<input type="text" id="departamento" value="<?php echo $carrera['nombre_d'] ?>" size="50" />
		<?php echo form_error('departamento_id','<div class="alert alert-error">', '</div>'); ?>

		<input type="hidden" name="departamento_id" id = "departamento_id" value="<?php echo $carrera['departamento_id'] ?>" size="50" />

		<div><button class= "btn btn-primary" type="submit" value="Enviar"><i class="icon-plane icon-white"></i>  Enviar Informacion</button>
			</div>
		</form>
	</body>
</html>