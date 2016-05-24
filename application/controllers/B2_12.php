<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class B2_12 extends CI_Controller
{

	public function __construct(){
			parent::__construct();

			$this->load->model('Akta_perkawinan_model','m_akta',TRUE);
			$this->load->model('Data_mempelai_model','mempelai',TRUE);
			$this->load->model('Ortu_mempelai_model','ortu',TRUE);
			$this->load->model('Data_saksi_model','saksi',TRUE);
			$this->load->model('Data_perkawinan_model','perkawinan',TRUE);
			$this->load->model('Data_anak_model','anak',TRUE);
			$this->load->model('Berkas_perkawinan_model','m_berkas',TRUE);
			
			$this->load->model('Outbox_model','outbox',TRUE);
			$this->load->model('Approval_model','app',TRUE);

       		$this->load->library('form_validation');
       		$this->load->helper('string');
       		$this->load->helper('sms');
       		$R = $this->session->userdata('on_register');
       		if ($R == FALSE) {
    			redirect('error404','refresh');
    		}
			
		}

		public function berkas($id){

			$field = $this->m_berkas->getField();
			$row   = $this->m_berkas->get_by_al($id);
			$ak    = $this->m_akta->get_by_al($id);
			$i=0;
			$data = array(
				'berkas' => site_url('F2_12/edit/'.$id),
				'selesai' => site_url('approval/create_action/'.$id.'/'.$ak->nik_pengaju),
				'conten' => "frontend/aktaperkawinan/berkas_perkawinan",
				'button' => "Create",
				'B'		 => "active",'B4'		 => "active",
				'ID_AP'  => $this->session->userdata('s_idap'),
				'PENGAJU'  => $this->session->userdata('s_nama'),
				'TELEPON'  => $this->session->userdata('s_hp'),
				'NODAFTAR'  => $this->session->userdata('s_no_daftar'),
				);

			$berkas_name = array(
				"Surat Keterangan Pernikahan","Kartu Keluarga Suami",
				"KTP Suami", "Akta Kelahiran Suami","Kartu Keluarga Istri",
				"KTP Istri", "Akta Kelahiran Istri",
				"Surat Keterangan Dari Kelurahan",
				"Akta Kematian Ayah (Suami)", "Akta Kematian Ibu (Suami)",
				"Akta Kematian Ayah (Istri)", "Akta Kematian Ibu (Istri)",
				"KTP Saksi 1","KTP Saksi 2","Pas Foto Berdampingan"
				);
			foreach ($row as $key => $value) { $data["$field[$i]"] = $value; $i++;}
			$data['loop'] = $field;
			$data['data'] = $row;
			$data['judul'] = $berkas_name;
			$this->load->view('backend/dashboard/index2', $data);
		}

		public function loop($id){
			$nomor = 0;$b=0;
			$field = $this->m_berkas->getField();
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
			redirect(site_url("b2_12/berkas/$id"));

			
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

            $this->m_berkas->update($this->input->post('id_berkas', TRUE), $data);
        }
        return $nmfile.".".$fileExtension;
    }

    public function selesai($id){
			$data = array(
				'berkas' => site_url('b2_12/berkas/'.$id),
				'formulir' => site_url('f2_12/edit/'.$id),
				'conten' => "frontend/aktaperkawinan/sudah_selesai",
				'B'		 => "active",'B2'		 => "active",
				'ID_AC'  => $this->session->userdata('s_idac'),
				'PENGAJU'  => $this->session->userdata('s_nama'),
				'TELEPON'  => $this->session->userdata('s_hp'),
				'NODAFTAR'  => $this->session->userdata('s_no_daftar'),
				);

			$this->load->view('backend/dashboard/index2', $data);
    }

	}