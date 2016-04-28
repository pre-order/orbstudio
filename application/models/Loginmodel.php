<?php

Class loginmodel extends CI_Model
{
 function login($email, $password)
 {
   $this -> db -> select('id, Email, Pass');
   $this -> db -> from('Email');
   $this -> db -> where('Email', $email);
   $this -> db -> where('Pass', MD5($password));
   $this -> db -> limit(1);
 
   $query = $this -> db -> get();
 
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