<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Regist extends CI_Controller {
    
    public function index(){
        $this->load->view('head');
        $this->load->view('navbar');
        $this->load->view('LoginForm');
        $this->load->view('footer');
    }
    
}