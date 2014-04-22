<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminModel extends CI_Model{

	function __construct(){

		$query = $this->db->get('administradores');
		///$this->output->append_output(var_dump($query));

	}

	public function Crear($blogs)
	{

		$this->output->append_output(var_dump($blogs));
		if($this->db->insert("administradores",$blogs))
		{
			return true;
		}
		else
		{
			return false;
		}

	}

	public function ListaAdmin()
	{

		$query = $this->db->get('administradores');
		return $query->result_array();
		
	}

	public function ObtenerAdminAutenticar($usuario, $clave)
	{	
		$array = array('usuario' => $usuario, 'clave' => $clave);
		$this->output->append_output(var_dump($array));
		$this->db->where($array); 

		$query = $this->db->get('administradores');
		return $query->row();
		
	}

	public function ObtenerTitulo($id)
	{	
		$this->db->select('tituloblog');
		$this->db->where('id_admin', $id);
		$query = $this->db->get('administradores');
		
		return $query->row();
		
	}
	public function ObtenerAdmin($id)
	{	

		$this->db->where('id_admin', $id);
		$query = $this->db->get('administradores');
		return $query->row();
		
	}
	public function Editar($id, $post)
	{
		var_dump($id);
		$this->db->where('id_admin', $id);
		if ($this->db->update('administradores', $post)) {
			return true;
		}else{
			return false;
		}

	}
	public function Eliminar($id)
	{
		var_dump($id);
		$this->db->where('id_admin',$id);
		if ($this->db->delete('administradores')) {
			return true;
		}else{
			return false;
		}
	}

}
