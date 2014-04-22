<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CommentsModel extends CI_Model{

	function __construct(){

		$query = $this->db->get('comentarios');
		///$this->output->append_output(var_dump($query));

	}

	public function Crear($comentarios)
	{

		//$this->output->append_output(var_dump($comentarios));
		if($this->db->insert("comentarios",$comentarios))
		{
			return true;
		}
		else
		{
			return false;
		}

	}

	public function ListaComments()
	{

		$query = $this->db->get('comentarios');
		return $query->result_array();
		
	}

	public function ObtenerCommentst($id)
	{	

		$this->db->where('id_comments', $id);
		$query = $this->db->get('comentarios');
		return $query->row();
		
	}
	public function Editar($id, $comentarios)
	{
		var_dump($id);
		$this->db->where('id_comments', $id);
		if ($this->db->update('comentarios', $comentarios)) {
			return true;
		}else{
			return false;
		}

	}
	public function Eliminar($id)
	{
		var_dump($id);
		$this->db->where('id_comments',$id);
		if ($this->db->delete('comentarios')) {
			return true;
		}else{
			return false;
		}
	}

}
