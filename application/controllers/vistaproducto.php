<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vistaproducto extends CI_Controller {

 public function __construct()
    {
        parent::__construct();
    }


  public function index(){ 
  	$this->load->helper('form');
        $this->load->view('vistaproducto');
         $data['titulo'] = 'Subir imagen';
        $this->load->view('headfoot/header', $data);
    
        $this->load->view('headfoot/footer');



   }


public function subir()
    {
       
        $product_title = $this->input->post("product_title");
        $product_desc = $this->input->post("product_desc");
        $product_price = $this->input->post("product_price");

        $nombre_imagen = $_FILES['product_image']['name'];
        $unit_id= $this->input->post("unit_id");
       
        
        $product_keywords=$this->input->post("product_keywords");

        $data=array(
          
            "product_title"=> $product_title,
            "product_desc"=> $product_desc,
           "product_price"=> $product_price,
           "product_image"=>$nombre_imagen,
           "unit_id"=> $unit_id,
        
              "product_keywords"=>$product_keywords
 );
           $this->subirImagen();
    }
public function adici(){

$this->load->model('proinsert_model');
$this->proinsert_model->proi();
}


    function subirImagen() {

        $mi_archivo = 'product_image';
        $config['upload_path'] = './assets/images/';
        $config['file_name'] = "nombre_archivo";
        $config['allowed_types'] ="gif|jpg|jpeg|png";
        $config['max_size'] = "5000";
        $config['max_width'] = "2000";
        $config['max_height'] = "2000";

        $this->load->library('upload', $config);
        
        if (!$this->upload->do_upload($mi_archivo)) {
            //*** ocurrio un error
            $data['uploadError'] = $this->upload->display_errors();
            echo $this->upload->display_errors();
            return;
        }

       else {
                   
                 $this->load->model('proinsert_model');
                 $this->proinsert_model->proi();


            $data['titulo'] = 'Subir imagen | Éxito';
            $data['infoImagen'] = $this->upload->data();
        $this->load->view('headfoot/header', $data);
            $this->load->view('formulario_exito');
        $this->load->view('headfoot/footer');
        }
    }



 









    }






























 
