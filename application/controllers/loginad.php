<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Loginad extends CI_Controller {

 
    public function index()
    {
     
     if ($this->session->userdata('email_address')) {
        redirect('administrador');
     }


         if(isset($_POST['password'])){ 
        $this->load->model('useradmin_model');

        if ($this->useradmin_model->login($_POST['email_address'],$_POST['password'])){
 $this->session->set_userdata('email_address',$_POST['email_address']);
               redirect('phone');
        }else{

               echo "<script type=\"text/javascript\">alert(\"Password Incorrecto\");</script>"; 



        }
     }

 $this->load->view('loginad');

    }

public function logout(){

$this->session->sess_destroy();
redirect('loginad');
}


}