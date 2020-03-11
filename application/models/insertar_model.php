<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Insertar_model extends CI_Model {


public function insertPrueba(){

     //Aquí capturas los datos recibidos
        $data = array(

        
        'first_name'=>$this->input->post('f_name'),
        'last_name'=>$this->input->post('l_name'),
        'email'=>$this->input->post('email'),
        'password'=>$this->input->post('password'),
        'mobile'=>$this->input->post('mobile'),
        'address1'=>$this->input->post('address1'),
        'address2'=>$this->input->post('address2')
        

        
        



        #'imagen'=>$this->input->post('imagen'),
    #   'negocio_id'=>$this->input->post('negocio_id'),
    #   'categoria_id'=>$this->input->post('categoria_id')

         );

        $this->db->insert('user_info',$data);
        redirect('login');

        }

    }