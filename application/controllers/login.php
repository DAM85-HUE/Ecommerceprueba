<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
     
     if ($this->session->userdata('email')) {
     	redirect('profile');
     }


         if(isset($_POST['password'])){ 
		$this->load->model('usuario_model');

		if ($this->usuario_model->login($_POST['email'],$_POST['password'])){
 $this->session->set_userdata('email',$_POST['email']);
                redirect('profile');
		}else{

               echo "<script type=\"text/javascript\">alert(\"Password no coincide \");</script>"; 


		}
     }




		$this->load->view('login');
	}

public function logout(){

$this->session->sess_destroy();
redirect('login');
}


}