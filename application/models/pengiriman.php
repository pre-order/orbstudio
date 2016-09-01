<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

Class pengiriman extends CI_model{
    
    function GetKirimID($keranjangid){
        $this->db->select('Kirim_ID');
        $this->db->where('Keranjang_ID');
        $query = $this->db->get('kirim');
        return $query->row_array();
    }

    function GetKirimData($kirimid){
        $this->db->where('Kirim_ID', $kirimid);
        $query = $this->db->get('kirim');
        return $query->row_array();
    }

    function SetKirim($kirimdata){
        $this->db->insert($kirimdata);
    }
    
}
?>