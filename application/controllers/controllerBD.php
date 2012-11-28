<?php
class controllerBD extends CI_Controller
{



	function __construct()
	{ 
		parent::__construct();
		$this->load->dbutil(); 
	}


	function backup() 
	{
		$nombre_BD = 'backup' . date('dmY') . '.txt';
		$prefs = array(
                'tables'      => array(),  // Array of tables to backup.
                'ignore'      => array(),           // List of tables to omit from the backup
                'format'      => 'txt',             // gzip, zip, txt
                'filename'    => $nombre_BD,    // File name - NEEDED ONLY WITH ZIP FILES
                'add_drop'    => TRUE,              // Whether to add DROP TABLE statements to backup file
                'add_insert'  => TRUE,              // Whether to add INSERT data to backup file
                'newline'     => "\n"               // Newline character used in backup file
              );
		
		
		$backup =& $this->dbutil->backup($prefs);
		/*$this->load->helper('file');
		write_file('http://localhost/proyectoUniversidad/BD/' . $nombre_BD, $backup);*/
		$this->load->helper('download');
		force_download($nombre_BD, $backup);

		$datos_plantillas['contenido'] = 'BD/msj_BD';
		$datos_plantillas['msj'] = 'backup';
		$this->load->view('plantilla', $datos_plantillas);
	}

}
?>