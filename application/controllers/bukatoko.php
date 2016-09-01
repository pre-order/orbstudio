<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class bukatoko extends CI_Controller{
        function __construct(){
	    parent::__construct();
        $this->load->library('session');
        $this->load->model('data_user');
        $this->load->model('lapak');
        $this->load->model('keranjang');
        $this->load->model('toko');
        $this->load->model('perijinan');
        $this->load->model('rating');
        $this->load->helper('file');
  	}

      function bukatokoview(){
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
               $this->load->view('toko/tokoform');
               $this->load->view('footer');
      }

      function bukatoko(){
            $userid = $this->session->userdata('User_ID');
               $datatoko = array(
                   'User_ID' => $userid,
                  'Nama_toko' => $this->input->post('namatoko'),
                  'Alamat_toko' => $this->input->post('alamat'),
                  'Kontak_toko' => $this->input->post('Kontak_toko'),
                  'foto_toko' => $this->input->post('Foto')
               );
               $this->toko->SetToko($datatoko);
               
      }

}?>