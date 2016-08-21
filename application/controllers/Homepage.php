<?php

 defined('BASEPATH') OR exit('No direct script access allowed');

	class Homepage extends CI_Controller {

        function __construct(){
	    parent::__construct();
        $this->load->model('data_user');
        $this->load->model('keranjang');
        $this->load->model('lapak');
  	}


        function index(){
            if($this->session->userdata('User_ID')){
                redirect('Homepage/viewHomeUser', 'refresh');
            }
            else{
                redirect('Homepage/ViewHomeGuest', 'refresh');
            }
        }

        function viewHomeUser(){
            if($this->session->userdata('User_ID')){
               $userid = $this->session->userdata('User_ID');
               $this->data_user->GetUserData($userid);
               foreach ($query->row_array() as $baris){
                   $namauser = $baris['Nama_User'];
                   $fotoprofil = $baris['Foto_profil'];
               }
               $data['username'] = $namauser;
               $data['password'] = $fotoprofil;
               $keranjangid = $this->keranjang->GetKeranjangID($userid);

               $this->keranjang->GetKeranjangData($keranjangid);
               foreach ($query->row_array() as $baris){
                   $lapakid = $baris['Lapak_ID'];
                   $totalharga = $baris['Total_harga'];
                   $terbayar = $baris['Terbayar'];
                   $kekurangan = $baris['Kekurangan'];
                   $tanggal = $baris['tanggal'];
               }

               $namalapak = $this->lapak->GetNamaLapak($lapakid);
               
               $data['namalapak'] = $namalapak;
               $data['totalharga'] = $totalharga;
               $data['terbayar'] = $terbayar;
               $data['kekurangan'] = $kekurangan;
               $data['tanggal'] = $tanggal;


               $this->load->view('head');
               $this->load->view('navbarafter', $data);
               $this->load->view('mainpage/banner');
               $this->load->view('mainpage/hotkategori');
               $this->load->view('footer');
            }
            else{
                redirect('login/viewlogin', 'refresh');
            }
        }

        function ViewHomeGuest(){
            if($this->session->userdata('User_ID')){
               redirect('Homepage/viewHomeUser', 'refresh');
            }
            else{
                $this->load->view('head');
               $this->load->view('navbarbefore');
               $this->load->view('mainpage/banner');
               $this->load->view('mainpage/hotkategori');
               $this->load->view('footer');
            }
        }

    }?>