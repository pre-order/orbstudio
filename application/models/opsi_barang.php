<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
Class opsi_barang extends CI_model{

    function GetOpsiID($itemid){
        $this->db->select('ID_Opsi');
        $this->db->where('Item_ID', $itemid);
        $query = $this->db->get('opsi_barang');
        return $query->row_array();
    }

    function GetOpsiBarang($opsiid){
        $this->db->where('ID_Opsi', $opsiid);
        $query = $this->db->get('opsi_barang');
        return $query->row_array();
    }

    function SetOpsiBarang($dataopsi){
        $this->db->insert($dataopsi);
    }
}
?>