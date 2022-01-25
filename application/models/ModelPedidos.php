<?php

class ModelPedidos extends CI_Model
{
	public function getPedidos()
	{
		$this->db->select('*');
		$this->db->from('pedidosclientes');
		$this->db->order_by('fechaentrega', 'ASC');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return null;
		}
	}

	public function getPedido($id)
	{
		$this->db->select('*');
		$this->db->from('pedidos');
		$this->db->where('idpedido', $id);

		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->row_array();
		} else {
			return null;
		}
	}

	public function storePedido($data)
	{
		$data['fecha']= date('Y-m-d', strtotime($data['fecha']));
		$data['fechaentrega']= date('Y-m-d', strtotime($data['fechaentrega']));
		$this->db->insert('pedidos', $data);
		return true;
	}

	public function updatePedido($data, $id)
	{
		$this->db->where('idpedido', $id);
		$this->db->update('pedidos', $data);
		return true;
	}

	public function CompletarPedido($id)
	{
		$this->db->where('idpedido', $id);
		$data = array(
			'completo' => 1,
		);
		$this->db->update('pedidos', $data);
		return true;
	}

	public function CancelarPedido($id)
	{
		$this->db->where('idpedido', $id);
		$data = array(
			'cancelado' => 1,
		);
		$this->db->update('pedidos', $data);
		return true;
	}
}
