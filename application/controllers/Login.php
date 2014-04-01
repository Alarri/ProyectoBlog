<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* Heredamos de la clase CI_Controller */
class Login extends CI_Controller {

  

  public function index()
  {
    
     $this->load->view('Login/Login');
    
  }

  public function Autenticar()
  {
    $usuario=$this->input->post('usuario');
    $clave=$this->input->post('clave');

    if($usuario=="avantica" && $clave=="123")
    {
      redirect(base_url()."Cliente");
    }
    $this->load->view('Login/Login');
  }

  /*
   *
   $this->output->append_output($this->input->post('cedula'));...
   **/

  
  
}