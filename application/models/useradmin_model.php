<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Useradmin_model extends CI_Model {

    
    public function construct()
    {

        return $this->db->get('user_ad');



    }

    public function login($email_address,$password)

    { 

    $this->db->where('email_address',$email_address);
    $this->db->where('password',$password);
    $q=$this->db->get('user_ad');
    if ($q->num_rows()>0)
     {
        return true;
    }else
    {

return false;

    }

}

}