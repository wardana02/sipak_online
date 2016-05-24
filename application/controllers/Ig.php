<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ig extends MY_Controller {


		public function __construct(){
			parent::__construct();
			$this->load->model('Akta_kelahiran_model','lahir',TRUE);
			$this->load->model('Akta_kematian_model','mati',TRUE);
			$this->load->model('Akta_perkawinan_model','kawin',TRUE);
			$this->load->model('Akta_perceraian_model','cerai',TRUE);
			$this->load->model('Ig_model','ig',TRUE);

			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->helper('rupiah');
			$this->load->library('form_validation');
			
		}

		public function AL(){
			$wil = $this->session->userdata('wilayah');
			$jenkel = $this->ig->jenkel_bayi();
			$jenkel_wil = $this->ig->jenkel_bayi_will($wil);

			$a = $jenkel->JL + $jenkel->JP;
			$b = $jenkel_wil->JL + $jenkel_wil->JP;

				$kat = array(
					'0'	=> "Jumlah Kelahiran",
					'1'	=> "Bayi Laki-Laki",
					'2'	=> "Bayi Perempuan",
					);

				$total = array(
					'jml'	=> $a,
					'laki'	=> $jenkel->JL,
					'wanita'=> $jenkel->JP,
					);
				$kel = array(
					'jml'	=> $b,
					'laki'	=> $jenkel_wil->JL,
					'wanita'=> $jenkel_wil->JP,
					);
	        	$data = array(
	        		'chart'		=>'active',
	        		'head_g3'	=> 'Grafik Data Kelahiran',
	        		'ig'		=> 'active', 'ig1'	=> 'active',
	        		'nama_user'	=>	$this->session->userdata('nama_user'),
	        		'status'	=>	$this->session->userdata('status'),
	        		'wilayah'	=>	$this->session->userdata('wilayah'),
	        		'data_al'	=>	$this->lahir->get_top_4al($wil),
	        		'data_am'	=>	$this->mati->get_top_4am($wil),
	        		'tot'		=>	"$a/$b",
	        		'lak'		=>	"$jenkel->JL/$jenkel_wil->JL",
	        		'wan'		=>	"$jenkel->JP/$jenkel_wil->JP",
	        		'total'		=> $total,
	        		'kel'		=> $kel,
	        		'kat'		=> $kat,
	        		'conten'	=>	"backend/admin/Infografik/aktakelahiran",
	        		);

				$this->load->view('backend/dashboard/index', $data);
		}

		public function AM(){
			$wil = $this->session->userdata('wilayah');
			$jenkel = $this->ig->jenkel_jenazah();
			$jenkel_wil = $this->ig->jenkel_jenazah_will($wil);

			$a = $jenkel->JL + $jenkel->JP;
			$b = $jenkel_wil->JL + $jenkel_wil->JP;

				$kat = array(
					'0'	=> "Jumlah Kematian",
					'1'	=> "Jenazah Laki-Laki",
					'2'	=> "Jenazah Perempuan",
					);

				$total = array(
					'jml'	=> $a,
					'laki'	=> $jenkel->JL,
					'wanita'=> $jenkel->JP,
					);
				$kel = array(
					'jml'	=> $b,
					'laki'	=> $jenkel_wil->JL,
					'wanita'=> $jenkel_wil->JP,
					);
	        	$data = array(
	        		'chart'		=>'active',
	        		'head_g3'	=> 'Grafik Data Kematian',
	        		'ig'		=> 'active', 'ig2'	=> 'active',
	        		'nama_user'	=>	$this->session->userdata('nama_user'),
	        		'status'	=>	$this->session->userdata('status'),
	        		'wilayah'	=>	$this->session->userdata('wilayah'),
	        		'data_al'	=>	$this->lahir->get_top_4al($wil),
	        		'data_am'	=>	$this->mati->get_top_4am($wil),
	        		'tot'		=>	"$a/$b",
	        		'lak'		=>	"$jenkel->JL/$jenkel_wil->JL",
	        		'wan'		=>	"$jenkel->JP/$jenkel_wil->JP",
	        		'total'		=> $total,
	        		'kel'		=> $kel,
	        		'kat'		=> $kat,
	        		'conten'	=>	"backend/admin/Infografik/aktakematian",
	        		);

				$this->load->view('backend/dashboard/index', $data);
		}

		public function AP(){
			$wil = $this->session->userdata('wilayah');
			$jenkel = $this->ig->jenkel_mempelai();
			$jenkel_wil = $this->ig->jenkel_mempelai_will($wil);

			$a = $jenkel->JL + $jenkel->JP;
			$b = $jenkel_wil->JL + $jenkel_wil->JP;

				$kat = array(
					'0'	=> "Jumlah Perkawinan",
					'1'	=> "Mempelai Pria/Wilayah",
					'2'	=> "Mempelai Wanita/Wilayah",
					);

				$total = array(
					'jml'	=> $jenkel->JL,
					'laki'	=> $jenkel->JL,
					'wanita'=> $jenkel->JP,
					);
				$kel = array(
					'jml'	=> $jenkel_wil->JL,
					'laki'	=> $jenkel_wil->JL,
					'wanita'=> $jenkel_wil->JP,
					);
	        	$data = array(
	        		'chart'		=>'active',
	        		'head_g3'	=> 'Grafik Data Perkwainan',
	        		'ig'		=> 'active', 'ig3'	=> 'active',
	        		'nama_user'	=>	$this->session->userdata('nama_user'),
	        		'status'	=>	$this->session->userdata('status'),
	        		'wilayah'	=>	$this->session->userdata('wilayah'),
	        		'data_al'	=>	$this->lahir->get_top_4al($wil),
	        		'data_am'	=>	$this->mati->get_top_4am($wil),
	        		'tot'		=>	"$jenkel->JL/$jenkel_wil->JL",
	        		'lak'		=>	"$jenkel->JL/$jenkel_wil->JL",
	        		'wan'		=>	"$jenkel->JP/$jenkel_wil->JP",
	        		'total'		=> $total,
	        		'kel'		=> $kel,
	        		'kat'		=> $kat,
	        		'conten'	=>	"backend/admin/Infografik/aktaperkawinan",
	        		);

				$this->load->view('backend/dashboard/index', $data);
		}

		public function AC(){
			$wil = $this->session->userdata('wilayah');
			$jenkel = $this->ig->jenkel_bercerai();
			$jenkel_wil = $this->ig->jenkel_bercerai_will($wil);

			$a = $jenkel->JL + $jenkel->JP;
			$b = $jenkel_wil->JL + $jenkel_wil->JP;

				$kat = array(
					'0'	=> "Jumlah Perceraian",
					'1'	=> "Data Suami Cerai/Wilayah",
					'2'	=> "Data Istri Cerai/Wilayah",
					);

				$total = array(
					'jml'	=> $jenkel->JL,
					'laki'	=> $jenkel->JL,
					'wanita'=> $jenkel->JP,
					);
				$kel = array(
					'jml'	=> $jenkel_wil->JL,
					'laki'	=> $jenkel_wil->JL,
					'wanita'=> $jenkel_wil->JP,
					);
	        	$data = array(
	        		'chart'		=>'active',
	        		'head_g3'	=> 'Grafik Data Perceraian',
	        		'ig'		=> 'active', 'ig4'	=> 'active',
	        		'nama_user'	=>	$this->session->userdata('nama_user'),
	        		'status'	=>	$this->session->userdata('status'),
	        		'wilayah'	=>	$this->session->userdata('wilayah'),
	        		'data_al'	=>	$this->lahir->get_top_4al($wil),
	        		'data_am'	=>	$this->mati->get_top_4am($wil),
	        		'tot'		=>	"$jenkel->JL/$jenkel_wil->JL",
	        		'lak'		=>	"$jenkel->JL/$jenkel_wil->JL",
	        		'wan'		=>	"$jenkel->JP/$jenkel_wil->JP",
	        		'total'		=> $total,
	        		'kel'		=> $kel,
	        		'kat'		=> $kat,
	        		'conten'	=>	"backend/admin/Infografik/aktaperceraian",
	        		);

				$this->load->view('backend/dashboard/index', $data);
		}

}