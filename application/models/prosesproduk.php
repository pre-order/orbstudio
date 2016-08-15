<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class pesanan extends CI_models{
    function GetProsesID($orderid,$lapakid){
        $this->db->select('Proses_ID');
        $this->db->where('Order_ID', $orderid);
        $this->db->where('Lapak_ID', $lapakid);
        $query =  $this->db->get('proses_produk');
        return $query->row_array();
    }

    function GetProsesProdukData($prosesid){
        $this->db->where('Proses_ID', $prosesid);
        $query = $this->db->get('proses_produk');
        return $query->row_array();
    }

    function GetStatus($prosesid){
        $this->db->select('status');
        $this->db->where('Proses_ID', $prosesid);
        $query = $this->db->get('proses_produk');
        return $query->row_array();
    }

    function GetTanggalSelesai($prosesid){
        $this->db->select('Tgl_Selesai');
        $this->db->where('Proses_ID', $prosesid);
        $query = $this->db->get('proses_produk');
        return $query->row_array();
    }

    function SetProsesProduk($dataproses){
        $this->db->insert($dataproses);
    }

    function ChangeStatus($prosesid, $status){
        $this->db->set('Status', $status);
        $this->db->where('Proses_ID', $prosesid);
        $this->db->update('proses_produk');
    }

    function ChangeSample($prosesid, $sample){
        $this->db->set('Sample', $saple);
        $this->db->where('Proses_ID', $prosesid);
        $this->db->update('proses_produk');
    }
}
?>