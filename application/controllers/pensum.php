<?php
	class pensum extends CI_Controller
	{
		function index()
		{
			$this->consulta();
		}

		function agregar(){

			$this->form_validation->set_rules('fecha', 'Fecha', 'required');	
			$this->form_validation->set_rules('carrera_id', 'Carrera_id', 'required');

			if ($this->form_validation->run() == FALSE){
					$datos_plantilla["contenido"] = "_registro_pensum";
					$this->load->view('plantilla', $datos_plantilla);
				}else{
				$this->load->model('pensums');
				$obj = new Pensums();			
				$obj->setFecha($this->input->post('fecha'));
				$obj->setCarrera_id($this->input->post('carrera_id'));				
				$obj->agregar();

				$datos_plantilla["contenido"] = "mensaje";
				$this->load->view('plantilla', $datos_plantilla);
			}
		}

		function editar($id=null){
			$this->load->model('pensums');
			$obj = new Pensums();
			
			if(is_null($id)){								
				$this->form_validation->set_rules('fecha', 'Fecha', 'required');
				$this->form_validation->set_rules('carrera_id', 'Carrera_id', 'required');

				if ($this->form_validation->run() == FALSE){
					$datos_plantilla["contenido"] = "_editar_pensum";
					$this->load->view('plantilla', $datos_plantilla);
				}else{
					$obj->setId($this->input->post('id'));
					$obj->setFecha($this->input->post('fecha'));
					$obj->setCarrera_id($this->input->post('carrera_id'));		
					$obj->editar();
					$datos_plantilla["contenido"] = "mensaje";			
				}							
			}else{
				$datos_plantilla["pensum"] = $obj->cargar($id);
				$datos_plantilla["contenido"] = "_editar_pensum";						
			}
			$this->load->view('plantilla', $datos_plantilla);
		}

		function eliminar($id){
			$this->load->model('pensums');
			$obj = new Pensums();

			$obj->setId($id);			
			$obj->eliminar();

			$datos_plantilla["contenido"] = "mensaje.php";
			$this->load->view('plantilla', $datos_plantilla);

		}

		function consulta($id = null){
			$this->load->model('pensums');
			$obj = new Pensums();			
			$datos_plantilla["pensum"] = $obj->consulta_general();
			$datos_plantilla["contenido"] = "_consulta_pensum";
			$this->load->view('plantilla', $datos_plantilla);			 

		}

		function get($id){
			$this->load->model('pensums');
			$obj = new Pensums();
			$datos_plantilla["pensum"] = $obj->cargar($id);
			$datos_plantilla["contenido"] = "_editar_pensum";
			$this->load->view('plantilla', $datos_plantilla);
		}


	}
?>