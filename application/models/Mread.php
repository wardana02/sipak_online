<?php    
class Mread extends CI_Model{

	function __construct(){
			parent::__construct();

		 }
		 
    function export_kontak(){
        $query = $this->db->query("SELECT * from dps");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function hitung_jadi($table,$id){
        $query = $this->db->query("SELECT * FROM $table WHERE (TO_DAYS(now())- TO_DAYS(tgl_registrasi))> 7 AND $id NOT IN (SELECT id_akta FROM approval)");
        return $query->result();
    }

    function hitung($table,$id){
        $query = $this->db->query("SELECT * FROM $table WHERE $id NOT IN (SELECT id_akta FROM approval)");
        return $query->result();
    }

    function hapus($table,$id,$key){
        $query = $this->db->query("DELETE FROM $table WHERE $id='$key'");
    }

    function hapus_lengkap_al($id){
        $this->db->query("DELETE FROM berkas_lahir WHERE id_al='$id';");
        $this->db->query("DELETE FROM data_bayi WHERE id_al='$id';");
        $this->db->query("DELETE FROM data_pelapor WHERE id_akta='$id';");
        $this->db->query("DELETE FROM data_saksi WHERE id_akta='$id';");
        $this->db->query("DELETE FROM ortu_bayi where id_bayi=(SELECT id_bayi from data_bayi where id_al='$id');");
    }

    function hapus_lengkap_am($id){
        $this->db->query("DELETE FROM berkas_kematian WHERE id_am='$id';");
        $this->db->query("DELETE FROM ortu_jenazah where id_jenazah=(SELECT id_jenazah from data_jenazah where id_am='$id');");
        $this->db->query("DELETE FROM data_jenazah WHERE id_am='$id';");
        $this->db->query("DELETE FROM data_pelapor WHERE id_akta='$id';");
        $this->db->query("DELETE FROM data_saksi WHERE id_akta='$id';");      
    }

    function hapus_lengkap_ap($id){
        $this->db->query("DELETE FROM berkas_perkawinan WHERE id_ap='$id';");
        $this->db->query("DELETE FROM ortu_mempelai where id_mempelai=(SELECT id_mempelai from data_mempelai where id_ap='$id' AND status_mempelai='SUAMI');");
        $this->db->query("DELETE FROM ortu_mempelai where id_mempelai IN (SELECT id_mempelai from data_mempelai where id_ap='$id' AND status_mempelai='ISTRI');");
        $this->db->query("DELETE FROM data_mempelai WHERE id_ap='$id';");
        $this->db->query("DELETE FROM data_anak WHERE id_dataper IN (SELECT id_dataper from data_perkawinan where id_ap='$id');");
        $this->db->query("DELETE FROM data_perkawinan WHERE id_ap='$id';");
        $this->db->query("DELETE FROM data_saksi WHERE id_akta='$id';");
      
    }

    function hapus_lengkap_ac($id){
        $this->db->query("DELETE FROM berkas_cerai WHERE id_ac='$id';");
        $this->db->query("DELETE FROM data_perceraian WHERE id_ac='$id';");
        $this->db->query("DELETE FROM data_bercerai WHERE id_ac='$id';");
    }
}