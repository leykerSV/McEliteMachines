<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Clase Dashmodeluseful
 *
 * Esta clase lee distintas tablas y devuevle arreglos para llenar combos o 
 * para completar con nombres las tablas de datos
 *
 * PHP version 7
 *
 * @category   Models
 * @author     Leyker <dleyendeker@gmail.com>
 * @package    Modelos
 * @copyright  2002 - 2022 Leyker Soft
 * @license    http://www.gnu.org/licenses/gpl-3.0.html GNU GENERAL PUBLIC LICENSE
 * @version    1.0
 * @link       http://www.leyker.com.ar
 */
class Dashmodeluseful extends CI_Model
{
	/**
 	* Devuelve los datos de la tabla condicioniva
	* Salida: array idcondicion - descripcion
 	* @param mixed $status Status of either success or failure.
 	* @param mixed $message The message to be returned.
 	*/
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

	/**
	 * function getFamilia()
	 * 
	 * Consulta la tabla Familias y lo devuelve en un arreglo:
	 * idfamilia - descripcion
	 * 
	 * @return void
	 */
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

	/**
	 * Undocumented function
	 *
	 * @return void
	 */
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
