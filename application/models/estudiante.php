<?php
	class Estudiante extends CI_Model
	{
		
		var $id = 0;
		var $num_expediente = 0;
		var $datos_usuarios_id = 0;
		var $carrera_id = 0;
		var $pensum_id = 0;
		
		function __construct(){parent::__construct();}

		public function getId(){return $this->id;}
		public function setId($id){$this->id = $id;}
		public function getCarrera_id(){return $this->carrera_id;}
		public function setCarrera_id($carrera_id){$this->carrera_id = $carrera_id;}

		public function agregar($data)
	    {
	    	/*
	    	$data = array('id' => $this->id, 'num_expediente' => $this->num_expediente,
	    	'datos_usuarios_id' => $this->datos_usuarios_id, 'carrera_id' => $this->carrera_id,
	    	'pensum_id' => $this->pensum_id);
	    	*/
	    	return $this->db->insert('estudiante',$data);
	    }	    

	    public function editar()
	    {
	    	$data = array('nombre' => $this->nombre, 'departamento_id' => $this->departamento_id);

	    	$this->db->where('id',$this->id);
	    	return $this->db->update('estudiante',$data);
	    }

	    public function eliminar()
	    {
	    	return	$this->db->delete('estudiante', array('id' => $this->id));
	    }
/*
	   	public function cargar($id){
			
			$this->db->select('c.id, c.nombre, d.nombre as nombre_d, c.departamento_id');
			$this->db->from('carrera c, departamento d');
			$this->db->where('c.departamento_id = d.id and c.id ='.$id);
			$query = $this->db->get();
			return $query->result_array();
		}

		public function consulta_general(){
			$this->db->select('c.id, c.nombre, d.nombre as nombre_d');
			$this->db->from('carrera c, departamento d');
			$this->db->where('c.departamento_id = d.id');
			$query = $this->db->get();
			return $query->result_array();
		}

		public function all(){
			$this->db->select('nombre,id');
			$this->db->from('carrera c');
			$this->db->order_by("nombre", "desc");
			$query = $this->db->get();
			$result = array();
			if($query->num_rows() > 0)
			{
				foreach ($query->result() as $row)
				{
					$result[]=  array( $row->id => $row->nombre );
				}
			}
			return $result;			
			//return $query->result_array();
		}
		

		public function consultar_ca_a($id){

			$this->db->select('id as id,nombre as label, nombre as value');
			$this->db->from('carrera');
			$this->db->where('departamento_id',$id);
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
		*/
	}
?>	