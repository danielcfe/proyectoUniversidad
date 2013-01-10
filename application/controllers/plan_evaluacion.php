<?php
class Plan_evaluacion extends CI_Controller {
	public  $validateRules = array(
			array('field' => 'descripcion','label' => 'Descripcion','rules' => 'required|callback_id_exist'),
			array('field' => 'profesor_datos_usuarios_id','label' => 'Profesor_datos_usuarios_id','rules' => 'required|numeric'),
			array('field' => 'materia_codigo','label' => 'Codigo Materia','rules' => 'required|alpha_spaces'),
			
			function __construct(){
				parent::__construct();
				$this->load->model('plan_evaluacions');
			}

		function index()
		{
			$this->consultar();
		}

		function insertar()
		{
			$this->form_validation->set_rules($this->validateRules);
			if(!$this->form_validation->run()){
				$datos_plantilla['contenido'] = "insertar_plan_evaluacion";
				$this->load->view('plantilla',$datos_plantilla);
			}else{	
				$this->plan_evaluacions->cargar($this->input->post());	
				$this->plan_evaluacions->insertar_plan_evaluacion();
				$this->consultar();
			}		
		}

		function editar()
		{

			$this->form_validation->set_rules($this->validateRules);
			$this->form_validation->set_rules('id','id','required');
			if(!$this->form_validation->run()){
				$datos_plantilla['datos_plan_evaluacion'] = $this->plan_evaluacion->consultar_mat($this->uri->segment(3));
				$datos_plantilla['contenido'] = "editar_plan_evaluacion";
				$this->load->view('plantilla',$datos_plantilla);
			}else{
			$this->plan_evaluacions->cargar($this->input->post());	
			$this->plan_evaluacions->editar_plan_evaluacion();
			$this->consultar();
			}
		}

		function eliminar($id)
		{
			$this->load->model('plan_evaluacion');
			$this->plan_evaluacions = new plan_evaluacion();
			$this->plan_evaluacions->setId($id);
			$this->plan_evaluacions->eliminar_plan_evaluacion();
			$this->consultar();
		}

		function consultar()
		{
			$datos_plantilla['datos_plan_evaluacion'] = $this->plan_evaluacions->consultar_plan_evaluacion();
			$datos_plantilla['contenido'] = 'plan_evaluacion\lista_plan_evaluacion';
			$this->load->view('plantilla',$datos_plantilla);
		}

		function cargar_datos($id)
		{
			$datos_plantilla['datos_plan_evaluacion'] = $this->plan_evaluacions->consultar_mat($id);
			$this->load->view('editar_plan_evaluacion',$datos_plantilla);
		}

		function id_exist($id){
			$respuesta = $this->plan_evaluacions->verificar($id);

			if ($respuesta != null){
				$this->form_validation->set_message('id_exist','El %s ya se encuentra resgistrado');
				return FALSE;
			}else{
				return TRUE;
			}
		}

}
?>
