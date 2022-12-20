<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'user');
        $this->load->model('Dashboard_model', 'dashboard');
        $this->load->model('Admin_model', 'admin');
        if (!$this->session->userdata('username')) {
            redirect('Auth');
        } else {
            if ($this->session->userdata('id_role') != 1) {
                redirect('user/blocked');
            }
        };
    }

    public function index()
    {
        $data['user'] = $this->user->getUser($this->session->userdata('username'));
        $this->load->view('template/header');
        $this->load->view('admin/list', $data);
        $this->load->view('template/footer');
    }

    public function request()
    {
        $data['user'] = $this->user->getUser($this->session->userdata('username'));
        $data['request'] = $this->admin->request();
        $this->load->view('template/header');
        $this->load->view('admin/request', $data);
        $this->load->view('template/footer');
    }

    public function getPhoto()
    {
        $id = $this->input->post('id');
        $data['request'] = $this->admin->requestbyId($id);

        echo json_encode($data);
    }

    public function reject()
    {
        $id = $this->input->post('id');
        $this->db->set('is_active', 2);
        $this->db->where('id_family', $id);
        $query = $this->db->update('family');

        echo json_encode($query);
    }

    public function approve()
    {
        $id = $this->input->post('id');
        $this->db->set('is_active', 1);
        $this->db->where('id_family', $id);
        $query = $this->db->update('family');

        echo json_encode($query);
    }
}
