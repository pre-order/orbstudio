<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class batal extends CI_models{

function GetBatalID($keranjangid){
    $this->db->select('Batal_ID');
    $this->db->where('Keranjang_ID', $keranjangid);
    $query = $this->db->get('batal');
    return $query->row_array();
}

function GetBatalData($batalid){
    $this->db->where('Batal_ID',$batalid);
    $query = $this->db->get('batal');
    return $query->row_array();
}

function SetBatal($bataldata){
    $this->db->insert($bataldata);
}

}?>