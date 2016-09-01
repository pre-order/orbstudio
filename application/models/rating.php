<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
Class readystock extends CI_model{
    function GetRatingID($tokoid){
        $this->db->select('Rating_ID');
        $this->db->where('Toko_ID', $tokoid);
        $query = $this->db->get('rating');
        return $query->row_array();
    }

    function GetRating($ratingid){
        $this->db->where('Rating_ID', $ratingid);
        $query = $this->db->get('rating');
        return $query->row_array();
    }

    function SetRating($datarating){
        $this->db->insert($datarating);
    }
}
?>