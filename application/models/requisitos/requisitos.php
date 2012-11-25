<?php
//+---------------------------------------------------------------------+
//|Clase Requisitos				 							 			|
//+---------------------------------------------------------------------+
//|Parametro: Ninguno                                    				|
//|Retornar: Ninguno													|
//+---------------------------------------------------------------------+
//|Funcionamiento: Clase que contiene los atrivutos y funciones de los  |
//|	requisitos															|
//+---------------------------------------------------------------------+
class Requisitos extends CI_Model
{

	//+---------------------------------------------------------------------+
	//|Atrivutos de la Clase		 							 			|
	//+---------------------------------------------------------------------+
	//|	* id 			                                    				|
	//|	* descripcion														|
	//|	* requerido															|
	//|	* oculto															|
	//+---------------------------------------------------------------------+
	private $data   	  = array();
	private $select 	  = 'IF(`requerido` = 0, "No", "Si") AS requerido_text, IF(`oculto` = 0, "No Solicitado", "Solicitado") AS oculto_text';

	function __construct()
	{
		parent::__construct();
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


    //+---------------------------------------------------------------------+
	//|Get de datos especificos de los registro de requisitos	 			|
	//+---------------------------------------------------------------------+
    public function get_requisitos_all()
    {
    	$this->select = '*, ' . $this->select;
    	$this->db->select($this->select, FALSE);
    	$query = $this->db->get('requisitos');
    	return $query->result_array();
    }

    public function get_requisitos_one($id)
    {
    	$this->select = '*, ' . $this->select;
    	$this->db->select($this->select, FALSE);
    	$this->db->where('id', $id);
    	$query = $this->db->get('requisitos');
    	return $query->result_array();
    }

    public function get_requisitos_descripcion($descripcion)
    {
    	$this->select = '*, ' . $this->select;
    	$this->db->select($this->select, FALSE);
    	$this->db->where( 'UPPER(REPLACE(`descripcion`, " ", "")) = UPPER(REPLACE("'. $descripcion .'", " ", ""))', NULL, FALSE );
    	$query = $this->db->get('requisitos');
    	return $query->result_array();
    }

    public function get_requisitos_RequeridoOculto($requerido = TRUE, $oculto = TRUE)
    {
    	$this->select = '*, ' . $this->select;
    	$this->db->select($this->select, FALSE);
    	$this->db->where('requerido', $requerido);
    	$this->db->where('oculto', $oculto);
    	$query = $this->db->get('requisitos');
    	return $query->result_array();
    }

    public function get_requisitos_all_usu($id)
    {
    	$this->select = '`id`, `descripcion`, `requerido`, `oculto`, ' . $this->select;
    	$this->db->select($this->select, FALSE);
    	$this->db->from('requisitos AS req');
    	$this->db->join('requisitos_has_estudiante AS req_est', 'req_est.requisitos_id = req.id', 'inner');
    	$this->db->where('estudiante_datos_usuarios_id',  $id);
    	$query = $this->db->get();
		return $query->result_array();
    }

    public function get_requisitos_RequeridoOculto_usu($requerido = TRUE, $oculto = TRUE, $id)
    {
    	$this->select = '`id`, `descripcion`, `requerido`, `oculto`, ' . $this->select;
    	$this->db->select($this->select, FALSE);
    	$this->db->from('requisitos AS req');
    	$this->db->join('requisitos_has_estudiante AS req_est', 'req_est.requisitos_id = req.id', 'inner');
    	$this->db->where('estudiante_datos_usuarios_id',  $id);
    	$this->db->where('requerido',  $requerido);
    	$this->db->where('oculto',  $oculto);
    	$query = $this->db->get();
		return $query->result_array();
    }


	//+---------------------------------------------------------------------+
	//|Funcion insertar_requisitos			 							 	|
	//+---------------------------------------------------------------------+
	//|Parametro: Ninguno 		                                    		|
	//|Retornar:															|
	//|		* TRUE: Si se incertor satisfactoriamente 						|
	//|		* FALSE: Si hubo problema en la insercion 						|
	//+---------------------------------------------------------------------+
	//|Funcionamiento: Ejecuta una consulta en la base de dato y devuelve   |
	//|	valor segun respuesta de la misma e inserta un registro				|
	//+---------------------------------------------------------------------+
	public function insertar_requisitos()
	{
		$array_campos = array( 'descripcion' => $this->get('descripcion'), 'requerido' => $this->get('requerido'), 'oculto' => $this->get('oculto') );
		return $this->db->insert( 'requisitos', $array_campos );
	}


	//+---------------------------------------------------------------------+
	//|Funcion modificar_requisitos			 							 	|
	//+---------------------------------------------------------------------+
	//|Parametro: Ninguno                                    				|
	//|Retornar:															|
	//|		* TRUE: Si se actualizo satisfactoriamente 						|
	//|		* FALSE: Si hubo problema en la actualizacion					|
	//+---------------------------------------------------------------------+
	//|Funcionamiento: Actualiza un registro   								|
	//+---------------------------------------------------------------------+
	public function modificar_requisitos()
	{
		$array_campos = array( 'descripcion' => $this->get('descripcion'), 'requerido' => $this->get('requerido'), 'oculto' => $this->get('oculto') );
		return $this->db->update('requisitos', $array_campos, array('id' => $this->data['id']));
	}


	//+---------------------------------------------------------------------+
	//|Funcion eliminar_requisitos			 							 	|
	//+---------------------------------------------------------------------+
	//|Parametro: Ninguno                                    				|
	//|Retornar:															|
	//|		* TRUE: Si se elimina satisfactoriamente 							|
	//|		* FALSE: Si hubo problema en la eliminacion							|
	//+---------------------------------------------------------------------+
	//|Funcionamiento: Elimina un registro   								|
	//+---------------------------------------------------------------------+
	public function eliminar_requisitos()
	{
		$array_campos = array( 'id' => $this->get('id') );
		return $this->db->delete('requisitos', $array_campos);
	}


	//+---------------------------------------------------------------------+
	//|Funcion msj					 							 			|
	//+---------------------------------------------------------------------+
	//|Parametro: 		                                    				|
	//|		* opc: Parametro que contiene el valor del mensaje que se desea |
	//|			mostrar 													|
	//|Retornar:															|
	//|		* msj: devuelve el mensaje seleccionado					 		|
	//+---------------------------------------------------------------------+
	//|Funcionamiento: Segun el valor que se pasa por parametro devuelve un |
	//|	mensaje para mostrar												|
	//+---------------------------------------------------------------------+
	public function msj($opc)
	{
		switch ($opc) 
		{
			case 'cons_ok':
				$msj = "Consulta ejecutada satisfactoriamente";
			break;

			case 'sin_reg':
				$msj = "No se encontro ningun registro";
			break;

			case 'reg_duplicado':
				$msj = "Registro duplicado";
			break;

			case 'error_insertar':
				$msj = "Error al insertar el registro";
			break;

			case 'error_actualizar':
				$msj = "Error al actualizar el registro";
			break;

			case 'error_eliminar':
				$msj = "Error al eliminar el registro";
			break;				
		}

		return $msj;
	}


}

?>