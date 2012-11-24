<?php 
echo 'Bienvenido : '.$this->dx_auth->userData('name').' '.$this->dx_auth->userData('last_name'). '<br>';

//$this->uri->uri_string()
if($this->dx_auth->is_admin()){
	echo '<br>'.anchor('admin/', 'Administracion General', array('class' => 'link_with_button plus'));
}
/*
$rol = array(3,1);
$rol = array('Profesor','User');

if($this->dx_auth->is_role($rol, TRUE, TRUE)){

	var_dump('Es profesor o Usuario');
}*/


//echo '<br><br>'.anchor($this->router->fetch_class().'/logout', 'Salir del Sistema', array('class' => 'link_with_button plus'));

$rol = array('Profesor','Administracion','admin');

if($this->dx_auth->is_role($rol, TRUE, TRUE)){

	//echo '<br><br>'.anchor($this->router->fetch_class().'/custom_permissions', 'custom_permissions', array('class' => 'link_with_button plus'));
}

echo '<br>'.anchor($this->router->fetch_class().'/cancel_account', 'Cancelar Cuenta', array('class' => 'link_with_button plus'));
echo '<br>'.anchor($this->router->fetch_class().'/change_password', 'Cambiar Clave', array('class' => 'link_with_button plus'));
//echo '<br>'.anchor($this->router->fetch_class().'/reset_password', 'reset_password', array('class' => 'link_with_button plus'));
//echo '<br>'.anchor($this->router->fetch_class().'/forgot_password', 'forgot_password', array('class' => 'link_with_button plus'));
echo '<br>'.anchor($this->router->fetch_class().'/edit', 'Editar Datos', array('class' => 'link_with_button plus'));
//echo '<br>'.anchor($this->router->fetch_class().'/activate', 'activate', array('class' => 'link_with_button plus'));
//echo '<br>'.anchor($this->router->fetch_class().'/register', 'register', array('class' => 'link_with_button plus'));
 ?>