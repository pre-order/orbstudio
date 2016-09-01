<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

Class toko extends CI_model{

    function GetTokoID($userid){
        $this->db->select('Toko_ID');
        $this->db->where('UserID', $userid);
        $query = $this->db->get('toko');
        return $query->row_array();
     }

     function GetTokoData($tokoid){
         $this->db->where('Toko_ID', $Tokoid);
         $query = $this->db->get('toko');
         return $query->row_array();
     }

     function GetNamaToko($tokoid){
         $this->db->select('Nama_toko');
         $this->db->where('Toko_ID', $tokoid);
         $query = $this->db->get('toko');
         return $query->row_array();
     }

     function setToko($datatoko){
         $this->db->insert('toko', $datatoko);
         return true;
        }

     function ChangeToko($tokoid, $changedatatoko){
         $this->db->where('Toko_ID', $tokid);
         $this->db->update('toko', $changedatatoko);
         return true;
     }

     function ChangeFoto($Tokoid, $urlfoto){
         $this->db->set('foto_toko', $urlfoto);
         $this->db->where('Toko_ID', $tokoid);
         $this->db->update('Fototoko');
     }

     function GetUrlFotoToko($Tokoid, $urlfoto){
         $this->db->select('foto_toko');
         $this->db->where('Toko_ID', $tokoid);
         $query = $this->db->get('toko');
         $urlfoto = $query->row_array();
     }

     function GetFotoBackground($Tokoid, $urlbackground){
         $this->db->select('foto_back');
         $this->db->where('Toko_ID', $tokoid);
         $query = $this->db->get('toko');
         $urlbackground = $query->row_array();
     }

     function DeletebFoto($Tokoid, $urlfoto){
         $this->db->where('foto_toko', $urlfoto);
         $this->db->delete('toko');
         return true;
     }

     function DeletedBackgroundFoto($Tokoid, $urlbackground){
         $this->db->where('foto_back', $urlbackground);
         $this->db->delete('toko');
         return true;
     }

}
?>