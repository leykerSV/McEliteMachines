<?php

class ModelArticulos extends CI_Model
{
	public function getArticulos()
	{
		$this->db->select('*');
		$this->db->from('articulos');
		$this->db->where('estado', 0);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return null;
		}
	}

	public function getArticulo($id)
	{
		$this->db->select('*');
		$this->db->from('articulos');
		$this->db->where('idarticulos', $id);

		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->row_array();
		} else {
			return null;
		}
	}

	public function storeArticulo($data)
	{
		$this->db->insert('articulos', $data);
		return true;
	}

	public function updateArticulo($data, $id)
	{
		$this->db->where('idarticulo', $id);
		$this->db->update('articulos', $data);
		return true;
	}

	public function destroyArticulo($id)
	{
		$this->db->where('idarticulo', $id);
		$data = array(
			'estado' => 1,
		);
		$this->db->update('articulos', $data);
		return true;
	}
}
