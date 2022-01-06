<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ControllerArticulos extends CI_Controller
{
    public function index()
    {
        if (isset($_SESSION['id'])) {
            $data['articulos'] = $this->ModelArticulos->getarticulos();
            //var_dump($data);
            $this->load->view('main/Header_view');
            $this->load->view('articulos/View_Articulos_read_delete', $data);
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
            $datastore = $this->ModelArticulos->storeArticulo($_POST);
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
            $data['values'] = $this->ModelArticulos->getArticulo($_GET['id']);            
            $this->view_create_edit($data);
        } else {
            redirect('Dash_controller_credentials', "location");
        }
    }

    public function update()
    {
        if (isset($_SESSION['id'])) {
            $dataupdate = $this->ModelArticulos->updateArticulo($_POST, $_GET['id']);
            if (isset($dataupdate)) {
                $data['messagetrue'] = 'Articlo editado exitosamente';
            } else {
                $data['messagefalse'] = 'Error al editar Articulos';
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
            $data = $this->ModelArticulos->destroyArticulo($_GET['id']);
            redirect('ControllerArticulos', "location");
        } else {
            redirect('ControllerArticulos', "location");
        }
    }    

    public function view_create_edit($data = null){
        $this->load->view('main/Header_view');
        $this->load->view('articulos/View_Articulos_create_edit', $data);
        $this->load->view('main/Footer_view');
    }
}
