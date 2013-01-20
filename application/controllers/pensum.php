<?php
class Pensum extends CI_Controller
{
	private $arrayCamposRules = array( 
									array( 'field' => 'departamento', 'label' => 'Departamento', 'rules' => 'trim|required|xss_clean' ),
									array( 'field' => 'carrera', 'label' => 'Carrera', 'rules' => 'trim|required|xss_clean' )
								);

	function __construct()
	{
		parent::__construct();
		$this->load->model('departamentos');
		$this->load->model('carreras');
		$this->load->model('pensums');
	}

	private function set_datos($obj)
	{
		$array_valor  = array( 'fecha' => date('Y-m-d'), 'carrera_id' => $this->input->post('carrera') );
		foreach ($array_valor as $key => $value) 
		{ $obj->set($key, $value); }
	}

	function index()
	{
		$this->agregar();
	}


	function agregar()
	{
		$classModelDep = new Departamentos;
		$classModelPen = new Pensums;
		$arrayDep      = array('' => 'Selecc. Departamento...');
		$array 		   = $classModelDep->consulta_general();


		# Preparando el arreglo que se pasara a la vista para llenar departamento
		foreach ($array as $val) 
		{ $arrayDep[$val['id']] = $val['nombre']; }

		$datos_plantilla['contenido'] = 'pensum/_registro_pensum';
		$datos_plantilla['js'] 		  = 'pensum.js';
		$datos_plantilla['arrayDep']  = $arrayDep;
		$datos_plantilla['arrayCar']  = array('' => '');

		$this->form_validation->set_rules($this->arrayCamposRules);
		if ( !$this->form_validation->run() )
		{ $this->load->view('plantilla', $datos_plantilla);	}
		else
		{
			$this->set_datos($classModelPen);
			$classModelPen->insertar_pensum();
			$this->pensum_semestre($this->db->insert_id());
		}
	}


	function json_carrera_dep($id)
	{
		$classModelCar = new Carreras;
		$array 	       = $classModelCar->consultar_ca_a($id);
		
		# Preparando el arreglo que se pasara a la vista para llenar carrera
		foreach ($array as $val) 
		{ $arrayCar[$val->id] = $val->label; }
		echo json_encode($arrayCar);
	}


	function pensum_semestre($idPensum)
	{
		$classModelPen = new Pensums;
		$arrayPen      = $classModelPen->get_pensum_one($idPensum);
		$count 		   = $classModelPen->get_pensum_count_semestre($idPensum);

		if($count[0]['count_semestre'] = 0)
		{ $arraySems = 0; }
		else
		{ $arraySems = $classModelPen->get_pensum_semestre_all($idPensum); }

		$datos_plantilla['contenido'] = 'pensum/_pensum_semestre';
		$datos_plantilla['pensum'] = $arrayPen;
		$datos_plantilla['semest'] = $arraySems;
		$this->load->view('plantilla', $datos_plantilla);
	}


} 

?>