<?php  if (!defined('BASEPATH'))    exit('No direct script access allowed');

	class Home_model extends CI_Model{

			private $table='informasi';


		function __construct() {
		        parent::__construct();  // Call the Model constructor 
				//loader::database();    // Connect to current database setting.
		    }

		function get_tampil_data(){
			$query = $this->db->query("SELECT * FROM informasi WHERE informasi.status='aktif'");
				return $query->result();

		}

		function get_all_data(){
			$query = $this->db->query("SELECT * FROM informasi ORDER BY inserted DESC");
				return $query->result();

		}


		function simpan($gambar){
				
				$data_insert = array(
							'judul' 	=> $this->input->post('judul'),
							'isi' 		=> $this->input->post('isi'),
							'gambar' 	=> $gambar,
							'inserted' 	=> date('Y-m-d'),
							'status' 	=> 'nonaktif'
				);
				
				
				$simpan = $this->db->insert($this->table,$data_insert);
				if($this->db->affected_rows() > 0) {
		            return TRUE;
		        }
		        else{
		            return FALSE;
		        }
		
		}

		function edit($id){
			
			$q="SELECT * FROM $this->table WHERE id='$id'";
				$query=$this->db->query($q);
				return $query->row();
		}
		
		function simpan_edit($id,$judul,$isi,$gambar,$insert){
			$data_update = array(
				'judul'		=> $judul,
				'isi'		=> $isi,
				'gambar'	=> $gambar,
				'insert' 	=> $insert
			);
			$this->db->where('id',$id);
			$this->db->update($this->table,$data_update);
			if($this->db->affected_rows() > 0) {
		            return TRUE;
		        }
		        else{
		            return FALSE;
		        }
		}

		function setTampil($id){
			$data_update = array(
				'status'		=> "aktif"
			);
			$this->db->where('id',$id);
			$this->db->update($this->table,$data_update);
			if($this->db->affected_rows() > 0) {
		            return TRUE;
		        }
		        else{
		            return FALSE;
		        }
		}

		function setTidak($id){
			$data_update = array(
				'status'		=> "nonaktif"
			);
			$this->db->where('id',$id);
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
			$query = $this->db->query("DELETE FROM informasi WHERE id='$id'");
			if($this->db->affected_rows() > 0) {
		            return TRUE;
		        }
		        else{
		            return FALSE;
		        }
		}

	}