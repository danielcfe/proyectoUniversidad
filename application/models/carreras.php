<?php
	class Carreras extends CI_Model
	{
		
		var $id = 0;
		var $nombre = "";
		var $departamento_id = 0;
		
		function __construct(){parent::__construct();}

		public function getId(){return $this->id;}
	    public function setId($id){$this->id = $id;}
	    public function getnombre(){return $this->nombre;}
	    public function setnombre($nombre){$this->nombre = $nombre;}
	    public function getDepartamento_id(){return $this->departamento_id;}
	    public function setDepartamento_id($departamento_id){$this->departamento_id = $departamento_id;}

		public function agregar()
	    {
	    	$data = array('id' => null, 'nombre' => $this->nombre, 'departamento_id' => $this->departamento_id);
	    	return $this->db->insert('carrera',$data);
	    }	    

	    public function editar()
	    {
	    	$data = array('nombre' => $this->nombre, 'departamento_id' => $this->departamento_id);

	    	$this->db->where('id',$this->id);
	    	return $this->db->update('carrera',$data);
	    }

	    public function eliminar()
	    {
	    	return	$this->db->delete('carrera', array('id' => $this->id));
	    }

	   	public function cargar($id){
			
			$this->db->select('*');
			$this->db->from('carrera');
			$this->db->where('id',$id);
			$query = $this->db->get();
			return $query->result_array();
		}

		public function consulta_general(){
			$query = $this->db->get('carrera');
			return $query->result_array();
		}
	}
?>	