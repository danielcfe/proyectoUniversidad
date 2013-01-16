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
			
			$this->db->select('c.id, c.nombre, d.nombre as nombre_d, c.departamento_id');
			$this->db->from('carrera c, departamento d');
			$this->db->where('c.departamento_id = d.id and c.id ='.$id);
			$query = $this->db->get();
			return $query->result_array();
		}

		public function consulta_general($id){
			$this->db->select('c.id, c.nombre, d.nombre as nombre_d');
			$this->db->from('carrera c, departamento d');
			$this->db->where('c.departamento_id = d.id and c.departamento_id = '. $id);
			$query = $this->db->get();
			return $query->result_array();
		}

<<<<<<< HEAD
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
		
=======
		public function consulta_car(){	
			$query = $this->db->get('carrera');
			$carrera[0]= '';
			foreach ($query->result() as $row) {
				$carrera[$row->id] = $row->nombre;
			}
			//die(var_dump($departamento));
			return $carrera;
		}
>>>>>>> d41e419dbd87f1e614f7da9e5f3b75024a50da34

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

		public function all($id){

			$this->db->select('id as id,nombre as nombre');
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
	}
?>	