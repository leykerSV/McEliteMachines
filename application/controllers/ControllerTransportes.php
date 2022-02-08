<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Clase ControllerArticulos
 *
 * Esta clase controla todo lo relacionado con Articulos
 *
 * PHP version 7
 *
 * @category   Controller
 * @author     Leyker <dleyendeker@gmail.com>
 * @package    Controlladores
 * @copyright  2002 - 2022 Leyker Soft
 * @license    http://www.gnu.org/licenses/gpl-3.0.html GNU GENERAL PUBLIC LICENSE
 * @version    1.0
 * @link       http://www.leyker.com.ar
 */
class ControllerTransportes extends CI_Controller
{
    
	public function index ()
	{
		$crud = new grocery_CRUD();

		$crud->set_theme('flexigrid');
		$crud->set_table('transportes');
        $crud->columns('nombre','direccion','telefono','localidad','provincia');

		$crud->set_relation('provincia','provincia','nombre');
		$crud->set_relation('localidad','localidad','nombre');

		$crud->callback_add_field('localidad', array($this, 'cbklocalidades'));

		//$crud->callback_edit_field('idlocalidad', array($this, 'cbklocalidades'));

		$crud->set_subject('Transportes');

		//$crud->required_fields('lastName');

		$crud->set_field_upload('file_url','assets/uploads/files');

		$output = $crud->render();

		$this->_example_output($output);
	}


	function cbklocalidades()

		{

		//creamos el combo
		$combo = '<select name="localidad" class="chosen-select" data-placeholder="Seleccionar localidad" style="width: 300px; display: none;">';

		$fincombo = '</select>';

		//Tomamos el id de inmueble si se enviocomo parámetro por url
		$idtransporte = $this->uri->segment(4);


		//Verificamos la operacion que estamos haciendo si agregamos o editamos

		$crud = new grocery_CRUD();
		$estado = $crud->getState();


		//Si estamos editando y el id de inmueble no es vació

		if(isset($idtransporte) && $estado == "edit") {
			//consultamos la provincia y la localidad actual del inmueble

			$this->db->select('provincia, localidad')
				->from('transportes')

				->where('idtransporte', $idtransporte);
				

			$db = $this->db->get();
			$row = $db->row(0);

			$idprovincia = $row->provincia;
			$idlocalidad = $row->localidad;

		
		//Cargamos el combo con todas las localidades de la pronvincia

		$this->db->select('*')
			->from('localidad')

			->where('provincia_id', $idprovincia);

		$db = $this->db->get();


		

		//Si ecnontramos el id de localidad actual lo ponemos como selecionado
		//sino seguimos cargando las demas localidades


		foreach($db->result() as $row):

			if($row->idlocalidad == $localidad) {
			$combo .= '<option value="'.$row->idlocalidad.'" selected="selected">'.$row->localidad.'</option>';

			} else {
			$combo .= '<option value="'.$row->idlocalidad.'">'.$row->localidad.'</option>';

			}
		endforeach;

		
		//Devolvemos el combo cargado

		return $combo.$fincombo;
		} else {

			return $combo.$fincombo;
		}

	}

	public function _example_output($output = null)
	{
		$this->load->view('main/Header_view',(array)$output);
		$this->load->view('main/salida.php');
		$this->load->view('main/Footer_view');
	}

}
