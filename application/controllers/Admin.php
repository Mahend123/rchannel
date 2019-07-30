<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    function __construct() {
          parent::__construct();
          $this->load->model('User_model', 'um');
          $this->load->helper('form');
          $this->load->library('session');
          $this->email = $this->session->userdata('email');
          $this->username = $this->session->userdata('username');

           if (!$this->session->userdata('logged_in')) {
            $this->session->set_flashdata('msg', "You need to be logged in to access the $page page.");
            redirect('user');
        }
      }
 
    public function index()
    {
      $this->load->view('menuview.php');
    }

    public function logout(){

    }
}    
