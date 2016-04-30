<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Login extends CI_Controller {
    function __construct()
 {
   parent::__construct();
   $this->load->model('Loginmodel');
 }
 
    public function index(){
        $this->load->helper(array('form'));
        $this->load->view('head');
        $this->load->view('navbar');
        $this->load->view('Login/LoginForm');
        $this->load->view('footer');
    }
    
    public function logincheck(){
        $this->load->library('form_validation');
 
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
   
   if($this->form_validation->run() == FALSE)
   {
     //redirect ke loginview
     $this->load->view('login_view');
   }
   else
   {
     //redirect halaman setelah login
     redirect('home', 'refresh');
   }
    }
    
    function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $email = $this->input->post('email');
 
   //query the database
   $result = $this->Loginmodel->login($email, $password);
 
   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'id' => $row->id,
         'email' => $row->email
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid email or password');
     return false;
   }
 }
    
}


?>