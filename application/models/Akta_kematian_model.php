<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Akta_kematian_model extends CI_Model
{

    public $table = 'akta_kematian';
    public $id = 'id_am';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    function get_all_beetwen($awal,$akhir){
        $qw = "SELECT * FROM akta_kematian WHERE tgl_registrasi BETWEEN '$awal' AND '$akhir' ";
        $query = $this->db->query($qw);
                return $query->result();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    function get_top_4am($wil)
    {
        $qw = "SELECT * FROM approval 
        JOIN akta_kematian ON approval.id_akta=akta_kematian.id_AM
        JOIN dps ON akta_kematian.nik_pengaju=dps.nik
        $wil ORDER BY selesai DESC LIMIT 4 ";
        $query = $this->db->query($qw);
                return $query->result();
    }
    
    function get_all_will($wil,$status)
    {
        $qw = "SELECT * FROM approval 
        JOIN akta_kematian ON approval.id_akta=akta_kematian.id_AM
        JOIN dps ON akta_kematian.nik_pengaju=dps.nik
        $wil AND approval.by_".$status." IS NULL OR approval.by_".$status."='revisi' ORDER BY selesai";
        $query = $this->db->query($qw);
                return $query->result();
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

    function get_by_am($id)
    {
        $this->db->where('id_am', $id);
        return $this->db->get($this->table)->row();
    }

    // get data by trisula
    function check($a, $b, $c)
    {
        $q = "SELECT * FROM akta_kematian 
            WHERE BINARY no_registrasi = '$a' AND 
            BINARY kode_unik = '$c' AND 
            tgl_registrasi LIKE '$b%'"; //echo "$q";exit();
        $query = $this->db->query($q);
                return $query->row();
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

/* End of file Akta_kematian_model.php */
/* Location: ./application/models/Akta_kematian_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-04-03 18:35:56 */
/* http://harviacode.com */