<html>
<head>
<title>Formulario Requisitos</title>
</head>

<body>

	<?php if(isset($datos)) $datos = $datos[0]; ?>

	<?php echo form_open('ControllerRequisitos/modificar/' . $datos['id']); ?>

		<h5>DESCRIPCION</h5>
		<input type="text" name="descripcion" value="<?php echo set_value('descripcion', $datos['descripcion']); ?>" placeholder="Nombre Documento..." size="30" />
		<?php echo form_error('descripcion'); ?>

		<h5>REQUERIDO</h5>
		<input type="radio" name="requerido" value="0" <?php if($datos['requerido'] == 0) echo 'checked="checked"'; ?> /> NO </br>
		<input type="radio" name="requerido" value="1" <?php if($datos['requerido'] == 1) echo 'checked="checked"'; ?> /> SI
		<?php echo form_error('requerido'); ?>

		<h5>VISIBILIDAD</h5>
		<input type="radio" name="visibilidad" value="0" <?php if($datos['oculto'] == 0) echo 'checked="checked"'; ?> /> NO </br>
		<input type="radio" name="visibilidad" value="1" <?php if($datos['oculto'] == 1) echo 'checked="checked"'; ?> /> SI 
		<?php echo form_error('visibilidad'); ?>

		<input type="hidden" name="id" value="<?php echo $datos['id']; ?>" />

		<div><input type="submit" value="Enviar" /></div>

		<P><?php if( isset($msj) ) echo $msj; ?></p>

	</form>

</body>

</html>