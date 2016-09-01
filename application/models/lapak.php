<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

Class lapak extends CI_model{

    
    function GetLapakID($tokoID){
        $this->db->select('Lapak_ID');
        $this->db->where('Toko_ID', $tokoid);
        $query = $this->db->get('lapak');
        return $query->row_array();
    }

    function GetLapakdata($lapakid){
        $this->db->where('Lapak_ID', $lapakid);
         $query = $this->db->get('lapak');
         return $query->row_array();
    }

    function GetLapakKategori($kategori){
        $this->db->where('Kategori_Item');
        $query = $this->db->get('lapak');
        return $query->row_array();
    }

    function GetNamaLapak($lapakid){
        $this->db->select('Nama_lapak');
        $this->db->where('Lapak_ID', $lapakid);
        $query = $this->db->get('lapak');
        return $query->row_array();
    }

    function GetKategori($kategori){
        $this->db->where('kategori');
        $query = $this->db->get('lapak');
        return $query->row_array();
    }

    function ChangeStatusLapak($lapakid, $status){
        $this->db->set('Status_lapak', $status);
        $this->db->where('Lapak_ID', $lapakid);
        $this->db->update('lapak');
        return true;
    }


    function SetLapak($datalapak){
        $this->db->insert($datalapak);
        return true;
    }


}

?>