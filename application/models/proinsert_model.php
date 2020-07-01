<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Proinsert_model extends CI_Model {


 
public function proi(){


   
 

     //Aquí capturas los datos recibidos
        $data = array(

        
        'product_title'=>$this->input->post('product_title'),
        'product_desc'=>$this->input->post('product_desc'),
        'product_price'=>$this->input->post('product_price'),
        'product_image'=>$this->input->post('product_image','name'),
        'unit_id'=>$this->input->post('unit_id'),
        'category_id'=>$this->input->post('category_id'),
         'product_keywords'=>$this->input->post('product_keywords')
     
        


         );

        $this->db->insert('products',$data);
        redirect('vistaproducto');

        }


        function guardar($data){ 
          
        $this->db->insert("products", $data);
        if($this->db->affected_rows() > 0){
            return true;
        } else {
            return false;
        }

      

 
}
}


