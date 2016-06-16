<?php
	class Mail_model extends CI_Model {

		public $table = 'inbox';
	    public $id = 'ID';
	    public $order = 'DESC';

		 function __construct(){
			parent::__construct();

		 }

		 // get data by id
		    function get_by_id($id)
		    {
		        $this->db->where($this->id, $id);
		        return $this->db->get($this->table)->row();
		    }
		 

		function get_all_data(){
			$query = $this->db->query("SELECT *, inbox.ID as aid FROM inbox LEFT JOIN pbk ON inbox.SenderNumber=pbk.Number WHERE TextDecoded LIKE 'LAPOR_%' ORDER BY ReceivingDateTime DESC");
				return $query->result();

		}

		function get_tracking_data(){
			$query = $this->db->query("SELECT *, inbox.ID as aid FROM inbox LEFT JOIN pbk ON inbox.SenderNumber=pbk.Number WHERE TextDecoded LIKE 'STATUS_%'");
				return $query->result();

		}

		 function tambah($data){
		 	 $this->db->insert('outbox', $data);
		}


		// delete data
	    function delete($id)
	    {
	        $this->db->where($this->id, $id);
	        $this->db->delete($this->table);
	    }

	}

?>