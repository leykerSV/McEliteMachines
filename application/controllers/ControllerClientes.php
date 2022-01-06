<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ControllerClientes extends CI_Controller
{
    public function index()
    {
        if (isset($_SESSION['id'])) {
            $data['clientes'] = $this->ModelClientes->getclientes();
            //var_dump($data);
            $this->load->view('main/Header_view');
            $this->load->view('clientes/View_Clientes_read_delete', $data);
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
            $datastore = $this->ModelClientes->storeCliente($_POST);
            if (isset($datastore)) {
                $data['messagetrue'] = 'Cliente creado existosmente';
            } else {
                $data['messagefalse'] = 'Error al crear Cliente';
            }            
            $this->view_create_edit($data);
        } else {
            redirect('Dash_controller_credentials', "location");
        }
    }

    public function edit()
    {
        if (isset($_SESSION['id'])) {
            $data['values'] = $this->ModelClientes->getCliente($_GET['id']);            
            $this->view_create_edit($data);
        } else {
            redirect('Dash_controller_credentials', "location");
        }
    }

    public function update()
    {
        if (isset($_SESSION['id'])) {
            $dataupdate = $this->ModelClientes->updateCliente($_POST, $_GET['id']);
            if (isset($dataupdate)) {
                $data['messagetrue'] = 'Cliente editado exitosamente';
            } else {
                $data['messagefalse'] = 'Error al editar Cliente';
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
            $data = $this->ModelClientes->destroyCliente($_GET['id']);
            redirect('Controlle_Clientes', "location");
        } else {
            redirect('ControllerClientes', "location");
        }
    }    

    public function view_create_edit($data = null){
		$data['condicioniva'] = $this->Dashmodeluseful->getCondicion();
		$data['provincias'] = $this->Dashmodeluseful->getProvincia();
		$data['codpost'] = $this->Dashmodeluseful->getCodPost();
        $this->load->view('main/Header_view');
        $this->load->view('clientes/View_Clientes_create_edit', $data);
        $this->load->view('main/Footer_view');
    }
}
