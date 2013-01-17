<?php
	class carrera extends CI_Controller
	{

		function __construct()
			{
				parent::__construct();
				$this->load->model('carreras');		
				$this->dx_auth->check_uri_permissions();	
			} 

		function index()
		{
			$this->consulta();
		}

		function agregar(){

			$this->form_validation->set_rules('nombre', 'nombre', 'required');	
			$this->form_validation->set_rules('departamento_id', 'departamento_id', 'callback_id_exist');

			if ($this->form_validation->run() == FALSE){
					$datos_plantilla["contenido"] = "carrera/_registro_carrera";
					$datos_plantilla['css']= 'jquery-ui-1.9.2.custom.min';
					$datos_plantilla['js']= 'departamento.js';
					$this->load->view('plantilla', $datos_plantilla);
				}else{			
				$this->carreras->setNombre($this->input->post('nombre'));
				$this->carreras->setDepartamento_id($this->input->post('departamento_id'));				
				$this->carreras->agregar();
				$this->auditor->registrar_accion("Se inserta una nueva carrera: ".$this->input->post('nombre'));
				$this->consulta();
			}
		}

		function editar($id=null){
			$datos_plantilla['css']= 'jquery-ui-1.9.2.custom.min';
			$datos_plantilla['js']= 'departamento.js';
			
			if(is_null($id)){								
				$this->form_validation->set_rules('nombre', 'Nombre', 'required');
				$this->form_validation->set_rules('departamento_id', 'departamento_id', 'callback_id_exist');

				if ($this->form_validation->run() == FALSE){
					$datos_plantilla["contenido"] = "carrera/_editar_carrera";
					$this->load->view('plantilla', $datos_plantilla);
				}else{
					$this->carreras->setId($this->input->post('id'));
					$this->carreras->setNombre($this->input->post('nombre'));
					$this->carreras->setDepartamento_id($this->input->post('departamento_id'));		
					$this->carreras->editar();
					$this->consulta();			
				}							
			}else{
				$datos_plantilla["carrera"] = $this->carreras->cargar($id);
				$datos_plantilla["contenido"] = "carrera/_editar_carrera";	
				$this->load->view('plantilla', $datos_plantilla);					
			}			
		}

		function eliminar($id){
			$this->carreras->setId($id);			
			$this->carreras->eliminar();
			$this->consulta();
		}

		function consulta($id = null){			
			$datos_plantilla['carreras'] = $this->carreras->consulta_general();
			$datos_plantilla["contenido"] = "carrera/_consulta_carrera";
			$this->load->view('plantilla', $datos_plantilla);			 
		}

		function cargar_carrera()
		{
			$datos_plantilla["id_carrera"] = $this->carreras->consulta_car();
			$datos_plantilla["contenido"] = "plan_evaluacion/insertar_plan_evaluacion";	
			$this->load->view('plantilla', $datos_plantilla);
		}

		function get($id){
			$datos_plantilla["carrera"] = $this->carreras->cargar($id);
			$datos_plantilla["contenido"] = "carrera/_editar_carrera";
			$this->load->view('plantilla', $datos_plantilla);
		}

		function id_exist(){
			$respuesta = $this->input->post('departamento_id');

			if ($respuesta == ""){
				$this->form_validation->set_message('id_exist','El departamento no se encuentra registrado');
				return FALSE;
			}else{
				return TRUE;
			}
		}

		function all($id){
			echo json_encode($this->carreras->consultar_ca_a($id));
		}


	}
?>