<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoriaconsulta_model extends CI_Model {

	
	public function getPost()
	{

		return $this->db->get('categories');



	}


	public function getPostMyname(){


		$this->db->query("SELECT * FROM categories");
		

		return $result->$fila();




	}

	

}