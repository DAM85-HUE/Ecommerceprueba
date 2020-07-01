<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	
	public function index()
	{
    $result= $this->db->get('products',12,20);

    
 
    $data=array('consulta'=>$result);
 
     $this->load->view('home',$data );

 

	}






  


 
}
