<?php


Class registermodel extends CI_Model{
    
   function insert_regist(){
        $name = $_POST['nama'];
        $date = $_POST['tanggal'] . '-' . $_POST['bulan'] . '-' . $_POST['tahun'];
        $gender = $_POST['jenisKelamin'];
        $alamatuser = $_POST['alamat'];
        $mail = $_POST['email'];
        $no_hp = $_POST['noTelp'];
        $user= $_POST['usr'];
        $pswd= $_POST['pwd'];
        
       $this->db->query("INSERT INTO data_user(Nama_user, jeniskelamin, Email, Tanggal_lahir, Alamat_user, Contac_User, UserLogin, Pass)
                        VALUES ('$name', '$gender', '$mail', '$date', '$alamatuser', '$no_hp', '$user', '$pswd')");
   }
}

?>
