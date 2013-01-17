<?php
	class Semestre extends CI_Controller
	{

	public  $validateRules = array(
			array('field' => 'departamento','label' => 'Departamento','rules' => 'required'),
			array('field' => 'carrera','label' => 'Carrera','rules' => 'required'),
			array('field' => 'materia_codigo','label' => 'Materia','rules' => 'required'),
			array('field' => 'pensum_id','label' => 'Pensum','rules' => 'required'));

		function __construct()
			{
				parent::__construct();
				$this->load->model('semestres');		
				$this->dx_auth->check_uri_permissions();		
			} 

		function index()
		{
			$this->consultar();
		}

		function agregar(){

				$this->form_validation->set_rules($this->validateRules);
			if(!$this->form_validation->run()){
				$datos_plantilla['contenido'] = "semestre/insertar_semestre";
				$datos_plantilla['css']= 'jquery-ui-1.9.2.custom.min';
				$datos_plantilla['js']= 'semestre.js';
				$this->load->view('plantilla',$datos_plantilla);
			}else{
				$this->semestres->cargar($this->input->post());	
				$this->semestres->insertar_semestre();
				$this->consultar();
			}

		}
		
		function consultar(){
			$datos_plantilla['datos_semestre'] = $this->semestres->consultar_semestre();
			$datos_plantilla['contenido'] = 'semestre/lista_semestre';
			$this->load->view('plantilla',$datos_plantilla);
		}		

	}
?>