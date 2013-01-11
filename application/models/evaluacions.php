<?php
	class Evaluacions extends CI_Model
	{
		
		var $id = 0;
		var $descripcion = "";
		var $valor = 0;
		var $plan_evaluacion_id = 0;
		
		function __construct(){parent::__construct();}

		public function getId(){return $this->id;}
	    public function setId($id){$this->id = $id;}
	    public function getDescripcion(){return $this->descripcion;}
	    public function setDescripcion($descripcion){$this->descripcion = $descripcion;}
	    public function getValor(){return $this->valor;}
	    public function setValor($valor){$this->valor = $profesor_datos_usuarios_id;}
	    public function getPlan_evaluacion_id(){return $this->plan_evaluacion_id;}
	    public function setPlan_evaluacion_id($plan_evaluacion_id){$this->plan_evaluacion_id = $plan_evaluacion_id;}

		public function agregar()
	    {
	    	$data = array('id' => null, 'descripcion' => $this->descripcion, 'valor' => $this->valor, 'plan_evaluacion_id' => $this->plan_evaluacion_id);
	    	return $this->db->insert('evaluacion',$data);
	    }	    

	    public function editar()
	    {
	    	$data = array('descripcion' => $this->descripcion, 'valor' => $this->valor, 'plan_evaluacion_id' => $this->plan_evaluacion_id);

	    	$this->db->where('id',$this->id);
	    	return $this->db->update('evaluacion',$data);
	    }

	    public function eliminar()
	    {
	    	return	$this->db->delete('evaluacion', array('id' => $this->id));
	    }

	   	public function carga($id){
			
			$this->db->select('*');
			$this->db->from('evaluacion');
			$this->db->where('id',$id);
			$query = $this->db->get();
			return $query->result_array();
		}

		public function consulta_general(){
			$query = $this->db->get('evaluacion');
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