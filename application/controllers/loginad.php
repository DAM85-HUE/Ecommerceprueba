<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Loginad extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
     
     if ($this->session->userdata('email_address')) {
        redirect('administrador');
     }


         if(isset($_POST['password'])){ 
        $this->load->model('useradmin_model');

        if ($this->useradmin_model->login($_POST['email_address'],$_POST['password'])){
 $this->session->set_userdata('email_address',$_POST['email_address']);
               redirect('administrador');
        }else{

               redirect('loginad#bad-password');

        }
     }




        $this->load->view('loginad');

    }

public function logout(){

$this->session->sess_destroy();
redirect('loginad');
}


}