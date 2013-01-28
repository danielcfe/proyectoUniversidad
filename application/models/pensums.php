<?php

class Pensums extends CI_Model
{

	private $data;
	private $select = 'A.*, B.nombre AS nombre_carrera, C.id AS id_dep, C.nombre AS nombre_dep';

	function __construct()
	{
		parent::__construct();
        $this->load->model('semestres');
	}

	//+---------------------------------------------------------------------+
	//|Set de los atrivutos de la clase							 			|
	//+---------------------------------------------------------------------+
	public function set($name, $value)
    {
        $this->data[$name] = $value;
    }

    //+---------------------------------------------------------------------+
	//|Get de los atrivutos de la clase							 			|
	//+---------------------------------------------------------------------+
    public function get($name)
    {
        return $this->data[$name];
    }


    public function get_pensum_one($id)
    {
    	$this->db->select($this->select);
    	$this->db->from('pensum AS A');
    	$this->db->join('carrera AS B', 'B.id = A.carrera_id');
    	$this->db->join('departamento AS C', 'C.id = B.departamento_id');
    	$this->db->where('A.id', $id);
    	$query = $this->db->get();
    	return $query->result_array();
    }

    public function get_pensum_all()
    {
        $this->db->select($this->select);
        $this->db->from('pensum AS A');
        $this->db->join('carrera AS B', 'B.id = A.carrera_id');
        $this->db->join('departamento AS C', 'C.id = B.departamento_id');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_pensum_count_semestre($id)
    {
    	$this->db->select('COUNT(semestre) AS count_semestre');
    	$this->db->where('pensum_id', $id);
    	$query = $this->db->get('pensum_has_materia');
    	return $query->result_array();
    }

    public function get_pensum_semestre_all($id)
    {
        $this->db->select('pensum_id, semestre');
    	$this->db->where('pensum_id', $id);
    	$this->db->group_by('semestre');
    	$query = $this->db->get('pensum_has_materia');
    	$array = $query->result_array();
        $array2 = null;
        $i = 0;
        foreach ($array as $key) 
        {
            $key['materia'] = $this->semestres->get_semestre_materia($key['pensum_id'], $key['semestre']);
            $array2[$i++] = $key;
        }

        return $array2;
    }

    public function get_pensum_semestre_one($idPensum, $numSemes)
    {
    	$this->db->where('pensum_id', $idPensum);
    	$this->db->where('semestre', $numSemes);
    	$query = $this->db->get('pensum_has_materia');
    	return $query->result_array();
    }

    public function insertar_pensum()
	{
		$array_campos = array( 'fecha' => $this->get('fecha'), 'carrera_id' => $this->get('carrera_id') );
		return $this->db->insert( 'pensum', $array_campos );
	}

    public function actualizar_pensum($id)
    {
        $array_campos = array( 'fecha' => $this->get('fecha'), 'carrera_id' => $this->get('carrera_id') );
        return $this->db->update( 'pensum', $array_campos, 'id = '.$id );
    }

}

?>