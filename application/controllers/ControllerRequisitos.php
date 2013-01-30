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
									array( 'field' => 'descripcion', 'label' => 'Descripcion', 'rules' => 'trim|required|min_length[3]|max_length[50]|xss_clean|callback_verif_requesito' ),
									array( 'field' => 'requerido',   'label' => 'Requerido',   'rules' => 'required' ),
									array( 'field' => 'visibilidad', 'label' => 'Visibilidad', 'rules' => 'required' )
								);

	function __construct()
	{
		parent::__construct();
		$this->load->model('requisitos/requisitos');
		$this->dx_auth->check_uri_permissions();	
	}

	function index()
	{
		$this->listar();
	}

	public function verif_requesito($cadena)
	{
		$class = new Requisitos;
		$result = $class->get_requisitos_descripcion($cadena);
		if ( $result != NULL )
		{
			$this->form_validation->set_message('verif_requesito',  $class->msj('reg_duplicado') );
			return FALSE;
		}else
			return TRUE;
	}

	private function set_datos($obj)
	{
		$array_valor  = array( 'id' => $this->input->post('id'), 'descripcion' => $this->input->post('descripcion'), 'requerido' => $this->input->post('requerido'), 'oculto' => $this->input->post('visibilidad') );
		foreach ($array_valor as $key => $value) 
		{ $obj->set($key, $value); }
	}

	function agregar()
	{
		$class = new Requisitos;
		$this->set_datos($class);
		$datos_plantilla['contenido'] = 'requisitos/form_insertar_requisitos';
		$this->form_validation->set_rules($this->arrayCamposRules);
		if ( !$this->form_validation->run() )
			$this->load->view('plantilla', $datos_plantilla);
		else
		{
			$class->insertar_requisitos();
			$this->auditor->registrar_accion("Se inserta un nuevo requisito: ".$this->input->post('descripcion')); 
			$this->listar();
		}
	}


	function modificar($id)
	{
		$class = new Requisitos;
		$this->set_datos($class);
		$datos_plantilla['datos'] = $class->get_requisitos_one($id);
		$datos_plantilla['contenido'] = 'requisitos/form_modificar_requisitos';
		$this->form_validation->set_rules($this->arrayCamposRules);
		$this->form_validation->set_rules('descripcion', 'Descripcion', 'trim|required|min_length[3]|max_length[50]|xss_clean');
		
		if ( !$this->form_validation->run() )
			$this->load->view('plantilla', $datos_plantilla);
		else
		{
			$class->modificar_requisitos(); 
			$this->auditor->registrar_accion("Se modifica el requisito: ".$this->input->post('descripcion'));
			$this->listar();
		}
	}

	function eliminar($id)
	{
		$class = new Requisitos;
		$class->set('id', $id);
		$result = $class->eliminar_requisitos();
		$this->auditor->registrar_accion("Se elimina el requisito con codigo: ".$id); 
		$this->listar();
	}


	function listar()
	{
		$class = new Requisitos;
		
		if(!$this->input->post('buscar'))
		{
			$datos_plantilla['datos'] = $class->get_requisitos_all();
			if ( empty($datos_plantilla['datos']) )
				$datos_plantilla['msj'] = $class->msj('sin_reg');
			else
				$datos_plantilla['msj'] = "";
		}
		else
		{
			$datos_plantilla['datos'] = $class->get_requisitos_buscar($this->input->post('buscar'));
			if ( empty($datos_plantilla['datos']) )
				$datos_plantilla['msj'] = $class->msj('sin_reg');
			else
				$datos_plantilla['msj'] = "";
		}	
		$datos_plantilla['contenido'] = 'requisitos/listar_requisitos';
		$this->load->view('plantilla', $datos_plantilla);
	}

}

?>