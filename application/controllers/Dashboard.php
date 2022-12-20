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
        $data['hidup'] = $this->disaster->victcount($id, 3);
        $data['hilang'] = $this->disaster->victcount($id, 1);
        $data['meninggal'] = $this->disaster->victcount($id, 2);
        $this->load->view('viewer/disaster_dashboard', $data);
    }

    public function report()
    {
        $image = $_FILES['reportphoto'];
        $config['upload_path'] = './assets/reportimage';
        $config['allowed_types'] = 'jpg|png|jpeg';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('reportphoto')) {
            echo "Upload Failed";
            die();
        } else {
            $image = $this->upload->data('file_name');
        }
        $data = array(
            'nik' => $this->input->post('nik'),
            'id_disaster' => $this->input->post('id_disaster'),
            'photo' => $image,
            'subject' => $this->input->post('subject'),
            'description' => $this->input->post('message'),
        );
        $this->db->insert('report', $data);
        redirect('dashboard');
    }
}
