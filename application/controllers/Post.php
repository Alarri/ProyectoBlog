<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* Heredamos de la clase CI_Controller */
class Post extends CI_Controller {

  

  function index()
  {
    /*
     * Mandamos todo lo que llegue a la funcion
     * Crear().
     **/
     
     $this->load->model('PostModel');
     $this->load->model('AdminModel');
     $data['listaDePost']=$this->PostModel->ListaPost();
     $data['Admin']=$this->AdminModel->ObtenerTitulo(1);
     $this->load->view('Blog/Index',$data);
    
  }

  /*
   *
   $this->output->append_output($this->input->post('cedula'));...
   **/

  public function Crear()
  {
    $this->load->model('PostModel');
     $ListaDePost['listaDePost']=$this->PostModel->ListaPost();
  
    $this->load->view('Post/Crear',$ListaDePost);
  }

  public function CrearPost()
  {
    date_default_timezone_set('America/Costa_Rica');
    //Imprimimos la fecha actual dandole un formato
    
    /* Aqui le indicamos que campos deseamos mostrar */ 
    $this->output->append_output(var_dump($_POST));

    $PostNew=array(
        'Admin_id' => 1 ,
        'Titulo' => $this->input->post('titulo') ,
        'Texto' => $this->input->post('texto') ,
        'Fecha' => date("d/m/Y")         
    );

    /* Generamos la tabla */
    $this->load->model("PostModel");
    if($this->PostModel->Crear($PostNew))
    {
      $data['data']=$this->PostModel->ListaPost();
      $this->load->view('Blog/Index',$data);

    }
    else
    {
       $this->load->view('welcome_message');
    }
  }
    
  public function Editar()
  {
    $id=$this->uri->segment(3);
    $this->load->model("PostModel");
    $data['data']=$this->PostModel->ObtenerPost($id);
    $this->output->append_output(var_dump($data));
    $this->load->view('Post/EditarPost',$data);
  }

  public function EditarPost()
  {
    $id=$this->input->post('id');

    $PostModificado=array(        
        'titulo'=> $this->input->post('titulo') ,
        'texto' => $this->input->post('texto') ,
        'fecha' => $this->input->post('fecha') );

    $this->load->model("PostModel");
    if($this->PostModel->Editar($id,$PostModificado))
    {
      redirect(base_url()."Post");
    }
    else
    {
      $this->load->view('welcome_message');
    }
   
  }

  public function Eliminar()
  {
    $id=$this->uri->segment(3);

    $this->load->model("PostModel");
    if($this->PostModel->Eliminar($id))
    {
      redirect(base_url()."Post/Crear");///ver
    }
    else
    {
      $this->load->view('welcome_message');
    }
  }    
  
}