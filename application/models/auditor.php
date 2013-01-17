<?php
class Auditor extends CI_Model{

public function registrar_accion($accion)
	    {
	    	$data = array('hora' => date('h:i:s',time()), 'fecha' => date('Y-m-d'), 'rol' => $this->dx_auth->get_role_id(), 'id_user' => $this->dx_auth->get_user_id(), 'accion' => $accion);
	    	return $this->db->insert('auditoria',$data);
	    }	   

public function consultar_acciones()
		{
			$this->db->select('a.hora, a.fecha, r.name, u.username, a.accion');
			$this->db->from('roles r, auditoria a, users u');
			$this->db->where('r.id = a.rol and u.id = a.id_user');
			$query = $this->db->get();
			return $query->result_array();
		}


}?>