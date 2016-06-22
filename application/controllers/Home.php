<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Home extends CI_Controller {


		public function __construct(){
			parent::__construct();
			$this->load->model('Akta_kelahiran_model');
            $this->load->model('Akta_kematian_model');
            $this->load->model('Akta_perkawinan_model');
            $this->load->model('Akta_perceraian_model');
            $this->load->model('Ig_model');

            $this->load->model('Pbk_model');

			$this->load->model('Outbox_model');
			$this->load->model('Approval_model');
       		$this->load->library('form_validation');
            $this->load->library('twitteroauth');
       		$this->load->helper('string');
       		$this->load->helper('sms');
            $this->load->helper('reg');
       		$R = $this->session->userdata('on_register');
       		if ($R) {
       			//destroy session
       			$this->session->unset_userdata(array('on_register' => FALSE));
       		    $this->session->sess_destroy();
                $array_items = array('s_idal', 's_idam','s_idap','s_idac');
                $this->session->unset_userdata($array_items);
       		}
			
		}

		public function index(){ //awal load aplikasi
			$data['A']='active';	
			$data['conten'] = "frontend/home";
			$this->load->view('backend/dashboard/index2', $data);
		}

		public function lahir(){ //muncul form untuk pendaftaran
			$data = array(
				'action' => site_url('home/lahir_action'),
				'cek' => site_url('home/lahir_cek'),
				'conten' => "frontend/aktalahir/register_lahir",
				'B'		 => "active",'B1'		 => "active",
				);		
			$this->load->view('backend/dashboard/index2', $data);
		}

        public function mati(){ //muncul form untuk pendaftaran
            $data = array(
                'action' => site_url('home/mati_action'),
                'cek' => site_url('home/mati_cek'),
                'conten' => "frontend/aktamati/register_mati",
                'B'      => "active",'B2'        => "active",
                );      
            $this->load->view('backend/dashboard/index2', $data);
        }

		public function lahir_cek()
		{
			$A 	= mysql_real_escape_string($this->input->post('no_pendaftaran',TRUE));
        	$b 	= $this->input->post('tgl_daftar',TRUE);
        	$b1  = $tgl  = explode('-', $b);
        	$B 	= "$b1[2]-$b1[0]-$b1[1]";
        	$C 	= mysql_real_escape_string($this->input->post('kode_unik',TRUE));
         	$ST = $this->Akta_kelahiran_model->check($A,$B,$C);//return an object not array
        	if (isset($ST->id_al)) {
        		//send to f2_01 function edit
        		$dt = array(  
            	's_idal'     => $ST->id_al,
            	's_nik'      => $ST->nik_pengaju,
            	's_nama'     => $ST->nama,
            	's_hp'     	 => $ST->no_hp,
            	's_kode'     => $ST->kode_unik,
            	's_no_daftar'=> $ST->no_registrasi,
            	'tgl_daftar'=>  $ST->tgl_registrasi,
            	'jenis'     => "Akta Kelahiran",
            	'on_register'=>TRUE
             );
            $this->session->set_userdata($dt);
        		redirect('F2_01/edit/'.$ST->id_al);
        	}else{
        		echo "<script language=\"Javascript\">\n";
				echo "window.alert('Data Pendaftaran Tidak Ditemukan')";
				header("refresh:0; lahir");
				echo "</script>";
        	}

		}

        public function mati_cek()
        {
            $A  = mysql_real_escape_string($this->input->post('no_pendaftaran',TRUE));
            $b  = $this->input->post('tgl_daftar',TRUE);
            $b1  = $tgl  = explode('-', $b);
            $B  = "$b1[2]-$b1[0]-$b1[1]";
            $C  = mysql_real_escape_string($this->input->post('kode_unik',TRUE));
            //echo "$A || $B || $C";exit();
            $ST = $this->Akta_kematian_model->check($A,$B,$C);//return an object not array
            if (isset($ST->id_am)) {
                //send to f2_29 function edit
                $dt = array(  
                's_idam'     => $ST->id_am,
                's_nik'      => $ST->nik_pengaju,
                's_nama'     => $ST->nama,
                's_hp'       => $ST->no_hp,
                's_kode'     => $ST->kode_unik,
                's_no_daftar'=> $ST->no_registrasi,
                'tgl_daftar'=>  $ST->tgl_registrasi,
                'jenis'     => "Akta Kematian",
                'on_register'=>TRUE
             );
            $this->session->set_userdata($dt);
                redirect('F2_29/edit/'.$ST->id_am);
            }else{
                echo "<script language=\"Javascript\">\n";
                echo "window.alert('Data Pendaftaran Tidak Ditemukan #NF')";
                header("refresh:0; mati");
                echo "</script>";
            }

        }

		public function lahir_action()//fungsi menjembatani antara form register ke form formulir
   		{
        $this->_rules(); 

        if ($this->input->post('nama')=='') {
            echo "<script language=\"Javascript\">\n";
                echo "window.alert('Data Pendaftaran Gagal Diproses, Identitas Pengaju Tidak Ditemukan #NF')";
                header("refresh:0; lahir");
                echo "</script>";
        } else {
        	//PF02170316001icvcx
            $NUM = $this->Akta_kelahiran_model->get_all();
            $NUM = count($NUM);
            $NUM = setvalue($NUM);
            $KODE   = random_string('alnum',6);
            $NODAFTAR   = set("02",$NUM);
        	$ID_AL 	= "AL".date("ymdHis");
        	$NIK 	= $this->input->post('nik_pengaju',TRUE);
        	$KK 	= $this->input->post('no_kk',TRUE);
        	$NAMA 	= $this->input->post('nama',TRUE);
        	$NOHP 	= $this->input->post('no_hp',TRUE);

        	//$data forinsert into table akta kelahiran
            $data = array(
			        'id_al'		=> $ID_AL,
					'nik_pengaju' => $NIK,
					'no_kk' => $KK,
					'nama' => $NAMA,
					'no_hp' 	=> $NOHP,
					'kode_unik' => $KODE,
					'no_registrasi' => $NODAFTAR,
					'tgl_registrasi' => date("Y-m-d H:i:s"),
					'ip_network' => "127.0.0.1"
			    );
            $this->Akta_kelahiran_model->insert($data);

            //$dt for save in session & make a message
            $dt = array(  
            	's_idal'     => $ID_AL,
            	's_nik'      => $NIK,
            	's_nama'     => $NAMA,
            	's_hp'     	 => $NOHP,
            	's_kode'     => $KODE,
            	's_no_daftar'=> $NODAFTAR,
            	'tgl_daftar'=> date("d/m/Y"),
            	'jenis'     => "Akta Kelahiran",
            	'on_register'=>TRUE
             );
            $this->session->set_userdata($dt);
            $this->session->set_flashdata('message', 'Create Record Success');

            //insert into outbox for send SMS to Client
            $mess = array(  
            	'DestinationNumber'     => $NOHP,
            	'TextDecoded'      => message_register($dt)
            	);
            $this->Outbox_model->insert($mess);

            //save contact
            $this->_kontakBaru($NAMA,$NOHP);

            redirect(site_url('F2_01/create_action'));
        }
    	}

        public function mati_action()//fungsi menjembatani antara form register ke form formulir
        {
        $this->_rules(); 

        if ($this->input->post('nama')=='') {
            echo "<script language=\"Javascript\">\n";
                echo "window.alert('Data Pendaftaran Gagal Diproses, Identitas Pengaju Tidak Ditemukan #NF')";
                header("refresh:0; mati");
                echo "</script>";
        } else {
            //PF29170316001

            $NUM = $this->Akta_kematian_model->get_all();
            $NUM = count($NUM);
            $NUM = setvalue($NUM);
            $KODE   = random_string('alnum',6);
            $NODAFTAR   = set("29",$NUM);
            $ID_AM  = "AM".date("ymdHis");
            $NIK    = $this->input->post('nik_pengaju',TRUE);
            $KK     = $this->input->post('no_kk',TRUE);
            $NAMA   = $this->input->post('nama',TRUE);
            $NOHP   = $this->input->post('no_hp',TRUE);

            //$data forinsert into table akta kelahiran
            $data = array(
                    'id_am'     => $ID_AM,
                    'nik_pengaju' => $NIK,
                    'no_kk' => $KK,
                    'nama' => $NAMA,
                    'no_hp'     => $NOHP,
                    'kode_unik' => $KODE,
                    'no_registrasi' => $NODAFTAR,
                    'tgl_registrasi' => date("Y-m-d H:i:s"),
                    'ip_network' => "127.0.0.1"
                );
            $this->Akta_kematian_model->insert($data);

            //$dt for save in session & make a message
            $dt = array(  
                's_idam'     => $ID_AM,
                's_nik'      => $NIK,
                's_nama'     => $NAMA,
                's_hp'       => $NOHP,
                's_kode'     => $KODE,
                's_no_daftar'=> $NODAFTAR,
                'tgl_daftar'=> date("d/m/Y"),
                'jenis'     => "Akta Kematian",
                'on_register'=>TRUE
             );
            $this->session->set_userdata($dt);
            $this->session->set_flashdata('message', 'Create Record Success');

            //insert into outbox for send SMS to Client
            $mess = array(  
                'DestinationNumber'     => $NOHP,
                'TextDecoded'           => message_register($dt)
                );
            $this->Outbox_model->insert($mess);
            //save contact
            $this->_kontakBaru($NAMA,$NOHP);

            redirect(site_url('F2_29/create_action'));
        }
        }
      

		public function a_kawin(){
			$data = array(
                'action' => site_url('home/kawin_action'),
                'cek' => site_url('home/kawin_cek'),
                'conten' => "frontend/aktaperkawinan/register_perkawinan",
                'B'      => "active",'B4'        => "active",
                );      
            $this->load->view('backend/dashboard/index2', $data);
		}

        public function kawin_cek()
        {
            $A  = mysql_real_escape_string($this->input->post('no_pendaftaran',TRUE));
            $b  = $this->input->post('tgl_daftar',TRUE);
            $b1  = $tgl  = explode('-', $b);
            $B  = "$b1[2]-$b1[0]-$b1[1]";
            $C  = mysql_real_escape_string($this->input->post('kode_unik',TRUE));
            $re = base_url("home/a_kawin");
            $ST = $this->Akta_perkawinan_model->check($A,$B,$C);//return an object not array
            if (isset($ST->id_ap)) {
                //send to F2_12 function edit
                $dt = array(  
                's_idap'     => $ST->id_ap,
                's_nik'      => $ST->nik_pengaju,
                's_nama'     => $ST->nama,
                's_hp'       => $ST->no_hp,
                's_kode'     => $ST->kode_unik,
                's_no_daftar'=> $ST->no_registrasi,
                'tgl_daftar'=>  $ST->tgl_registrasi,
                'jenis'     => "Akta Perkawinan",
                'on_register'=>TRUE
             );
            $this->session->set_userdata($dt);
                redirect('F2_12/edit/'.$ST->id_ap);
            }else{
                echo "<script language=\"Javascript\">\n";
                echo "window.alert('Data Pendaftaran Tidak Ditemukan')";
                header("refresh:0; $re");
                echo "</script>";
            }

        }

        public function kawin_action()//fungsi menjembatani antara form register ke form formulir
        {
        $this->_rules(); 

        if ($this->input->post('nama')=='') {
            echo "<script language=\"Javascript\">\n";
                echo "window.alert('Data Pendaftaran Gagal Diproses, Identitas Pengaju Tidak Ditemukan #NF')";
                header("refresh:0; a_kawin");
                echo "</script>";
        } else {
            //PF02170316001
            $NUM = $this->Akta_perkawinan_model->get_all();
            $NUM = count($NUM);
            $NUM = setvalue($NUM);
            $KODE   = random_string('alnum',6);
            $NODAFTAR   = set("12",$NUM);
            $ID_AP  = "AP".date("ymdHis");
            $NIK    = $this->input->post('nik_pengaju',TRUE);
            $KK     = $this->input->post('no_kk',TRUE);
            $NAMA   = $this->input->post('nama',TRUE);
            $NOHP   = $this->input->post('no_hp',TRUE);

            //$data forinsert into table akta kelahiran
            $data = array(
                    'id_ap'     => $ID_AP,
                    'nik_pengaju' => $NIK,
                    'no_kk' => $KK,
                    'nama' => $NAMA,
                    'no_hp'     => $NOHP,
                    'kode_unik' => $KODE,
                    'no_registrasi' => $NODAFTAR,
                    'tgl_registrasi' => date("Y-m-d H:i:s"),
                    'ip_network' => "127.0.0.1"
                );

            //$dt for save in session & make a message
            $dt = array(  
                's_idap'     => $ID_AP,
                's_nik'      => $NIK,
                's_nama'     => $NAMA,
                's_hp'       => $NOHP,
                's_kode'     => $KODE,
                's_no_daftar'=> $NODAFTAR,
                'tgl_daftar'=> date("d/m/Y"),
                'jenis'     => "Akta Perkawinan",
                'on_register'=>TRUE
             );
            $this->session->set_userdata($dt);
            $this->session->set_flashdata('message', 'Create Record Success');

            //insert into outbox for send SMS to Client
            $mess = array(  
                'DestinationNumber'     => $NOHP,
                'TextDecoded'      => message_register($dt)
                );

            $this->Akta_perkawinan_model->insert($data);
            $this->Outbox_model->insert($mess);

            $this->_kontakBaru($NAMA,$NOHP);

            redirect('F2_12/create_action');
        }
        }

		public function a_cerai(){
			$data = array(
                'action' => site_url('home/cerai_action'),
                'cek' => site_url('home/cerai_cek'),
                'conten' => "frontend/aktaperceraian/register_perceraian",
                'B'      => "active",'B5'        => "active",
                );      
            $this->load->view('backend/dashboard/index2', $data);
		}

        public function cerai_action()//fungsi menjembatani antara form register ke form formulir
        {
        $this->_rules(); 

        if ($this->input->post('nama')=='') {
            echo "<script language=\"Javascript\">\n";
                echo "window.alert('Data Pendaftaran Gagal Diproses, Identitas Pengaju Tidak Ditemukan #NF')";
                header("refresh:0; a_cerai");
                echo "</script>";
        } else {
            //PF02170316001
            $NUM = $this->Akta_perceraian_model->get_all();
            $NUM = count($NUM);
            $NUM = setvalue($NUM);
            $KODE   = random_string('alnum',6);
            $NODAFTAR   = set("19",$NUM);
            $ID_AC  = "AC".date("ymdHis");
            $NIK    = $this->input->post('nik_pengaju',TRUE);
            $KK     = $this->input->post('no_kk',TRUE);
            $NAMA   = $this->input->post('nama',TRUE);
            $NOHP   = $this->input->post('no_hp',TRUE);

            //$data forinsert into table akta kelahiran
            $data = array(
                    'id_ac'     => $ID_AC,
                    'nik_pengaju' => $NIK,
                    'no_kk' => $KK,
                    'nama' => $NAMA,
                    'no_hp'     => $NOHP,
                    'kode_unik' => $KODE,
                    'no_registrasi' => $NODAFTAR,
                    'tgl_registrasi' => date("Y-m-d H:i:s"),
                    'ip_network' => "127.0.0.1"
                );

            //$dt for save in session & make a message
            $dt = array(  
                's_idac'     => $ID_AC,
                's_nik'      => $NIK,
                's_nama'     => $NAMA,
                's_hp'       => $NOHP,
                's_kode'     => $KODE,
                's_no_daftar'=> $NODAFTAR,
                'tgl_daftar'=> date("d/m/Y"),
                'jenis'     => "Akta Perceraian",
                'on_register'=>TRUE
             );
            $this->session->set_userdata($dt);
            $this->session->set_flashdata('message', 'Create Record Success');

            //insert into outbox for send SMS to Client
            $mess = array(  
                'DestinationNumber'     => $NOHP,
                'TextDecoded'      => message_register($dt)
                );

            $this->Akta_perceraian_model->insert($data);
            $this->Outbox_model->insert($mess);
            
            //save contact
            $this->_kontakBaru($NAMA,$NOHP);
            redirect('F2_19/create_action');
        }
        }

        public function cerai_cek()
        {
            $A  = mysql_real_escape_string($this->input->post('no_pendaftaran',TRUE));
            $b  = $this->input->post('tgl_daftar',TRUE);
            $b1  = $tgl  = explode('-', $b);
            $B  = "$b1[2]-$b1[0]-$b1[1]";
            $C  = mysql_real_escape_string($this->input->post('kode_unik',TRUE));
            $re = base_url("home/a_cerai");
            $ST = $this->Akta_perceraian_model->check($A,$B,$C);//return an object not array
            if (isset($ST->id_ac)) {
                //send to F2_12 function edit
                $dt = array(  
                's_idac'     => $ST->id_ac,
                's_nik'      => $ST->nik_pengaju,
                's_nama'     => $ST->nama,
                's_hp'       => $ST->no_hp,
                's_kode'     => $ST->kode_unik,
                's_no_daftar'=> $ST->no_registrasi,
                'tgl_daftar'=>  $ST->tgl_registrasi,
                'jenis'     => "Akta Perceraian",
                'on_register'=>TRUE
             );
            $this->session->set_userdata($dt);
                redirect('F2_19/edit/'.$ST->id_ac);
            }else{
                echo "<script language=\"Javascript\">\n";
                echo "window.alert('Data Pendaftaran Tidak Ditemukan')";
                header("refresh:0; $re");
                echo "</script>";
            }

        }

		public function monitoring(){
            if ($this->input->post('sub')) {
                $A  = mysql_real_escape_string($this->input->post('no_pendaftaran',TRUE));
                $b  = $this->input->post('tgl_daftar',TRUE);
                $keyword = substr($A, 1, 3);
                $b1  = $tgl  = explode('-', $b);
                $B  = "$b1[2]-$b1[0]-$b1[1]";
                $C  = mysql_real_escape_string($this->input->post('kode_unik',TRUE));

                
                if ($keyword=='F02') {
                    $ST = $this->Akta_kelahiran_model->check($A,$B,$C);
                    $MONITOR = $this->Approval_model->get_by_al($ST->id_al);
                }elseif ($keyword=='F29') {
                    $ST = $this->Akta_kematian_model->check($A,$B,$C);
                    $MONITOR = $this->Approval_model->get_by_al($ST->id_am);
                }elseif ($keyword=='F12') {
                    $ST = $this->Akta_perkawinan_model->check($A,$B,$C);
                    $MONITOR = $this->Approval_model->get_by_al($ST->id_ap);
                }elseif ($keyword=='F19') {
                    $ST = $this->Akta_perceraian_model->check($A,$B,$C);
                    $MONITOR = $this->Approval_model->get_by_al($ST->id_ac);
                }

                $data['SUBMITED'] = TRUE;
                $data['hasil'] = $MONITOR;
            } else{$data['SUBMITED'] = FALSE;}
			$data['D']='active';
			$data['cek'] = site_url('home/monitoring');	
			$data['conten'] = "frontend/monitoring";
			$this->load->view('backend/dashboard/index2', $data);
		}

        public function petunjuk(){
            
            $data['G']='active';    
            $data['conten'] = "frontend/petunjuk";
            $this->load->view('backend/dashboard/index2', $data);
        }

        public function ig1(){
            $aw = $this->input->post("from");
            $awal = explode("/", $aw);
            $a    = $awal[2]."-".$awal[0]."-".$awal[1];
            $t = $this->input->post("to");
            $to = explode("/", $t);
            $b    = $to[2]."-".$to[0]."-".$to[1];

            if ($aw!='' && $t!='') {
                $judul = " Perbandingan Pengajuan Akta Per Kecamatan Periode $aw s.d $t";
                 $between = "AND tgl_registrasi BETWEEN '$a' AND '$b'";
            }else{
                $judul = " Perbandingan Pengajuan Akta Per Kecamatan";
            }


            $al_kec = $this->Ig_model->al_by_kecamatan($between);
            $am_kec = $this->Ig_model->am_by_kecamatan($between);
            $ap_kec = $this->Ig_model->ap_by_kecamatan($between);
            $ac_kec = $this->Ig_model->ac_by_kecamatan($between);

            $data = array(
                    'judul'     => $judul,
                    'al_kec'    =>  $al_kec,
                    'am_kec'    =>  $am_kec,
                    'ap_kec'    =>  $ap_kec,
                    'ac_kec'    =>  $ac_kec,
                    );

            $data['E']='active';   $data['E1']='active';  
            $data['conten'] = "frontend/infografik/g1";
            $this->load->view('backend/dashboard/index2', $data);
        }

        public function ig2(){

            $lk = $this->Ig_model->jk_bulan("LAKI-LAKI");
            $wa = $this->Ig_model->jk_bulan("PEREMPUAN");

            $data = array(
                    'lk'        =>  $lk,
                    'wa'        =>  $wa,
                    );

            $data['E']='active';   $data['E2']='active';  
            $data['conten'] = "frontend/infografik/g2";
            $this->load->view('backend/dashboard/index2', $data);
        }

        public function ig3(){
            $aw = $this->input->post("from");
            $awal = explode("/", $aw);
            $a    = $awal[2]."-".$awal[0]."-".$awal[1];
            $t = $this->input->post("to");
            $to = explode("/", $t);
            $b    = $to[2]."-".$to[0]."-".$to[1];

            if ($aw!='' && $t!='') {
                $judul = "Presentase Pengajuan Akta Periode $aw s.d $t";
                $al = count($this->Akta_kelahiran_model->get_all_beetwen($a,$b));
                    $am = count($this->Akta_kematian_model->get_all_beetwen($a,$b));
                    $ap = count($this->Akta_perkawinan_model->get_all_beetwen($a,$b));
                    $ac = count($this->Akta_perceraian_model->get_all_beetwen($a,$b));
            }else{
                $judul = "Presentase Pengajuan Akta";
                $al = count($this->Akta_kelahiran_model->get_all());
                    $am = count($this->Akta_kematian_model->get_all());
                    $ap = count($this->Akta_perkawinan_model->get_all());
                    $ac = count($this->Akta_perceraian_model->get_all());
            }

                    

            $data = array(
                    'al'      =>  $al,
                    'am'        =>  $am,
                    'ap'        =>  $ap,
                    'ac'        =>  $ac,
                    'judul'     => $judul,
                    );

            $data['E']='active';   $data['E3']='active';  
            $data['conten'] = "frontend/infografik/g3";
            $this->load->view('backend/dashboard/index2', $data);
        }
		
		public function kontak(){
			$data['F']='active';	
			$data['conten'] = "frontend/kontak";
			$this->load->view('backend/dashboard/index2', $data);
		}

        public function _kontakBaru($NAMA,$NOHP){
            $bol = $this->Pbk_model->is_kontak_exist($NOHP);
            if ($bol) {
                $nM = explode(" ", $NAMA);
                $nMa = $nM[0]." ".$nM[1];
                $ko = array(
                    'GroupID' => "-1",
                    'Name' => $nMa,
                    'Number' => $NOHP,
                    );
                $this->Pbk_model->insert($ko);
            }
        }

        public function unduh_sk(){
        $isi = file_get_contents(base_url().'assets/doc/perda.pdf');
                    $tgl = date('Y-m-d');
                    $nama = "perda nomor 10 tahun 2010 tentang penyelenggaraan adminduk.pdf";
                    force_download($nama,$isi);
    }

		


	
    public function _rules() 
    {
	$this->form_validation->set_rules('nik_pengaju', 'nik pengaju', 'required');
	$this->form_validation->set_rules('no_hp', 'no hp', 'trim|required');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }



}