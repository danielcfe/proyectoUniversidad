<?php
	class departamento extends CI_Controller
	{

		function __construct()
			{
				parent::__construct();
				$this->load->model('departamentos');			
			} 

		function index()
		{
			$this->consulta();
		}

		function agregar(){

			$this->form_validation->set_rules('nombre', 'nombre', 'required');	
		
			if ($this->form_validation->run() == FALSE){
					$datos_plantilla["contenido"] = "departamento/_registro_departamento";
					$this->load->view('plantilla', $datos_plantilla);
				}else{		
				$this->departamentos->setNombre($this->input->post('nombre'));				
				$this->departamentos->agregar();

				$datos_plantilla["contenido"] = "mensaje";
				$this->load->view('plantilla', $datos_plantilla);	
				}		
		}

		function editar($id=null){
			
			if(is_null($id)){								
				$this->form_validation->set_rules('nombre', 'Nombre', 'required');

				if ($this->form_validation->run() == FALSE){
					$datos_plantilla["contenido"] = "departamento/_editar_departamento";
					$this->load->view('plantilla', $datos_plantilla);
				}else{
					$this->departamentos->setId($this->input->post('id'));
					$this->departamentos->setNombre($this->input->post('nombre'));		
					$this->departamentos->editar();
					$datos_plantilla["contenido"] = "mensaje";			
				}							
			}else{
				$datos_plantilla["departamento"] = $this->departamentos->cargar($id);
				$datos_plantilla["contenido"] = "departamento/_editar_departamento";						
			}
			$this->load->view('plantilla', $datos_plantilla);
		}

		function eliminar($id){
			$this->departamentos->setId($id);			
			$this->departamentos->eliminar();

			$datos_plantilla["contenido"] = "mensaje";
			$this->load->view('plantilla', $datos_plantilla);
		}

		function consulta($id = null){	
			$datos_plantilla['departamento'] = $this->departamentos->consulta_general();			
			$datos_plantilla["contenido"] = "departamento/_consulta_departamento";
			$this->load->view('plantilla', $datos_plantilla);			 
		}

		function get($id){
			$datos_plantilla["departamento"] = $this->departamentos->cargar($id);
			$datos_plantilla["contenido"] = "departamento/_editar_departamento";
			$this->load->view('plantilla', $datos_plantilla);
		}

		function all(){
			echo json_encode($this->departamentos->consultar_dep_a());
		}

	}
?>