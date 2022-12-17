<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function province()
    {
        $this->db->select('*');
        $this->db->from('region');
        $this->db->order_by('name', 'asc');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function disaster($id)
    {
        $this->db->select('*');
        $this->db->from('disaster');
        $this->db->where('id_region', $id);
        $this->db->order_by('date', 'desc');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function recentDisaster()
    {
        $this->db->select('a.name as name, date, casualty, b.name as reg');
        $this->db->from('disaster a');
        $this->db->join('region b', 'a.id_region = b.id_region');
        $this->db->order_by('date', 'desc');
        $this->db->limit(3);
        $query = $this->db->get();
        return $query->result_array();
    }
}
