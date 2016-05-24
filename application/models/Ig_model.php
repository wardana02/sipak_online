<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ig_model extends CI_Model
{


    function __construct()
    {
        parent::__construct();
    }

    function jenkel_bayi($B){
            $query = $this->db->query("SELECT (SELECT COUNT(id_bayi) FROM data_bayi WHERE jk='Laki-Laki' $B) as JL ,(SELECT COUNT(id_bayi) FROM data_bayi WHERE jk='Perempuan' $B) as JP");
                return $query->row();

        }

    function jenkel_bayi_will($wil,$B){
            $query = $this->db->query("SELECT (
                        SELECT COUNT(id_bayi) FROM data_bayi JOIN akta_kelahiran ON akta_kelahiran.id_al=data_bayi.id_al JOIN dps ON akta_kelahiran.nik_pengaju=dps.nik WHERE data_bayi.jk='Laki-Laki' $wil $B) as JL ,(
                        SELECT COUNT(id_bayi) FROM data_bayi JOIN akta_kelahiran ON akta_kelahiran.id_al=data_bayi.id_al JOIN dps ON akta_kelahiran.nik_pengaju=dps.nik WHERE data_bayi.jk='Perempuan' $wil $B)as JP ");
                return $query->row();

        }

    function jenkel_jenazah($B){
            $query = $this->db->query("SELECT (SELECT COUNT(id_jenazah) FROM data_jenazah WHERE jk='LAKI-LAKI' $B) as JL ,(SELECT COUNT(id_jenazah) FROM data_jenazah WHERE jk='PEREMPUAN' $B) as JP");
                return $query->row();

        }

    function jenkel_jenazah_will($wil,$B){
            $query = $this->db->query("SELECT (
                        SELECT COUNT(id_jenazah) FROM data_jenazah JOIN akta_kematian ON akta_kematian.id_am=data_jenazah.id_am JOIN dps ON akta_kematian.nik_pengaju=dps.nik WHERE data_jenazah.jk='LAKI-LAKI' $wil $B) as JL ,(
                        SELECT COUNT(id_jenazah) FROM data_jenazah JOIN akta_kematian ON akta_kematian.id_am=data_jenazah.id_am JOIN dps ON akta_kematian.nik_pengaju=dps.nik WHERE data_jenazah.jk='PEREMPUAN' $wil $B)as JP ");
                return $query->row();

        }

    function jenkel_mempelai($B){
            $query = $this->db->query("SELECT (
                SELECT COUNT(data_mempelai.id_ap) FROM data_mempelai JOIN data_perkawinan ON data_mempelai.id_ap=data_perkawinan.id_ap WHERE status_mempelai='SUAMI' $B) as JL ,(
                SELECT COUNT(data_mempelai.id_ap) FROM data_mempelai JOIN data_perkawinan ON data_mempelai.id_ap=data_perkawinan.id_ap WHERE status_mempelai='ISTRI' $B) as JP");
                return $query->row();

        }

    function jenkel_mempelai_will($wil,$B){
            $query = $this->db->query("SELECT (
                        SELECT COUNT(data_mempelai.id_ap) FROM data_mempelai JOIN dps ON dps.nik=data_mempelai.nik JOIN data_perkawinan ON data_mempelai.id_ap=data_perkawinan.id_ap WHERE data_mempelai.status_mempelai='SUAMI' $wil $B)  as JL ,(
                        SELECT COUNT(data_mempelai.id_ap) FROM data_mempelai JOIN dps ON dps.nik=data_mempelai.nik JOIN data_perkawinan ON data_mempelai.id_ap=data_perkawinan.id_ap WHERE data_mempelai.status_mempelai='ISTRI' $wil $B) as JP");
                return $query->row();

        }

    function jenkel_bercerai($B){
            $query = $this->db->query("SELECT (
                SELECT COUNT(data_bercerai.id_ac) FROM data_bercerai JOIN data_perceraian ON data_bercerai.id_ac=data_perceraian.id_ac WHERE status_mempelai='SUAMI' $B) as JL ,(
                SELECT COUNT(data_bercerai.id_ac) FROM data_bercerai JOIN data_perceraian ON data_bercerai.id_ac=data_perceraian.id_ac WHERE status_mempelai='ISTRI' $B) as JP");
                return $query->row();

        }

    function jenkel_bercerai_will($wil,$B){
            $query = $this->db->query("SELECT (
                        SELECT COUNT(data_bercerai.id_ac) FROM data_bercerai JOIN dps ON dps.nik=data_bercerai.nik JOIN data_perceraian ON data_bercerai.id_ac=data_perceraian.id_ac  WHERE data_bercerai.status_mempelai='SUAMI' $wil $B)  as JL ,(
                        SELECT COUNT(data_bercerai.id_ac) FROM data_bercerai JOIN dps ON dps.nik=data_bercerai.nik JOIN data_perceraian ON data_bercerai.id_ac=data_perceraian.id_ac  WHERE data_bercerai.status_mempelai='ISTRI' $wil $B) as JP");
                return $query->row();

        }

    function jk_bulan($jk){
        $query = $this->db->query("
        SELECT (
            SELECT COUNT(nik) FROM dps WHERE jk='$jk' AND tgl_lahir LIKE '____-01-%' ) as JAN, (
            SELECT COUNT(nik) FROM dps WHERE jk='$jk' AND tgl_lahir LIKE '____-02-%' ) as FEB , (
            SELECT COUNT(nik) FROM dps WHERE jk='$jk' AND tgl_lahir LIKE '____-03-%' ) as MAR , (
            SELECT COUNT(nik) FROM dps WHERE jk='$jk' AND tgl_lahir LIKE '____-04-%' ) as APR , (
            SELECT COUNT(nik) FROM dps WHERE jk='$jk' AND tgl_lahir LIKE '____-05-%' ) as MEI , (
            SELECT COUNT(nik) FROM dps WHERE jk='$jk' AND tgl_lahir LIKE '____-06-%' ) as JUN , (
            SELECT COUNT(nik) FROM dps WHERE jk='$jk' AND tgl_lahir LIKE '____-07-%' ) as JUL , (
            SELECT COUNT(nik) FROM dps WHERE jk='$jk' AND tgl_lahir LIKE '____-08-%' ) as AUG , (
            SELECT COUNT(nik) FROM dps WHERE jk='$jk' AND tgl_lahir LIKE '____-09-%' ) as SEP , (
            SELECT COUNT(nik) FROM dps WHERE jk='$jk' AND tgl_lahir LIKE '____-10-%' ) as OKT , (
            SELECT COUNT(nik) FROM dps WHERE jk='$jk' AND tgl_lahir LIKE '____-11-%' ) as NOV , (
            SELECT COUNT(nik) FROM dps WHERE jk='$jk' AND tgl_lahir LIKE '____-12-%' ) as DES 
            ");
            return $query->row();


    }

    function al_by_kecamatan($between){
            $query = $this->db->query("
                SELECT (
                    SELECT COUNT(id_al) FROM akta_kelahiran JOIN dps ON akta_kelahiran.nik_pengaju=dps.nik WHERE ps_kecamatan='BANJARSARI' $between) as BJ,(
                    SELECT COUNT(id_al) FROM akta_kelahiran JOIN dps ON akta_kelahiran.nik_pengaju=dps.nik WHERE ps_kecamatan='JEBRES' $between) as JB,(
                    SELECT COUNT(id_al) FROM akta_kelahiran JOIN dps ON akta_kelahiran.nik_pengaju=dps.nik WHERE ps_kecamatan='LAWEYAN') as LW,(
                    SELECT COUNT(id_al) FROM akta_kelahiran JOIN dps ON akta_kelahiran.nik_pengaju=dps.nik WHERE ps_kecamatan='PASAR KLIWON' $between) as PS,(
                    SELECT COUNT(id_al) FROM akta_kelahiran JOIN dps ON akta_kelahiran.nik_pengaju=dps.nik WHERE ps_kecamatan='SERENGAN' $between) as SR
                ");
                return $query->row();

        }

    function am_by_kecamatan($between){
            $query = $this->db->query("
                SELECT (
                    SELECT COUNT(data_jenazah.id_am) FROM data_jenazah JOIN akta_kematian ON data_jenazah.id_am=akta_kematian.id_am JOIN dps ON data_jenazah.nik=dps.nik WHERE ps_kecamatan='BANJARSARI' $between) as BJ,(
                    SELECT COUNT(data_jenazah.id_am) FROM data_jenazah JOIN akta_kematian ON data_jenazah.id_am=akta_kematian.id_am JOIN dps ON data_jenazah.nik=dps.nik WHERE ps_kecamatan='JEBRES' $between) as JB,(
                    SELECT COUNT(data_jenazah.id_am) FROM data_jenazah JOIN akta_kematian ON data_jenazah.id_am=akta_kematian.id_am JOIN dps ON data_jenazah.nik=dps.nik WHERE ps_kecamatan='LAWEYAN' $between) as LW,(
                    SELECT COUNT(data_jenazah.id_am) FROM data_jenazah JOIN akta_kematian ON data_jenazah.id_am=akta_kematian.id_am JOIN dps ON data_jenazah.nik=dps.nik WHERE ps_kecamatan='PASAR KLIWON' $between) as PS,(
                    SELECT COUNT(data_jenazah.id_am) FROM data_jenazah JOIN akta_kematian ON data_jenazah.id_am=akta_kematian.id_am JOIN dps ON data_jenazah.nik=dps.nik WHERE ps_kecamatan='SERENGAN' $between) as SR
                ");
                return $query->row();

        }

    function ap_by_kecamatan($between){
            $query = $this->db->query("
                SELECT (
                    SELECT COUNT(akta_perkawinan.id_ap) FROM data_mempelai JOIN akta_perkawinan ON data_mempelai.id_ap=akta_perkawinan.id_ap WHERE a_kecamatan='BANJARSARI' $between) as BJ,(
                    SELECT COUNT(akta_perkawinan.id_ap) FROM data_mempelai JOIN akta_perkawinan ON data_mempelai.id_ap=akta_perkawinan.id_ap WHERE a_kecamatan='JEBRES' $between) as JB,(
                    SELECT COUNT(akta_perkawinan.id_ap) FROM data_mempelai JOIN akta_perkawinan ON data_mempelai.id_ap=akta_perkawinan.id_ap WHERE a_kecamatan='LAWEYAN' $between) as LW,(
                    SELECT COUNT(akta_perkawinan.id_ap) FROM data_mempelai JOIN akta_perkawinan ON data_mempelai.id_ap=akta_perkawinan.id_ap WHERE a_kecamatan='PASAR KLIWON' $between) as PS,(
                    SELECT COUNT(akta_perkawinan.id_ap) FROM data_mempelai JOIN akta_perkawinan ON data_mempelai.id_ap=akta_perkawinan.id_ap WHERE a_kecamatan='SERENGAN' $between) as SR
                ");
                return $query->row();

        }

    function ac_by_kecamatan($between){
            $query = $this->db->query("
                SELECT (
                    SELECT COUNT(akta_perceraian.id_ac) FROM data_bercerai JOIN akta_perceraian ON data_bercerai.id_ac=akta_perceraian.id_ac WHERE a_kecamatan='BANJARSARI' $between) as BJ,(
                    SELECT COUNT(akta_perceraian.id_ac) FROM data_bercerai JOIN akta_perceraian ON data_bercerai.id_ac=akta_perceraian.id_ac WHERE a_kecamatan='JEBRES' $between) as JB,(
                    SELECT COUNT(akta_perceraian.id_ac) FROM data_bercerai JOIN akta_perceraian ON data_bercerai.id_ac=akta_perceraian.id_ac WHERE a_kecamatan='LAWEYAN' $between) as LW,(
                    SELECT COUNT(akta_perceraian.id_ac) FROM data_bercerai JOIN akta_perceraian ON data_bercerai.id_ac=akta_perceraian.id_ac WHERE a_kecamatan='PASAR KLIWON' $between) as PS,(
                    SELECT COUNT(akta_perceraian.id_ac) FROM data_bercerai JOIN akta_perceraian ON data_bercerai.id_ac=akta_perceraian.id_ac WHERE a_kecamatan='SERENGAN' $between) as SR
                ");
                return $query->row();

        }

   

}