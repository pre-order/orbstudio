<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

Class pembayaran extends CI_model{
    function GetPembayaranID($keranjangid,$userid){
        $this->db->select('Bayar_ID');
        $this->db->where('Keranjang_ID', $keranjangid);
        $this->db->where('UserID', $userid);
        $query = $this->db->get('pembayaran');
        return $query->row_array();
    }

    function GetPembayaranData($bayarid){
        $this->db->where('Bayar_ID', $bayarid);
        $query = $this->db->get('pemayaran');
        return $query->row_array();
    }

     function SetPembayaran($datapembayaran){
         $this->db->insert($datapembayarn);
     }
}
?>