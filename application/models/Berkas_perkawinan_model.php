<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Berkas_perkawinan_model extends CI_Model
{

    public $table = 'berkas_perkawinan';
    public $id = 'id_berkas';
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

    // get data by id
    function get_by_al($id)
    {
        $this->db->where('id_ap', $id);
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

/* End of file Berkas_perkawinan_model.php */
/* Location: ./application/models/Berkas_perkawinan_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-04-13 20:47:41 */
/* http://harviacode.com */