<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Help extends CI_Controller {

	private $control='help';

	public function __construct(){
			parent::__construct();

		}

	public function index()
	{
		if($this->session->userdata('login')==TRUE){
			$data['nama_user']=$this->session->userdata('nama_user');
			$data['status']=$this->session->userdata('status');	
		}
		

		$data['e']='active';$data['e1']='active';
		$data['conten'] = 'backend/admin/Help/create_new';
		$this->load->view('backend/dashboard/index', $data);
	}

	public function denda()
	{
		if($this->session->userdata('login')==TRUE){
			$data['nama_user']=$this->session->userdata('nama_user');
			$data['status']=$this->session->userdata('status');	
		}
		
		$data['e']='active';$data['e1']='active';
		$data['conten'] = 'backend/admin/Help/denda';
		$this->load->view('backend/dashboard/index', $data);
	}

	public function verifikasi()
	{
		if($this->session->userdata('login')==TRUE){
			$data['nama_user']=$this->session->userdata('nama_user');
			$data['status']=$this->session->userdata('status');	
		}
		
		$data['e']='active';$data['e2']='active';
		$data['conten'] = 'backend/admin/Help/verifikasi';
		$this->load->view('backend/dashboard/index', $data);
	}

	
	public function waktu()
	{
		if($this->session->userdata('login')==TRUE){
			$data['nama_user']=$this->session->userdata('nama_user');
			$data['status']=$this->session->userdata('status');	
		}
		
		$data['e']='active';$data['e3']='active';
		$data['conten'] = 'backend/admin/Help/waktu';
		$this->load->view('backend/dashboard/index', $data);
	}

	public function alur()
	{
		if($this->session->userdata('login')==TRUE){
			$data['nama_user']=$this->session->userdata('nama_user');
			$data['status']=$this->session->userdata('status');	
		}
		
		$data['e']='active';$data['e6']='active';
		$data['conten'] = 'backend/admin/Help/alur';
		$this->load->view('backend/dashboard/index', $data);
	}

	public function lokasi()
	{
		if($this->session->userdata('login')==TRUE){
			$data['nama_user']=$this->session->userdata('nama_user');
			$data['status']=$this->session->userdata('status');	
		}
		
		$data['e']='active';$data['e4']='active';
		$data['conten'] = 'backend/admin/Help/lokasi';
		$this->load->view('backend/dashboard/index', $data);
	}


}