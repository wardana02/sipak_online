<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class F2_19 extends CI_Controller
{

	public function __construct(){
			parent::__construct();

			$this->load->model('Akta_perceraian_model','akta',TRUE);
			$this->load->model('Data_bercerai_model','mempelai',TRUE);
			$this->load->model('Berkas_cerai_model','berkas',TRUE);
			$this->load->model('Data_perceraian_model','perceraian',TRUE);
			$this->load->model('Outbox_model','outbox',TRUE);
			$this->load->model('Approval_model','app',TRUE);

       		$this->load->library('form_validation');
       		$this->load->helper('string');
       		$this->load->helper('sms');
       		$R = $this->session->userdata('on_register');
       		if ($R == FALSE) {
    			//redirect('error404','refresh');
    		}
			
		}

		public function create_action(){
		$this->_rules();

		        if (FALSE) {
		            $this->index();
		        } else {
		        	$DT = date("ymdhis");
		        	$TD = date("sihdmy");
		        	$IDM_S = "DB".$DT;//14 KARAKTER
		        	$IDM_I = "DB".$TD;

		            $this->_arrayMempelai($IDM_S,'I',"SUAMI",'s');//DATA SUAMI
		            $this->_arrayMempelai($IDM_I,'I',"ISTRI",'i');//DATA ISTRI
		            $this->_arrayPerceraian("DC".$DT,"I");
		            $this->_arrayBerkas("BC".$DT,$this->session->userdata('s_idac'),"I");

		            $this->session->set_flashdata('message', 'Create Record Success');
		            echo "<script language=\"Javascript\">\n";
					echo "window.alert('Data Pendaftaran Berhasil Disimpan, Silahkan Lengkapi Formulir')";
					echo "</script>";

		            $this->edit($this->session->userdata('s_idac'));
		        }

		    }

		    public function edit($id){
		    	//select ke data bayi,ortu,saksi,pelapor berdasarkan id_al, then redirect to f2_01
		    	$re = base_url("home/a_cerai");
		    	$t = $this->session->userdata('s_idac');
		    	if ($id!=$t) {
		    		echo "<script language=\"Javascript\">\n";
					echo "window.alert('Data Formulir Pendaftaran Tidak Ditemukan #ES')";
					header("refresh:0; $re");
					echo "</script>";
		    	}
        		$row 	= $this->mempelai->get_by_al($id,'SUAMI');//data suami
        		$row_istri= $this->mempelai->get_by_al($id,'ISTRI');//data istri
        		$PERCERAIAN = $this->perceraian->get_by_al($id);


        		$app = $this->app->get_join($id,"akta_perceraian","id_ac");
        		//print_r($ANAK);exit();
        		
        		$field 	 = $this->mempelai->getField();
		        $perceraian = $this->perceraian->getField();
        		
        		//print_r($app);exit();
        		
		        if ($row) {
		        	if (($app->locked=='1')&&($app->progres!="diambil")) {
		        		$data = array(
		        			'header'	=> "Akta Perceraian Online",
		        			'hasil'		=>  $app,
		        			'nama'		=>	$app->nama,
		        			'tgl_daftar'=>	$app->tgl_registrasi,
		        			'tgl_ambil'	=>	$app->tgl_ambil,
		        			's_no_daftar'=>	$app->no_registrasi,
		        			'oleh'		=>	$app->oleh_ambil,
		        			'jenis'		=> "Akta Perceraian #VE",
		        			);
		        		$data['conten'] = "frontend/info/terkunci";
		        		$this->load->view('backend/dashboard/index2', $data);
		        	}
		        	elseif ($app->progres=="diambil") {
		        		$data = array(
		        			'header'	=> "Akta Perceraian Online",
		        			'nama'		=>	$app->nama,
		        			'tgl_daftar'=>	$app->tgl_registrasi,
		        			'tgl_ambil'	=>	$app->tgl_ambil,
		        			's_no_daftar'=>	$app->no_registrasi,
		        			'oleh'		=>	$app->oleh_ambil,
		        			'jenis'		=> "Akta Perceraian #AM",
		        			);
		        		$data['conten'] = "frontend/info/sudah_diambil";
		        		$this->load->view('backend/dashboard/index2', $data);

		        	}else//if (($app->progres==NULL) && ($app->locked=='0')){
		        		{$i=0;$j=0;$k=0;
		        		/* DATA SUAMI */
		        		foreach ($row as $key => $value) { $data["s_$field[$i]"] = set_value("s_$field[$i]", $value); $i++;}
		        		
		        		$i=0;$j=0;$k=0;
		        		/* DATA ISTRI*/
		        		foreach ($row_istri as $key => $value) { $data["i_$field[$i]"] = set_value("i_$field[$i]", $value); $i++;}
		        		
		        		$l=0;$m=0;$n=0;
		        		foreach ($PERCERAIAN as $key => $value) { $data["$perceraian[$n]"] = set_value("$perceraian[$n]", $value); $n++;}
		        		
		        		$data['button']		= 'Update';
		        		$data['action'] = site_url('f2_19/update_action');
		        		$data['berkas'] = site_url('b2_19/berkas');
						$data['conten'] = "frontend/aktaperceraian/akta_perceraian";
						$data['B']		 = "active";
						$data['B5']		 = "active";
						$data['ID_AC']   = $this->session->userdata('s_idac');
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

		    public function update_action() 
		    {
		    	$this->_rules();//$this->form_validation->run() == 
		        if (FALSE) {
		        	echo "GAGAL";
		            $this->edit($this->session->userdata('s_idap'));
		        } else {
		        	//echo "MASUK";
		        	
		        	 $IDAKTA = $this->input->post('id_ac');

		           	 $IDM_S = $this->input->post('id_ms');
		             $IDM_I = $this->input->post('id_mi');
		           	 $IDDATAPER = $this->input->post('id_perceraian');
		           	

		           	$this->_arrayMempelai($IDM_S,'U',"SUAMI",'s');//DATA SUAMI

		            $this->_arrayMempelai($IDM_I,'U',"ISTRI",'i');//DATA ISTRI

		            $this->_arrayPerceraian($IDDATAPER,"U");


		            $link = site_url('F2_19/edit/'.$IDAKTA);
		            $this->session->set_flashdata('message', "
		                <div class='alert alert-success alert-dismissable'>
		              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
		                <h4><i class='icon fa fa-ban'></i> Berhasil!</h4>
		                   Data Formulir Akta Anda Telah Diperbaharui<br>
		                   <h4>Lanjut Ke Tahap Unggah Berkas Anda?</h4>
		                   
		            </div>
		                ");
		            redirect(site_url("F2_19/edit/".$this->session->userdata('s_idac')));
		        }
		    }

		    public function _arrayMempelai($IDMEMPELAI,$c,$status,$s)
		    {
		    	$field_mempelai 	 = $this->mempelai->getField();

		    		foreach ($field_mempelai as $key => $value) {
		    			$r = $s."_".$value;
		    			$data[$value] = $this->input->post("$r",TRUE);
		    		}
		    			$data['id_bercerai'] = $IDMEMPELAI;
		    			$data['status_mempelai'] = $status;
		    			$data['id_ac'] = $this->session->userdata('s_idac');
		    		if ($c=="I") {
		    			$this->mempelai->insert($data);
		    		}elseif ($c=="U") {
		    			$this->mempelai->update($IDMEMPELAI, $data);
		    		}
		            
		            
		    }

		    public function _arrayPerceraian($ID,$c)
		    {
		    	$perceraian 		 = $this->perceraian->getField();
		    	foreach ($perceraian as $key => $value) {
		    			$data[$value] = $this->input->post("$value",TRUE);
		    		}
		    		$data['id_datacerai'] = $ID;
		    		$data['id_ac'] = $this->session->userdata('s_idac');
		    		//print_r($data);exit();
	         
	            	if ($c=="I") {
		    			$this->perceraian->insert($data);
		    		}elseif ($c=="U") {
		    			$this->perceraian->update($ID, $data);
		    		}
	        }

	        public function _arrayBerkas($ID,$ID_AC,$c){

	        	$data = array(
	        		'id_berkas' => $ID,
	        		'id_ac' => $ID_AC,
				    );

           		 if ($c=="I") {
		    			$this->berkas->insert($data);
		    		}elseif ($c=="U") {
		    			$this->berkas->update($ID, $data);
		    		}
	        }

	       
		    public function _rules() 
		    {
		     	$s = array(0 => 's_',1 => 'i_',);
		    	for ($i=0; $i <3 ; $i++) { 

				$this->form_validation->set_rules($s[$i].'no_kk', 'no kk', 'trim|required');
				$this->form_validation->set_rules($s[$i].'nik', 'nik', 'trim|required');
				$this->form_validation->set_rules($s[$i].'nama', 'nama', 'trim|required');
				$this->form_validation->set_rules($s[$i].'tmp_lahir', 'tmp lahir', 'trim|required');
				$this->form_validation->set_rules($s[$i].'tgl_lahir', 'tgl lahir', 'trim|required');
				$this->form_validation->set_rules($s[$i].'pendidikan_terakhir', 'pendidikan terakhir', 'trim|required');
				$this->form_validation->set_rules($s[$i].'agama', 'agama', 'trim|required');
				$this->form_validation->set_rules($s[$i].'pekerjaan', 'pekerjaan', 'trim|required');
				$this->form_validation->set_rules($s[$i].'perceraian_ke', 'perceraian ke', 'trim|required');
				$this->form_validation->set_rules($s[$i].'a_alamat', 'a alamat', 'trim|required');
				$this->form_validation->set_rules($s[$i].'a_desa', 'a desa', 'trim|required');
				$this->form_validation->set_rules($s[$i].'a_kecamatan', 'a kecamatan', 'trim|required');
				$this->form_validation->set_rules($s[$i].'a_kabkota', 'a kabkota', 'trim|required');
			}

			$this->form_validation->set_rules('yang mengajukan', 'yang mengajukan', 'trim|required');
			$this->form_validation->set_rules('no_akta_perkawinan', 'no akta perkawinan', 'trim|required');
			$this->form_validation->set_rules('tgl_akta_perkawinan', 'tgl akta perkawinan', 'trim|required');
			$this->form_validation->set_rules('tmp_pencatatan', 'tmp pencatatan', 'trim|required');
			$this->form_validation->set_rules('no_putusan', 'no putusan', 'trim|required');
			$this->form_validation->set_rules('tgl_putusan', 'tgl putusan', 'trim|required');
			$this->form_validation->set_rules('tkt_peradilan', 'tkt peradilan', 'trim|required');
			$this->form_validation->set_rules('tmp_peradilan', 'tmp peradilan', 'trim|required');
			$this->form_validation->set_rules('nama_lembaga', 'nama lembaga', 'trim|required');
			$this->form_validation->set_rules('sebab', 'sebab', 'trim|required');
			$this->form_validation->set_rules('tgl_melapor', 'tgl melapor', 'trim|required');
			
		
			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
		    }
}