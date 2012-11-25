<?php
	class departamento extends CI_Controller
	{
		function index()
		{
			$this->consulta();
		}

		function agregar(){

			$this->form_validation->set_rules('nombre', 'nombre', 'required');	
		
			if ($this->form_validation->run() == FALSE){
					$datos_plantilla["contenido"] = "_registro_departamento";
					$this->load->view('plantilla', $datos_plantilla);
				}else{
				$this->load->model('departamentos');
				$obj = new Departamentos();			
				$obj->setNombre($this->input->post('nombre'));				
				$obj->agregar();

				$datos_plantilla["contenido"] = "mensaje";
				$this->load->view('plantilla', $datos_plantilla);	
				}		
		}

		function editar($id=null){
			$this->load->model('departamentos');
			$obj = new Departamentos();
			
			if(is_null($id)){								
				$this->form_validation->set_rules('nombre', 'Nombre', 'required');

				if ($this->form_validation->run() == FALSE){
					$datos_plantilla["contenido"] = "_editar_departamento";
					$this->load->view('plantilla', $datos_plantilla);
				}else{
					$obj->setId($this->input->post('id'));
					$obj->setNombre($this->input->post('nombre'));		
					$obj->editar();
					$datos_plantilla["contenido"] = "mensaje";			
				}							
			}else{
				$datos_plantilla["departamento"] = $obj->cargar($id);
				$datos_plantilla["contenido"] = "_editar_departamento";						
			}
			$this->load->view('plantilla', $datos_plantilla);
		}

		function eliminar($id){
			$this->load->model('departamentos');
			$obj = new Departamentos();

			$obj->setId($id);			
			$obj->eliminar();

			$datos_plantilla["contenido"] = "mensaje";
			$this->load->view('plantilla', $datos_plantilla);

		}

		function consulta($id = null){
			$this->load->model('departamentos');
			$obj = new Departamentos();			
			$datos_plantilla['departamento'] = $obj->consulta_general();			
			$datos_plantilla["contenido"] = "_consulta_departamento";
			$this->load->view('plantilla', $datos_plantilla);			 
		}

		function get($id){
			$this->load->model('departamentos');
			$obj = new Departamentos();
			$datos_plantilla["departamento"] = $obj->cargar($id);
			$datos_plantilla["contenido"] = "_editar_departamento";
			$this->load->view('plantilla', $datos_plantilla);
		}

	}
?>