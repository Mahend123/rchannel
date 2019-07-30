<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
    function __construct() {
          parent::__construct();
          $this->load->model('User_model', 'um');
          $this->load->helper('form');
          $this->load->library('session');
          $this->email = $this->session->userdata('email');
          $this->username = $this->session->userdata('username');
      }
 
     public function index(){

        $this->session->sess_destroy();
       redirect(base_url('user'));
    }
    
}    