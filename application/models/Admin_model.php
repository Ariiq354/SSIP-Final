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
        $sql = "SELECT c.id_report, c.id_disaster, c.subject, c.photo, c.description, c.nik, c.is_active, d.reg, d.dis, d.date, d.casualty FROM `report` as c JOIN (SELECT a.name as reg, b.name as dis, b.id_disaster, b.date, b.casualty FROM `region` as a JOIN `disaster` as b ON a.id_region = b.id_region) as d WHERE c.id_disaster = d.id_disaster";
        $query = $this->db->query($sql);
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
