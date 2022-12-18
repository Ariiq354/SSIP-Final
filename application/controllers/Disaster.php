<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Disaster extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Disaster_model', 'disaster');
    }
    public function index()
    {
        $this->load->view('viewer/disaster_dashboard');
    }
}
