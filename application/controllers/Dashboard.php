<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dashboard_model', 'dashboard');
        $this->load->model('Disaster_model', 'disaster');
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

    public function view($id)
    {
        $data['disaster'] = $this->disaster->disaster($id);
        $data['victim'] = $this->disaster->victim($id);
        $data['hidup'] = $this->disaster->report($id, 3);
        $data['hilang'] = $this->disaster->report($id, 1);
        $data['meninggal'] = $this->disaster->report($id, 2);
        $this->load->view('viewer/disaster_dashboard', $data);
    }
}
