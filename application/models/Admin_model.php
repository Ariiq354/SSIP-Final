<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function request()
    {
        $this->db->select('*, region.name as reg');
        $this->db->from('family');
        $this->db->join('region', 'region.id_region = family.id_region');
        $this->db->where('is_active', 0);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function requestbyId($id)
    {
        $this->db->select('*, region.name as reg');
        $this->db->from('family');
        $this->db->join('region', 'region.id_region = family.id_region');
        $this->db->where('is_active', 0);
        $this->db->where('id_family', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function report()
    {
        $this->db->select('*, disaster.name as dis');
        $this->db->from('report');
        $this->db->join('disaster', 'disaster.id_disaster = report.id_disaster');
        $this->db->where('is_active', 0);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function reportbyId($id)
    {
        $this->db->select('*, disaster.name as dis');
        $this->db->from('report');
        $this->db->join('disaster', 'disaster.id_disaster = report.id_disaster');
        $this->db->where('id_report', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
}
