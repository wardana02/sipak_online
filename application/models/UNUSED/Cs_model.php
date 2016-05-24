<?php  if (!defined('BASEPATH'))    exit('No direct script access allowed');

	class Cs_model extends CI_Model{

			private $table='kritik_saran';


		function __construct() {
		        parent::__construct();  // Call the Model constructor 
				//loader::database();    // Connect to current database setting.
		    }


		function get_all_data(){
			$query = $this->db->query("SELECT * FROM $this->table ORDER BY tanggal DESC");
				return $query->result();

		}


		function simpan(){
				
				$data_insert = array(
							'identitas' => $this->input->post('nama'),
							'email' 	=> $this->input->post('email'),
							'isi' 		=>  $this->input->post('isi'),
							'tanggal' 	=> date('Y-m-d H:i:s'),
							'terbaca'	=> "belum"
				);
				
				
				$simpan = $this->db->insert($this->table,$data_insert);
				if($this->db->affected_rows() > 0) {
		            return TRUE;
		        }
		        else{
		            return FALSE;
		        }
		
		}


		function tandai($id){
			$data_update = array(
				'terbaca'		=> "terbaca"
			);
			$this->db->where('id_ks',$id);
			$this->db->update($this->table,$data_update);
			if($this->db->affected_rows() > 0) {
		            return TRUE;
		        }
		        else{
		            return FALSE;
		        }
		}

		
		function hapus($id){
			$date = date('d/m/y h:i:s');
			$query = $this->db->query("DELETE FROM $this->table WHERE id_ks='$id'");
			if($this->db->affected_rows() > 0) {
		            return TRUE;
		        }
		        else{
		            return FALSE;
		        }
		}

	}