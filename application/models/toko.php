<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class toko extends CI_models{

    function GetTokoID($userid){
        $this->db->select('Toko_ID');
        $this->db->where('UserID', $userid);
        $query = $this->db->get('toko_order');
        return $query->row_array();
     }

     function GetTokoData($Tokoid){
         $this->db->where('Toko_ID', $Tokoid);
         $query = $this->db->get('toko_order');
         return $query->row_array();
     }

     function setToko($datatoko){
         $this->db->update('toko_order', $datatoko);
         return true;
        }

     function ChangeToko($Tokoid, $changedatatoko){
         $this->db->where('Toko_ID', $userid);
         $this->db->update('toko_order', $changedatatoko);
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
         $query = $this->db->get('toko_order');
         $urlfoto = $query->row_array();
     }

     function GetFotoBackground($Tokoid, $urlbackground){
         $this->db->select('foto_back');
         $this->db->where('Toko_ID', $tokoid);
         $query = $this->db->get('toko_order');
         $urlbackground = $query->row_array();
     }

     function DeletebFoto($Tokoid, $urlfoto){
         $this->db->where('foto_toko', $urlfoto);
         $this->db->delete('toko_order');
         return true;
     }

     function DeletedBackgroundFoto($Tokoid, $urlbackground){
         $this->db->where('foto_back', $urlbackground);
         $this->db->delete('toko_order');
         return true;
     }

}
?>