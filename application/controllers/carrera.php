<?php
	class carrera extends CI_Controller
	{
		function index()
		{
			$this->consulta();
		}

		function agregar(){

			$this->load->helper(array('form', 'url'));
			$this->load->helper('url');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nombre', 'nombre', 'required');	
			$this->form_validation->set_rules('departamento_id', 'departamento_id', 'required');


				$this->load->model('carreras');
				$obj = new Carreras();			
				$obj->setNombre($this->input->post('nombre'));
				$obj->setDepartamento_id($this->input->post('departamento_id'));				
				$obj->agregar();

				$datos_plantilla["partial"] = "mensaje";
				$this->load->view('plantilla', $datos_plantilla);
			
		}

		function editar($id=null){
			$this->load->helper('url');
			$this->load->library('form_validation');
			$this->load->model('carreras');
			$obj = new Carreras();
			
			if(is_null($id)){								
				$this->form_validation->set_rules('nombre', 'Nombre', 'required');
				$this->form_validation->set_rules('departamento_id', 'departamento_id', 'required');

				if ($this->form_validation->run() == FALSE){
					$datos_plantilla["partial"] = "_editar_carrera";
					$this->load->view('welcome_message', $datos_plantilla);
				}else{
					$obj->setId($this->input->post('id'));
					$obj->setNombre($this->input->post('nombre'));
					$obj->setDepartamento_id($this->input->post('departamento_id'));		
					$obj->editar();
					$datos_plantilla["partial"] = "mensaje";			
				}							
			}else{
				$datos_plantilla["carrera"] = $obj->cargar($id);
				$datos_plantilla["partial"] = "_editar_carrera";						
			}
			$this->load->view('plantilla', $datos_plantilla);
		}

		function eliminar($id){
			$this->load->helper('url');
			$this->load->model('carreras');
			$obj = new Carreras();

			$obj->setId($id);			
			$obj->eliminar();

			$datos_plantilla["partial"] = "mensaje.php";
			$this->load->view('plantilla', $datos_plantilla);

		}

		function consulta($id_vuelo = null){
			$this->load->helper('url');
			$this->load->model('carreras');
			$obj = new Carreras();			
			$datos_plantilla['carreras'] = $obj->consulta_general();
			$datos_plantilla["partial"] = "_consulta_carrera";
			$this->load->view('plantilla', $datos_plantilla);			 

		}

		function get($id){
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			$this->load->helper('url');
			$this->load->model('carreras');
			$obj = new Carreras();
			$datos_plantilla["carrera"] = $obj->cargar($id);
			$datos_plantilla["partial"] = "_editar_carrera";
			$this->load->view('plantilla', $datos_plantilla);
		}


	}
?>