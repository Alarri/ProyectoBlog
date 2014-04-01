<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* Heredamos de la clase CI_Controller */
class Cliente extends CI_Controller {

  

  function index()
  {
    /*
     * Mandamos todo lo que llegue a la funcion
     * Crear().
     **/
     $this->load->model('ClienteModel');
     $data['data']=$this->ClienteModel->ListaClientes();
     $data['hola']="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn2/276092_1184764396_3969025_q.jpg";
     $this->load->view('Cliente/Index',$data);
    
  }

  /*
   *
   $this->output->append_output($this->input->post('cedula'));...
   **/

  public function Crear()
  {
     $this->load->view('Cliente/Crear');
  }

  public function CrearCliente()
  {
    /* Aqui le indicamos que campos deseamos mostrar */
    $cliente=array(
        'Cedula' => $this->input->post('cedula') ,
        'Nombre' => $this->input->post('nombre') ,
        'Email' => $this->input->post('email') ,
        'Direccion' => $this->input->post('direccion') ,
        'Usuario' => $this->input->post('usuario') ,
        'Contrasena' => $this->input->post('contrasena') ,
        'Pais' => $this->input->post('pais') 
    );

    /* Generamos la tabla */
    $this->load->model("ClienteModel");
    if($this->ClienteModel->Crear($cliente))
    {
      $data['data']=$this->ClienteModel->ListaClientes();
         $data['hola']="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn2/276092_1184764396_3969025_q.jpg";
      $this->load->view('Cliente/Index',$data);

    }
    else
    {
       $this->load->view('welcome_message');
    }
  }
    
  public function Editar()
  {
    $id=$this->uri->segment(3);
    $this->load->model("ClienteModel");
    $data['data']=$this->ClienteModel->ObtenerCliente($id);
    $this->load->view('Cliente/Editar',$data);
  }

  public function EditarCliente()
  {
    $id=$this->input->post('id');

    $cliente=array(
        'Cedula' => $this->input->post('cedula') ,
        'Nombre' => $this->input->post('nombre') ,
        'Email' => $this->input->post('email') ,
        'Direccion' => $this->input->post('direccion') ,
        'Usuario' => $this->input->post('usuario') ,
        'Contrasena' => $this->input->post('contrasena') ,
        'Pais' => $this->input->post('pais'));
    $this->load->model("ClienteModel");
    if($this->ClienteModel->Editar($id,$cliente))
    {
      redirect(base_url()."Cliente");
    }
    else
    {
      $this->load->view('welcome_message');
    }
   
  }

  public function Eliminar()
  {
    $id=$this->uri->segment(3);

    $this->load->model("ClienteModel");
    if($this->ClienteModel->Eliminar($id))
    {
      redirect(base_url()."Cliente");
    }
    else
    {
      $this->load->view('welcome_message');
    }
  }    
  
}