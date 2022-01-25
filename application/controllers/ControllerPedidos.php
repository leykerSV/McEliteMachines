<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Clase ControllerPedidos
 *
 * Esta clase controla todo lo relacionado con Pedidos
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
class ControllerPedidos extends CI_Controller
{
	/**
     * Undocumented function
     *
     * @return void
     */
    public function index()
    {
        if (isset($_SESSION['id'])) {
            $data['pedidos'] = $this->ModelPedidos->getPedidos();
            $this->load->view('main/Header_view');
            $this->load->view('pedidos/View_Pedidos_read_delete', $data);
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
			$data['clientes'] = $this->ModelClientes->getClientes();
            $this->view_create_edit($data);
        } else {
            redirect('Dash_controller_credentials', "location");
        }
    }

	/**
	 * "articulos" es una función que carga el formulario para cargar articulos
	 * a un pedido definido por $idpedido.
	 *
	 * 
	 * @return void
	 */
	public function articulos(){
		if (isset($_SESSION['id'])) {
			$data['articulos'] = $this->ModelArticulos->getArticulos();
			$data['pedido'] = $this->ModelPedidos->getPedido($_GET['id']);
			$data['cliente'] = $this->ModelClientes->getCliente($data['pedido']['idcliente']);
            $this->load->view('main/Header_view');
        	$this->load->view('pedidos/Articulos', $data);
        	$this->load->view('main/Footer_view');
        } else {
            redirect('Dash_controller_credentials', "location");
        }	
	}

	public function articulosstore($idpedido){
		if (isset($_SESSION['id'])) {
			$data['articulos'] = $this->ModelArticulos->getArticulos();
			$data['pedido'] = $this->ModelPedidos->getPedido($idpedido);
        } else {
            redirect('Dash_controller_credentials', "location");
        }	
	}


    public function store()
    {
        if (isset($_SESSION['id'])) {
            $datastore = $this->ModelPedidos->storePedido($_POST);
            if (isset($datastore)) {
                $data['messagetrue'] = 'Pedido creado existosmente';
            } else {
                $data['messagefalse'] = 'Error al crear Pedido';
            }            
            $this->view_create_edit($data);
        } else {
            redirect('Dash_controller_credentials', "location");
        }
    }

    public function edit()
    {
        if (isset($_SESSION['id'])) {
            $data['values'] = $this->ModelInsumos->getInsumo($_GET['id']);            
            $this->view_create_edit($data);
        } else {
            redirect('Dash_controller_credentials', "location");
        }
    }

    public function update()
    {
        if (isset($_SESSION['id'])) {
            $dataupdate = $this->ModelInsumos->updateInsumo($_POST, $_GET['id']);
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

    public function view_create_edit($data){
        $this->load->view('main/Header_view');
        $this->load->view('pedidos/View_Pedidos_create_edit', $data);
        $this->load->view('main/Footer_view');
    }

	public function completarpedido()
    {
        if (isset($_SESSION['id'])) {
            $this->ModelPedidos->CompletarPedido($_GET['id']);
			$data['pedidos'] = $this->ModelPedidos->getPedidos();
            $this->load->view('main/Header_view');
            $this->load->view('pedidos/View_Pedidos_read_delete', $data);
            $this->load->view('main/Footer_view');
        } else {
            redirect('Dash_controller_credentials', "location");
        }
    }
}