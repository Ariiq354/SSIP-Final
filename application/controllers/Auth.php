<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dashboard_model', 'dashboard');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('auth/login');
        $this->load->view('template/footer');
    }

    public function register()
    {
        $this->form_validation->set_rules('username', 'Username', 'is_unique');
        if ($this->form_validation->run() == false) {
            $data['province'] = $this->dashboard->province();
            $this->load->view('template/header');
            $this->load->view('auth/register', $data);
            $this->load->view('template/footer');
        } else {
            $image = $_FILES['picture'];
            $config['upload_path'] = './assets/image';
            $config['allowed_types'] = 'jpg|png|jpeg';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('picture')) {
                echo "Upload Failed";
                die();
            } else {
                $image = $this->upload->data('file_name');
            }

            $data = [
                'id_family' => htmlspecialchars($this->input->post('familyId', true)),
                'id_region' => htmlspecialchars($this->input->post('selectProvince', true)),
                'head_family' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'id_role' => 2,
                'is_active' => 1,
                'picture' => $image,
            ];

            $this->db->insert('family', $data);
            redirect('auth');
        }
    }
}
