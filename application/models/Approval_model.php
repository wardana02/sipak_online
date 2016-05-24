<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Approval_model extends CI_Model
{

    public $table = 'approval';
    public $id = 'id_approval';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    //cek transaksi atau tidak
    function cek_on_trans($id){
        $a = "SELECT on_trans FROM approval WHERE id_akta='$id'";
        $qw = $this->db->query($a);
        return $qw->row();
    }
    //cek transaksi atau tidak
    function make_on_trans($id,$v){
        $a = "UPDATE approval SET on_trans='$v' WHERE id_akta='$id'";
        $qw = $this->db->query($a);
    }
    //normal
    function make_ready($id){
        $a = "UPDATE approval SET on_trans=NULL WHERE on_trans='$id'";
        $qw = $this->db->query($a);
    }
    //cek get progres untuk cetak form
    function get_progres($id){
        $a = "SELECT progres,no_regis FROM approval WHERE id_akta='$id'";
        $qw = $this->db->query($a);
        return $qw->row();
    }

    function get_app_list($wil)
    {
        $qw = "
            SELECT *, data_bayi.nama as nm, ortu_bayi.nama as ibu FROM akta_kelahiran 
            JOIN data_bayi ON akta_kelahiran.id_AL=data_bayi.id_al
            JOIN ortu_bayi ON data_bayi.id_bayi=ortu_bayi.id_bayi
            JOIN approval ON akta_kelahiran.id_AL=approval.id_akta
            JOIN dps ON akta_kelahiran.nik_pengaju=dps.nik
            WHERE ortu_bayi.status='IBU' $wil
            ";
        $query = $this->db->query($qw);
                return $query->result();
    }

    function get_am_list($wil)
    {
        $qw = "
            SELECT *, data_jenazah.nama as nm, ortu_jenazah.nama as ibu FROM akta_kematian 
            JOIN data_jenazah ON akta_kematian.id_AM=data_jenazah.id_am
            JOIN ortu_jenazah ON data_jenazah.id_jenazah=ortu_jenazah.id_jenazah
            JOIN approval ON akta_kematian.id_AM=approval.id_akta
            JOIN dps ON akta_kematian.nik_pengaju=dps.nik
            WHERE ortu_jenazah.status='IBU' $wil
            ";
        $query = $this->db->query($qw);
                return $query->result();
    }

    function get_ap_list($wil)
    {
        $qw = "
            SELECT * ,
            (SELECT data_mempelai.nama
                        FROM akta_perkawinan
                        JOIN data_mempelai ON akta_perkawinan.id_ap=data_mempelai.id_ap
                        JOIN approval ON akta_perkawinan.id_ap=approval.id_akta
                        WHERE data_mempelai.status_mempelai='SUAMI') as nm,
            (SELECT data_mempelai.nama
                        FROM akta_perkawinan
                        JOIN data_mempelai ON akta_perkawinan.id_ap=data_mempelai.id_ap
                        JOIN approval ON akta_perkawinan.id_ap=approval.id_akta
                        WHERE data_mempelai.status_mempelai='ISTRI') as ibu


            FROM approval 
            JOIN akta_perkawinan ON akta_perkawinan.id_ap=approval.id_akta
            JOIN dps ON akta_perkawinan.nik_pengaju=dps.nik

            $wil
            ";
        $query = $this->db->query($qw);
                return $query->result();
    }

    function get_ac_list($wil)
    {
        $qw = "
            SELECT * ,
            (SELECT data_bercerai.nama
                        FROM akta_perceraian
                        JOIN data_bercerai ON akta_perceraian.id_ac=data_bercerai.id_ac
                        JOIN approval ON akta_perceraian.id_ac=approval.id_akta
                        WHERE data_bercerai.status_mempelai='SUAMI') as nm,
            (SELECT data_bercerai.nama
                        FROM akta_perceraian
                        JOIN data_bercerai ON akta_perceraian.id_ac=data_bercerai.id_ac
                        JOIN approval ON akta_perceraian.id_ac=approval.id_akta
                        WHERE data_bercerai.status_mempelai='ISTRI') as ibu


            FROM approval 
            JOIN akta_perceraian ON akta_perceraian.id_ac=approval.id_akta
            JOIN dps ON akta_perceraian.nik_pengaju=dps.nik

            $wil
            ";
        $query = $this->db->query($qw);
                return $query->result();
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

    // get data by id
    function get_by_al($id)
    {
        $this->db->where('id_akta', $id);
        return $this->db->get($this->table)->row();
    }

    function get_join($id,$table,$id_table)
    {
        $qw = "SELECT * FROM approval JOIN $table ON approval.id_akta=$table.$id_table
        WHERE approval.id_akta='$id'";
        $query = $this->db->query($qw);
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
        $this->db->where('id_akta', $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file Approval_model.php */
/* Location: ./application/models/Approval_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-03-25 20:09:38 */
/* http://harviacode.com */