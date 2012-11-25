<?php	
//+---------------------------------------------------------------------+
//|Clase ControllerFormRequisitos 							 			|
//+---------------------------------------------------------------------+
//|Parametro: Ninguno                                    				|
//|Retornar: Ninguno													|
//+---------------------------------------------------------------------+
//|Funcionamiento: Clase que controla la gestion de datos de los requi  |
//| sitos 																|
//+---------------------------------------------------------------------+
class ControllerRequisitos extends CI_Controller 
{

	private $arrayCamposRules = array( 
									array( 'field' => 'descripcion', 'label' => 'Descripcion', 'rules' => 'trim|required|min_length[3]|max_length[50]|xss_clean' ),
									array( 'field' => 'requerido',   'label' => 'Requerido',   'rules' => 'required' ),
									array( 'field' => 'visibilidad', 'label' => 'Visibilidad', 'rules' => 'required' )
								);

	function index()
	{

	}

	private function set_datos($obj)
	{
		$array_valor  = array( 'id' => $this->input->post('id'), 'descripcion' => $this->input->post('descripcion'), 'requerido' => $this->input->post('requerido'), 'oculto' => $this->input->post('visibilidad') );

		foreach ($array_valor as $key => $value) 
		{
			$obj->set($key, $value);
		}
	}

	function agregar()
	{
		$array_datos = array();

		/*********** Modelos *************/
		$this->load->model('requisitos');
		$class = new Requisitos;

		$this->set_datos($class);
		$this->form_validation->set_rules($this->arrayCamposRules);

		if ( !$this->form_validation->run() )
			$this->load->view('form_insertar_requisitos');
		else
		{
			$array_datos = $class->insertar_requisitos();
			if( $array_datos['val'] == 0 )
				$this->listar();
			else
				$this->load->view('form_insertar_requisitos', $array_datos);
		}

	}


	function modificar($id)
	{
		$array_datos = array();

		/*********** Modelos *************/
		$this->load->model('requisitos');
		$class = new Requisitos;

		$this->set_datos($class);
		$this->form_validation->set_rules($this->arrayCamposRules);

		if ( !$this->form_validation->run() )
		{
			$array_datos['datos'] = $class->get_requisitos_one($id);
			$this->load->view('form_modificar_requisitos', $array_datos);
		}
		else
		{
			$array_datos = $class->modificar_requisitos();
			if( $array_datos['val'] == 0 )
				$this->listar();
			else
				$this->load->view('form_modificar_requisitos', $array_datos);
		}
	}

	function eliminar($id)
	{
		$array_datos = array();

		/*********** Modelos *************/
		$this->load->model('requisitos');
		$class = new Requisitos;

		$class->set('id', $id);

		$array_datos = $class->eliminar_requisitos();

		if( $array_datos['val'] == 0 )
			$this->listar();
		else
			$this->load->view('listar_requisitos', $array_datos);
	}


	function listar()
	{
		$this->load->model('requisitos/requisitos');
		$class = new Requisitos;
		$datos_plantilla['datos'] = $class->get_requisitos_all();
		if ( empty($datos_plantilla['datos']) )
			$datos_plantilla['msj'] = $class->msj('sin_reg');
		else
			$datos_plantilla['msj'] = "";

		$datos_plantilla['contenido'] = 'requisitos/listar_requisitos';
		$this->load->view('plantilla', $datos_plantilla);
	}

}

?>