<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Data_bercerai_model extends CI_Model
{

    public $table = 'data_bercerai';
    public $id = 'id_bercerai';
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
	
	// get field name
	function getField()
    {
        return $this->db->list_fields($this->table);
    }
    
   function get_by_al($id,$status)
    {
        $this->db->where('id_ac', $id);
        $this->db->where('status_mempelai', $status);
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

/* End of file Data_bercerai_model.php */
/* Location: ./application/models/Data_bercerai_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-04-21 19:49:13 */
/* http://harviacode.com */