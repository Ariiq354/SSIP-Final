<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Disaster_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function victim($id)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id_disaster', $id);
        $this->db->order_by('name', 'desc');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function disaster($idDisaster)
    {
        $this->db->select('*, disaster.name as disasname, region.name as reg');
        $this->db->from('disaster');
        $this->db->join('region', 'disaster.id_region = region.id_region');
        $this->db->where('id_disaster', $idDisaster);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function victcount($idDisaster, $idStatus)
    {
        $sql = "SELECT COUNT(status) as count FROM user WHERE id_disaster = '" . $idDisaster . "' and status = '" . $idStatus . "'";
        $query = $this->db->query($sql);
        return $query->row_array();
    }
    public function addreport($data, $table)
    {
        $this->db->insert($table, $data);
    }
}
