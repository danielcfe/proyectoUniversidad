<html>
<head>
<title>Mi Formulario</title>
</head>
	 <body>
		<?php $this->load->helper('form');?>
		<?php  echo form_open('departamento/editar', 'class = "well"');
		 $departamento = $departamento[0];?>
		

		 <h1>Edicion de Departamento</h1>     
		
		<h4>Id del departamento </h4>
		<input type="text" name="id" readonly="readonly" value="<?php echo $departamento['id'] ?>" size="50" />
		<?php echo form_error('id'); ?>

		<h4>Departamento </h4>
		<input type="text" name="nombre" value="<?php echo $departamento['nombre'] ?>" size="50" />
		<?php echo form_error('nombre','<div class="alert alert-error">', '</div>'); ?>

		<div><button class= "btn btn-primary" type="submit" value="Enviar"><i class="icon-plane icon-white"></i>  Enviar Informacion</button>
			</div>
		</form>
	</body>
</html>