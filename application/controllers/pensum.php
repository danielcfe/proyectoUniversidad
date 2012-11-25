<?php
	class pensum extends CI_Controller
	{
		function index()
		{
			$this->consulta();
		}

		function agregar(){

			$this->load->helper(array('form', 'url'));
			$this->load->helper('url');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('fecha', 'Fecha', 'required');	
			$this->form_validation->set_rules('carrera_id', 'Carrera_id', 'required');

				$this->load->model('pensums');
				$obj = new Pensums();			
				$obj->setFecha($this->input->post('fecha'));
				$obj->setCarrera_id($this->input->post('carrera_id'));				
				$obj->agregar();

				$datos_plantilla["partial"] = "mensaje";
				$this->load->view('plantilla', $datos_plantilla);
			
		}

		function editar($id=null){
			$this->load->helper('url');
			$this->load->library('form_validation');
			$this->load->model('pensums');
			$obj = new Pensums();
			
			if(is_null($id)){								
				$this->form_validation->set_rules('fecha', 'Fecha', 'required');
				$this->form_validation->set_rules('carrera_id', 'Carrera_id', 'required');

				if ($this->form_validation->run() == FALSE){
					$datos_plantilla["partial"] = "_editar_pensum";
					$this->load->view('welcome_message', $datos_plantilla);
				}else{
					$obj->setId($this->input->post('id'));
					$obj->setFecha($this->input->post('fecha'));
					$obj->setCarrera_id($this->input->post('carrera_id'));		
					$obj->editar();
					$datos_plantilla["partial"] = "mensaje";			
				}							
			}else{
				$datos_plantilla["pensum"] = $obj->cargar($id);
				$datos_plantilla["partial"] = "_editar_pensum";						
			}
			$this->load->view('plantilla', $datos_plantilla);
		}

		function eliminar($id){
			$this->load->helper('url');
			$this->load->model('pensums');
			$obj = new Pensums();

			$obj->setId($id);			
			$obj->eliminar();

			$datos_plantilla["partial"] = "mensaje.php";
			$this->load->view('plantilla', $datos_plantilla);

		}

		function consulta($id = null){
			$this->load->helper('url');
			$this->load->model('pensums');
			$obj = new Pensums();			
			$datos_plantilla["pensum"] = $obj->consulta_general();
			$datos_plantilla["partial"] = "_consulta_pensum";
			$this->load->view('plantilla', $datos_plantilla);			 

		}

		function get($id){
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			$this->load->helper('url');
			$this->load->model('pensums');
			$obj = new Pensums();
			$datos_plantilla["pensum"] = $obj->cargar($id);
			$datos_plantilla["partial"] = "_editar_pensum";
			$this->load->view('plantilla', $datos_plantilla);
		}


	}
?>