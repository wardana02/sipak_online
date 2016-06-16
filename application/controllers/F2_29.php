<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class F2_29 extends CI_Controller
{

	public function __construct(){
			parent::__construct();

			$this->load->model('Akta_kematian_model');
			$this->load->model('Data_jenazah_model');
			$this->load->model('Data_saksi_model');
			$this->load->model('Data_pelapor_model');
			$this->load->model('Ortu_jenazah_model');
			$this->load->model('Berkas_kematian_model');
			$this->load->model('Outbox_model');
			$this->load->model('Approval_model');

       		$this->load->library('form_validation');
       		$this->load->helper('string');
       		$this->load->helper('sms');
       		$R = $this->session->userdata('on_register');
       		if ($R == FALSE) {
    			redirect('error404','refresh');
    		}
			
		}


		public function create_action(){
		$this->_rules();

		        if (FALSE) {
		            $this->index();
		        } else {
		        	//echo $this->session->userdata('s_idal');exit();
		        	$DT = date("ymdhis");
		        	$TD = date("sihdmy");
		        	$IDJENAZAH = "DJ".$DT;
		            $this->_arrayJenazah($IDJENAZAH,"I");
		            $this->_arrayIbu($IDJENAZAH,"OT".$DT,"I");
		            $this->_arrayAyah($IDJENAZAH,"OT".$TD,"I");
		            $this->_arrayPelapor("PL".$DT,"I");
		            $this->_arraySaksi1("SI".$DT,"I");
		            $this->_arraySaksi2("SI".$TD,"I");
		            $this->_arrayBerkas("BM".$DT,$this->session->userdata('s_idal'),"I");

		            $this->session->set_flashdata('message', 'Create Record Success');
		            echo "<script language=\"Javascript\">\n";
					echo "window.alert('Data Formulir Pendaftaran Berhasil Disimpan')";
					echo "</script>";

		            $this->edit($this->session->userdata('s_idal'));
		        }

		    }

		    public function edit($id_am){
		    	//select ke data bayi,ortu,saksi,pelapor berdasarkan id_al, then redirect to f2_01
		    	$re = base_url("home/mati");
		    	$t = $this->session->userdata('s_idam');
		    	if ($id_am!=$t) {
		    		echo "<script language=\"Javascript\">\n";
					echo "window.alert('@ Data Formulir Pendaftaran Tidak Ditemukan #DTS')";
					header("refresh:0; $re");
					echo "</script>";
		    	}
        		$row 	= $this->Data_jenazah_model->get_by_al($id_am);
        		$IBU 	= $this->Ortu_jenazah_model->get_by_jenazah($row->id_jenazah,"IBU");
        		$AYAH 	= $this->Ortu_jenazah_model->get_by_jenazah($row->id_jenazah,"AYAH");

        		$S1 	= $this->Data_saksi_model->get_by_al($id_am,1);
        		$S2 	= $this->Data_saksi_model->get_by_al($id_am,2);
        		$PELAPOR = $this->Data_pelapor_model->get_by_al($id_am,2);
        		$app = $this->Approval_model->get_join($id_am,"akta_kematian","id_am");
        		
 
        		$field 	 = $this->Data_jenazah_model->getField();
		        $ortu 	 = $this->Ortu_jenazah_model->getField();
		        $pelapor = $this->Data_pelapor_model->getField();
		        $saksi 	 = $this->Data_saksi_model->getField();

        		$i=0;$j=0;$k=0;$l=0;$m=0;$n=0;
        		
		        if ($row) {
		        	if (($app->locked=='1')&&($app->progres!="diambil")) {
		        		$data = array(
		        			'hasil'		=>  $app,
		        			'nama'		=>	$app->nama,
		        			'tgl_daftar'=>	$app->tgl_registrasi,
		        			'tgl_ambil'	=>	$app->tgl_ambil,
		        			's_no_daftar'=>	$app->no_registrasi,
		        			'oleh'		=>	$app->oleh_ambil,
		        			'denda'		=>	$app->denda,
		        			'jenis'		=> "Akta Kematian #VE",
		        			);
		        		$data['conten'] = "frontend/info/terkunci";
		        		$this->load->view('backend/dashboard/index2', $data);
		        	}
		        	elseif ($app->progres=="diambil") {
		        		$data = array(

		        			'nama'		=>	$app->nama,
		        			'tgl_daftar'=>	$app->tgl_registrasi,
		        			'tgl_ambil'	=>	$app->tgl_ambil,
		        			's_no_daftar'=>	$app->no_registrasi,
		        			'oleh'		=>	$app->oleh_ambil,
		        			'denda'		=>	$app->denda,
		        			'jenis'		=> "Akta Kematian #AM",
		        			);
		        		$data['conten'] = "frontend/info/sudah_diambil";
		        		$this->load->view('backend/dashboard/index2', $data);

		        	}else{
		        		foreach ($row as $key => $value) { $data["j_$field[$i]"] = $value; $i++;}
		        		foreach ($IBU as $key => $value) { $data["i_$ortu[$j]"] = $value; $j++;}
		        		foreach ($AYAH as $key => $value) { $data["a_$ortu[$k]"] = $value; $k++;}
		        		foreach ($PELAPOR as $key => $value) { $data["p_$pelapor[$n]"] = $value; $n++;}
		        		foreach ($S1 as $key => $value) { $data["s1_$saksi[$l]"] = $value; $l++;}
		        		foreach ($S2 as $key => $value) { $data["s2_$saksi[$m]"] = $value; $m++;}
		 
		        		$data['button']		= 'Update';
		        		$data['action'] = site_url('f2_29/update_action');
		        		$data['berkas'] = site_url('b2_29/berkas');
						$data['conten'] = "frontend/aktamati/akta_mati";
						$data['B']		 = "active";
						$data['B2']		 = "active";
						$data['ID_AM']   = $this->session->userdata('s_idam');
						$data['PENGAJU']  = $this->session->userdata('s_nama');
						$data['TELEPON']  = $this->session->userdata('s_hp');
						$data['NODAFTAR']  = $this->session->userdata('s_no_daftar');
		            $this->load->view('backend/dashboard/index2', $data);
		        	}
		        } else {
		        	
		            echo "<script language=\"Javascript\">\n";
					echo "window.alert('SData Formulir Pendaftaran Tidak Ditemukan')";
					header("refresh:0; $re");
					echo "</script>";
		        }
		    }

		    

		    public function update_action() 
		    {
		    	$this->_rules();
		        if ($this->form_validation->run() == FALSE) {
		        	echo "GAGAL";
		            $this->edit($this->input->post('j_id_AM'));
		        } else {
		        	//echo "MASUK";
		           	$IDJENAZAH = $this->input->post('id_jenazah');
		           	$ID_IBU = $this->input->post('id_ortu1');
		           	$ID_AYAH = $this->input->post('id_ortu2');
		           	$IDPEL = $this->input->post('id_pelapor');
		           	$IDS1 = $this->input->post('id_saksi1');
		           	$IDS2 = $this->input->post('id_saksi2');
		           	$this->_arrayJenazah($IDJENAZAH,"U");
		            $this->_arrayIbu($IDJENAZAH,$ID_IBU,"U");
		            $this->_arrayAyah($IDJENAZAH,$ID_AYAH,"U");
		            $this->_arrayPelapor($IDPEL,"U");
		            $this->_arraySaksi1($IDS1,"U");
		            $this->_arraySaksi2($IDS2,"U");

		            $link = site_url('F2_01/edit/'.$this->session->userdata('s_idal'));
		            $this->session->set_flashdata('message', "
		                <div class='alert alert-success alert-dismissable'>
		              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
		                <h4><i class='icon fa fa-ban'></i> Berhasil!</h4>
		                   Data Formulir Akta Anda Telah Diperbaharui<br>
		                   <h4>Lanjut Ke Tahap Unggah Berkas Anda?</h4>
		                   
		            </div>
		                ");
		            redirect(site_url("F2_29/edit/".$this->session->userdata('s_idal')));
		        }
		    }

		    public function _arrayJenazah($IDJENAZAH,$c)
		    {
		    	$field_jenazah 	 = $this->Data_jenazah_model->getField();

		    		foreach ($field_jenazah as $key => $value) {
		    			$data[$value] = $this->input->post("j_".$value,TRUE);
		    		}
		    			$data['id_jenazah'] = $IDJENAZAH;
		    			$data['id_AM'] = $this->session->userdata('s_idal');
		    		if ($c=="I") {
		    			$this->Data_jenazah_model->insert($data);
		    		}elseif ($c=="U") {
		    			$this->Data_jenazah_model->update($IDJENAZAH, $data);
		    		}
		            
		            
		    }

		    public function _arrayIbu($IDJENAZAH,$ID,$c)
		    {

		    	$field 	 = $this->Ortu_jenazah_model->getField();	
	
		    	foreach ($field as $key => $value) {
		    			$data[$value] = $this->input->post("i_".$value,TRUE);
		    		}
		    		$data['id_ortu'] = $ID;
		    		$data['id_jenazah'] = $IDJENAZAH;
		    		$data['status'] = "IBU";
           		 
           		 if ($c=="I") {
		    			$this->Ortu_jenazah_model->insert($data);
		    		}elseif ($c=="U") {
		    			$this->Ortu_jenazah_model->update($ID, $data);
		    		}
		    }

		    public function _arrayAyah($IDJENAZAH,$ID,$c)
		    {
		    	$field 	 = $this->Ortu_jenazah_model->getField();	
	
		    	foreach ($field as $key => $value) {
		    			$data[$value] = $this->input->post("a_".$value,TRUE);
		    		}
		    		$data['id_ortu'] = $ID;
		    		$data['id_jenazah'] = $IDJENAZAH;
		    		$data['status'] = "AYAH";
           		 if ($c=="I") {
		    			$this->Ortu_jenazah_model->insert($data);
		    		}elseif ($c=="U") {
		    			$this->Ortu_jenazah_model->update($ID, $data);
		    		}
		    }

		    public function _arrayPelapor($ID,$c)
		    {
		    	$pelapor 		 = $this->Data_pelapor_model->getField();
		    	foreach ($pelapor as $key => $value) {
		    			$data[$value] = $this->input->post("p_".$value,TRUE);
		    		}
		    		$data['id_pelapor'] = $ID;
		    		$data['id_akta'] = $this->session->userdata('s_idal');
	         
	            	if ($c=="I") {
		    			$this->Data_pelapor_model->insert($data);
		    		}elseif ($c=="U") {
		    			$this->Data_pelapor_model->update($ID, $data);
		    		}
	        }

	        public function _arraySaksi1($ID,$c){
	        	$saksi 	 		 = $this->Data_saksi_model->getField();
	        	$data = array(
	        		'id_saksi' => $ID,
					'id_akta' => $this->session->userdata('s_idal'),
					'nik' => $this->input->post('s1_nik',TRUE),
					'nama' => $this->input->post('s1_nama',TRUE),
					'umur' => $this->input->post('s1_umur',TRUE),
					'a_alamat' => $this->input->post('s1_a_alamat',TRUE),
					'a_desa' => $this->input->post('s1_a_desa',TRUE),
					'a_kecamatan' => $this->input->post('s1_a_kecamatan',TRUE),
					'a_kabkota' => $this->input->post('s1_a_kabkota',TRUE),
					'a_provinsi' => $this->input->post('s1_a_provinsi',TRUE),
					'pekerjaan' => $this->input->post('s1_pekerjaan',TRUE),
					'ke'	=> "1",
				    );

           		  if ($c=="I") {
		    			$this->Data_saksi_model->insert($data);
		    		}elseif ($c=="U") {
		    			$this->Data_saksi_model->update($ID, $data);
		    		}
	        }

	        public function _arraySaksi2($ID,$c){
	        	$saksi 	 		 = $this->Data_saksi_model->getField();
	        	$data = array(
	        		'id_saksi' => $ID,
					'id_akta' => $this->session->userdata('s_idal'),
					'nik' => $this->input->post('s2_nik',TRUE),
					'nama' => $this->input->post('s2_nama',TRUE),
					'umur' => $this->input->post('s2_umur',TRUE),
					'a_alamat' => $this->input->post('s2_a_alamat',TRUE),
					'a_desa' => $this->input->post('s2_a_desa',TRUE),
					'a_kecamatan' => $this->input->post('s2_a_kecamatan',TRUE),
					'a_kabkota' => $this->input->post('s2_a_kabkota',TRUE),
					'a_provinsi' => $this->input->post('s2_a_provinsi',TRUE),
					'pekerjaan' => $this->input->post('s2_pekerjaan',TRUE),
					'ke'	=> "2",
				    );

           		 if ($c=="I") {
		    			$this->Data_saksi_model->insert($data);
		    		}elseif ($c=="U") {
		    			$this->Data_saksi_model->update($ID, $data);
		    		}
	        }

	        public function _arrayBerkas($ID,$ID_AM,$c){

	        	$data = array(
	        		'id_berkas' => $ID,
	        		'id_AM' => $ID_AM,
				    );

           		 if ($c=="I") {
		    			$this->Berkas_kematian_model->insert($data);
		    		}elseif ($c=="U") {
		    			$this->Berkas_kematian_model->update($ID, $data);
		    		}
	        }


		    public function _rules() 
		    {
		    	$this->form_validation->set_rules('j_nik', 'NIK', 'trim|required');
			$this->form_validation->set_rules('j_nama', 'Nama', 'trim|required');
			$this->form_validation->set_rules('j_jk', 'Jenis Kelamin', 'trim|required');
			$this->form_validation->set_rules('j_tmp_lahir', 'Tempat Lahir', 'trim|required');
			$this->form_validation->set_rules('j_umur', 'Umur', 'trim|required');
			$this->form_validation->set_rules('j_tgl_lahir', 'Tanggal Lahir', 'trim|required');
			//$this->form_validation->set_rules('j_agama', 'agama', 'trim|required');
			$this->form_validation->set_rules('j_pukul', 'Pukul Kematian', 'trim|required');
			$this->form_validation->set_rules('j_pekerjaan', 'pekerjaan', 'trim|required');
			$this->form_validation->set_rules('j_tgl_kematian', 'tgl kematian', 'trim|required');
			$this->form_validation->set_rules('j_menerangkan', 'menerangkan', 'trim|required');
			$this->form_validation->set_rules('j_anak_ke', 'anak ke', 'trim|required');
			$this->form_validation->set_rules('j_sebab_kematian', 'sebab kematian', 'trim|required');
			$this->form_validation->set_rules('j_tmp_kematian', 'tmp kematian', 'trim|required');
			$this->form_validation->set_rules('j_a_alamat', 'a alamat', 'trim|required');
			$this->form_validation->set_rules('j_a_desa', 'a desa', 'trim|required');
			$this->form_validation->set_rules('j_a_kecamatan', 'a kecamatan', 'trim|required');
			$this->form_validation->set_rules('j_a_kabkota', 'a kabkota', 'trim|required');

			$this->form_validation->set_rules('p_nik', 'nik', 'trim|required');
			$this->form_validation->set_rules('p_nama', 'nama', 'trim|required');
			$this->form_validation->set_rules('p_umur', 'umur', 'trim|required');
			$this->form_validation->set_rules('p_a_desa', 'desa', 'trim|required');
			$this->form_validation->set_rules('p_a_kecamatan', ' kecamatan', 'trim|required');
			$this->form_validation->set_rules('p_a_kabkota', ' kabkota', 'trim|required');
			$this->form_validation->set_rules('p_a_provinsi', ' provinsi', 'trim|required');
			//$this->form_validation->set_rules('p_pekerjaan', 'pekerjaan', 'trim|required');

			$this->form_validation->set_rules('i_nik', 'nik', 'trim|required');
			$this->form_validation->set_rules('i_tgl_lahir', 'tgl lahir', 'trim|required');
			$this->form_validation->set_rules('i_pekerjaan', 'pekerjaan', 'trim|required');
			$this->form_validation->set_rules('i_nama', 'nama', 'trim|required');
			$this->form_validation->set_rules('i_umur', 'umur', 'trim|required');
			$this->form_validation->set_rules('i_a_desa', 'desa', 'trim|required');
			$this->form_validation->set_rules('i_a_kecamatan', 'kecamatan', 'trim|required');
			$this->form_validation->set_rules('i_a_kabkota', 'kabkota', 'trim|required');
			$this->form_validation->set_rules('i_a_provinsi', 'provinsi', 'trim|required');
			

			$this->form_validation->set_rules('a_nik', 'nik', 'trim|required');
			$this->form_validation->set_rules('a_tgl_lahir', 'tgl lahir', 'trim|required');
			$this->form_validation->set_rules('a_pekerjaan', 'pekerjaan', 'trim|required');
			$this->form_validation->set_rules('a_nama', 'nama', 'trim|required');
			$this->form_validation->set_rules('a_umur', 'umur', 'trim|required');
			$this->form_validation->set_rules('a_a_desa', 'desa', 'trim|required');
			$this->form_validation->set_rules('a_a_kecamatan', 'kecamatan', 'trim|required');
			$this->form_validation->set_rules('a_a_kabkota', 'kabkota', 'trim|required');
			$this->form_validation->set_rules('a_a_provinsi', 'provinsi', 'trim|required');

			$this->form_validation->set_rules('s1_nik', 'nik', 'trim|required');
			$this->form_validation->set_rules('s1_nama', 'nama', 'trim|required');
			$this->form_validation->set_rules('s1_umur', 'umur', 'trim|required');
			$this->form_validation->set_rules('s1_a_alamat', 'alamat', 'trim|required');
			$this->form_validation->set_rules('s1_a_desa', 'desa', 'trim|required');
			$this->form_validation->set_rules('s1_a_kecamatan', 'kecamatan', 'trim|required');
			$this->form_validation->set_rules('s1_a_kabkota', 'kabkota', 'trim|required');
			$this->form_validation->set_rules('s1_a_provinsi', 'provinsi', 'trim|required');
			$this->form_validation->set_rules('s1_pekerjaan', 'pekerjaan', 'trim|required');

			$this->form_validation->set_rules('s2_nik', 'nik', 'trim|required');
			$this->form_validation->set_rules('s2_nama', 'nama', 'trim|required');
			$this->form_validation->set_rules('s2_umur', 'umur', 'trim|required');
			$this->form_validation->set_rules('s2_a_alamat', 'alamat', 'trim|required');
			$this->form_validation->set_rules('s2_a_desa', 'desa', 'trim|required');
			$this->form_validation->set_rules('s2_a_kecamatan', 'kecamatan', 'trim|required');
			$this->form_validation->set_rules('s2_a_kabkota', 'kabkota', 'trim|required');
			$this->form_validation->set_rules('s2_a_provinsi', 'provinsi', 'trim|required');
			$this->form_validation->set_rules('s2_pekerjaan', 'pekerjaan', 'trim|required');
			
			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
		    }
}