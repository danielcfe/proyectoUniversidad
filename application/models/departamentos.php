<?php
	class Departamentos extends CI_Model
	{
		
		var $id = 0;
		var $nombre = "";
		
		function __construct(){parent::__construct();}

		public function getId(){return $this->id;}
	    public function setId($id){$this->id = $id;}
	    public function getNombre(){return $this->nombre;}
	    public function setNombre($nombre){$this->nombre = $nombre;}
	    
		public function agregar()
	    {
	    	$data = array('id' => null, 'nombre' => $this->nombre);
	    	return $this->db->insert('departamento',$data);
	    }	    

	    public function editar()
	    {
	    	$data = array('nombre' => $this->nombre);

	    	$this->db->where('id',$this->id);
	    	return $this->db->update('departamento',$data);
	    }

	    public function eliminar()
	    {
	    	return	$this->db->delete('departamento', array('id' => $this->id));
	    }

	   	public function cargar($id){
			
			$this->db->select('*');
			$this->db->from('departamento');
			$this->db->where('id',$id);
			$query = $this->db->get();
			return $query->result_array();
		}

		public function consulta_general(){
			$query = $this->db->get('departamento');
			return $query->result_array();
		}

		public function consulta_dep(){	
			$query = $this->db->get('departamento');
			$departamento[0]= '';
			foreach ($query->result() as $row) {
				$departamento[$row->id] = $row->nombre;
			}
			//die(var_dump($departamento));
			return $departamento;
		}

		 public function consultar_dep_a(){

			$this->db->select('id as id,nombre as label, nombre as value');
			$this->db->from('departamento');
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