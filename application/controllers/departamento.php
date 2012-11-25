<?php
	class departamento extends CI_Controller
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
		
				$this->load->model('departamentos');
				$obj = new Departamentos();			
				$obj->setNombre($this->input->post('nombre'));				
				$obj->agregar();

				$datos_plantilla["partial"] = "mensaje";
				$this->load->view('plantilla', $datos_plantilla);			
		}

		function editar($id=null){
			$this->load->helper('url');
			$this->load->library('form_validation');
			$this->load->model('departamentos');
			$obj = new Departamentos();
			
			if(is_null($id)){								
				$this->form_validation->set_rules('nombre', 'Nombre', 'required');

				if ($this->form_validation->run() == FALSE){
					$datos_plantilla["partial"] = "_editar_departamento";
					$this->load->view('plantilla', $datos_plantilla);
				}else{
					$obj->setId($this->input->post('id'));
					$obj->setNombre($this->input->post('nombre'));		
					$obj->editar();
					$datos_plantilla["partial"] = "mensaje";			
				}							
			}else{
				$datos_plantilla["departamento"] = $obj->cargar($id);
				$datos_plantilla["partial"] = "_editar_departamento";						
			}
			$this->load->view('plantilla', $datos_plantilla);
		}

		function eliminar($id){
			$this->load->helper('url');
			$this->load->model('departamentos');
			$obj = new Departamentos();

			$obj->setId($id);			
			$obj->eliminar();

			$datos_plantilla["partial"] = "mensaje";
			$this->load->view('plantilla', $datos_plantilla);

		}

		function consulta($id = null){
			$this->load->helper('url');
			$this->load->model('departamentos');
			$obj = new Departamentos();			
			$datos_plantilla['departamento'] = $obj->consulta_general();			
			$datos_plantilla["partial"] = "_consulta_departamento";
			$this->load->view('plantilla', $datos_plantilla);			 
		}

		function get($id){
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			$this->load->helper('url');
			$this->load->model('departamentos');
			$obj = new Departamentos();
			$datos_plantilla["departamento"] = $obj->cargar($id);
			$datos_plantilla["partial"] = "_editar_departamento";
			$this->load->view('plantilla', $datos_plantilla);
		}

	}
?>