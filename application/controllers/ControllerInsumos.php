<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ControllerInsumos extends CI_Controller
{
    public function index()
    {
        if (isset($_SESSION['id'])) {
            $data['insumos'] = $this->ModelInsumos->getInsumos();
            //var_dump($data);
            $this->load->view('main/Header_view');
            $this->load->view('insumos/View_Insumos_read_delete', $data);
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

    public function view_create_edit($data = null){
		$data['familia'] = $this->Dashmodeluseful->getFamilia();
        $this->load->view('main/Header_view');
        $this->load->view('insumos/View_Insumos_create_edit', $data);
        $this->load->view('main/Footer_view');
    }
}
