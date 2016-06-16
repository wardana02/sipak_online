<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_model extends CI_Model
{

    public $table = 'user';
    public $id = 'id_user';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    function get_num2(){
        $query = $this->db->query("SELECT (SELECT COUNT(no_hp) from user where previlage='RW') as j_rw, 
        (SELECT COUNT(no_hp) from user where previlage='KELURAHAN') as j_kel");
        return $query->row();
    }

    // get all
    function get_num($who,$limit)
    {
        $this->db->where('previlage', $who);
        $this->db->limit($limit);
        $this->db->select('no_hp as number');
        return $this->db->get($this->table)->result();
    }

    // get all
    function get_all()
    {
        $this->db->order_by('previlage', 'ASC');
        return $this->db->get($this->table)->result();
    }

    // get all
    function get_all_limit($n)
    {
        $this->db->order_by('last_log', 'DESC');
        $this->db->limit($n);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    // get data by username
    function get_by_uname($uname)
    {
        $this->db->where('username', $uname);
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