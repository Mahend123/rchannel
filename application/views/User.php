<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    function __construct() {
          parent::__construct();
          $this->load->model('User_model', 'um');
          $this->load->helper('form');
          
          //$this->load->library('session');
      }
 
    public function index()
    {
      $this->load->view('firstpage');
    }

   public function Selectuser()
    {
      $this->load->view('selectuser');
    }

    public function Financial(){
      $this->load->view('financialview');
    }

    

   public function show()
    {
      
      if ($this->input->post('submit')) {
        $fname=$this->input->post('fname');
        $nname=$this->input->post('nname');
        $sname=$this->input->post('sname');
        $company=$this->input->post('company');
        $office=$this->input->post('office');
        $email=$this->input->post('email');
        $phone=$this->input->post('phone');
        $username=$this->input->post('username');
        $pwd1=$this->input->post('pwd');
        $rpwd1=$this->input->post('rpwd');
            $pwd=md5($pwd1);
            $rpwd=md5($rpwd1);
        $data['res'] =array('fname' => $fname , 'nname' => $nname , 'sname' => $sname ,
                    'company' => $company , 'office' => $office ,'email' => $email ,
                     'phone' => $phone , 'username' => $username , 'pwd' => $pwd ,
                      'rpwd' => $rpwd );
      } 
      $this->load->view('showdata',$data);
    }

    public function showinsert(){
      if ($this->input->post('submit')) {
        $fname=$this->input->post('fname');
        $nname=$this->input->post('nname');
        $sname=$this->input->post('sname');
        $company=$this->input->post('company');
        $office=$this->input->post('office');
        $email=$this->input->post('email');
        $phone=$this->input->post('phone');
        $username=$this->input->post('username');
        $pwd=$this->input->post('pwd');
        //$rpwd1=$this->input->post('rpwd');
        $create_date=date('Y-m-d H:i:s', time());    

          $LoginKey = mt_rand(1000,9999) . mt_rand(1000,9999) . mt_rand(1000,9999) . mt_rand(1000,9999) . mt_rand(1000,9999);
          
          if(empty($email)){
            $to_email = $email;

              $this->load->library('email');

            $this->email->from('mahendrarajput646@gmail.com');
            $this->email->to($to_email);
            $this->email->subject('Email Test');
            $this->email->message('Testing the email class.');
            $this->email->send();
          }

          
           

        $data =array('fname' => $fname , 'nname' => $nname , 'sname' => $sname ,
                    'company' => $company , 'office' => $office ,'email' => $email ,
                     'phone' => $phone , 'username' => $username , 'pwd' => $pwd ,
                       'create_date' => $create_date, 'LoginKey'=>$LoginKey );

       

        $result=$this->um->insert_record($data);

        if ($result>0) {
          echo '<script>alert("Your record saved successfully")</script>';
           redirect('user/financial');
        }else{
          echo '<script>alert("Try again..!")</script>';
        }
      } 
    }

    public function checklog(){

    }
    
}

        



  