<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Dashboard extends MY_Controller {


		public function __construct(){
			parent::__construct();
			$this->load->model('Akta_kelahiran_model','lahir',TRUE);
			$this->load->model('Akta_kematian_model','mati',TRUE);
			$this->load->model('Akta_perkawinan_model','kawin',TRUE);
			$this->load->model('Akta_perceraian_model','cerai',TRUE);
			$this->load->model('Mail_model','m_mail',TRUE);
			$this->load->model('User_model','user',TRUE);
			$this->load->model('Dps_model','dps',TRUE);
			$this->load->model('Mread','mread',TRUE);

			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->helper('rupiah');
			$this->load->library('form_validation');
			
		}
		

		public function index(){
		// status user login = BENAR, pindah ke halaman absen
	        if ($this->session->userdata('login') == TRUE)
	        {
	        	$wil = $this->session->userdata('wilayah');
	        	$status = $this->session->userdata('status');
	        	$al = count($this->lahir->get_all());
	        		$am = count($this->mati->get_all());
	        		$ap = count($this->kawin->get_all());
	        		$ac = count($this->cerai->get_all());
	        		$pesan = $this->m_mail->get_all_data();
	        		
	        	if ($status=="ADMIN") {
	        		
	        		$user = $this->user->get_all_limit(4);
	        		$laki = count($this->dps->count_all_jk("LAKI-LAKI"));
	        		$wanita = count($this->dps->count_all_jk("PEREMPUAN"));
	        		$nilai = count($this->mread->hitung_jadi("akta_kelahiran","id_al"));
	        		$nilai = $nilai + count($this->mread->hitung_jadi("akta_kematian","id_am"));
	        		$nilai = $nilai + count($this->mread->hitung_jadi("akta_perkawinan","id_ap"));
	        		$nilai = $nilai + count($this->mread->hitung_jadi("akta_perceraian","id_ac"));

	        		$data = array(
	        		'chart'		=>'active',
	        		'modal_title'=> "Detail Verifikasi Data Pendaftaran",
		            'modal_read'=> base_url('approval/read'),
	        		'nama_user'	=>	$this->session->userdata('nama_user'),
	        		'status'	=>	$this->session->userdata('status'),
	        		'wilayah'	=>	$this->session->userdata('wilayah'),
	        		'data_al'	=>	$this->lahir->get_top_4al($wil),
	        		'data_am'	=>	$this->mati->get_top_4am($wil),
	        		'data_hapus'=>	$nilai,
	        		'al'		=>	$al,
	        		'am'		=>	$am,
	        		'ap'		=>	$ap,
	        		'ac'		=>	$ac,
	        		'pesan'		=> $pesan,
	        		'user'		=> $user,
	        		'laki'		=> $laki,
	        		'wan'		=> $wanita,
	        		'conten'	=>	"backend/admin/Dashboard/admin",
	        		);
				$this->load->view('backend/dashboard/index', $data);
	        	}else{
	        	$data = array(
	        		'chart'		=>'active',
	        		'modal_title'=> "Detail Verifikasi Data Pendaftaran",
		            'modal_read'=> base_url('approval/read'),
	        		'nama_user'	=>	$this->session->userdata('nama_user'),
	        		'status'	=>	$this->session->userdata('status'),
	        		'wilayah'	=>	$this->session->userdata('wilayah'),
	        		'data_al'	=>	$this->lahir->get_top_4al($wil),
	        		'data_am'	=>	$this->mati->get_top_4am($wil),
	        		'al'		=>	$al,
	        		'am'		=>	$am,
	        		'ap'		=>	$ap,
	        		'ac'		=>	$ac,
	        		'pesan'		=> $pesan,
	        		's_al'		=>	count($this->lahir->get_all_will($wil,$status)),
	        		's_am'		=>	count($this->mati->get_all_will($wil,$status)),
	        		's_ap'		=>	count($this->kawin->get_all_will($wil,$status)),
	        		's_ac'		=>	count($this->cerai->get_all_will($wil,$status)),
	        		'conten'	=>	"backend/admin/Dashboard/index",
	        		);
				$this->load->view('backend/dashboard/index', $data);
				}
			}
	        // status login salah, tampilkan form login
	        else
	        {
				redirect('index.php/login');
			}
				
		}



}