<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class toko extends CI_models{
        function __construct(){
	    parent::__construct();
        $this->load->model('data_user');
        $this->load->model('lapak');
        $this->load->model('keranjang');
        $this->load->model('toko');
        $this->load->model('perijinan');
  	}

      function index(){
               $userid = $this->session->userdata('User_ID');
               $check = $this->perijinan->GetPerijinanID($userid);
               if($check == NULL){
                   redirect('perijinan/perijinanviewawal', refresh);
               }else{
               $tokoid = $this->toko->GetTokoID($userid);
               if($tokoid != NULL){
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

                    $this->toko->GetDataToko($tokoid);
                    foreach ($query->row_array() as $baris){
                        $namatoko = $baris['Nama_toko'];
                        $Alamat = $baris['Alamat_toko'];
                        $kontak = $baris['Kontak_toko'];
                        $fototoko = $baris['Kontak_toko'];
                        $fotobg  = $baris['foto_back'];
                        $user = $baris['UserID'];
                    }
                    $pemilik =  $this->data_user->GetNamaUser($user);

                    $toko['nama_toko'] = $namatoko;
                    $toko['Alamat_toko'] = $Alamat;
                    $toko['kontak_toko'] = $kontak;
                    $toko['foto_toko'] = $fototoko;
                    $toko['foto_bg'] = $fotobg;
                    $toko['nama_pemilik'] = $pemilik;



               $this->load->view('head');
               $this->load->view('navbarafter', $data);
               $this->load->view('toko/maintoko', $toko);
               
               }
               else{
                   
               }
               }
               

      }


}?>