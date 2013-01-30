<html>
<head>
	<title>BD</title>
</head>

<body>
	
	<h2>Restore Base de Dato - IUSPO</h2>
	<h4><?php echo 'Por favor contacte a su administrador de base de datos para realizar esta operación, debido que la misma podria eliminar informacion importante de su base de datos. '//form_open_multipart('ControllerBD/restore'); ?></h4>
		<!-- <input type="file" name="fileBD"/> -->
		<?php if(isset($error)) echo $error;?>
		<div>
			<button class="btn btn-primary" type="submit" value="Enviar">Volver</button>
		</div>
	</form>

</body>

</html>