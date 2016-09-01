<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

Class data_user extends CI_model{

    function GetUserID($email){
        $this->db->select('User_ID');
        $this->db->where('Email', $email);
        $query = $this->db->get('data_user');
        return $query->row_array();
    }

    function GetUserData($userid){
        if($userid != FALSE) {
            $query = $this->db->get_where('data_user', array('User_ID' => $userid));
            return $query->row_array();
             }
        else {
            return FALSE;
             }
        
    }

    function GetAlamat($userid){
        $this->db->select('Provinsi');
        $this->db->select('Kabupaten');
        $this->db->select('Kecamatan');
        $this->db->select('Alamat_User');
        $this->db->where('User_ID', $userid);
        $query = $this->db->get('data_user');
        return $query->row_array();
    }

        
    function GetPassword($userid){
        $this->db->select('Pass');
        $this->db->where('User_ID', $userid);
        $query = $this->db->get('data_user');
        return $query->row_array();
    }


    function GetContact($userid){
        $this->db->select('Contact_User');
        $this->db->where('User_ID', $email);
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
        $this->db->update('data_user');
        
    }

    function SetUser($datauser){
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