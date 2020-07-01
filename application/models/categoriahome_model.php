<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articulo_model extends CI_Model {

	public function datoscat($cat_id){
    $this->db->select('*');
    $this->db->where('cat_id',$cat_id);
    $resultado= $this->db->get('categories');
    return $resultado->result();
}
	

}