<?php

class ModelClientes extends CI_Model
{
	public function getClientes()
	{
		$this->db->select('idcliente, nombre, apellidos, razonsocial, telefono, codigo_postal');
		$this->db->from('clientes');
		$this->db->where('estado', 0);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return null;
		}
	}

	public function getCliente($id)
	{
		$this->db->select('*');
		$this->db->from('clientes');
		$this->db->where('idcliente', $id);

		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->row_array();
		} else {
			return null;
		}
	}

	public function storeCliente($data)
	{
		$this->db->insert('clientes', $data);
		return true;
	}

	public function updateCliente($data, $id)
	{
		$this->db->where('idcliente', $id);
		$this->db->update('clientes', $data);
		return true;
	}

	public function destroyCliente($id)
	{
		$this->db->where('idcliente', $id);
		$data = array(
			'estado' => 1,
		);
		$this->db->update('clientes', $data);
		return true;
	}
}
