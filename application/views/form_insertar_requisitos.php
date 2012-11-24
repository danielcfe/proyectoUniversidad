<html>
<head>
<title>Formulario Requisitos</title>
</head>

<body>

	<?php echo form_open('ControllerRequisitos/agregar'); ?>

		<h5>DESCRIPCION</h5>
		<input type="text" name="descripcion" value="<?php  echo set_value('descripcion'); ?>" placeholder="Nombre Documento..." size="30" />
		<?php echo form_error('descripcion'); ?>

		<h5>REQUERIDO</h5>
		<input type="radio" name="requerido" value="0" <?php echo set_radio('requerido', '0'); ?> /> NO </br>
		<input type="radio" name="requerido" value="1" <?php echo set_radio('requerido', '1'); ?> /> SI
		<?php echo form_error('requerido'); ?>

		<h5>VISIBILIDAD</h5>
		<input type="radio" name="visibilidad" value="0" <?php echo set_radio('visibilidad', '0'); ?> /> NO </br>
		<input type="radio" name="visibilidad" value="1" <?php echo set_radio('visibilidad', '1'); ?> /> SI 
		<?php echo form_error('visibilidad'); ?>

		<input type="hidden" name="id" value="0" />

		<div><input type="submit" value="Enviar" /></div>

		<P><?php if( isset($msj) ) echo $msj; ?></p>

	</form>

</body>

</html>