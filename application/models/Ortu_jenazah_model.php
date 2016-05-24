<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ortu_jenazah_model extends CI_Model
{

    public $table = 'ortu_jenazah';
    public $id = 'id_ortu';
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

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    function get_by_jenazah($id,$st)
    {
        $this->db->where('id_jenazah', $id);
        $this->db->where('status', $st);
        return $this->db->get($this->table)->row();
    }

    function getField()
    {
        return $this->db->list_fields($this->table);
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