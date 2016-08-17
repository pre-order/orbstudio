<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class toko extends CI_models{
  function GetRekeningData($tokoid){
      $this->db->where('Toko_ID', $tokoid);
      $query = $this->db->get('rekening_toko');
      return $query->row_array();
  }

  function SetRekening($datarekening){
      $this->db->insert($datarekening);
  }

  function ChangeRekening($norekening, $changerekening){
      $this->db->where('No_Rekening', $norekening);
      $this->db->update('rekening', $changerekening);
  }

}?>