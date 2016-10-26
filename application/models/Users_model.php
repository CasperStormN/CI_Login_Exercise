<?php

class Users_model extends CI_Model {
	public function get_users() {
		$query = $this->db->query('SELECT * FROM users');
		return $query->result();
	}

	public function login($email, $password) {

	   $this -> db -> select('email, password');
	   $this -> db -> from('users');
	   $this -> db -> where('email', $email);
	   $this -> db -> where('password', $password);
	   $this -> db -> limit(1);
	 
	   $query = $this -> db -> get();
	 
	   if($query -> num_rows() == 1)
	   {
	   	 echo 'Right mail/pass';
	     return $query->result();
	   }
	   else
	   {
	   	 echo 'Wrong email/password';
	     return false;
	   }
	}
}