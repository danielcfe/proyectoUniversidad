<?php

$usuario = $data['usuario'];

$campos['username'] = array('label' => 'Usuario',  'atr' => 
array('name' => 'username',	'id'	=> 'username',	'size'	=> 30,	'value' =>  set_value('username',$usuario->username),	'readonly' => 'true')
); 

$campos['password'] =array('label' => 'Clave',  'atr' => 
 array(	'name'	=> 'password',	'id'	=> 'password',	'maxlength'	=> 80,	'size'	=> 30,
 	'value'	=> set_value('password'))
 );

$campos['confirmpassword'] =array('label' => 'Confirmacion de Contraseña',  'atr' => 
 array(	'name'	=> 'confirmpassword',	'id'	=> 'confirmpassword',	'maxlength'	=> 80,	'size'	=> 30,
 	'value'	=> set_value('confirmpassword'))
 );


$campos['last_name'] = array('label' => 'Apellido',  'atr' => 
	array('name'	=> 'last_name',	'id'	=> 'last_name',	'size'	=> 30,	'value' => set_value('last_name',$usuario->last_name))
	);

$campos['name'] = array('label' => 'Nombre',  'atr' => 
 array(	'name'	=> 'name',	'id'	=> 'name',	'size'	=> 30,	'value' => set_value('name',$usuario->name))
);

$campos['email'] =array('label' => 'Correo',  'atr' => 
 array(	'name'	=> 'email',	'id'	=> 'email',	'maxlength'	=> 80,	'size'	=> 30,
 	'value'	=> set_value('email',$usuario->email))
 );


$campos['birth_date'] =array('label' => 'Fecha Nacimiento',  'atr' => 
 array(	'name'	=> 'birth_date',	'id'	=> 'birth_date',	'maxlength'	=> 80,	'size'	=> 30,
 	'value'	=> set_value('birth_date',$usuario->birth_date))
 );

$campos['addres'] =array('label' => 'Direccion',  'atr' => 
 array(	'name'	=> 'addres',	'id'	=> 'addres',	'maxlength'	=> 80,	'size'	=> 30,
 	'value'	=> set_value('addres',$usuario->addres))
 );

$campos['observations'] = array('name'=>'observations',	'id'=>'observations',
	'maxlength'	=> 40,	'size'	=> 15, 'class' => 'input-block-level',
 	'value'	=> set_value('observations',$usuario->observations)
 );

?>

<html>
<body>
<?php $this->load->helper('bootstrap');  ?>
<div class="contentautoForm">
<?php 
$attr = array('class' => 'form-horizontal', );
echo form_open($this->uri->uri_string(),$attr)?>
	<h1></h1>
	<?php inputB($campos['username']); 
	inputB($campos['name']); 
	inputB($campos['last_name']); 
	inputB($campos['email']); 
	inputB($campos['birth_date']); 
	inputB($campos['addres']); 
	$options = array('M'  => 'Hombre','F'    => 'Mujer');
	selectB('Sexo','gender',$options);
	$options = array('C'  => 'Casado','S' => 'Soltero','V' => 'Viudo');
	selectB('Estado Civil','civil_status',$options);
	$options = array( "O-" =>"O-" ,"O+" =>"O+" ,"A-" =>"A-" ,"A+" =>"A+","B-" =>"B-" ,"B+" =>"B+" ,"AB-" =>"AB-" ,"AB+" =>"AB+");	
	selectB('Tipo de Sangre','blood_type',$options);
	 textareaB('Observaciones',$campos['observations']);
	 echo '<br>'.anchor('auth/change_password', 'change_password', array('class' => 'link_with_button plus'));
	  echo '<br>'.anchor($this->router->fetch_class(), 'Volver', array('class' => 'link_with_button plus'));
	?>


<?php  
	//inputB($campos['observations']);
	
	?>

	<fieldset>
	<?php  
	//inputB($campos['password']); 
	//inputB($campos['confirmpassword']); 


	?>		
	</fieldset>

  <div class="control-group">
    <div class="controls">
      <label class="checkbox">

      </label>
      <?php echo form_submit('submit','Actualizar Registro');?>
    </div>
  </div>



<?php echo form_close()?>
</div>
</body>
</html>