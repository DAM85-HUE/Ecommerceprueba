<?php
class Subir_model extends CI_Model
{
  public function insertPrueba(){

     //Aquí capturas los datos recibidos
        $data = array(

      
        'cat_title'=>$this->input->post('cat_title'),
        'short_name'=>$this->input->post('short_name'),
  
        ' foto_categoria'=>$this->input->post('foto_categoria','name')
      #'imagen'=>$this->input->post('imagen'),
    #   'negocio_id'=>$this->input->post('negocio_id'),
    #   'categoria_id'=>$this->input->post('categoria_id')
 );

   $this->db->insert('categories',$data);
        redirect('administrador');

  }
  
function guardar($data)
    {
        $this->db->insert("categories", $data);
        if($this->db->affected_rows() > 0){
            return true;
        } else {
            return false;
        }
    }












   


}