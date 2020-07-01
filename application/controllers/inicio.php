<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
$this->load->helper('form');
 $this->load->view('administrador');
       $data['titulo'] = 'Subir imagen';
        $this->load->view('headfoot/header', $data);
        $this->load->view('formulario');
        $this->load->view('headfoot/footer');
       
    }
public function subir()
    {
        $dato = $this->input->post("cat_title");
        $short = $this->input->post("short_name");
        $nombre_imagen = $_FILES['foto_categoria']['name'];

        $data=array(
            "dato"=>$dato,

            "short"=>$short,
             "imagen"=>$nombre_imagen
         );
           $this->subirImagen();
    }
 public function add(){

$this->load->model('subir_model');
$this->subir_model->insertPrueba();
}

public function subirImagen()
    {
        $nombreCompleto = $_FILES['foto_categoria']['name'];
        $config['upload_path']          = './assets/images/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 2000;
        $config['max_width']            = 0;
        $config['max_height']           = 0;
        $config['file_name'] = $nombreCompleto;

        $this->load->library('upload', $config);


        if(!$this->upload->do_upload('foto_categoria')) {


            $data['titulo'] = 'Subir imagen | Error';
            $data['error'] = array('error' => $this->upload->display_errors());

        $this->load->view('headfoot/header', $data);
        $this->load->view('formulario_error');
        $this->load->view('headfoot/footer');
        } else {
                   
                 $this->load->model('subir_model');
                 $this->subir_model->insertPrueba();


            $data['titulo'] = 'Subir imagen | Éxito';
            $data['infoImagen'] = $this->upload->data();
        $this->load->view('headfoot/header', $data);
            $this->load->view('formulario_exito');
        $this->load->view('headfoot/footer');
        }
    }






 }