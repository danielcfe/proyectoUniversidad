<?php
class Materia_c extends CI_Controller {
	public  $validateRules = array(
			array('field' => 'codigo','label' => 'Codigo','rules' => 'required|callback_id_exist'),
			array('field' => 'unidad_curricular','label' => 'Unidad Curricular','rules' => 'required|alpha_spaces'),
			array('field' => 'horas_teoricas','label' => 'Horas Teoricas','rules' => 'required|numeric'),
			array('field' => 'horas_practicas','label' => 'Horas Practicas','rules' => 'required|numeric'),
			array('field' => 'uni_credito','label' => 'Unidades de Credito','rules' => 'required|numeric'),
			array('field' => 'cod_prelacion','label' => 'Codigo Prelacion','rules' => ''));

		function index()
		{
			$this->consultar();
		}

		function insertar()
		{
			$this->form_validation->set_rules($this->validateRules);
			if(!$this->form_validation->run()){
				$datos_plantilla['contenido'] = "insertar_materia";
				$this->load->view('plantilla',$datos_plantilla);
			}else{
				$this->load->model('materia');
				$obj = new Materia();
				$obj->cargar($this->input->post());	
				$obj->insertar_materia();
				$this->consultar();
			}		
		}

		function editar()
		{

			$this->form_validation->set_rules($this->validateRules);
			$this->form_validation->set_rules('codigo','Codigo','required');
			if(!$this->form_validation->run()){
				$this->load->model('materia');
				$datos_plantilla['datos_materia'] = $this->materia->consultar_mat($this->uri->segment(3));
				$datos_plantilla['contenido'] = "editar_materia";
				$this->load->view('plantilla',$datos_plantilla);
			}else{
			$this->load->model('materia');
			$obj = new Materia();
			$obj->cargar($this->input->post());	
			$obj->editar_materia();
			$this->consultar();
			}
		}

		function eliminar($codigo)
		{
			$this->load->model('materia');
			$obj = new Materia();
			$obj->setCodigo($codigo);
			$obj->eliminar_materia();
			$this->consultar();
		}

		function consultar()
		{
			$this->load->model('materia');
			$obj = new Materia();
			$datos_plantilla['datos_materia'] = $obj->consultar_materia();
			$datos_plantilla['contenido'] = 'lista_materia';
			$this->load->view('plantilla',$datos_plantilla);
		}

		function cargar_datos($codigo)
		{
			$this->load->model('materia');
			$obj = new Materia();
			$datos_plantilla['datos_materia'] = $obj->consultar_mat($codigo);
			$this->load->view('editar_materia',$datos_plantilla);
		}

		function id_exist($codigo){
			$this->load->model('materia');
			$obj = new Materia();
			$respuesta = $obj->verificar($codigo);

			if ($respuesta != null){
				$this->form_validation->set_message('id_exist','El %s ya se encuentra resgistrado');
				return FALSE;
			}else{
				return TRUE;
			}
		}

		function ajax()
    	{

        if($buscar = $this->input->get('unidad_curricular'))
        {
            $this->db->select('id, unidad_curricular as value');
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
