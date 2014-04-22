<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* Heredamos de la clase CI_Controller */
class Login extends CI_Controller {


  public function index()
  {
    
     $this->load->model('PostModel');
     $this->load->model('AdminModel');
     $data['listaDePost']=$this->PostModel->ListaPost();
     $data['Admin']=$this->AdminModel->ObtenerTitulo(1);
     $this->load->view('Blog/Index',$data);
    
  }

  public function Autenticar()
  {
    $usuario=$this->input->post('usuario');
    $clave=sha1($this->input->post('clave'));

    $this->load->model("AdminModel");
    $data['data']=$this->AdminModel->ObtenerAdminAutenticar($usuario,$clave);
    //$this->output->append_output(var_dump($data));
    //$this->output->append_output(var_dump($data['data']->usuario));

    if($usuario==$data['data']->usuario && $clave==$data['data']->clave)
    {
      redirect(base_url()."Post/Crear");
    }
    $this->load->view('Blog/index');
  }


  
}