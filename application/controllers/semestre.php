<?php
class Semestre extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('semestres');
		$this->load->model('materia');		
		$this->dx_auth->check_uri_permissions();		
	} 

	function json_get_materia()
	{
		echo json_encode($this->materia->consultar_mat_a());
	}



}
?>