<?php
	class Semestres extends CI_Model
	{	

		private $pensum_id = 0;
		private $materia_codigo = 0;
		private $semestre = 0;

		function __construct(){parent::__construct();}


	    public function insertar_semestre(){
	    	
	    	$data = array('pensum_id' => $this->pensum_id, 'materia_codigo' => $this->materia_codigo, 'semestre' => $this->semestre);
	    	return $this->db->insert('pensum_has_materia',$data);

	    }
	    
	    public function editar_semestre(){
	    	
	    }

	    public function eliminar_semestre(){

	    }

	    public function consultar_semestre(){
			$this->db->select('d.nombre as departamento, c.nombre as carrera, k.semestre, m.codigo, m.unidad_curricular, m.horas_teoricas, m.horas_practicas, m.total_horas, m.uni_credito,m.cod_prelacion');
			$this->db->from('materia m, pensum_has_materia k, carrera c, departamento d, pensum p');
			$this->db->where('m.codigo = k.materia_codigo and p.carrera_id = c.id and c.departamento_id = d.id and p.id = k.pensum_id');
			$query = $this->db->get();
			return $query->result_array();
	    }

	    public function consultar_mat($codigo){
			
		}

	    public function cargar($data){
	    	foreach ($data as $key => $value) {
	    		if (isset($this->$key)){
	    			$this->$key = $value;
	    		}
	    	}	
	    }

	    public function verificar($codigo){

	    }

	}
?>	