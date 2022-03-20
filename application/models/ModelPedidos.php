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
        
        	public function getPedidoDetalle($id)
	{
                $cad="SELECT pedidodetalle.*, pedidos.*, clientes.*, articulos.* from pedidodetalle ";
                $cad=$cad."INNER JOIN pedidos on (pedidodetalle.idpedido =pedidos.idpedido) ";
                $cad=$cad."INNER JOIN clientes on (clientes.idcliente =pedidos.idcliente) ";
                $cad=$cad."INNER JOIN articulos on (pedidodetalle.idarticulo =articulos.idarticulo) ";
                $cad=$cad."where pedidodetalle.idpedido = ".$id;
                    
                $query=$this->db->query($cad);

		//$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->row_array();
		} else {
			return null;
		}
	}
}
