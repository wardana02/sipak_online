<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class F2_12 extends CI_Controller
{

	public function __construct(){
			parent::__construct();

			$this->load->model('Akta_perkawinan_model','akta',TRUE);
			$this->load->model('Data_mempelai_model','mempelai',TRUE);
			$this->load->model('Data_saksi_model','saksi',TRUE);
			$this->load->model('Data_anak_model','anak',TRUE);
			$this->load->model('Ortu_mempelai_model','ortu',TRUE);
			$this->load->model('Berkas_perkawinan_model','berkas',TRUE);
			$this->load->model('Data_perkawinan_model','perkawinan',TRUE);
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

		public function create_action(){
		$this->_rules();

		        if (FALSE) {
		            $this->index();
		        } else {
		        	$link = 'edit/'.$this->session->userdata('s_idap');
		        	$DT = date("ymdhis");
		        	$TD = date("sihdmy");
		        	$IDM_S = "DM".$DT;
		        	$IDM_I = "DM".$TD;

		            $this->_arrayMempelai($IDM_S,'I',"SUAMI",'s');//DATA SUAMI
		            $this->_arrayOrtu($IDM_S,"OTS".$DT,"I","AYAH","as");//DATA AYAH SUAMI
		            $this->_arrayOrtu($IDM_S,"OTS".$TD,"I","IBU","is");//DATA IBU SUAMI

		            $this->_arrayMempelai($IDM_I,'I',"ISTRI",'i');//DATA ISTRI
		            $this->_arrayOrtu($IDM_I,"OTI".$DT,"I","AYAH","ai");//DATA AYAH SUAMI
		            $this->_arrayOrtu($IDM_I,"OTI".$TD,"I","IBU","ii");//DATA IBU SUAMI

		            $this->_arrayPerkawinan("DP".$DT,"I");
		            $this->_arraySaksi("SI".$DT,"I",1);
		            $this->_arraySaksi("SI".$TD,"I",2);
		            $this->_arrayBerkas("BP".$DT,$this->session->userdata('s_idap'),"I");

		            $this->session->set_flashdata('message', '');
		            echo "<script language=\"Javascript\">\n";
					echo "window.alert('Data Pendaftaran Berhasil Disimpan, Silahkan Lengkapi Formulir')";
					header("refresh:0; $link");
					echo "</script>";
		        }

		    }

		    public function edit($id){

		    	//select ke data bayi,ortu,saksi,pelapor berdasarkan id_al, then redirect to f2_01
		    	$re = base_url("home/a_kawin");
		    	$t = $this->session->userdata('s_idap');

		    	if ($id!=$t) {
		    		echo "<script language=\"Javascript\">\n";
					echo "window.alert('Data Formulir Pendaftaran Tidak Ditemukan #ES')";
					header("refresh:0; $re");
					echo "</script>";
		    	}

        		$row 	= $this->mempelai->get_by_al($id,'SUAMI');//data suami
        		$IBU_S 	= $this->ortu->get_by_mempelai($row->id_mempelai,"IBU");//data ibu=>suami
        		$AYAH_S	= $this->ortu->get_by_mempelai($row->id_mempelai,"AYAH");//data ayah=>suami

        		$row_istri= $this->mempelai->get_by_al($id,'ISTRI');//data istri
        		$IBU_I 	= $this->ortu->get_by_mempelai($row_istri->id_mempelai,"IBU");//data ibu=>istri
        		$AYAH_I	= $this->ortu->get_by_mempelai($row_istri->id_mempelai,"AYAH");//data ayah=>istri

        		$S1 	= $this->saksi->get_by_al($id,1);//data saksi 1
        		$S2 	= $this->saksi->get_by_al($id,2);//data saksi 2
        		$PERKAWINAN = $this->perkawinan->get_by_al($id);
        		$app = $this->app->get_join($id,"akta_perkawinan","id_ap");
        		$ANAK = $this->anak->get_by_al($PERKAWINAN->id_dataper);
        		//print_r($ANAK);exit();
        		

        		$field 	 = $this->mempelai->getField();
		        $ortu 	 = $this->ortu->getField();
		        $perkawinan = $this->perkawinan->getField();
		        $saksi 	 = $this->saksi->getField();
		        $anak 	 = $this->anak->getField();

        		
        		
		        if ($row) {
		        	if (($app->locked=='1')&&($app->progres!="diambil")) {
		        		$data = array(
		        			'header'	=> "Akta Perkawinan Online",
		        			'hasil'		=>  $app,
		        			'nama'		=>	$app->nama,
		        			'tgl_daftar'=>	$app->tgl_registrasi,
		        			'tgl_ambil'	=>	$app->tgl_ambil,
		        			's_no_daftar'=>	$app->no_registrasi,
		        			'oleh'		=>	$app->oleh_ambil,
		        			'denda'		=>	$app->denda,
		        			'jenis'		=> "Akta Perkawinan #VE",
		        			);
		        		$data['conten'] = "frontend/info/terkunci";
		        		$this->load->view('backend/dashboard/index2', $data);
		        	}
		        	else if ($app->progres=="diambil") {
		        		$data = array(
		        			'header'	=> "Akta Perkawinan Online",
		        			'nama'		=>	$app->nama,
		        			'tgl_daftar'=>	$app->tgl_registrasi,
		        			'tgl_ambil'	=>	$app->tgl_ambil,
		        			's_no_daftar'=>	$app->no_registrasi,
		        			'oleh'		=>	$app->oleh_ambil,
		        			'denda'		=>	$app->denda,
		        			'jenis'		=> "Akta Perkawinan #AM",
		        			);
		        		$data['conten'] = "frontend/info/sudah_diambil";
		        		$this->load->view('backend/dashboard/index2', $data);

		        	}else//if (($app->progres==NULL) && ($app->locked=='0')){
		        		{
		        		$i=0;$j=0;$k=0;
		        		/* DATA SUAMI DAN ORANGTUANYA */
		        		foreach ($row as $key => $value) { $data["s_$field[$i]"] = set_value("s_$field[$i]", $value); $i++;}
		        		foreach ($IBU_S as $key => $value) { $data["is_$ortu[$j]"] = set_value("is_$ortu[$j]", $value); $j++;}
		        		foreach ($AYAH_S as $key => $value) { $data["as_$ortu[$k]"] = set_value("as_$ortu[$k]", $value); $k++;}


		        		$i=0;$j=0;$k=0;
		        		/* DATA ISTRI DAN ORANGTUANYA */
		        		foreach ($row_istri as $key => $value) { $data["i_$field[$i]"] = set_value("i_$field[$i]", $value); $i++;}
		        		foreach ($IBU_I as $key => $value) { $data["ii_$ortu[$j]"] = set_value("ii_$ortu[$j]", $value); $j++;}
		        		foreach ($AYAH_I as $key => $value) { $data["ai_$ortu[$k]"] = set_value("ai_$ortu[$k]", $value); $k++;}

		        		$l=0;$m=0;$n=0;
		        		foreach ($PERKAWINAN as $key => $value) { $data["$perkawinan[$n]"] = set_value("$perkawinan[$n]", $value); $n++;}
		        		foreach ($S1 as $key => $value) { $data["s1_$saksi[$l]"] = set_value("s1_$saksi[$l]", $value); $l++;}
		        		foreach ($S2 as $key => $value) { $data["s2_$saksi[$m]"] = set_value("s2_$saksi[$m]", $value); $m++;}
		 				
		 				$data['ANAK']	= $ANAK;
		        		$data['button']		= 'Update';
		        		$data['action'] = site_url('f2_12/update_action');
		        		$data['berkas'] = site_url('b2_12/berkas');
						$data['conten'] = "frontend/aktaperkawinan/akta_perkawinan";
						$data['B']		 = "active";
						$data['B4']		 = "active";
						$data['ID_AP']   = $this->session->userdata('s_idap');
						$data['PENGAJU']  = $this->session->userdata('s_nama');
						$data['TELEPON']  = $this->session->userdata('s_hp');
						$data['NODAFTAR']  = $this->session->userdata('s_no_daftar');
						//print_r($data);exit();

		            $this->load->view('backend/dashboard/index2', $data);
		        	}
		        } else {
		        	
		            echo "<script language=\"Javascript\">\n";
					echo "window.alert('Data Formulir Pendaftaran Tidak Ditemukan #ENF')";
					header("refresh:0; $re");
					echo "</script>";
		        }
		    }

		    public function jum_anak(){
		    	$data['jumlah'] = $this->input->post('jml_anak');
		    
		    		$this->load->view('frontend/aktaperkawinan/select_anak', $data);

		    }

		    public function hapus_anak($id) 
			    {
			        $row = $this->anak->get_by_id($id);

			        if ($row) {
			            $this->anak->delete($id);
			            $this->session->set_flashdata('message', "
		                <div class='alert alert-success alert-dismissable'>
		              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
		                <h4><i class='icon fa fa-ban'></i> Berhasil!</h4>
		                   Data Pengakuan Anak Berhasil Dihapus<br>
		                   
		            </div>
		                ");
		            redirect(site_url("F2_12/edit/".$this->session->userdata('s_idap')));
			        } else {
			            $this->session->set_flashdata('message', "
		                <div class='alert alert-danger alert-dismissable'>
		              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
		                <h4><i class='icon fa fa-ban'></i> Gagal!</h4>
		                   Data Anak Tidak Ditemukan<br>
		                   
		            </div>
		                ");
		                redirect(site_url("F2_12/edit/".$this->session->userdata('s_idap')));
			        }
			    }

		    public function update_action() 
		    {
		    	$this->_rules();//$this->form_validation->run() == 
		        if ($this->form_validation->run() == FALSE) {
		            $this->edit($this->session->userdata('s_idap'));
		        } else {
		        	//echo "MASUK";
		        	
		        	$IDAKTA = $this->input->post('id_ap');

		           	 $IDM_S = $this->input->post('id_ms');
		           	 $ID_AS = $this->input->post('id_as');
		           	 $ID_IS = $this->input->post('id_is');

		             $IDM_I = $this->input->post('id_mi');
		           	 $ID_AI = $this->input->post('id_ai');
		           	 $ID_II = $this->input->post('id_ii');
		           	 $JUMLAH = $this->input->post('jum');

		           	 $IDDATAPER = $this->input->post('id_perkawinan');

		           	 $IDS1 = $this->input->post('id_saksi1');
		           	$IDS2 = $this->input->post('id_saksi2');
		           	

		           	$this->_arrayMempelai($IDM_S,'U',"SUAMI",'s');//DATA SUAMI
		            $this->_arrayOrtu($IDM_S,$ID_AS,"U","AYAH","as");//DATA AYAH SUAMI
		            $this->_arrayOrtu($IDM_S,$ID_IS,"U","IBU","is");//DATA IBU SUAMI

		            $this->_arrayMempelai($IDM_I,'U',"ISTRI",'i');//DATA ISTRI
		            $this->_arrayOrtu($IDM_I,$ID_AI,"U","AYAH","ai");//DATA AYAH SUAMI
		            $this->_arrayOrtu($IDM_I,$ID_II,"U","IBU","ii");//DATA IBU SUAMI

		            $this->_arrayPerkawinan($IDDATAPER,"U");
		            $this->_arraySaksi($IDS1,"U",1);
		            $this->_arraySaksi($IDS2,"U",2);

		            for ($i=1; $i<=$JUMLAH ; $i++) { 
		            	$this->_arrayAnak("DTA".date("is")."".$i,$i);
		            }

		            $link = site_url('F2_12/edit/'.$IDAKTA);
		            $this->session->set_flashdata('message', "
		                <div class='alert alert-success alert-dismissable'>
		                <h4><i class='glyphicon glyphicon-ok'></i> Berhasil!</h4>
		                   Data Formulir Akta Anda Telah Diperbaharui<br>
		                   <h4>Lanjut Ke Tahap Unggah Berkas Anda? Klik Pada Tombol 2. Berkas Akta Perkawinan </h4>
		                   
		            </div>
		                ");
		            redirect(site_url("F2_12/edit/".$this->session->userdata('s_idap')));
		        }
		    }

		    public function _arrayMempelai($IDMEMPELAI,$c,$status,$s)
		    {
		    	$field_mempelai 	 = $this->mempelai->getField();

		    		foreach ($field_mempelai as $key => $value) {
		    			$r = $s."_".$value;
		    			$data[$value] = $this->input->post("$r",TRUE);
		    		}
		    			$data['id_mempelai'] = $IDMEMPELAI;
		    			$data['status_mempelai'] = $status;
		    			$data['id_ap'] = $this->session->userdata('s_idap');
		    		if ($c=="I") {
		    			$this->mempelai->insert($data);
		    		}elseif ($c=="U") {
		    			$this->mempelai->update($IDMEMPELAI, $data);
		    		}
		            
		            
		    }

		    public function _arrayOrtu($IDMEMPELAI,$ID,$c,$status,$s)
		    {

		    	$field 	 = $this->ortu->getField();	
	
		    	foreach ($field as $key => $value) {
		    			$r = $s."_".$value;
		    			$data[$value] = $this->input->post("$r",TRUE);
		    		}
		    		$data['id_ortu'] = $ID;
		    		$data['id_mempelai'] = $IDMEMPELAI;
		    		$data['status'] = $status;
           		 
           		 if ($c=="I") {
		    			$this->ortu->insert($data);
		    		}elseif ($c=="U") {
		    			$this->ortu->update($ID, $data);
		    		}
		    }

		    public function _arrayPerkawinan($ID,$c)
		    {
		    	$perkawinan 		 = $this->perkawinan->getField();
		    	foreach ($perkawinan as $key => $value) {
		    			$data[$value] = $this->input->post("$value",TRUE);
		    		}
		    		$data['id_dataper'] = $ID;
		    		$data['id_ap'] = $this->session->userdata('s_idap');
		    		//print_r($data);exit();
	         
	            	if ($c=="I") {
		    			$this->perkawinan->insert($data);
		    		}elseif ($c=="U") {
		    			$this->perkawinan->update($ID, $data);
		    		}
	        }

	        public function _arraySaksi($ID,$c,$n){
	        	$saksi 	 		 = $this->saksi->getField();
	        	$data = array(
	        		'id_saksi' => $ID,
					'id_akta' => $this->session->userdata('s_idap'),
					'nik' => $this->input->post("s".$n."_nik",TRUE),
					'nama' => $this->input->post("s".$n."_nama",TRUE),
					'tmp_lahir' => $this->input->post("s".$n."_tmp_lahir",TRUE),
					'tgl_lahir' => $this->input->post("s".$n."_tgl_lahir",TRUE),
					'agama' => $this->input->post("s".$n."_agama",TRUE),
					'nama_organisasi' => $this->input->post("s".$n."_nama_organisasi",TRUE),
					'a_alamat' => $this->input->post("s".$n."_a_alamat",TRUE),
					'a_desa' => $this->input->post("s".$n."_a_desa",TRUE),
					'a_kecamatan' => $this->input->post("s".$n."_a_kecamatan",TRUE),
					'a_kabkota' => $this->input->post("s".$n."_a_kabkota",TRUE),
					'a_provinsi' => $this->input->post("s".$n."_a_provinsi",TRUE),
					'pekerjaan' => $this->input->post("s".$n."_pekerjaan",TRUE),
					'ke'	=> $n,
				    );

           		  if ($c=="I") {
		    			$this->saksi->insert($data);
		    		}elseif ($c=="U") {
		    			$this->saksi->update($ID, $data);
		    		}
	        }


	        public function _arrayBerkas($ID,$ID_AP,$c){

	        	$data = array(
	        		'id_berkas' => $ID,
	        		'id_ap' => $ID_AP,
				    );

           		 if ($c=="I") {
		    			$this->berkas->insert($data);
		    		}elseif ($c=="U") {
		    			$this->berkas->update($ID, $data);
		    		}
	        }

	        public function _arrayAnak($ID,$NO) 
		    {
		       
		            $data = array(
				'id_dataanak' => $ID,
				'id_dataper' => $this->input->post('id_perkawinan',TRUE),
				'nama_anak' => $this->input->post("nama_anak_".$NO,TRUE),
				'nomor_akta' => $this->input->post("nomor_akta_".$NO,TRUE),
				'tgl_akta' => $this->input->post("tgl_akta_".$NO,TRUE),
			    );
		            $this->anak->insert($data);
		        
		    }


		    public function _rules() 
		    {
		    	$k = array(0 => 'as_',1 => 'is_',2 => 'ai_',3 => 'ii_', );

		    	for ($i=0; $i <4 ; $i++) { 
		    		$this->form_validation->set_rules($k[$i].'nik', 'nik', 'trim|required');
					$this->form_validation->set_rules($k[$i].'nama', 'nama', 'trim|required');
					$this->form_validation->set_rules($k[$i].'agama', 'agama', 'trim|required');
					$this->form_validation->set_rules($k[$i].'tmp_lahir', 'tmp lahir', 'trim|required');
					$this->form_validation->set_rules($k[$i].'tgl_lahir', 'tgl lahir', 'trim|required');
					$this->form_validation->set_rules($k[$i].'a_desa', 'a desa', 'trim|required');
					$this->form_validation->set_rules($k[$i].'a_kecamatan', 'a kecamatan', 'trim|required');
					$this->form_validation->set_rules($k[$i].'a_kabkota', 'a kabkota', 'trim|required');
					$this->form_validation->set_rules($k[$i].'a_provinsi', 'a provinsi', 'trim|required');
					$this->form_validation->set_rules($k[$i].'pekerjaan', 'pekerjaan', 'trim|required');
		    	}

		    	$s = array(0 => 's_',1 => 'i_',);
		    	for ($i=0; $i <2 ; $i++) { 
				$this->form_validation->set_rules($s[$i].'no_kk', 'no kk', 'trim|required');
				$this->form_validation->set_rules($s[$i].'nik', 'nik', 'trim|required');
				$this->form_validation->set_rules($s[$i].'nama', 'nama', 'trim|required');
				$this->form_validation->set_rules($s[$i].'tmp_lahir', 'tmp lahir', 'trim|required');
				$this->form_validation->set_rules($s[$i].'tgl_lahir', 'tgl lahir', 'trim|required');
				$this->form_validation->set_rules($s[$i].'pendidikan_terakhir', 'pendidikan terakhir', 'trim|required');
				$this->form_validation->set_rules($s[$i].'agama', 'agama', 'trim|required');
				$this->form_validation->set_rules($s[$i].'pekerjaan', 'pekerjaan', 'trim|required');
				$this->form_validation->set_rules($s[$i].'anak_ke', 'anak ke', 'trim|required');
				$this->form_validation->set_rules($s[$i].'status_sebelum_nikah', 'status sebelum nikah', 'trim|required');
				$this->form_validation->set_rules($s[$i].'perkawinan_ke', 'perkawinan ke', 'trim|required');
				$this->form_validation->set_rules($s[$i].'a_alamat', 'Nama Dukuh/Jalan', 'trim|required');
				$this->form_validation->set_rules($s[$i].'a_desa', 'Nama Desa/Kelurahan', 'trim|required');
				$this->form_validation->set_rules($s[$i].'a_kecamatan', 'Nama Kecamatan', 'trim|required');
				$this->form_validation->set_rules($s[$i].'a_kabkota', 'Kabupaten/Kota', 'trim|required');
			}
			

			$this->form_validation->set_rules('tgl_pemberkatan', 'tgl pemberkatan', 'trim|required');
			$this->form_validation->set_rules('hari_lapor', 'hari lapor', 'trim|required');
			$this->form_validation->set_rules('tgl_lapor', 'tgl lapor', 'trim|required');
			$this->form_validation->set_rules('pukul', 'pukul', 'trim|required');
			$this->form_validation->set_rules('agama', 'agama', 'trim|required');
			$this->form_validation->set_rules('nama_peradilan', 'nama peradilan', 'trim|required');
			$this->form_validation->set_rules('nomor_putusan', 'nomor putusan', 'trim|required');
			$this->form_validation->set_rules('tgl_putusan', 'tgl putusan', 'trim|required');
			$this->form_validation->set_rules('nama_pemuka', 'nama pemuka', 'trim|required');

			$this->form_validation->set_rules('s1_nik', 'nik', 'trim|required');
			$this->form_validation->set_rules('s1_nama', 'nama', 'trim|required');
			$this->form_validation->set_rules('s1_a_alamat', 'alamat', 'trim|required');
			$this->form_validation->set_rules('s1_a_desa', 'desa', 'trim|required');
			$this->form_validation->set_rules('s1_a_kecamatan', 'kecamatan', 'trim|required');
			$this->form_validation->set_rules('s1_a_kabkota', 'kabkota', 'trim|required');
			$this->form_validation->set_rules('s1_a_provinsi', 'provinsi', 'trim|required');
			$this->form_validation->set_rules('s1_pekerjaan', 'pekerjaan', 'trim|required');

			$this->form_validation->set_rules('s2_nik', 'nik', 'trim|required');
			$this->form_validation->set_rules('s2_nama', 'nama', 'trim|required');
			$this->form_validation->set_rules('s2_a_alamat', 'alamat', 'trim|required');
			$this->form_validation->set_rules('s2_a_desa', 'desa', 'trim|required');
			$this->form_validation->set_rules('s2_a_kecamatan', 'kecamatan', 'trim|required');
			$this->form_validation->set_rules('s2_a_kabkota', 'kabkota', 'trim|required');
			$this->form_validation->set_rules('s2_a_provinsi', 'provinsi', 'trim|required');
			$this->form_validation->set_rules('s2_pekerjaan', 'pekerjaan', 'trim|required');
			
			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
		    }
}