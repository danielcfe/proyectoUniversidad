<html>
<head>
<title>BD</title>
</head>

<body>

	<?php
		if($msj == 'backup' )
		{
	?>
		<h2>Backup de la Base de Dato completo.</h2>
	<?php
		}
		elseif($msj == 'restore')
		{
	?>
		<h2>Restore de la Base de Dato completo.</h2>
	<?php
		}
		elseif($msj == 'restore_false')
		{
	?>
		<h2>Error en Restore de la Base de Dato.</h2>
	<?php
		}
	?>

</body>

</html>