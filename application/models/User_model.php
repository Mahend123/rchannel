<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {
    public function __construct(){
         parent::__construct();
         $this->load->database();
         
    }
   public function insert_record($data){
        
       $query =$this->db->insert('reg_tbl',$data);  
        return $query;
    }

    public function checklog_model($key)
	  {
	   $this->db->where('LoginKey', $key);	  
	   $q=$this->db->get("reg_tbl");

	    if($q->num_rows() > 0)
	    {
		  return $q->result(); 
	    }
	    else
	    { 
	    	return FALSE;
	    }
	  }
}