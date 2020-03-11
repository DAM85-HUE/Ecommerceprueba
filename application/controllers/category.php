<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	
	 
	public function index()
	{

		$this->load->helper( 'url' );

		
  $result= $this->db->get('products');


   
    $data=array('consulta'=>$result);

     $this->load->view('categorias',$data);

		
	}


	public function add(){

$this->load->model('category_model');
$this->category_model->getPn();
}
}