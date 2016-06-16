<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class B2_01 extends CI_Controller
{

	public function __construct(){
			parent::__construct();

			$this->load->model('Akta_kelahiran_model');
			$this->load->model('Data_bayi_model');
			$this->load->model('Data_saksi_model');
			$this->load->model('Data_pelapor_model');
			$this->load->model('Ortu_bayi_model');
			$this->load->model('Berkas_lahir_model');

			$this->load->model('Approval_model','app',TRUE);

       		$this->load->library('form_validation');
       		$this->load->helper('string');
       		$this->load->helper('sms');
       		$R = $this->session->userdata('on_register');
       		if ($R == FALSE) {
    			//redirect('error404','refresh');
    		}
			
		}

		public function berkas($id){
			$this->_akses($id);
			$field = $this->Berkas_lahir_model->getField();
			$row   = $this->Berkas_lahir_model->get_by_al($id);
			$akta  = $this->Akta_kelahiran_model->get_by_al($id);
			//print_r($row);exit();
			$i=0;
			$data = array(
				'berkas' => site_url('F2_01/edit/'.$id),
				'selesai' => site_url('approval/create_action/'.$id.'/'.$akta->nik_pengaju),
				'conten' => "frontend/aktalahir/berkas_lahir",
				'button' => "Create",
				'B'		 => "active",'B1'		 => "active",
				'ID_AL'  => $this->session->userdata('s_idal'),
				'PENGAJU'  => $this->session->userdata('s_nama'),
				'TELEPON'  => $this->session->userdata('s_hp'),
				'NODAFTAR'  => $this->session->userdata('s_no_daftar'),
				'id_bayi' => set_value('id_bayi'),
				);
			$berkas_name = array(
				"Surat Keterangan Kelahiran","Akta Pernikahan Orang Tua",
				"Kartu Keluarga Baru", "KTP Ibu", "KTP Ayah", "KTP Saksi 1", "KTP Saksi 2"
				);
			foreach ($row as $key => $value) { $data["$field[$i]"] = $value; $i++;}
			$data['loop'] = $field;
			$data['data'] = $row;
			$data['judul'] = $berkas_name;
			$this->load->view('backend/dashboard/index2', $data);
		}

		public function loop($id){
			$nomor = 0;$b=0;
			$field = $this->Berkas_lahir_model->getField();
			$this->load->helper('string');
			$KODE 	= random_string('alnum',4);
			foreach ($field as $key => $value) {
				if ($b>1) {
					$path_info	= pathinfo($_FILES[$value]['name']);
					if ($path_info['basename'] != NULL ) {
					$nomor++;
					$foto	= $this->run_upload($value,$nomor,$KODE);
					}else{echo "<br>NOL = ".$value;}
				}$b++;
				
			}
			redirect(site_url("b2_01/berkas/$id"));

			
		}

		public function run_upload($value,$nomor,$KODE){
			
			$path_info  	=   pathinfo($_FILES[$value]['name']);
            $fileExtension  =   $path_info['extension'];
            $YmdHis_papername   =   date('dhi');
            if ($nomor>1) {
            	$mul = $nomor-1;
            }
            $nmfile = "fl_".$KODE."".$YmdHis_papername."".$mul;
            $no = $this->session->userdata('s_no_daftar');

			$config['upload_path'] = './assets/uploads/'.$no;
			$config['file_name'] = $nmfile;
		    $config['allowed_types'] = 'gif|jpg|png';
		    $config['max_size'] = '4048'; //maksimum besar file 2M
       		$config['max_width']  = '3840'; //lebar maksimum 1288 px
       		$config['max_height']  = '2160'; //tinggi maksimu 768 px

		    if (!is_dir('assets/uploads/'.$no)) {
				    mkdir('./assets/uploads/' . $no, 0777, TRUE);
				}
       			 $this->load->library('upload', $config);
       
        if (!$this->upload->do_upload($value)){
            $data = $this->upload->display_errors();
            echo "<br>$value||$data";
        }
        else {
            $upload_data = $this->upload->data();
             $data = array(
				$value => $nmfile.".".$fileExtension,
			    );

            $this->Berkas_lahir_model->update($this->input->post('id_berkas', TRUE), $data);
        }
        return $nmfile.".".$fileExtension;
    }

    public function selesai($id){
			$c = $this->_akses($id);
			if ($c) {
				$akta = $this->Akta_kelahiran_model->get_by_al($id);
			$data = array(
				'akta'	=> $akta,
				'berkas' => site_url('b2_01/berkas/'.$id),
				'formulir' => site_url('f2_01/edit/'.$id),
				'conten' => "frontend/aktalahir/sudah_selesai",
				'B'		 => "active",'B1'		 => "active",
				'ID_AC'  => $this->session->userdata('s_idac'),
				'PENGAJU'  => $this->session->userdata('s_nama'),
				'TELEPON'  => $this->session->userdata('s_hp'),
				'NODAFTAR'  => $this->session->userdata('s_no_daftar'),
				);

			$this->load->view('backend/dashboard/index2', $data);
			}
    		
    }

    public function _akses($id){

    	$app = $this->app->get_join($id,"akta_kelahiran","id_al");//print_r($app);
    	if (($app->locked=='1')&&($app->progres!="diambil")) {
		        		$data = array(
		        			'header'	=> "Akta Kelahiran Online",
		        			'hasil'		=>  $app,
		        			'nama'		=>	$app->nama,
		        			'tgl_daftar'=>	$app->tgl_registrasi,
		        			'tgl_ambil'	=>	$app->tgl_ambil,
		        			's_no_daftar'=>	$app->no_registrasi,
		        			'oleh'		=>	$app->oleh_ambil,
		        			'denda'		=>	$app->denda,
		        			'jenis'		=> "Akta Kematian",
		        			);
		        		$data['conten'] = "frontend/info/terkunci";
		        		$this->load->view('backend/dashboard/index2', $data);
		        		return false;
		        	}
		        	elseif ($app->progres=="diambil") {
		        		$data = array(
		        			'header'	=> "Akta Kelahiran Online",
		        			'nama'		=>	$app->nama,
		        			'tgl_daftar'=>	$app->tgl_registrasi,
		        			'tgl_ambil'	=>	$app->tgl_ambil,
		        			's_no_daftar'=>	$app->no_registrasi,
		        			'oleh'		=>	$app->oleh_ambil,
		        			'denda'		=>	$app->denda,
		        			'jenis'		=> "Akta Kelahiran",
		        			);
		        		$data['conten'] = "frontend/info/sudah_diambil";
		        		$this->load->view('backend/dashboard/index2', $data);
		        		return false;

		        	}else{
		        		return true;
		        	}
    }



	}