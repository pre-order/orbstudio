<?php

Class loginmodel extends CI_Model
{
 function login($email, $encrypt)
 {
   $this -> db -> select('UserID, Email, Pass');
   $this -> db -> from('data_user');
   $this -> db -> where('Email', $email);
   $this -> db -> where('Pass', $encrypt);
   $this -> db -> limit(1);
   $query = $this ->db ->get();
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
}
?>