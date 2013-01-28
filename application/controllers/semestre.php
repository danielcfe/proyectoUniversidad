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

	function agregar_semestre()
	{
		$this->semestres->set_pensum_id($this->input->post('pensum'));
		$this->semestres->set_materia_codigo($this->input->post('materia'));
		$this->semestres->set_semestre($this->input->post('semes'));
		echo $this->semestres->insertar_semestre();
	}

	function borrar_semestre()
	{
		$this->semestres->set_pensum_id($this->input->post('pensum'));
		$this->semestres->set_materia_codigo($this->input->post('materia'));
		echo $this->semestres->eliminar_semestre();
	}


}
?>