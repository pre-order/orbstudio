<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class readystock extends CI_models{
    function GetTokoID($tokoid){
        $this->db->select('Barang_Ready_ID');
        $this->db->where('Toko_ID', $tokoid);
        $query = $this->db->get('ready_stock');
        return $query->row_array();
    }

    function GetDataReadyStock($barangreadyid){
        $this->db->where('Barang_Ready_ID', $barangreadyid);
        $query = $this->db->get('ready_stock');
        return $query->row_array();
    }

    function SetReadyStock($databarangready){
        $this->db->insert($databarangready);
    }

    function ChangeDataReady($changebarang, $barangreadyid){
        $this->db->where('Barang_Ready_ID', $barangreadyid);
        $this->db->update('ready_stock', $changebarang);
    }

    function DeleteBarangReady($barangreadyid){
        $this->db->where('Barang_Ready_ID', $barangreadyid);
        $this->db->delete('rating');
    }

    
        
}?>