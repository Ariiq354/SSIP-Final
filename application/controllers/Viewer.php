<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Viewer extends CI_Controller
{

    public function index()
    {
        $this->load->view('viewer/header');
        $this->load->view('viewer/viewer');
        $this->load->view('viewer/footer');
    }
}
