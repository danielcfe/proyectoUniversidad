<html>
<head>
	<title>BD</title>
</head>

<body>
	
	<h2>Restore Base de Dato - IUSPO</h2>
	<?php echo form_open_multipart('ControllerBD/restore'); ?>
		<input type="file" name="fileBD"/>
		<?php if(isset($error)) echo $error;?>
		<div>
			<button class="btn btn-primary" type="submit" value="Enviar">Enviar Informacion</button>
		</div>
	</form>

</body>

</html>