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
			$status = $this->session->userdata('status');
			$periode = $this->input->post("tanggal");
			$periode = explode('/', $periode);
				
			//KONTROL UNTUK PERIODE
			if ($periode[0]!='') {
				$judul = 'Grafik Data Kelahiran Periode '.$periode[0].' - '.$periode[1];
				$between = "AND tgl_kelahiran BETWEEN '$periode[0]' AND '$periode[1]'";
			}else {
				$judul = 'Grafik Data Kelahiran';
			}

			$jenkel = $this->ig->jenkel_bayi($between);
			$a = $jenkel->JL + $jenkel->JP;

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
			//KONTROL KONTEN PADA GAMBAR GRAFIK
			if ($status!='ADMIN'){
				$wil = $this->session->userdata('wilayah');
				$jenkel_wil = $this->ig->jenkel_bayi_will($wil,$between);
				$b = $jenkel_wil->JL + $jenkel_wil->JP;

				$kel = array(
					'jml'	=> $b,
					'laki'	=> $jenkel_wil->JL,
					'wanita'=> $jenkel_wil->JP,
					);
	
			}

			$data = array(
	        		'chart'		=>'active',
	        		'head_g3'	=> $judul,
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
			$status = $this->session->userdata('status');
			$periode = $this->input->post("tanggal");
			$periode = explode('/', $periode);
				
			//KONTROL UNTUK PERIODE
			if ($periode[0]!='') {
				$judul = 'Grafik Data Kematian Periode '.$periode[0].' - '.$periode[1];
				$between = "AND tgl_kematian BETWEEN '$periode[0]' AND '$periode[1]'";
			}else {
				$judul = 'Grafik Data Kematian';
			}

			$jenkel = $this->ig->jenkel_jenazah($between);
			$a = $jenkel->JL + $jenkel->JP;
			

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
				

				//KONTROL KONTEN PADA GAMBAR GRAFIK
				if ($status!='ADMIN'){
					$wil = $this->session->userdata('wilayah');
					$jenkel_wil = $this->ig->jenkel_jenazah_will($wil,$between);
					$b = $jenkel_wil->JL + $jenkel_wil->JP;

					$kel = array(
					'jml'	=> $b,
					'laki'	=> $jenkel_wil->JL,
					'wanita'=> $jenkel_wil->JP,
					);
		
				}

	        	$data = array(
	        		'chart'		=>'active',
	        		'head_g3'	=> $judul,
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
			$status = $this->session->userdata('status');
			$periode = $this->input->post("tanggal");
			$periode = explode('/', $periode);
				
			//KONTROL UNTUK PERIODE
			if ($periode[0]!='') {
				$judul = 'Grafik Data Perkawinan Periode '.$periode[0].' - '.$periode[1];
				$between = "AND tgl_pemberkatan BETWEEN '$periode[0]' AND '$periode[1]'";
			}else {
				$judul = 'Grafik Data Perkawinan';
			}

			$wil = $this->session->userdata('wilayah');
			$jenkel = $this->ig->jenkel_mempelai($between);
			$a = $jenkel->JL + $jenkel->JP;

				$kat = array(
					'0'	=> "Jumlah Perkawinan",
					'1'	=> "Mempelai Pria/Wilayah",
					'2'	=> "Mempelai Wanita/Wilayah",
					);

				$total = array(
					'jml'	=> $jenkel->JL + $jenkel->JP,
					'laki'	=> $jenkel->JL,
					'wanita'=> $jenkel->JP,
					);

				//KONTROL KONTEN PADA GAMBAR GRAFIK
				if ($status!='ADMIN'){
					$wil = $this->session->userdata('wilayah');
					$jenkel_wil = $this->ig->jenkel_mempelai_will($wil,$between);
					$b = $jenkel_wil->JL + $jenkel_wil->JP;

					$kel = array(
					'jml'	=> $b,
					'laki'	=> $jenkel_wil->JL,
					'wanita'=> $jenkel_wil->JP,
					);
		
				}

	        	$data = array(
	        		'chart'		=>'active',
	        		'head_g3'	=> $judul,
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
			$status = $this->session->userdata('status');
			$periode = $this->input->post("tanggal");
			$periode = explode('/', $periode);
				
			//KONTROL UNTUK PERIODE
			if ($periode[0]!='') {
				$judul = 'Grafik Data Perceraian Periode '.$periode[0].' - '.$periode[1];
				$between = "AND tgl_putusan BETWEEN '$periode[0]' AND '$periode[1]'";
			}else {
				$judul = 'Grafik Data Perceraian';
			}

			$jenkel = $this->ig->jenkel_bercerai($between);
			$a = $jenkel->JL + $jenkel->JP;

				$kat = array(
					'0'	=> "Jumlah Perceraian",
					'1'	=> "Data Suami Cerai/Wilayah",
					'2'	=> "Data Istri Cerai/Wilayah",
					);

				$total = array(
					'jml'	=> $jenkel->JL + $jenkel->JP,
					'laki'	=> $jenkel->JL,
					'wanita'=> $jenkel->JP,
					);

				//KONTROL KONTEN PADA GAMBAR GRAFIK
				if ($status!='ADMIN'){
					$wil = $this->session->userdata('wilayah');
					$jenkel_wil = $this->ig->jenkel_bercerai_will($wil,$between);
					$b = $jenkel_wil->JL + $jenkel_wil->JP;

					$kel = array(
					'jml'	=> $b,
					'laki'	=> $jenkel_wil->JL,
					'wanita'=> $jenkel_wil->JP,
					);
		
				}

	        	$data = array(
	        		'chart'		=>'active',
	        		'head_g3'	=> $judul,
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

		 public function ig4(){
            $status = $this->session->userdata('status');
			$periode = $this->input->post("tanggal");
			$periode = explode('/', $periode);


            if ($this->input->post("tanggal")!='') {
                $judul = " Perbandingan Pengajuan Akta Per Kecamatan Periode $periode[0] s.d $periode[1]";
                 $between = "AND tgl_registrasi BETWEEN '$periode[0]' AND '$periode[1]'";
            }else{
                $judul = " Perbandingan Pengajuan Akta Per Kecamatan";
            }


            $al_kec = $this->ig->al_by_kecamatan($between);
            $am_kec = $this->ig->am_by_kecamatan($between);
            $ap_kec = $this->ig->ap_by_kecamatan($between);
            $ac_kec = $this->ig->ac_by_kecamatan($between);

                    
            $data = array(
	        		'chart'		=>'active',
	        		'head_g3'	=> $judul,
	        		'ig'		=> 'active', 'ig5'	=> 'active',
	        		'nama_user'	=>	$this->session->userdata('nama_user'),
	        		'status'	=>	$this->session->userdata('status'),
	        		'wilayah'	=>	$this->session->userdata('wilayah'),
                    'al_kec'    =>  $al_kec,
                    'am_kec'    =>  $am_kec,
                    'ap_kec'    =>  $ap_kec,
                    'ac_kec'    =>  $ac_kec,
                    'judul'     => $judul,
	        		'conten'	=>	"backend/admin/Infografik/aju_kecamatan"
	        		);

				$this->load->view('backend/dashboard/index', $data);
        }

}