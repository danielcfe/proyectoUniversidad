<?php
	class Plan_evaluacions extends CI_Model
	{
		
		var $id = 0;
		var $descripcion = "";
		var $profesor_datos_usuarios_id = 0;
		var $materia_codigo = 0;
		
		function __construct(){parent::__construct();}

		public function getId(){return $this->id;}
	    public function setId($id){$this->id = $id;}
	    public function getDescripcion(){return $this->descripcion;}
	    public function setDescripcion($descripcion){$this->descripcion = $descripcion;}
	    public function getProfesor_datos_usuarios_id(){return $this->profesor_datos_usuarios_id;}
	    public function setProfesor_datos_usuarios_id($profesor_datos_usuarios_id){$this->profesor_datos_usuarios_id = $profesor_datos_usuarios_id;}
	    public function getMateria_codigo(){return $this->materia_codigo;}
	    public function setMateria_codigo($materia_codigo){$this->materia_codigo = $materia_codigo;}

		public function agregar()
	    {
	    	$data = array('id' => null, 'descripcion' => $this->descripcion, 'profesor_datos_usuarios_id' => $this->profesor_datos_usuarios_id, 'materia_codigo' => $this->materia_codigo);
	    	return $this->db->insert('plan_evaluacion',$data);
	    }	    

	    public function editar()
	    {
	    	$data = array('descripcion' => $this->descripcion, 'profesor_datos_usuarios_id' => $this->profesor_datos_usuarios_id, 'materia_codigo' => $this->materia_codigo);

	    	$this->db->where('id',$this->id);
	    	return $this->db->update('plan_evaluacion',$data);
	    }

	    public function eliminar()
	    {
	    	return	$this->db->delete('plan_evaluacion', array('id' => $this->id));
	    }

	   	public function carga($id){
			
			$this->db->select('*');
			$this->db->from('plan_evaluacion');
			$this->db->where('id',$id);
			$query = $this->db->get();
			return $query->result_array();
		}

		public function consulta_general(){
			$query = $this->db->get('plan_evaluacion');
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