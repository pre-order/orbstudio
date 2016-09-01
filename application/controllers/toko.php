<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class toko extends CI_Controller{
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

               $this->lapak->GetLapakData($tokoid);
               foreach($query->row_array() as $baris){
                   $lapak['namalapak'] = $baris['Nama_lapak'];
                   $lapak['Tanggal_buka'] = $baris['Tgl_Buka'];
                   $lapak['Tgl_tutup'] = $baris['Tgl_Tutup'];
                   $lapak['Status_lapak'] = $baris['Status_lapak'];
                }

                $ratingid = $this->rating->GetRatingID($tokoid);
                $this->rating->GetRatingData($ratingid);
                foreach($query->row_array() as $baris){
                    $rating['Penilai'] = $baris['Penilai'];
                    $rating['Nilai'] = $baris['Nilai'];
                    $rating['Komentar'] = $baris['Komentar'];
                }


               $this->load->view('head');
               $this->load->view('navbarafter', $data);
               $this->load->view('toko/maintoko', $toko);
               $this->load->view('toko/lapaktoko', $lapak);
               $this->load->view('toko/rating', $rating);
               $this->load->view('footer');
               
               }
               else{
                   redirect('toko/bukatoko', refresh);
               }
               }
      }


      function EditTokoview(){
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
               $this->load->view('toko/EditTokoForm');
               $this->load->view('footer');
      }


      function EditToko(){
           $userid = $this->session->userdata('User_ID');
           $tokoid = $this->toko->GetTokoID($userid);

               $changedatatoko = array(
                  'Nama_toko' => $this->input->post('namatoko'),
                  'Alamat_toko' => $this->input->post('alamat'),
                  'Kontak_toko' => $this->input->post('Kontak_toko'),
                  'foto_toko' => $this->input->post('Foto')
               );

          $this->toko->ChangeToko($tokoid, $changedatatoko);
      }


}?>