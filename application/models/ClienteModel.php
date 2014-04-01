<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ClienteModel extends CI_Model{

	function __construct(){

		$query = $this->db->get('cliente');
		///$this->output->append_output(var_dump($query));

	}

	public function Crear($cliente)
	{

		$this->output->append_output(var_dump($cliente));
		if($this->db->insert("cliente",$cliente))
		{
			return true;
		}
		else
		{
			return false;
		}

	}

	public function ListaClientes()
	{

		$query = $this->db->get('cliente');
		return $query->result_array();
		
	}

	public function ObtenerCliente($id)
	{	

		$this->db->where('id', $id);
		$query = $this->db->get('cliente');
		return $query->row();
		
	}
	public function Editar($id, $cliente)
	{
		var_dump($id);
		$this->db->where('id', $id);
		if ($this->db->update('cliente', $cliente)) {
			return true;
		}else{
			return false;
		}

	}
	public function Eliminar($id)
	{
		var_dump($id);
		$this->db->where('Id',$id);
		if ($this->db->delete('cliente')) {
			return true;
		}else{
			return false;
		}
	}

}
