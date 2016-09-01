<?php

 defined('BASEPATH') OR exit('No direct script access allowed');

	class lapak extends CI_Controller {
        function __construct(){
	    parent::__construct();
        $this->load->helper('date');
        $this->load->library('session');
        $this->load->model('data_user');
        $this->load->model('lapak');
        $this->load->model('keranjang');
        $this->load->model('toko');
        $this->load->helper('file');
  	}

      function bukalapakview(){
          $userid = $this->session->userdata('User_ID');
          $toko = $this->toko->GetTokoID($userid);
          $toko = $tokoid['Toko_ID'];
          if($toko == NULL){
              redirect('toko/index', refresh);
          }
          else{
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
               $this->load->view('lapak/bukalapak');
               $this->load->view('footer');
          }
      }


      function bukalapak(){
           $userid = $this->session->userdata('User_ID');
           $tokoid = $this->toko->GetTokoID($userid);
           $sekarang = $time();
           $batasorder = $_POST['tanggal'] . '-' . $_POST['bulan'] . '-' . $_POST['tahun'];

           $datalapak = array(
               'Nama_lapak' => $this->input->post('nama'),
               'Kategori_lapak' => $this->input->post('Kategori_item'),
               'Detail' => $this->input->post('detail'),
               'Tgl_Buka' => $sekarang,
               'Batas_tgl_order' => $batasorder,
               'Status_lapak' => 1,
               'Toko_ID' => $tokoid
           );
            $lapak = $this->lapak->SetLapak($datalapak);
            if($lapak == TRUE){
                redirect('barang/inputbarangview');
            }else{
                redirect('error/errordbview', 'refresh');
            }
      }

      function changestatus(){
          $status = $this->input->post('status');
          $lapakid = $this->input->post('lapakid');
          $check = $this->lapak->ChangeStatusLapak($lapakid, $status);
          if($check == TRUE){
              redirect('lapak/lapakview', 'refresh');
          }else{
              redirect('error/errordbview', 'refresh');
          }
      }

      function LapakView(){
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
               $this->datalapak();

      }

      function datalapak(){
         $lapakid = $this->input->post('lapakid');
         $lapakdata['datalapak'] = $this->lapak->GetLapakData($lapakid);
         $lapakdata['baranglapak'] = $this->lapak->GetBarangData($lapakid);
         $this->load->view('lapak/mainlapak');
      }

    }?>