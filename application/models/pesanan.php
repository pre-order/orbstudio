<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class pesanan extends CI_models{

    function GetOrderID($keranjangid){
        $this->db->select('Order_ID');
        $this->db->where('Keranjang_ID', $keranjangid);
        $query = $this->db->get('pesanan');
        return $query->row_array();
    }

    function GetOrderData($orderid){
        $this->db->where('Order_ID', $orderid);
        $query = $this->db->get('pesanan');
        return $query->row_array();
    }

    function DeletePesanan($orderid){
        $this->db->where('Order_ID', $orderid);
        $this->db->delete('pesanan');
    }

}
?>