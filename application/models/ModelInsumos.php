<?php

class ModelInsumos extends CI_Model
{
	public function getInsumos()
	{
		$this->db->select('*');
		$this->db->from('insumos');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return null;
		}
	}

	public function getInsumo($id)
	{
		$this->db->select('*');
		$this->db->from('insumos');
		$this->db->where('idinsumos', $id);

		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->row_array();
		} else {
			return null;
		}
	}

	public function storeInsumo($data)
	{
		$this->db->insert('insumos', $data);
		return true;
	}

	public function updateInsumo($data, $id)
	{
		$this->db->where('idinsumo', $id);
		$this->db->update('Insumos', $data);
		return true;
	}

	public function destroyInsumo($id)
	{
		$this->db->where('idinsumo', $id);
		$data = array(
			'estado' => 1,
		);
		$this->db->update('Insumos', $data);
		return true;
	}
}
