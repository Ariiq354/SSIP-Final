<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dashboard_model', 'dashboard');
        $this->load->model('User_model', 'user');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header');
            $this->load->view('auth/login');
            $this->load->view('template/footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->user->getUser($username);
        if ($user) {
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'username' => $user['head_family'],
                        'id_role' => $user['id_role'],
                    ];
                    $this->session->set_userdata($data);
                    if ($user['id_role'] == 1) {
                        redirect('admin');
                    } else {
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissable fade show" role="alert">Wrong Password</div>');
                    redirect('Auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissable fade show" role="alert">Username is not validated, please wait for validation or contact the admin</div>');
                redirect('Auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissable fade show" role="alert">Username is not registered</div>');
            redirect('Auth');
        }
    }

    public function register()
    {
        $this->form_validation->set_rules('username', 'Username', 'is_unique[family.head_family]');
        $this->form_validation->set_rules('familyId', 'FamilyID', 'is_unique[family.id_family]');
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
                'is_active' => 0,
                'picture' => $image,
                'profile' => 'profile-img.jpg',
            ];
            $this->db->insert('family', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-primary alert-dismissable fade show" role="alert">Your Account has been created</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('id_role');
        $this->session->set_flashdata('message', '<div class="alert alert-primary alert-dismissable fade show" role="alert">Logout Succesful</div>');
        redirect('auth');
    }
}
