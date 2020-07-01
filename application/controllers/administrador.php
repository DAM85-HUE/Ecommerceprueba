<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class administrador extends CI_Controller {
	public function index()
	{
    $result= $this->db->get('categories');
   
    $data=array('consulta'=>$result);
  
     $this->load->view('administrador',$data);


	}


  


 
}
