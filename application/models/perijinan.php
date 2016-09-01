<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

Class perijinan extends CI_model{
        
        function GetIdIjin($userid){
            $this->db->select('ID_ijin');
            $this->db->where('UserID', $userid);
            $query = $this->db->get('perijinan');
            return $query->row_array();
        }

        function GetPerijinan($idijin){
            $this->db->where('ID_ijin',$idijin);
            $query = $this->db->get('perijinan');
            return $query->row_array();
        }

        function SetIjin($dataijin){
            $this->db->insert($dataijin);
        }

}?>