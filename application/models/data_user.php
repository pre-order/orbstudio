<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class data_user extends CI_models{

    function GetUserID($email){
        $this->db->select('UserID');
        $this->db->where('Email', $email);
        $query = $this->db->get('data_user');
        return $query->row_array();
    }

    function GetUserData($UserID){
        if($email != FALSE) {
            $query = $this->db->get_where('data_user', array('UserID' => $UserID));
            return $query->row_array();
             }
        else {
            return FALSE;
             }
        
    }

    function GetAlamat($email){
        $this->db->select('Provinsi');
        $this->db->select('Kabupaten');
        $this->db->select('Kecamatan');
        $this->db->select('Alamat_User');
        $this->db->where('Email', $email);
        $query = $this->db->get('data_user');
        return $query->row_array();
    }

        
    function GetPassword($email){
        $this->db->select('Pass');
        $this->db->where('Email', $email);
        $query = $this->db->get('data_user');
        return $query->row_array();
    }


    function GetContact($email){
        $this->db->select('Contact_User');
        $this->db->where('Email', $email);
        $query = $this->db->get('data_user');
        return $query->row_array();
    }

    function GetUrlFoto($email){
        $this->db->select('Foto_profil');
        $this->db->where('Email', $email);
        $query = $this->db->get('data_user');
        return $query->row_array();
    }

    function changePasword($email,$password){
        $this->db->set('Password', $password);
        $this->db->where('Email', $email);
        $thos->db->update('data_user');
        return true;
    }

    function RegistUser($datauser){
        $this->db->insert('data_user',$datauser);
    }


    function ChangeProfile($userid,$datauser){
        $this->db->where('UserID', $userid);
        $this->db->update('data_user', $datauser);
    }

    function ChangeFotoProfile($email,$urlfoto){
        $this->db->set('Foto_profil', $urlfoto);
        $this->db->update('data_user');
    }

    
   
}


?>