<html>
<head>
<title>Mi Formulario</title>
</head>
	 <body>
		<?php $this->load->helper('form');?>
		<?php  echo form_open('pensum/editar', 'class = "well"');
		 $pensum = $pensum[0];?>		

		 <h1>Edicion de Pensum</h1>     
		
		<h4>Id del pensum </h4>
		<input type="text" name="id" readonly="readonly" value="<?php echo $pensum['id'] ?>" size="50" />
		<?php echo form_error('id'); ?>

		<h4>Fecha </h4>
		<input type="text" name="fecha" value="<?php echo $pensum['fecha'] ?>" size="50" />
		<?php echo form_error('fecha','<div class="alert alert-error">', '</div>'); ?>

		<h4>Carrera </h4>
		<input type="text" name="carrera_id" value="<?php echo $pensum['carrera_id'] ?>" size="50" />
		<?php echo form_error('carrera_id','<div class="alert alert-error">', '</div>'); ?>

		<div><button class= "btn btn-primary" type="submit" value="Enviar"><i class="icon-plane icon-white"></i>  Enviar Informacion</button>
			</div>
		</form>
	</body>
</html>