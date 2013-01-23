<?php
	class Materia extends CI_Model
	{	
		private $codigo = 0;
		private $unidad_curricular = "";
		private $horas_teoricas = 0;
		private $horas_practicas = 0;
		private $total_horas = 0;
		private $uni_credito = 0;
		private $cod_prelacion = "";

		function __construct(){parent::__construct();}

		public function getCodigo(){return $this->codigo;}
	    public function setCodigo($codigo){$this->codigo = $codigo;}
	    public function getUnidad_curricular(){return $this->unidad_curricular;}
	    public function setUnidad_curricular($unidad_curricular){$this->unidad_curricular = $unidad_curricular;}
	    public function getHoras_teoricas(){return $this->horas_teoricas;}
	    public function setHoras_teoricas($horas_teoricas){$this->horas_teoricas = $horas_teoricas;}
	    public function getHoras_practicas(){return $this->horas_practicas;}
	    public function setHoras_practicas($horas_practicas){$this->horas_practicas = $horas_practicas;}
	    public function getTotal_horas(){return $this->total_horas;}
	    public function setTotal_horas($total_horas){$this->total_horas = $total_horas;}
	    public function getuni_credito(){return $this->uni_credito;}
	    public function setuni_credito($uni_credito){$this->uni_credito = $uni_credito;}
	    public function getCod_prelacion(){return $this->cod_prelacion;}
	    public function setCod_prelacion($cod_prelacion){$this->cod_prelacion = $cod_prelacion;}

	    public function insertar_materia(){

	    	$this->total_horas = $this->horas_practicas + $this->horas_teoricas;

	    	$data = array('codigo' => $this->codigo, 'unidad_curricular' => $this->unidad_curricular, 
	    				'horas_teoricas' => $this->horas_teoricas, 'horas_practicas' => $this->horas_practicas,
	    				'total_horas' => $this->total_horas, 'uni_credito' => $this->uni_credito,
	    				'cod_prelacion' => $this->cod_prelacion);

	    	return $this->db->insert('materia',$data);
	    }
	    
	    public function editar_materia(){

	    	$this->total_horas = $this->horas_practicas + $this->horas_teoricas;

	    	$data = array('codigo' => $this->codigo, 'unidad_curricular' => $this->unidad_curricular, 
	    				'horas_teoricas' => $this->horas_teoricas, 'horas_practicas' => $this->horas_practicas,
	    				'total_horas' => $this->total_horas, 'uni_credito' => $this->uni_credito,
	    				'cod_prelacion' => $this->cod_prelacion);
	    			
			$this->db->where('codigo',$this->codigo);
	    	return $this->db->update('materia', $data);

	    }

	    public function eliminar_materia(){

			return	$this->db->delete('materia', array('codigo' => $this->codigo));

	    }

	    public function consultar_materia(){

	    	$this->db->select('codigo, unidad_curricular, horas_teoricas, horas_practicas, total_horas, uni_credito, cod_prelacion');
			$this->db->from('materia');
			$query = $this->db->get();
			return $query->result_array();

	    }

	    public function consultar_mat_a(){

			$this->db->select('*,unidad_curricular as value, unidad_curricular as label');
			$this->db->from('materia');
			$query = $this->db->get();
			$result = array();
			if($query->num_rows() > 0)
			{
			foreach ($query->result() as $row)
			{
			$result[]= $row;
			}
			}
			return $result;

		}
		
	    public function consultar_mat($codigo){
			
			$this->db->select('codigo, unidad_curricular, horas_teoricas, horas_practicas, total_horas, uni_credito,cod_prelacion');
			$this->db->from('materia');
			$this->db->where('codigo', $codigo);
			$query = $this->db->get();
			return $query->result_array();
		}


	    public function cargar($data){
	    	foreach ($data as $key => $value) {
	    		if (isset($this->$key)){
	    			$this->$key = $value;
	    		}
	    	}	
	    }

	    public function verificar($codigo){
	    	$this->db->select('codigo');
			$this->db->from('materia');
			$this->db->where('codigo', $codigo);
			$query = $this->db->get();
			return $query->result_array();
	    }

	}
?>	