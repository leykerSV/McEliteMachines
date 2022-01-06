<?php

class Dashmodeluseful extends CI_Model
{
    public function getCondicion()
    {
        //Realizamos una consulta para traer los datos de la tabla condicioniva

        $this->db->select('*');
        $this->db->from('condicioniva');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }else{
            return null;
        }
    }

	public function getFamilia()
    {
        //Realizamos una consulta para traer los datos de la tabla condicioniva

        $this->db->select('*');
        $this->db->from('familia');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }else{
            return null;
        }
    }

	public function getCodPost()
    {
        //Realizamos una consulta para traer los datos de la tabla usuarios

        $this->db->select('*');
        $this->db->from('localidad');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }else{
            return null;
        }
    }

	public function getProvincia()
    {
        //Realizamos una consulta para traer los datos de la tabla Provincia

        $this->db->select('*');
        $this->db->from('provincia');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }else{
            return null;
        }
    }
}
