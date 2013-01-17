<?php
class auditoria extends CI_Controller {

	function __construct()
			{
				parent::__construct();
				$this->load->model('auditor');		
				$this->dx_auth->check_uri_permissions();	
			} 

	function insertar(){

	}

	function consultar(){
		$datos_plantilla['auditoria'] = $this->auditor->consultar_acciones();
		$datos_plantilla["contenido"] = "auditoria/_consultar_auditoria";
		$this->load->view('plantilla', $datos_plantilla);	
	}

}?>