<?php
	class pensum extends CI_Controller
	{

		function __construct()
			{
				parent::__construct();
				$this->load->model('pensums');			
			} 

		function index()
		{
			$this->consulta();
		}

		function agregar(){
			$this->form_validation->set_rules('carrera_id', 'Carrera_id', 'required');

			if ($this->form_validation->run() == FALSE){
					$datos_plantilla["contenido"] = "pensum/_registro_pensum";
					$datos_plantilla['css']= 'jquery-ui-1.9.2.custom.min';
					$datos_plantilla['js']= 'semestre.js';
					$datos_plantilla['js']= 'departamento.js';
					$this->load->view('plantilla', $datos_plantilla);
				}else{			
				$this->pensums->setFecha(date('Y-m-d'));
				$this->pensums->setCarrera_id($this->input->post('carrera_id'));				
				$this->pensums->agregar();

				$datos_plantilla["contenido"] = "mensaje";
				$this->load->view('plantilla', $datos_plantilla);
			}
		}

		function editar($id=null){
			if(is_null($id)){								
				$this->form_validation->set_rules('carrera_id', 'Carrera_id', 'required');

				if ($this->form_validation->run() == FALSE){
					$datos_plantilla["contenido"] = "pensum/_editar_pensum";
					$this->load->view('plantilla', $datos_plantilla);
				}else{
					$this->pensums->setId($this->input->post('id'));
					$this->pensums->setCarrera_id($this->input->post('carrera_id'));		
					$this->pensums->editar();
					$datos_plantilla["contenido"] = "mensaje";			
				}							
			}else{
				$datos_plantilla["pensum"] = $this->pensums->cargar($id);
				$datos_plantilla["contenido"] = "pensum/_editar_pensum";						
			}
			$this->load->view('plantilla', $datos_plantilla);
		}

		function eliminar($id){
			$this->pensums->setId($id);			
			$this->pensums->eliminar();

			$datos_plantilla["contenido"] = "mensaje.php";
			$this->load->view('plantilla', $datos_plantilla);

		}

		function consulta($id = null){		
			$datos_plantilla["pensum"] = $this->pensums->consulta_general();
			$datos_plantilla["contenido"] = "pensum/_consulta_pensum";
			$this->load->view('plantilla', $datos_plantilla);			 

		}

		function get($id){
			$datos_plantilla["pensum"] = $this->pensums->cargar($id);
			$datos_plantilla["contenido"] = "pensum/_editar_pensum";
			$this->load->view('plantilla', $datos_plantilla);
		}


	}
?>