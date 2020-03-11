<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class customer_registration extends CI_Controller {

	
	 
	public function index()
	{

		$this->load->helper('form');
		$this->load->view('customer_registration');
	}


	public function add(){

$this->load->model('insertar_model');
$this->insertar_model->insertPrueba();
}
}