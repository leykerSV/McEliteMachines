<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ControllerProveedores extends CI_Controller
{

	public function index ()
	{
		$crud = new grocery_CRUD();

		$crud->set_theme('flexigrid');
		$crud->set_table('proveedores');
		$crud->set_table('localidad');
        $crud->columns('nombre','apellidos','razonsocial','telefono','provincia','localidad','transporte');

		$crud->set_relation('provincia','provincia','nombre');
		$crud->set_relation('codigo_postal','localidad','{nombre} - {codigopostal}');
		$crud->set_relation('condicioniva','condicioniva','descripcion');
		$crud->set_relation('transporte','transportes','nombre');
		$crud->set_subject('Proveedores');

		//$crud->required_fields('lastName');

		$crud->set_field_upload('file_url','assets/uploads/files');

		$output = $crud->render();

		$this->_example_output($output);
	}

	public function _example_output($output = null)
	{
		$this->load->view('main/Header_view',(array)$output);
		$this->load->view('main/salida.php');
		$this->load->view('main/Footer_view');
	}

    public function AA()
    {
        if (isset($_SESSION['id'])) {
            $data['proveedores'] = $this->Model_Proveedores->getProveedores();
            $this->load->view('main/Header_view');
            $this->load->view('proveedores/View_Proveedores_read_delete', $data);
            $this->load->view('main/Footer_view');
        } else {
            redirect('Dash_controller_credentials', "location");
        }
    }

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
            $datastore = $this->Model_Proveedores->storeProveedor($_POST);
            if (isset($datastore)) {
                $data['messagetrue'] = 'Proveedor creado existosmente';
            } else {
                $data['messagefalse'] = 'Error al crear Proveedor';
            }            
            $this->view_create_edit($data);
        } else {
            redirect('Dash_controller_credentials', "location");
        }
    }

    public function edit()
    {
        if (isset($_SESSION['id'])) {
            $data['values'] = $this->Model_Proveedores->getProveedor($_GET['id']);            
            $this->view_create_edit($data);
        } else {
            redirect('Dash_controller_credentials', "location");
        }
    }

    public function update()
    {
        if (isset($_SESSION['id'])) {
            $dataupdate = $this->Model_Proveedores->updateProveedor($_POST, $_GET['id']);
            if (isset($dataupdate)) {
                $data['messagetrue'] = 'Proveedor editado existosmente';
            } else {
                $data['messagefalse'] = 'Error al editar Proveedor';
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
            $data = $this->Model_Proveedores->destroyProveedor($_GET['id']);
            redirect('Controller_Proveedores', "location");
        } else {
            redirect('Controller_Proveedores', "location");
        }
    }    

    public function view_create_edit($data = null){
        $this->load->view('main/Header_view');
        $this->load->view('proveedores/View_Proveedores_create_edit', $data);
        $this->load->view('main/Footer_view');
    }
}
