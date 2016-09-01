<?php

 defined('BASEPATH') OR exit('No direct script access allowed');

	class userprofile extends CI_Controller {
    
    function __construct(){
	    parent::__construct();
        $this->load->model('data_user');
        $this->load->model('lapak');
        $this->load->model('keranjang');
        $this->load->model('toko');
        $this->load->library('session');
        $this->load->helper('file');

  	}


        function ViewUserProfile(){
               $userid = $this->session->userdata('User_ID');
               $this->data_user->GetUserData($userid);
               foreach ($query->row_array() as $baris){
                   $namauser = $baris['Nama_User'];
                   $fotoprofil = $baris['Foto_profil'];
                   $jeniskelamin = $baris['Jenis_kel'];
                   $provinsi = $baris['Provinsi'];
                   $kabupaten = $baris['Kabupaten'];
                   $kecamatan = $baris['Kecamatan'];
                   $contac = $baris['Contact_User'];
               }
               $data['username'] = $namauser;
               $data['Foto'] = $fotoprofil;
               $data['gender'] = $jeniskelamin;
               $data['provinsi'] = $provinsi;
               $data['kabupaten'] = $kabupaten;
               $data['kecamatan'] = $kecamatan;
               $data['kontak'] = $kontak;


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

               $this->toko->GetTokoID($userid);
               $tokoid = $query->row_array();
               if ($tokoid == NULL){
                    $this->load->view('head');
                    $this->load->view('navbarafter', $data);
                    $this->load->view('profil/mainpage', $data);
                    $this->load->view('profil/tokoempty');
                    $this->load->view('footer');
               }else{
               $namatokonya = $this->toko->GetNamaToko($tokoid);
               
               $data['namatokonya'] = $namatokonya;
               $this->load->view('head');
               $this->load->view('navbarafter', $data);
               $this->load->view('profil/mainpage', $data);
               $this->load->view('profil/tokonya', $data);
               $this->load->view('footer');
               }
        }


        function ChangeProfilView(){
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
               $this->load->view('profil/form');
               $this->load->view('footer');
        }

        function ChangeProfil(){
            $userid = $this->session->userdata('User_ID');
            $datauser = array(
            'Nama_user'=> $this->input->post('Nama_User'),
            'Email' => $this->input->post('Email'),
            'Jenis_kel' => $this->input->post('gender'),
            'Alamat_User' => $this->input->post('Alamat_user'),
            'Contact_User' => $this->input->post('Contact'),
            'Foto_profil' => $this->input->post('Foto')
            );
            $this->data_user->ChangeProfil($userid, $datauser);
        }


        

    }?>