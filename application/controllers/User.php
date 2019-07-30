<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    function __construct() {
          parent::__construct();
          $this->load->model('User_model', 'um');
          $this->load->helper('form');
           $this->load->library('email');

          $this->load->library('session');
          $this->email = $this->session->userdata('email');
          $this->username = $this->session->userdata('username');
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
          
          if(!empty($email)){
            $to_email = $email;

              $link = 'http://opulenceinfotech.com/demo/formdesign/user/checklog/'.$LoginKey;

            $this->load->library('email');
            $this->email->from('opulence.dev112@gmail.com');
            $this->email->to($to_email);
            $this->email->subject('For login confirmation mail.');
            $this->email->message($link);
            $this->email->send();
          }

          
           

        $data =array('fname' => $fname , 'nname' => $nname , 'sname' => $sname ,
                    'company' => $company , 'office' => $office ,'email' => $email ,
                     'phone' => $phone , 'username' => $username , 'pwd' => $pwd ,
                       'create_date' => $create_date, 'LoginKey'=>$LoginKey );

       

        $result=$this->um->insert_record($data);

        if ($result>0) {
          // $data_view["success"] = " <span  class='fmssg alert alert-success' style='color:green;'> <strong> Success ! </strong>Form submitted successfully.</span>";  
          //echo '<script>alert("Your record saved successfully")</script>';
           //redirect('user/financial');
          $data_view['message']=" <span  class='fmssg alert alert-success' style='color:green;'> <strong> Success ! </strong>Thank you for registering. Please confirm your email to validate your account.</span>";
          $this->load->view('financialview',$data_view);
        }else{
          echo '<script>alert("Try again..!")</script>';
          redirect('user/financial');
        }
       
      } 

    }

    public function checklog(){
      $key= $this->uri->segment('3');
        $keyvalue = $this->um->checklog_model($key);
          foreach ($keyvalue as $k) {
            $email =  $k->email;
            $username =  $k->username;
            $this->session->set_userdata('email',$email);
            $this->session->set_userdata('username',$username);

           }

         
          if($keyvalue){
            $this->session->set_userdata('logged_in', TRUE);
              redirect('admin');
          }else{

              echo '<script> alert("Try again..!") </script>';
          }
    }
}

        



  

