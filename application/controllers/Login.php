<?php

 defined('BASEPATH') OR exit('No direct script access allowed');

	class login extends CI_Controller {

        function __construct(){
	    parent::__construct();
        $this->load->model('data_user', '',TRUE);
        $this->load->library('encryption');
        $this->load->library('session');
  	}


      function index(){
          $this->load->view('head');
          $this->load->view('navbarbefore');
          $this->load->view('login/mainlogin');
          $this->load->view('footer');
      }

      function logincheck(){
          $email = $this->input->post('email');
          $password = $this->input->post('password');
          $userid = $this->data_user->GetUserID($email);
          $this->data_user->GetUserData($userid);
          foreach ($query->row_array() as $baris){
              $passwordraw = $baris['password'];
          }
          $decryptpassword = $this->encryption->decrypt($passwordraw);
          if ($password == $decryptpassword){
              $this->session->set_userdata($userid);
              redirect('Homepage/viewHomeUser', 'refresh');
          }
      }

    
    
    
    }?>