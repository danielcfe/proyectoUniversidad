<?php
class Materia_c extends CI_Controller {
	public  $validateRules = array(
			array('field' => 'codigo','label' => 'Codigo','rules' => 'required|callback_id_exist'),
			array('field' => 'unidad_curricular','label' => 'Unidad Curricular','rules' => 'required|alpha_spaces'),
			array('field' => 'horas_teoricas','label' => 'Horas Teoricas','rules' => 'required|numeric'),
			array('field' => 'horas_practicas','label' => 'Horas Practicas','rules' => 'required|numeric'),
			array('field' => 'uni_credito','label' => 'Unidades de Credito','rules' => 'required|numeric'),
			array('field' => 'cod_prelacion','label' => 'Codigo Prelacion','rules' => ''));

		function __construct()
			{
				parent::__construct();
				$this->load->model('materia');				
			} 

		function index()
		{
			$this->consultar();
		}

		function insertar()
		{
			$this->form_validation->set_rules($this->validateRules);
			if(!$this->form_validation->run()){
				$datos_plantilla['css']= 'jquery-ui-1.9.2.custom.min';
				$datos_plantilla['js']= 'materia.js';
				$datos_plantilla['contenido'] = "materia/insertar_materia";
				$this->load->view('plantilla',$datos_plantilla);
			}else{
				$this->materia->cargar($this->input->post());	
				$this->materia->insertar_materia();
				$this->consultar();
			}		
		}

		function editar()
		{

			$this->form_validation->set_rules($this->validateRules);
			$this->form_validation->set_rules('codigo','Codigo','required');
			if(!$this->form_validation->run()){
				$datos_plantilla['datos_materia'] = $this->materia->consultar_mat($this->uri->segment(3));
				$datos_plantilla['contenido'] = "materia/editar_materia";
				$this->load->view('plantilla',$datos_plantilla);
			}else{
			$this->materia->cargar($this->input->post());	
			$this->materia->editar_materia();
			$this->consultar();
			}
		}

		function eliminar($codigo)
		{
			$this->materia->setCodigo($codigo);
			$this->materia->eliminar_materia();
			$this->consultar();
		}

		function consultar()
		{
			$datos_plantilla['datos_materia'] = $this->materia->consultar_materia();
			$datos_plantilla['contenido'] = 'materia/lista_materia';
			$this->load->view('plantilla',$datos_plantilla);
		}

		function all()
		{
			echo json_encode($this->materia->consultar_mat_a());
		}
		function cargar_datos($codigo)
		{
			$datos_plantilla['datos_materia'] = $this->materia->consultar_mat($codigo);
			$this->load->view('materia/editar_materia',$datos_plantilla);
		}

		function id_exist($codigo){
			$respuesta = $this->materia->verificar($codigo);

			if ($respuesta != null){
				$this->form_validation->set_message('id_exist','El %s ya se encuentra resgistrado');
				return FALSE;
			}else{
				return TRUE;
			}
		}

		function ajax(){
	        if($buscar = $this->input->post('unidad_curricular'))
	        {
	            $this->db->select('codigo, unidad_curricular');
	            $this->db->like('unidad_curricular', $buscar); 
	            $this->db->limit(10);
	            $query=$this->db->get('materia');
	            if($query->num_rows() > 0)
	            {
	                foreach ($query->result_array() as $row)
	                {
	                    $result[]= $row;
	                }
	            }
	            echo json_encode($result);
	        }
   		}

}
?>
