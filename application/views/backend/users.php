<html>
	<head><title>Manage users</title></head>
	<body>
	<?php  				
		// Show reset password message if exist
		if (isset($reset_message))
			echo $reset_message;
		
		// Show error
		echo validation_errors();
		
		$this->table->set_heading('', 'Nombre Usuario', 'Correl', 'Rol', 'Bloqueado', 'Last IP', 'Last login', 'Created','Nombre','Sexo','Estado Civil');
		
		foreach ($users as $user) 
		{
			$banned = ($user->banned == 1) ? 'Yes' : 'No';
			
			$this->table->add_row(
				form_checkbox('checkbox_'.$user->id, $user->id),
				anchor($this->router->fetch_class().'/editUser/'.$user->id, $user->username, array('class' => 'link_with_button plus')), 
				$user->email, 
				$user->role_name, 
				$banned, 
				$user->last_ip,
				date('Y-m-d', strtotime($user->last_login)), 
				date('Y-m-d', strtotime($user->created)),
				$user->name.' '.$user->last_name,
				$user->gender,
				$user->civil_status);
		}
		
		echo form_open($this->uri->uri_string());
				
		echo form_submit('ban', 'Ban user');
		echo form_submit('unban', 'Unban user');
		echo form_submit('reset_pass', 'Reset password');
		
		echo '<hr/>';
		
		echo $this->table->generate(); 
		
		echo form_close();
		
		echo $pagination;
			
	?>
	</body>
</html>