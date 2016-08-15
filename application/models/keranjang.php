<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class keranjang extends CI_models{

function GetKeranjangID($userid,$lapakid){
    $this->db->select('Keranjang_ID');
    $this->db->where('User_ID', $userid);
    $this->db->where('Lapak_ID', $lapakid);
    $query = $this->db->get('keranjang_pesan');
    return $query->row_array();
}

function GetKeranjangData($keranjangid){
    $this->db->where('Keranjang_ID', $keranjangid);
    $query = $this->db->get('Keranjang_pesan');
    return $query->row_array();
}

function GetKeranjangPembayaran($keranjangid){
    $this->db->select('total_harga');
    $this->db->select('terbayar');
    $this->db->select('kekurangan');
    $this->db->select('Tgl_Lunas');
    $this->db->where('Keranjang_ID', $keranjangid);
    $query = $this->db->get('keranjang_pesan');
    return $query->row_array();
}

function SetKeranjang($datakeranjang){
    $this->db->insert($datakeranjang);
}

function ChangeHarga($keranjangid,$datatotal){
    $this->db->where('Keranjang_ID', $keranjangid);
    $this->db->update('keranjang_pesan', $datatotal);
}

}
?>