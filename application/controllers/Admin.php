<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'user');
        $this->load->model('Dashboard_model', 'dashboard');
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
}
