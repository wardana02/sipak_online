<?php
 
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
 
class Data_model extends CI_Model {

 
    function __construct() {
        parent::__construct();
    }

    function print_element($name){
        $query = $this->db->query("SELECT * FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name='$name' AND TABLE_SCHEMA='db_sipcapil'");
        return $query->result();
    }

    function hapus($table,$id){
        $query = $this->db->query("SELECT * FROM akta_kelahiran WHERE id_al NOT IN (SELECT id_akta FROM approval)");
        return $query->result();
    }
}