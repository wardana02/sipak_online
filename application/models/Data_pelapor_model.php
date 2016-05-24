<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Data_pelapor_model extends CI_Model
{

    public $table = 'data_pelapor';
    public $id = 'id_pelapor';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    function getField()
    {
        return $this->db->list_fields($this->table);
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    function get_by_al($id)
    {
        $this->db->where('id_akta', $id);
        return $this->db->get($this->table)->row();
    }
    
      // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file Data_pelapor_model.php */
/* Location: ./application/models/Data_pelapor_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-03-21 01:14:14 */
/* http://harviacode.com */