<?php
	class sementre extends CI_Controller
	{

	public  $validateRules = array(
			array('field' => 'departamento','label' => 'Departamento','rules' => 'required')
			array('field' => 'carrera','label' => 'Carrera','rules' => 'required')
			array('field' => 'materia','label' => 'Materia','rules' => 'required'));

		function index()
		{
			$this->consulta();
		}

		function agregar(){
				
			}
		}
		

	}
?>