<html>
<head>
<title>Formulario Requisitos</title>
</head>

<body>

	<?php if(isset($datos)) $datos = $datos[0]; ?>


	<h2>Modificar Requesito - IUSPO</h2>

	<?php echo form_open('ControllerRequisitos/modificar/' . $datos['id']); ?>

		<h4>DESCRIPCION</h4>
		<input type="text" name="descripcion" value="<?php echo set_value('descripcion', $datos['descripcion']); ?>" placeholder="Nombre Documento..." size="30" />
		<?php echo form_error('descripcion', '<div class="alert alert-error">', '</div>'); ?>

		<h4>REQUERIDO</h4>
		<input type="radio" name="requerido" value="0" <?php if($datos['requerido'] == 0) echo 'checked="checked"'; ?> /> NO </br>
		<input type="radio" name="requerido" value="1" <?php if($datos['requerido'] == 1) echo 'checked="checked"'; ?> /> SI
		<?php echo form_error('requerido', '<div class="alert alert-error">', '</div>'); ?>

		<h4>VISIBILIDAD</h4>
		<input type="radio" name="visibilidad" value="0" <?php if($datos['oculto'] == 0) echo 'checked="checked"'; ?> /> NO </br>
		<input type="radio" name="visibilidad" value="1" <?php if($datos['oculto'] == 1) echo 'checked="checked"'; ?> /> SI 
		<?php echo form_error('visibilidad', '<div class="alert alert-error">', '</div>'); ?>

		<input type="hidden" name="id" value="<?php echo set_value('id', $datos['id']); ?>" />

		<div>
			<button class="btn btn-primary" type="submit" value="Enviar"><i class="icon-user icon-white"></i> Enviar Informacion</button>
		</div>

	</form>

</body>

</html>