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
}
