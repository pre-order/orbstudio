<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class lapak extends CI_models{
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

    function GetNamaLapak($lapakid){
        $this->db->select('Nama_lapak');
        $this->db->where('Lapak_ID', $lapakid);
        $query = $this->db->get('lapak');
        return $query->row_array();
    }

    function getKategori($kategori){
        $this->db->where('kategori');
        $query = $this->db->get('lapak');
        return $query->row_array();
    }

    function changestatuslapak($lapakid, $status){
        $this->db->set('Status_lapak', $status);
        $this->db->where('Lapak_ID', $lapakid);
        $this->db->update('lapak');
        return true;
    }


    function setLapak($data){
        $this->db->insert($data);
        return true;
    }

}

?>