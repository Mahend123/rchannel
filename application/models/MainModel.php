 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MainModel extends CI_Controller 
{
   function __construct() {
       parent::__construct();
       $this->load->database();
       
   }

 function login_model($data)
  {
   $this->db->where($data);	  
   $q=$this->db->get("reg_tbl");

    if($q->num_rows>0)
    {
	  return $q->result(); 
    }
    else
    { return FALSE;  }
  }
}  