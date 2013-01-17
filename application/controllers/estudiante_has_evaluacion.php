<?php
class Estudiante_has_evaluacion extends CI_Controller {
	public  $validateRules = array(
			array('field' => 'estudiante_datos_usuarios_id','label' => 'Estudiante_datos_usuarios_id','rules' => 'required|callback_id_exist'),
			array('field' => 'evaluacion_id','label' => 'Evaluacion_id','rules' => 'required|numeric'),
			array('field' => 'calificacion','label' => 'Calificacion','rules' => 'required|numeric'));
			
			function __construct(){
				parent::__construct();
				$this->load->model('estudiante_has_evaluacions');
			}

		function index()
		{
			$this->consultar();
		}

		function insertar()
		{
			$this->form_validation->set_rules($this->validateRules);
			if(!$this->form_validation->run()){
				$datos_plantilla['contenido'] = "estudiante_has_evaluacion\insertar_calificacion";
				$this->load->view('plantilla',$datos_plantilla);
			}else{		
				$this->estudiante_has_evaluacions->cargar($this->input->post());	
				$this->estudiante_has_evaluacions->agregar();
				$this->consultar();
			}		
		}

		function editar()
		{

			$this->form_validation->set_rules($this->validateRules);
			$this->form_validation->set_rules('estudiante_datos_usuarios_id','Estudiante_datos_usuarios_id','required');

			//var_dump($this->form_validation->run());
			if(!$this->form_validation->run()){
				$datos_plantilla['datos_evaluacion'] = $this->estudiante_has_evaluacions->carga($this->uri->segment(3));
				$datos_plantilla['contenido'] = 'estudiante_has_evaluacion\editar_calificacion';
				$this->load->view('plantilla',$datos_plantilla);
			}else{
				$this->estudiante_has_evaluacions->cargar($this->input->post());	
				$this->estudiante_has_evaluacions->editar();
				$this->consultar();
			}
		}

		function eliminar($estudiante_datos_usuarios_id)
		{
			$this->estudiante_has_evaluacions->setEstudiante_datos_usuarios_id($estudiante_datos_usuarios_id);
			$this->estudiante_has_evaluacions->eliminar();
			$this->consultar();
		}

		function consultar()
		{
			$datos_plantilla['datos_evaluacion'] = $this->estudiante_has_evaluacions->consulta_general();
			$datos_plantilla['contenido'] = 'estudiante_has_evaluacion\lista_calificacion';
			$this->load->view('plantilla',$datos_plantilla);
		}

		function cargar_datos($estudiante_datos_usuarios_id)
		{
			$datos_plantilla['datos_evaluacion'] = $this->estudiante_has_evaluacions->consultar_mat($estudiante_datos_usuarios_id);
			$this->load->view('editar_evaluacion',$datos_plantilla);
		}

		function id_exist($estudiante_datos_usuarios_id){
			$respuesta = $this->estudiante_has_evaluacions->verificar($estudiante_datos_usuarios_id);

			if ($respuesta != null){
				$this->form_validation->set_message('id_exist','El %s ya se encuentra resgistrado');
				return FALSE;
			}else{
				return TRUE;
			}
		}

}
?>
