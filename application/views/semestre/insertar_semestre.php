<?php 
$campos['carrera'] = array('label' => 'Carrera',  'atr' => 
array('name' => 'carrera',	'id'	=> 'carrera',	'placeholder' => 'Filosofia',
		'value' =>  set_value('carrera'), 'class' => '')
); 

$campos['departamento'] = array('label' => 'Departamento',  'atr' => 
	array('name'	=> 'departamento',	'id'	=> 'departamento',	
	'placeholder' => 'Educacion',	'value' => set_value('carrera'))
	);

$campos['semestre'] = array('label' => 'Semestre',  'atr' => 
	array('name'	=> 'semestre',	'id'	=> 'semestre',	
	'placeholder' => '5',	'value' => set_value('semestre'))
	);

$campos['pensum'] = array('label' => 'Pensum',  'atr' => 
	array('name'	=> 'pensum_id',	'id'=> 'pensum_id',	
	'placeholder' => '5',	'value' => set_value('pensum_id'))
	);

$campos['materia'] = array('label' => 'Materias',  'atr' => 
	array('name'	=> 'materia_codigo',	'id'	=> 'materia_codigo',	
	'placeholder' => 'Lenguaje y Comunicacion',	'value' => set_value('materia_codigo'))
	);

?>

<html>
<body>
<?php $this->load->helper('bootstrap');  ?>
<div class="contentautoForm">
<?php 
$attr = array('class' => 'form-horizontal', 'id' => 'formusers' );
echo form_open('semestre/agregar',$attr)?>


	<h2>Crear Pensum</h2>
	<?php 
	inputB($campos['carrera']); 
	inputB($campos['departamento']); 
	inputb($campos['pensum']);
	inputB($campos['semestre']); 
	inputB($campos['materia']); 
	?>

	<div class = "textarea">
	<?php
	// echo '<br>'.anchor('auth/change_password', 'change_password', array('class' => 'btn btn-primary' ));
	  echo ''.anchor($this->router->fetch_class(), 'Volver', 
	  	array('class' => 'btn btn-primary', 'style' => 'float:left; margin:25px;'));

	?>

		<button name="submit" class="btn btn-primary" style=" float:right; margin:25px; " type="submit" value="Enviar">
			<i class="icon-user icon-white"></i>Crear Pensum
		</button>
	</div>


<div class="clearfix">	</div>
<?php echo form_close()?>
</div>
</body>
</html>