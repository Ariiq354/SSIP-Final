<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dashboard_model', 'dashboard');
    }

    public function index()
    {
        $data['province'] = $this->dashboard->province();
        $data['recent'] = $this->dashboard->recentDisaster();
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/dashboard', $data);
        $this->load->view('dashboard/footer');
    }

    public function getDisaster()
    {
        $id = $this->input->post('id');
        $data['disaster'] = $this->dashboard->disaster($id);

        echo json_encode($data);
    }
}
