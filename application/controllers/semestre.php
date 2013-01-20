<?php
class Semestre extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('semestres');		
		$this->dx_auth->check_uri_permissions();		
	} 

	function agregar_semestre($idPensum)
	{

		$datos_plantilla['contenido'] = 'semestre/_agregar_semestre';
		$datos_plantilla['js'] 		  = 'semestre.js';

		if ( !$this->form_validation->run() )
		{ $this->load->view('plantilla', $datos_plantilla);	}
		else
		{ $this->load->view('plantilla', $datos_plantilla); }
	}

}
?>