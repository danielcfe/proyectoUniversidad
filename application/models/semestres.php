<?php
	class Semestres extends CI_Model
	{	

		private $pensum_id = 0;
		private $materia_codigo = 0;
		private $semestre = 0;

		function __construct(){parent::__construct();}


	    public function insertar_semestre(){
	    	
	    	$data = array('pensum_id' => $this->pensum_id, 'materia_codigo' => $this->materia_codigo, 'semestre' => $this->semestre);
	    	return $this->db->insert('pensum_has_materia',$data);

	    }
	    
	    public function editar_semestre(){
	    	
	    }

	    public function eliminar_semestre(){

	    }

	    public function consultar_semestre(){

	    }

	    public function consultar_mat($codigo){
			
		}

	    public function cargar($data){

	    }

	    public function verificar($codigo){

	    }

	}
?>	