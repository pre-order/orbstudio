<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

Class barang extends CI_model{
    function GetItemID($lapakid){
        $this->db->select('Item_ID');
        $this->db->where('Lapak_ID', $lapakid);
        $query = $this->db->get('barang');
        return $query->row_array();
    }

    function GetBarangData($itemid){
        $this->db->where('Item_ID', $itemid);
        $query = $this->db->get('barang');
        return $query->row_array();
    }

    function setBarang($databarang){
        $this->db->insert($databarang);
    }

    function ChangeKeterangan($itemid, $dataketerangan){
        $this->db->where('Item_ID', $itemid);
        $this->db->update('barang', $dataketerangan);
    }

    function ChangeFotoItem($itemid, $fotoitem){
        $this->db->where('Item_ID',$itemid);
        $this->db->update('barang', $fotoitem);
    }

    function deletebarang($lapakid){
        $this->db->where('Item_ID', $itemid);
        $this->db->delete('barang');
    }

}


?>