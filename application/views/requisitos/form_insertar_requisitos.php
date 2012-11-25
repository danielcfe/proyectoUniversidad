<html>
<head>
<title>Formulario Requisitos</title>
</head>

<body>

	<?php echo form_open('ControllerRequisitos/agregar'); ?>

	<h2>Agregar Requesito - IUSPO</h2>

		<h4>DESCRIPCION</h4>
		<input type="text" name="descripcion" value="<?php  echo set_value('descripcion'); ?>" placeholder="Nombre Documento..." size="30" />
		<?php echo form_error('descripcion', '<div class="alert alert-error">', '</div>'); ?>

		<h4>REQUERIDO</h4>
		<input type="radio" name="requerido" value="0" <?php echo set_radio('requerido', '0'); ?> /> NO </br>
		<input type="radio" name="requerido" value="1" <?php echo set_radio('requerido', '1'); ?> /> SI
		<?php echo form_error('requerido', '<div class="alert alert-error">', '</div>'); ?>

		<h4>VISIBILIDAD</h4>
		<input type="radio" name="visibilidad" value="0" <?php echo set_radio('visibilidad', '0'); ?> /> NO </br>
		<input type="radio" name="visibilidad" value="1" <?php echo set_radio('visibilidad', '1'); ?> /> SI 
		<?php echo form_error('visibilidad', '<div class="alert alert-error">', '</div>'); ?>

		<input type="hidden" name="id" value="0" />

		<div>
			<button class="btn btn-primary" type="submit" value="Enviar"><i class="icon-user icon-white"></i> Enviar Informacion</button>
		</div>

	</form>

</body>

</html>