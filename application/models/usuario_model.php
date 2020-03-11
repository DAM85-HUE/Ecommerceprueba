<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

	
	public function construct()
	{

		return $this->db->get('user_info');



	}

	public function login($email,$password)

    { 

	$this->db->where('email',$email);
	$this->db->where('password',$password);
	$q=$this->db->get('user_info');
	if ($q->num_rows()>0)
	 {
		return true;
	}else
	{

return false;

	}

}

}