<?
class sendmail extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->dx_auth->check_uri_permissions();
    }
function index()
{
  $config = Array(
  'protocol' => 'smtp',
  'smtp_host' => 'smtp.googlemail.com',
  'smtp_port' => 465,
  'mailtype' => 'html',
  'charset' => 'iso-8859-1',
  'wordwrap' => TRUE,
  'smtp_crypto' => 'ssl'
);
 
  $this->load->library('email', $config);
  $this->email->set_newline("\r\n");
  $this->email->from('iuspove@gmail.com'); // change it to yours
  $this->email->to('iuspove@gmail.com'); // change it to yours
  $this->email->subject('Email using Gmail.');
  $this->email->message('Working fine ! !');
 
  if($this->email->send())
 {
  echo 'Email sent.';
 }
 else
{
 show_error($this->email->print_debugger());
}
}
}?>