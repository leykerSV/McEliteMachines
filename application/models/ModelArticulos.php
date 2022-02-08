<?php
/**
 * ModelArticulos
 *
 * Esta clase opera sobre la tabla articulos
 * 
 * idarticulo
 * descripcion
 * ean13
 * codbar
 * tapizado
 * color
 * estado
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
class ModelArticulos extends CI_Model
{

	/**
	 * getartículos function
	 * Devuelve todos los artículos de la Base de Datos ordenados alfabeticamente
	 *
	 * @return void
	 */
	public function getArticulos()
	{
		$this->db->select('*');
		
		$this->db->from('articulos');
		$this->db->order_by('descripcion');
		$this->db->where('estado', 0);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return null;
		}
	}

	/**
	 * getArticulos function
	 *
	 * @param int $id Es el id del artículo buscado.
	 * @return array Devuelve un arreglo con el artículo.
	 */
	public function getArticulo($id)
	{
		$this->db->select('*');
		$this->db->from('articulos');
		$this->db->where('idarticulo', $id);

		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->row_array();
		} else {
			return null;
		}
	}

	public function getArticulosMasPrecios()
    {
        $this->db->select('articulos.*,precios.*');
        $this->db->from('articulos');
        $this->db->join('precios','precios.idarticulo=articulos.idarticulo','Left');
        $this->db->where('articulos.estado', 1);
        $query=$this->db->get();
        if ($query->num_rows() > 0) {
            //var_dump($query->result_array()) ;
            return $query->result_array();
        } else {
            return null;
        }
    }

	/**
	 * storeArticulo function
	 *
	 * @param array $data Es el array de datos del formulario
	 * @return void
	 */
	public function storeArticulo($data)
	{
		$this->db->insert('articulos', $data);
		return true;
	}

	/**
	 * updateArticulo function
	 * Actualiza el artículo
	 *
	 * @param array $data Es el array de datos del formulario
	 * @param int $id Es el id del artículo a actualizar
	 * @return void
	 */
	public function updateArticulo($data, $id)
	{
		$this->db->where('idarticulo', $id);
		$this->db->update('articulos', $data);
		return true;
	}

	/**
	 * destroyArticulo function
	 * Cambia el estado del artículo para que no se vea en el listado
	 *
	 * @param int $id
	 * @return void
	 */
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
