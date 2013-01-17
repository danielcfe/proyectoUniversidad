<?php
class Evaluacion extends CI_Controller {
	public  $validateRules = array(
			array('field' => 'descripcion','label' => 'Descripcion','rules' => 'required|callback_id_exist'),
			array('field' => 'valor','label' => 'Valor','rules' => 'required|numeric'),
			array('field' => 'plan_evaluacion_id','label' => 'Id del plan de Plan_evaluacion','rules' => 'required|numeric'));
			
			function __construct(){
				parent::__construct();
				$this->load->model('evaluacions');
				$this->dx_auth->check_uri_permissions();
			}

		function index()
		{
			$this->consultar();
		}

		function insertar()
		{
			$this->form_validation->set_rules($this->validateRules);
			if(!$this->form_validation->run()){
				$datos_plantilla['contenido'] = "evaluacion\insertar_evaluacion";
				$this->load->view('plantilla',$datos_plantilla);
			}else{		
				$this->evaluacions->cargar($this->input->post());	
				$this->evaluacions->agregar();
				$this->consultar();
			}		
		}

		function editar()
		{

			$this->form_validation->set_rules($this->validateRules);
			$this->form_validation->set_rules('id','Id','required');


			//var_dump($this->form_validation->run());
			if(!$this->form_validation->run()){
				$datos_plantilla['datos_evaluacion'] = $this->evaluacions->carga($this->uri->segment(3));
				$datos_plantilla['contenido'] = 'evaluacion\editar_evaluacion';
				$this->load->view('plantilla',$datos_plantilla);
			}else{
				$this->evaluacions->cargar($this->input->post());	
				$this->evaluacions->editar();
				$this->consultar();
			}
		}

		function eliminar($id)
		{
			$this->evaluacions->setId($id);
			$this->evaluacions->eliminar();
			$this->consultar();
		}

		function consultar()
		{
			$datos_plantilla['datos_evaluacion'] = $this->evaluacions->consulta_general();
			$datos_plantilla['contenido'] = 'evaluacion\lista_evaluacion';
			$this->load->view('plantilla',$datos_plantilla);
		}

		function cargar_datos($id)
		{
			$datos_plantilla['datos_evaluacion'] = $this->evaluacions->consultar_mat($id);
			$this->load->view('editar_evaluacion',$datos_plantilla);
		}

		function id_exist($id){
			$respuesta = $this->evaluacions->verificar($id);

			if ($respuesta != null){
				$this->form_validation->set_message('id_exist','El %s ya se encuentra resgistrado');
				return FALSE;
			}else{
				return TRUE;
			}
		}

}
?>
