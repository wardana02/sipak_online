<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Mail extends MY_Controller {


	public function __construct(){
			parent::__construct();
			$this->load->model('Mail_model','m_mail',TRUE);
			$this->load->model('Outbox_model','outbox',TRUE);
			$this->load->model('Sentitems_model','senditem',TRUE);
            $this->load->model('Pbk_model','pbk',TRUE);
            $this->load->model('User_model','user',TRUE);

			$this->load->helper('dateindo');
			$status = $this->session->userdata('status');
			if($status!="ADMIN"){
                redirect('index.php/error404');
            }


		}

	public function index()
	{

		$data = array(
			'modal_title'=> "Baca Pesan Masuk",
            'modal_read'=> base_url('mail/read_inbox'),
            'modal_create'=> base_url('mail/create_message'),
            );

			$data['nama_user']=$this->session->userdata('nama_user');
			$data['status']=$this->session->userdata('status');
			$data['d']='active';$data['d1']='active';

		$data['conten'] = "backend/admin/Pesan/index";
		$data['data'] = $this->m_mail->get_all_data();
		$this->load->view('backend/dashboard/index', $data);
	}

	public function smst()
	{
		$data = array(
			'modal_title'=> "Baca Pesan Masuk",
            'modal_read'=> base_url('mail/read_inbox'),
            'modal_create'=> base_url('mail/create_message'),
            );
		
			$data['nama_user']=$this->session->userdata('nama_user');
			$data['status']=$this->session->userdata('status');
			$data['d']='active';$data['d3']='active';

		$data['conten'] = "backend/admin/Pesan/index";
		$data['data'] = $this->m_mail->get_tracking_data();
		$this->load->view('backend/dashboard/index', $data);
	}

	public function terkirim()
	{
		$data = array(
			'modal_title'=> "Baca Pesan Terkirim",
            'modal_read'=> base_url('mail/read_senditem'),
            );

			$data['nama_user']=$this->session->userdata('nama_user');
			$data['status']=$this->session->userdata('status');
			$data['d']='active';$data['d4']='active';

		$data['conten'] = "backend/admin/Pesan/senditem";
		$data['data'] = $this->senditem->get_all();
		$this->load->view('backend/dashboard/index', $data);
	}

	public function pending()
	{
		$data = array(
			'modal_title'=> "Baca Pesan",
            'head'  => $head,
            'nama'  => $na,
            'nama2'  => $nc,
            'modal_read'=> base_url('mail/read_outbox'),
            );

			$data['nama_user']=$this->session->userdata('nama_user');
			$data['status']=$this->session->userdata('status');
			$data['d']='active';$data['d5']='active';

		$data['conten'] = "backend/admin/Pesan/pending";
		$data['data'] = $this->outbox->get_all();
		$this->load->view('backend/dashboard/index', $data);
	}

	public function create_message()
	{
		$nomor = $this->input->post('id');
			$data = array(
            'nama_user' => $this->session->userdata('nama_user'),
            'status'    => $this->session->userdata('status'),
            'title' => 'Tambah Data Kontak SMS Gateway Capil Online',
            'head' => 'Data Kontak Sistem SMS Gateway',
            'button' => 'Create',
            'action' => site_url('mail/send'),
	    'ID' => set_value('ID'),
	    'GroupID' => set_value('GroupID'),
	    'Name' => set_value('Name'),
	    'Number' => set_value('Number',$nomor),
	);
         $this->load->view('backend/admin/Pesan/create_message', $data);
	}

    public function broadcast(){

            $q = $this->user->get_num2();
            $a = $this->pbk->get_num();
            $data['nama_user']=$this->session->userdata('nama_user');
            $data['status']=$this->session->userdata('status');
            $data['d']='active';$data['d6']='active';
            $data['a']= $a->j_mas;
            $data['b']= $q->j_rw;
            $data['c']= $q->j_kel;

        $data['conten'] = "backend/admin/Pesan/baru";
        $this->load->view('backend/dashboard/index', $data);



    }


    public function do_broadcast(){

        $kepada = $this->input->post('kepada');
        $TextDecoded = $this->input->post('TextDecoded');
        $n = $this->input->post('banyak');
        if ($kepada=='0') {
            $DestinationNumber = $this->pbk->get_rand($n);
        }elseif ($kepada=='1') {
            $DestinationNumber = $this->user->get_num("RW",$n);
        }elseif ($kepada=='2') {
            $DestinationNumber = $this->user->get_num("KELURAHAN",$n);
        }     

        foreach ($DestinationNumber as $key) {
            $data = array(
                'DestinationNumber' => $key->number,
                'TextDecoded'       => $TextDecoded,
            );
            $this->m_mail->tambah($data); 
        }

        $this->session->set_flashdata('message', "
            <div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                <h4><i class='glyphicon glyphicon-ok'></i> Berhasil!</h4>
                    Data Pesan Masal Dalam Proses Mengirim !
            </div>
            ");

        redirect('mail/pending');



    }

	public function send(){
		$data = array(
			'DestinationNumber' => $this->input->post('DestinationNumber'),
			'TextDecoded' 		=> $this->input->post('TextDecoded')
			);
		//print_r($data);exit();

		$this->m_mail->tambah($data); 
		redirect('mail/pending'); 
	}

	public function delete_inbox($id) 
    {
        $row = $this->m_mail->get_by_id($id);

        if ($row) {
            $this->m_mail->delete($id);
            $this->session->set_flashdata('message', "
            <div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                <h4><i class='glyphicon glyphicon-ok'></i> Berhasil!</h4>
            		Data Pesan Berhasil Dihapus !
            </div>
             ");
            redirect(site_url('mail'));
        } else {
            $this->session->set_flashdata('message', "
            <div class='alert alert-danger alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                <h4><i class='glyphicon glyphicon-ok'></i> Gagal!</h4>
            		Data Pesan Gagal Berhasil Dihapus, Data tidak Ditemukan !
            </div>
             ");
            redirect(site_url('mail'));
        }
    } 

	public function delete_senditem($id) 
    {
        $row = $this->senditem->get_by_id($id);

        if ($row) {
            $this->senditem->delete($id);
            $this->session->set_flashdata('message', "
            <div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                <h4><i class='glyphicon glyphicon-ok'></i> Berhasil!</h4>
            		Data Pesan Berhasil Dihapus !
            </div>
             ");
            redirect(site_url('mail/terkirim'));
        } else {
            $this->session->set_flashdata('message', "
            <div class='alert alert-danger alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                <h4><i class='glyphicon glyphicon-ok'></i> Gagal!</h4>
            		Data Pesan Gagal Berhasil Dihapus, Data tidak Ditemukan !
            </div>
             ");
            redirect(site_url('mail/terkirim'));
        }
    }

	public function delete_outbox($id) 
    {
        $row = $this->outbox->get_by_id($id);

        if ($row) {
            $this->outbox->delete($id);
            $this->session->set_flashdata('message', "
            <div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                <h4><i class='glyphicon glyphicon-ok'></i> Berhasil!</h4>
            		Data Pesan Berhasil Dihapus !
            </div>
             ");
            redirect(site_url('mail/pending'));
        } else {
            $this->session->set_flashdata('message', "
            <div class='alert alert-danger alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                <h4><i class='glyphicon glyphicon-ok'></i> Gagal!</h4>
            		Data Pesan Gagal Berhasil Dihapus, Data tidak Ditemukan !
            </div>
             ");
            redirect(site_url('mail/pending'));
        }
    }

	public function read($id)
	{
			$data['nama_user']=$this->session->userdata('nama_user');
			$data['status']=$this->session->userdata('status');
			$data['d']='active';$data['d1']='active';

		$data['conten'] = "backend/admin/Pesan/baca";
		//$data['data'] = $this->info->get_all_data();
		$this->load->view('backend/dashboard/index', $data);
	}

	public function read_outbox($id) 
    {
        $id = $this->input->post('id');
        $row = $this->outbox->get_by_id($id);
        if ($row) {
            $data = array(
		'InsertIntoDB' => $row->InsertIntoDB,
		'SendingDateTime' => $row->SendingDateTime,
		'DestinationNumber' => $row->DestinationNumber,
		'TextDecoded' => $row->TextDecoded,
		'SenderID' => $row->SenderID,
	    );
            $this->load->view('backend/admin/Pesan/outbox_read', $data);
        } else {
            echo "Data Tidak Ditemukan";
        }
    }

    public function read_inbox($id) 
    {
        $id = $this->input->post('id');
        $row = $this->m_mail->get_by_id($id);
        if ($row) {
            $data = array(
		'ReceivingDateTime' => $row->ReceivingDateTime,
		'SenderNumber' => $row->SenderNumber,
		'TextDecoded' => $row->TextDecoded,
	    );
            $this->load->view('backend/admin/Pesan/inbox_read', $data);
        } else {
            echo "Data Tidak Ditemukan  bn";
        }
    }

    public function read_senditem($id) 
    {
        $id = $this->input->post('id');
        $row = $this->senditem->get_by_id($id);
        if ($row) {
            $data = array(
		'InsertIntoDB' => $row->InsertIntoDB,
		'SendingDateTime' => $row->SendingDateTime,
		'DeliveryDateTime' => $row->DeliveryDateTime,
		'DestinationNumber' => $row->DestinationNumber,
		'TextDecoded' => $row->TextDecoded,
		'ID' => $row->ID,
		'Status' => $row->Status
	    );
            $this->load->view('backend/admin/Pesan/sent_read', $data);
        } else {
            echo "Data Tidak Ditemukan Sbn";
        }
    }

}