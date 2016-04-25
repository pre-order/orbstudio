<?php


Class registermodel extends CI_Model{
    
   function insert_regist(){
        $date = $_POST['tanggal'] . '-' . $_POST['bulan'] . '-' . $_POST['tahun'];
        
        $data = array(
            'Nama_user' => $this->input->post('nama'),
            'jenis_kel' => $this->input->post('jenisKelamin'),
            'Email'=> $this->input->post('email'),
            'Tanggal_lahir' => $date,
            'Kecamatan' => $this->input->post('kecamatan'),
            'Kabupaten' => $this->input->post('kabupaten'),
            'Provinsi' => $this->input->post('Provinsi'),
            'Alamat_user' => $this->input->post('alamat'),
            'Contac_User' => $this->input->post('noTelp'),
            'Pass'=> $this->input->post('pwd')
        );
        
       $this->db->insert('data_user', $data);
   }
}

?>
