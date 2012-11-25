<?php
	class Pensums extends CI_Model
	{
		
		var $id = 0;
		var $fecha = "";
		var $carrera_id = 0;
		
		function __construct(){parent::__construct();}

		public function getId(){return $this->id;}
	    public function setId($id){$this->id = $id;}
	    public function getFecha(){return $this->fecha;}
	    public function setFecha($fecha){$this->fecha = $fecha;}
	    public function getCarrera_id(){return $this->carrera_id;}
	    public function setCarrera_id($carrera_id){$this->carrera_id = $carrera_id;}

		public function agregar()
	    {
	    	$data = array('id' => null, 'fecha' => $this->fecha, 'carrera_id' => $this->carrera_id);
	    	return $this->db->insert('pensum',$data);
	    }	    

	    public function editar()
	    {
	    	$data = array('fecha' => $this->fecha, 'carrera_id' => $this->carrera_id);

	    	$this->db->where('id',$this->id);
	    	return $this->db->update('pensum',$data);
	    }

	    public function eliminar()
	    {
	    	return	$this->db->delete('pensum', array('id' => $this->id));
	    }

	   	public function cargar($id){
			
			$this->db->select('*');
			$this->db->from('pensum');
			$this->db->where('id',$id);
			$query = $this->db->get();
			return $query->result_array();
		}

		public function consulta_general(){
			$query = $this->db->get('pensum');
			return $query->result_array();
		}
	}
?>	