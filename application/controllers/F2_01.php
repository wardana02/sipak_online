<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class F2_01 extends CI_Controller
{

	public function __construct(){
			parent::__construct();

			$this->load->model('Approval_model');
			$this->load->model('Akta_kelahiran_model');
			$this->load->model('Data_bayi_model');
			$this->load->model('Data_saksi_model');
			$this->load->model('Data_pelapor_model');
			$this->load->model('Ortu_bayi_model');
			$this->load->model('Berkas_lahir_model');
			$this->load->model('Outbox_model');

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
		        	$link = 'edit/'.$this->session->userdata('s_idal');
		        	$DT = date("ymdhis");
		        	$TD = date("sihdmy");
		        	$IDBAYI = "DB".$DT;
		            $this->_arrayBayi($IDBAYI,"I");
		            $this->_arrayIbu($IDBAYI,"OT".$DT,"I");
		            $this->_arrayAyah($IDBAYI,"OT".$TD,"I");
		            $this->_arrayPelapor("PL".$DT,"I");
		            $this->_arraySaksi1("SI".$DT,"I");
		            $this->_arraySaksi2("SI".$TD,"I");
		            $this->_arrayBerkas("BL".$DT,$this->session->userdata('s_idal'),"I");

		            $this->session->set_flashdata('message', 'Create Record Success');
		            echo "<script language=\"Javascript\">\n";
					echo "window.alert('Data Formulir Pendaftaran Berhasil Disimpan')";
					header("refresh:0; $link");
					echo "</script>";
		        }

		    }

		    public function edit($id_al){
		    	//select ke data bayi,ortu,saksi,pelapor berdasarkan id_al, then redirect to f2_01
		    	$RE = base_url("home");
		    	$t = $this->session->userdata('s_idal');
		    	if ($id_al!=$t) {
		    		echo "<script language=\"Javascript\">\n";
					echo "window.alert('Data Formulir Pendaftaran Tidak Ditemukan #NS')";
					header("refresh:0;".$RE);
					echo "</script>";
		    	}
        		$row 	= $this->Data_bayi_model->get_by_al($id_al);
        		$IBU 	= $this->Ortu_bayi_model->get_by_bayi($row->id_bayi,"IBU");
        		$AYAH 	= $this->Ortu_bayi_model->get_by_bayi($row->id_bayi,"AYAH");
        		$S1 	= $this->Data_saksi_model->get_by_al($id_al,1);
        		$S2 	= $this->Data_saksi_model->get_by_al($id_al,2);
        		$PELAPOR = $this->Data_pelapor_model->get_by_al($id_al,2);
        		$akta  = $this->Akta_kelahiran_model->get_by_al($id_al);
        		$app = $this->Approval_model->get_join($id_al,"akta_kelahiran","id_al");
        		
 
        		$field 	 = $this->Data_bayi_model->getField();
		        $ortu 	 = $this->Ortu_bayi_model->getField();
		        $pelapor = $this->Data_pelapor_model->getField();
		        $saksi 	 = $this->Data_saksi_model->getField();

        		$i=0;$j=0;$k=0;$l=0;$m=0;$n=0;
        		
		        if ($row) {
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
		        			'jenis'		=> "Akta Kelahiran",
		        			);
		        		$data['conten'] = "frontend/info/terkunci";
		        		$this->load->view('backend/dashboard/index2', $data);
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

		        	}else{

		        		
		        		foreach ($row as $key => $value) { $data["$field[$i]"] = set_value("$field[$i]", $value); $i++;}
		        		foreach ($IBU as $key => $value) { $data["i_$ortu[$j]"] = set_value("i_$ortu[$j]", $value); $j++;}
		        		foreach ($AYAH as $key => $value) { $data["a_$ortu[$k]"] = set_value("a_$ortu[$k]", $value); $k++;}
		        		foreach ($PELAPOR as $key => $value) { $data["p_$pelapor[$n]"] = set_value("p_$pelapor[$n]", $value); $n++;}
		        		foreach ($S1 as $key => $value) { $data["s1_$saksi[$l]"] = set_value("s1_$saksi[$l]", $value); $l++;}
		        		foreach ($S2 as $key => $value) { $data["s2_$saksi[$m]"] = set_value("s2_$saksi[$m]", $value); $m++;}
		 				
		 				$data['app'] = $app;
		        		$data['button']		= 'Update';
		        		$data['selesai'] = site_url('approval/create_action/'.$id_al.'/'.$akta->nik_pengaju);
		        		$data['action'] = site_url('F2_01/update_action');
		        		$data['berkas'] = site_url('F2_01/berkas');
						$data['conten'] = "frontend/aktalahir/akta_lahir";
						$data['B']		 = "active";
						$data['B1']		 = "active";
						$data['ID_AL']   = $this->session->userdata('s_idal');
						$data['PENGAJU']  = $this->session->userdata('s_nama');
						$data['TELEPON']  = $this->session->userdata('s_hp');
						$data['NODAFTAR']  = $this->session->userdata('s_no_daftar');

		            $this->load->view('backend/dashboard/index2', $data);
		        	}
		        } else {
		            echo "<script language=\"Javascript\">\n";
				echo "window.alert('SData Formulir Pendaftaran Tidak Ditemukan #NF')";
				header("refresh:0;".$RE);
				echo "</script>";
		        }
		    }

		    public function update_action() 
		    {
		        $this->_rules();
		        if ($this->form_validation->run() == FALSE) {
		            $this->edit($this->input->post('id_al'));
		        } else {
		           	$IDBAYI = $this->input->post('id_bayi');
		           	$ID_IBU = $this->input->post('id_ortu1');
		           	$ID_AYAH = $this->input->post('id_ortu2');
		           	$IDPEL = $this->input->post('id_pelapor');
		           	$IDS1 = $this->input->post('id_saksi1');
		           	$IDS2 = $this->input->post('id_saksi2');
		           	$this->_arrayBayi($IDBAYI,"U");
		            $this->_arrayIbu($IDBAYI,$ID_IBU,"U");
		            $this->_arrayAyah($IDBAYI,$ID_AYAH,"U");
		            $this->_arrayPelapor($IDPEL,"U");
		            $this->_arraySaksi1($IDS1,"U");
		            $this->_arraySaksi2($IDS2,"U");

		            $link = site_url('F2_01/edit/'.$this->session->userdata('s_idal'));
		            $this->session->set_flashdata('message', "
		                <div class='alert alert-success alert-dismissable'>
		              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
		                <h4><i class='glyphicon glyphicon-ok'></i> Berhasil!</h4>
		                   Data Formulir Akta Anda Telah Diperbaharui<br>
		                   <h4>Lanjut Ke Tahap Unggah Berkas Anda?</h4>
		                   
		            </div>
		                ");
		            redirect(site_url("F2_01/edit/".$this->session->userdata('s_idal')));
		        }
		    }

		    public function _arrayBayi($IDBAYI,$c)
		    {
		    	$data = array(
		            	'id_bayi' => $IDBAYI ,
						'id_AL' => $this->session->userdata('s_idal'),
						'nama' => $this->input->post('nama',TRUE),
						'jk' => $this->input->post('jk',TRUE),
						'tmp_lahir' => $this->input->post('tmp_lahir',TRUE),
						'tmp_kelahiran' => $this->input->post('tmp_kelahiran',TRUE),
						'tgl_kelahiran' => $this->input->post('tgl_kelahiran',TRUE),
						'hari_kelahiran' => $this->input->post('hari_kelahiran',TRUE),
						'panjang_bayi' => $this->input->post('panjang_bayi',TRUE),
						'berat_bayi' => $this->input->post('berat_bayi',TRUE),
						'penolong' => $this->input->post('penolong',TRUE),
						'kelahiran_ke' => $this->input->post('kelahiran_ke',TRUE),
						'jenis_kelahiran' => $this->input->post('jenis_kelahiran',TRUE),
						'pukul' => $this->input->post('pukul',TRUE),
					    );
		    		if ($c=="I") {
		    			$this->Data_bayi_model->insert($data);
		    		}elseif ($c=="U") {
		    			$this->Data_bayi_model->update($IDBAYI, $data);
		    		}
		            
		            
		    }

		    public function _arrayIbu($IDBAYI,$ID,$c)
		    {
		    	$data = array(
		    		'id_ortu' => $ID,
					'id_bayi' => $IDBAYI,
					'nik' => $this->input->post('i_nik',TRUE),
					'nama' => $this->input->post('i_nama',TRUE),
					'tgl_lahir' => $this->input->post('i_tgl_lahir',TRUE),
					'umur' => $this->input->post('i_umur',TRUE),
					'pekerjaan' => $this->input->post('i_pekerjaan',TRUE),
					'a_alamat' => $this->input->post('i_a_alamat',TRUE),
					'a_desa' => $this->input->post('i_a_desa',TRUE),
					'a_kecamatan' => $this->input->post('i_a_kecamatan',TRUE),
					'a_kabkota' => $this->input->post('i_a_kabkota',TRUE),
					'a_provinsi' => $this->input->post('i_a_provinsi',TRUE),
					'tgl_pencatatan_kawin' => $this->input->post('tgl_pencatatan_kawin',TRUE),
					'status' => "IBU",
				    );
           		 
           		 if ($c=="I") {
		    			$this->Ortu_bayi_model->insert($data);
		    		}elseif ($c=="U") {
		    			$this->Ortu_bayi_model->update($ID, $data);
		    		}
		    }

		    public function _arrayAyah($IDBAYI,$ID,$c)
		    {
		    	$data = array(
		    		'id_ortu' => $ID,
					'id_bayi' => $IDBAYI,
					'nik' => $this->input->post('a_nik',TRUE),
					'nama' => $this->input->post('a_nama',TRUE),
					'tgl_lahir' => $this->input->post('a_tgl_lahir',TRUE),
					'umur' => $this->input->post('a_umur',TRUE),
					'pekerjaan' => $this->input->post('a_pekerjaan',TRUE),
					'a_alamat' => $this->input->post('a_a_alamat',TRUE),
					'a_desa' => $this->input->post('a_a_desa',TRUE),
					'a_kecamatan' => $this->input->post('a_a_kecamatan',TRUE),
					'a_kabkota' => $this->input->post('a_a_kabkota',TRUE),
					'a_provinsi' => $this->input->post('a_a_provinsi',TRUE),
					'status' => "AYAH",
				    );
           		 if ($c=="I") {
		    			$this->Ortu_bayi_model->insert($data);
		    		}elseif ($c=="U") {
		    			$this->Ortu_bayi_model->update($ID, $data);
		    		}
		    }

		    public function _arrayPelapor($ID,$c)
		    {

			    $data = array(
			    	'id_pelapor' => $ID,
					'id_akta' => $this->session->userdata('s_idal'),
					'nik' => $this->input->post('p_nik',TRUE),
					'nama' => $this->input->post('p_nama',TRUE),
					'umur' => $this->input->post('p_umur',TRUE),
					'a_desa' => $this->input->post('p_a_desa',TRUE),
					'a_alamat' => $this->input->post('p_a_alamat',TRUE),
					'a_kecamatan' => $this->input->post('p_a_kecamatan',TRUE),
					'a_kabkota' => $this->input->post('p_a_kabkota',TRUE),
					'a_provinsi' => $this->input->post('p_a_provinsi',TRUE),
					'jk' => $this->input->post('p_jk',TRUE),
					'pekerjaan' => $this->input->post('p_pekerjaan',TRUE),
				    );

	         
	            	if ($c=="I") {
		    			$this->Data_pelapor_model->insert($data);
		    		}elseif ($c=="U") {
		    			$this->Data_pelapor_model->update($ID, $data);
		    		}
	        }

	        public function _arraySaksi1($ID,$c){
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

	        public function _arrayBerkas($ID,$ID_AL,$c){
	        	$data = array(
	        		'id_berkas' => $ID,
	        		'id_AL' => $ID_AL,
				    );

           		 if ($c=="I") {
		    			$this->Berkas_lahir_model->insert($data);
		    		}elseif ($c=="U") {
		    			$this->Berkas_lahir_model->update($ID, $data);
		    		}
	        }


		    public function _rules() 
		    {
			$this->form_validation->set_rules('nama', 'nama', 'required');
			$this->form_validation->set_rules('jk', 'jenis kelamin', 'required');
			$this->form_validation->set_rules('tmp_lahir', 'tmp lahir', 'required');
			$this->form_validation->set_rules('tmp_kelahiran', 'tempat kelahiran', 'required');
			$this->form_validation->set_rules('tgl_kelahiran', 'tanggal kelahiran', 'required');
			$this->form_validation->set_rules('panjang_bayi', 'panjang bayi', 'required');
			$this->form_validation->set_rules('berat_bayi', 'berat bayi', 'required');
			$this->form_validation->set_rules('penolong', 'penolong', 'required');
			$this->form_validation->set_rules('kelahiran_ke', 'kelahiran ke', 'required');
			$this->form_validation->set_rules('jenis_kelahiran', 'jenis kelahiran', 'required');
			$this->form_validation->set_rules('pukul', 'pukul', 'required');

			$this->form_validation->set_rules('p_nik', 'nik', 'trim|required');
			$this->form_validation->set_rules('p_nama', 'nama', 'trim|required');
			$this->form_validation->set_rules('p_umur', 'umur', 'trim|required|numeric');
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
			$this->form_validation->set_rules('tgl_pencatatan_kawin', 'tgl pencatatan kawin', 'trim|required');


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