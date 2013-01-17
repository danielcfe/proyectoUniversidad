<?php
	class Estudiante_has_evaluacions extends CI_Model
	{
		
		var $estudiante_datos_usuarios_id = 0;
		var $evaluacion_id = "";
		var $calificacion = 0;
		
		function __construct(){parent::__construct();}

		public function getEstudiante_datos_usuarios_id(){return $this->estudiante_datos_usuarios_id;}
	    public function setEstudiante_datos_usuarios_id($estudiante_datos_usuarios_id){$this->estudiante_datos_usuarios_id = $estudiante_datos_usuarios_id;}
	    public function getEvaluacion_id(){return $this->evaluacion_id;}
	    public function setEvaluacion_id($evaluacion_id){$this->evaluacion_id = $evaluacion_id;}
	    public function getCalificacion(){return $this->calificacion;}
	    public function setCalificacion($calificacion){$this->calificacion = $profesor_datos_usuarios_estudiante_datos_usuarios_id;}

		public function agregar()
	    {
	    	$data = array('estudiante_datos_usuarios_id' => $this->estudiante_datos_usuarios_id, 'evaluacion_id' => $this->evaluacion_id, 'calificacion' => $this->calificacion);
	    	return $this->db->insert('estudiante_has_evaluacion',$data);
	    }	    

	    public function editar()
	    {
	    	$data = array('evaluacion_id' => $this->evaluacion_id, 'calificacion' => $this->calificacion);

	    	$this->db->where('estudiante_datos_usuarios_id',$this->estudiante_datos_usuarios_id);
	    	return $this->db->update('estudiante_has_evaluacion',$data);
	    }

	    public function eliminar()
	    {
	    	return	$this->db->delete('estudiante_has_evaluacion', array('estudiante_datos_usuarios_id' => $this->estudiante_datos_usuarios_id));
	    }

	   	public function carga($estudiante_datos_usuarios_id){
			
			$this->db->select('*');
			$this->db->from('estudiante_has_evaluacion');
			$this->db->where('estudiante_datos_usuarios_id',$estudiante_datos_usuarios_id);
			$query = $this->db->get();
			return $query->result_array();
		}

		public function consulta_general(){
			$query = $this->db->get('estudiante_has_evaluacion');
			return $query->result_array();
		}

		public function cargar($data){
	    	foreach ($data as $key => $value) {
	    		if (isset($this->$key)){
	    			$this->$key = $value;
	    		}
	    	}	
	    }

	 /*  public function verificar($codigo){
		   	$this->db->select('codigo');
			$this->db->from('materia');
			$this->db->where('codigo', $codigo);
			$query = $this->db->get();
			return $query->result_array();
	    }*/

	}
?>	