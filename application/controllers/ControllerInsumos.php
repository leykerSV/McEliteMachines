<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Clase ControllerInsumos
 *
 * Esta clase controla todo lo relacionado con Insumos
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
class ControllerInsumos extends CI_Controller
{
	/**
     * Undocumented function
     *
     * @return void
     */
    public function index()
    {
        if (isset($_SESSION['id'])) {
			$data['familia'] = $this->Dashmodeluseful->getFamilia();
            $data['insumos'] = $this->ModelInsumos->getInsumos();
            //var_dump($data);
            $this->load->view('main/Header_view');
            $this->load->view('insumos/View_Insumos_read_delete', $data);
            $this->load->view('main/Footer_view');
        } else {
            redirect('Dash_controller_credentials', "location");
        }
    }

	/**
	 * creat
	 *
	 * @return void
	 */
    public function create()
    {
        if (isset($_SESSION['id'])) {
            $this->view_create_edit();
        } else {
            redirect('Dash_controller_credentials', "location");
        }
    }

    public function store()
    {
        if (isset($_SESSION['id'])) {
            $datastore = $this->ModelInsumos->storeInsumo($_POST);
            if (isset($datastore)) {
                $data['messagetrue'] = 'Insumo creado existosmente';
            } else {
                $data['messagefalse'] = 'Error al crear Insumo';
            }            
            $this->view_create_edit($data);
        } else {
            redirect('Dash_controller_credentials', "location");
        }
    }

    public function edit()
    {
        if (isset($_SESSION['id'])) {
            $data['values'] = $this->ModelInsumos->getInsumo($_GET['idinsumo']);            
            $this->view_create_edit($data);
        } else {
            redirect('Dash_controller_credentials', "location");
        }
    }

    public function update()
    {
        if (isset($_SESSION['id'])) {
            $dataupdate = $this->ModelInsumos->updateInsumo($_POST, $_GET['idinsumo']);
            if (isset($dataupdate)) {
                $data['messagetrue'] = 'Insumo editado exitosamente';
            } else {
                $data['messagefalse'] = 'Error al editar Insumo';
            } 
            $this->view_create_edit($data);
        } else {
            redirect('Dash_controller_credentials', "location");
        }
    }

    public function destroy()
    {
        if (isset($_SESSION['id'])) {
            //$iduser = $this->input->get('id');//Otra manera de obtener el id
            $data = $this->ModelInsumos->destroyInsumo($_GET['id']);
            redirect('ControllerInsumos', "location");
        } else {
            redirect('ControllerInsumos', "location");
        }
    }    

    public function view_create_edit($data = null){
		$data['familia'] = $this->Dashmodeluseful->getFamilia();
        $this->load->view('main/Header_view');
        $this->load->view('insumos/View_Insumos_create_edit', $data);
        $this->load->view('main/Footer_view');
    }
}
