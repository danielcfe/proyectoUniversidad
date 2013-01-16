<?php
class GestorBD extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	public function restoreBD($path)
	{
		ob_start();
		readgzfile($path);
		$data = ob_get_clean();
		ob_end_clean();
		$this->db->trans_start(); //inicio de transaccion
		$data = nl2br($data); 
		$data_arr = explode(';<br />', $data);

		foreach($data_arr as $query)
		{
			$substring = array('DROP', 'INSERT', 'CREATE'); //estas dos lineas me permitieron individualizar las consultas
			$query = $this->subquery($substring, $query);
			if(!empty($query))
				$this->db->query($query);
		}

		$this->db->trans_complete();  
		if ($this->db->trans_status() === FALSE)
			return FALSE;
		else
			return TRUE;
	}

	private function subquery($array, $string)
	{
		$replave = array("<br />", "<br>");
		foreach ($array as $parada) 
		{
			$pos = strpos($string, $parada);

			if($pos !== FALSE)
			{
				$query = substr($string, $pos);
				$query = str_replace($replave, "", $query);
				return $query;
			}
		}
	}
	
}
?>