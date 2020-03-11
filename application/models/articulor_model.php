<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articulo_model extends CI_Model {

	
	public function getPost()
	{

		return $this->db->get('products');



	}


	public function getPostMyname($name=''){


		$this->db->query("SELECT * FROM products LIMIT $start,$limit");
		

		return $result->$fila();




	}

	

}