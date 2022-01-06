<?php

class ModelProveedores extends CI_Model
{
    public function getProveedores()
    {
        $this->db->select('idproveedor, nombre, apellidos, razonsocial, telefono, codigo_postal');
        $this->db->from('proveedores');
        $this->db->where('estado', 1);
        $query=$this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return null;
        }
    }
    
    public function getProveedor($id)
    {
        $this->db->select('idproveedor, nombre, apellidos, razonsocial, telefono, codigo_postal');
        $this->db->from('proveedores');
        $this->db->where('idproveedor', $id);

        $query=$this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return null;
        }
    }

    public function storeProveedor($data)
    {
        $this->db->set('nombre', $data['nombre']);
        $this->db->set('apellidos', $data['apellidos']);
        $this->db->set('razonsocial', $data['razonsocial']);
        $this->db->set('telefono', $data['telefono']);
        $this->db->set('codigo_postal', $data['codigo_postal']);
        $this->db->set('estado', 1);
        $this->db->insert('proveedores');
        return true;
    }    
    
    public function updateProveedor($data, $id)
    {
        //$this->db->set($data);
        $this->db->set('nombre', $data['nombre']);
        $this->db->set('apellidos', $data['apellidos']);
        $this->db->set('razonsocial', $data['razonsocial']);
        $this->db->set('telefono', $data['telefono']);
        $this->db->set('codigo_postal', $data['codigo_postal']);
        $this->db->where('idproveedor', $id);
        $this->db->update('proveedores');
        return true;
    }

    public function destroyProveedor($id)
    {
        $this->db->where('idproveedor', $id);
        $data = array(
            'estado' => 0,
        );
        $this->db->update('proveedores', $data);
        return true;
    }
}
