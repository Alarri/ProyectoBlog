<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* Heredamos de la clase CI_Controller */
class Comentarios extends CI_Controller {

  

  function index()
  {
    /*
     * Mandamos todo lo que llegue a la funcion
     * Crear().
     **/
     
     $Blog_id=$this->uri->segment(3);
    $this->load->model('CommentsModel');
    $this->load->model('PostModel');
    
    $data['UnPost']=$this->PostModel->ObtenerPost($Blog_id);
    
    $data['ListaDeComments']=$this->CommentsModel->ListaComments();
    
    $this->load->view('Comments/VerComments',$data);
    
  }

  /*
   *
   $this->output->append_output($this->input->post('cedula'));...
   **/

  public function Crear()
  {
    $Blog_id=$this->uri->segment(3);
    $this->load->model('CommentsModel');
    $this->load->model('PostModel');
    
    $data['UnPost']=$this->PostModel->ObtenerPost($Blog_id);
    
    $data['ListaDeComments']=$this->CommentsModel->ListaComments();

    //$this->output->append_output(var_dump($data['UnPost']));

    //$this->output->append_output(var_dump($data['ListaDeComments']));

    $this->load->view('Comments/VerComments',$data);
  }

  public function CrearComments()
  {
    date_default_timezone_set('America/Costa_Rica');
    //Imprimimos la fecha actual dandole un formato
    
    /* Aqui le indicamos que campos deseamos mostrar */ 
    //$this->output->append_output(var_dump($_POST));

    $CommentsNew=array(
        'Blog_id' => $this->input->post('blog_id') ,
        'Usuario_comentario' => $this->input->post('usuario_comentario') ,
        'comentario' => $this->input->post('comentario') ,
        'Fecha' => date("d/m/Y"),
        'activo' => "0"       
    );

    /* Generamos la tabla */
    $this->load->model("CommentsModel");
    if($this->CommentsModel->Crear($CommentsNew))
    {
       $this->load->model('PostModel');
       $this->load->model('AdminModel');
       $data['listaDePost']=$this->PostModel->ListaPost();
       $data['Admin']=$this->AdminModel->ObtenerTitulo(1);
       $this->load->view('Blog/Index',$data);
    }
    else
    {
       $this->load->view('welcome_message');
    }
  }
  public function Estado()
  {
    $Blog_id=$this->uri->segment(3);
    $this->load->model('CommentsModel');
    $this->load->model('PostModel');    
    $data['UnPost']=$this->PostModel->ObtenerPost($Blog_id);    
    $data['ListaDeComments']=$this->CommentsModel->ListaComments();
    $this->load->view('Comments/MantComments',$data);
  }

  public function Editar()
  {
    $id=$this->uri->segment(3);
    $this->load->model("PostModel");
    $data['data']=$this->PostModel->ObtenerPost($id);
    $this->output->append_output(var_dump($data));
    $this->load->view('Post/EditarPost',$data);
  }

  public function EditarEstado()
  {
    $id=$this->uri->segment(3);
    $Blog_id=$this->uri->segment(4);
    if($this->input->post('activo')=="1"){
      $PostModificado=array(        
        'activo'=> 0 );
    }else{
      $PostModificado=array(        
        'activo'=> 1 );
    }
    

    $this->load->model("CommentsModel");
    if($this->CommentsModel->Editar($id,$PostModificado))
    {
      $this->load->model('CommentsModel');
      $this->load->model('PostModel');    
      $data['UnPost']=$this->PostModel->ObtenerPost($Blog_id);    
      $data['ListaDeComments']=$this->CommentsModel->ListaComments();
      $this->load->view('Comments/MantComments',$data);
    }
    else
    {
      $this->load->view('welcome_message');
    }
   
  }

  public function Eliminar()
  {
    $id=$this->uri->segment(3);

    $this->load->model("CommentsModel");
    if($this->CommentsModel->Eliminar($id))
    {
      redirect(base_url()."Post");///ver
    }
    else
    {
      $this->load->view('welcome_message');
    }
  }    
  
}