<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PostModel extends CI_Model{

	function __construct(){

		$query = $this->db->get('blogs');
		///$this->output->append_output(var_dump($query));

	}

	public function Crear($blogs)
	{

		$this->output->append_output(var_dump($blogs));
		if($this->db->insert("blogs",$blogs))
		{
			return true;
		}
		else
		{
			return false;
		}

	}

	public function ListaPost()
	{

		$query = $this->db->get('blogs');
		return $query->result_array();
		
	}

	public function ObtenerPost($id)
	{	

		$this->db->where('id_blog', $id);
		$query = $this->db->get('blogs');
		return $query->row();
		
	}
	public function Editar($id, $post)
	{
		var_dump($id);
		$this->db->where('id_blog', $id);
		if ($this->db->update('blogs', $post)) {
			return true;
		}else{
			return false;
		}

	}
	public function Eliminar($id)
	{
		var_dump($id);
		$this->db->where('id_blog',$id);
		if ($this->db->delete('blogs')) {
			return true;
		}else{
			return false;
		}
	}

}
