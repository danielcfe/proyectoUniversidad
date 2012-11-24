<?php
$username = array(
	'name'	=> 'username',
	'id'	=> 'username',
	'size'	=> 30,
	'value' =>  set_value('username')
);

$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'size'	=> 30,
	'value' => set_value('password')
);

$confirm_password = array(
	'name'	=> 'confirm_password',
	'id'	=> 'confirm_password',
	'size'	=> 30,
	'value' => set_value('confirm_password')
);

$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'maxlength'	=> 80,
	'size'	=> 30,
	'value'	=> set_value('email')
);
?>

<html>
<body>

<?php echo form_open($this->uri->uri_string())?>
	<h1></h1>
  <div class="control-group">
    <label class="control-label" for="inputEmail">
    	<?php echo form_label('Nombre de Usuario', $username['id']);?>
    </label>
    <div class="controls">
      <?php echo form_input($username)?>
      <?php echo form_error($username['name']); ?>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">
    	<?php echo form_label('Clave', $password['id']);?>
    </label>
    <div class="controls">
		<?php echo form_password($password)?>
		<?php echo form_error($password['name']); ?>      
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <label class="checkbox">
        <?php echo form_label('Confirmar Clave', $confirm_password['id']);?>
      </label>
		<?php echo form_password($confirm_password);?>
		<?php echo form_error($confirm_password['name']); ?>      
    </div>
  </div> 
  <div class="control-group">
    <div class="controls">
      <label class="checkbox">
         <?php echo form_label('Correo Electronico', $email['id']);?>
      </label>
		<?php echo form_input($email);?>
		<?php echo form_error($email['name']); ?>
    </div>
  </div>   
<?php if ($this->dx_auth->captcha_registration): ?>  
  <div class="control-group">
    <div class="controls">
 	<?php 		// Get recaptcha javascript and non javasript html
 		echo $this->dx_auth->get_recaptcha_html();
		 echo form_error('recaptcha_response_field'); ?>
    
    </div>
  </div>  




	
<?php endif; ?>

  <div class="control-group">
    <div class="controls">
      <label class="checkbox">

      </label>
      <?php echo form_submit('register','Register');?>
    </div>
  </div>
<?php echo form_close()?>


<!-- <fieldset><legend>Register</legend>


<dl>
	<dt></dt>
	<dd>
		<?php echo form_input($username)?>
    
	</dd>

	<dt><?php echo form_label('Clave', $password['id']);?></dt>
	<dd>

	</dd>

	<dt></dt>
	<dd>

	</dd>

	<dt></dt>
	<dd>

	</dd>
		
<?php if ($this->dx_auth->captcha_registration): ?>

	<dt></dt>


	
	<?php 
		// Get recaptcha javascript and non javasript html
		echo $this->dx_auth->get_recaptcha_html();

	?>
		<dd>
		
		<?php echo form_error('recaptcha_response_field'); ?>
	</dd>
<?php endif; ?>

	<dt></dt>
	<dd><?php echo form_submit('register','Register');?></dd>
</dl>

<?php echo form_close()?>
</fieldset> -->
</body>
</html>