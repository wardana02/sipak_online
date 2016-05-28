<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Approval extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Approval_model');
        $this->load->model('Akta_kelahiran_model');
        $this->load->model('Akta_kematian_model');
        $this->load->model('Akta_perkawinan_model');
        $this->load->model('Akta_perceraian_model');
        $this->load->model('Data_bayi_model');
        $this->load->model('Data_jenazah_model');
        $this->load->model('Ortu_bayi_model');
        $this->load->model('Ortu_jenazah_model');
        $this->load->model('Data_pelapor_model');
        $this->load->model('Data_saksi_model');
        $this->load->model('Berkas_lahir_model');
        $this->load->model('Berkas_kematian_model');

        $this->load->model('Data_mempelai_model','mempelai',TRUE);
        $this->load->model('Ortu_mempelai_model','ortu_m',TRUE);
        $this->load->model('Data_anak_model','anak',TRUE);
        $this->load->model('Berkas_perkawinan_model','berkas',TRUE);
        $this->load->model('Data_perkawinan_model','perkawinan',TRUE);

        $this->load->model('Data_bercerai_model','bercerai',TRUE);
        $this->load->model('Ortu_bercerai_model','bercerai',TRUE);
        $this->load->model('Berkas_cerai_model','berkas_c',TRUE);
        $this->load->model('Data_perceraian_model','perceraian',TRUE);

        $this->load->model('Parameter_model','param',TRUE);
        $this->load->model('Outbox_model');
        $this->load->model('Dps_model');
        $this->load->model('User_model');

        $this->load->library('form_validation');
        $this->load->helper('sms_helper');
    }

    public function index($kode)
    {

        $this->_access();
        $wil = $this->session->userdata('wilayah');
        $ID_USER = $this->session->userdata('id_user');
        if ($kode=="AL") {
            $approval = $this->Approval_model->get_app_list($wil);
            $head = "Data Pendaftaran Akta Kelahiran";
            $na = "Nama Bayi";$nc = "Nama Ibu"; $n = 'z1';
        }elseif ($kode=="AM") {
            $approval = $this->Approval_model->get_am_list($wil);
             $head = "Data Pendafaran Akta Kematian";
             $na = "Nama Jenazah";$nc = "Nama Ibu"; $n = 'z2';
        }elseif ($kode=="AP") {
            $approval = $this->Approval_model->get_ap_list($wil);
             $head = "Data Pendafaran Akta Perkawinan";
             $na = "Nama Suami";$nc = "Nama Istri"; $n = 'z3';
        }elseif ($kode=="AC") {
            $approval = $this->Approval_model->get_ac_list($wil);
             $head = "Data Pendafaran Akta Perkawinan";
             $na = "Nama Suami";$nc = "Nama Istri"; $n = 'z4';
        }
        $this->Approval_model->make_ready($ID_USER);

        $data = array(
            'approval_data' => $approval,
            'modal_title'=> "Verifikasi Data Pendaftaran",
            'head'  => $head,
            'nama'  => $na,
            'nama2'  => $nc,
            're'    => $kode,
            'modal_read'=> base_url('approval/read'),
            'modal_create'=> base_url('approval/jadi'),
            'modal_pengambilan'=> base_url('approval/ambil'),
            'conten'    => 'backend/admin/Approval/approval_list',
            'z'         => 'active',$n         => 'active',
            'nama_user' => $this->session->userdata('nama_user'),
            'status'    => $this->session->userdata('status'),
        );

         $this->load->view('backend/dashboard/index', $data);
    }

    public function read($id) 
    {
        $id = $this->input->post('id');
        $row = $this->Approval_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_approval' => $row->id_approval,
		'id_akta' => $row->id_akta,
		'by_rw' => $row->by_rw,
		'status_rw' => $row->status_rw,
		'by_kelurahan' => $row->by_kelurahan,
		'status_kelurahan' => $row->status_kelurahan,
		'by_dukcapil' => $row->by_dukcapil,
		'status_dukcapil' => $row->status_dukcapil,
		'progres' => $row->progres,
        'oleh'  => $row->oleh,
        'oleh_ambil'  => $row->oleh_ambil,
        'tgl' => $row->tgl_ambil,
	    );
            $this->load->view('backend/admin/Approval/approval_read', $data);
        } else {
            echo "Data Tidak Ditemukan";
        }
    }

    //tampil modals untuk tampilan klik akta jadi
    public function jadi(){
            $dt = $this->input->post('id');
            $arr = explode(",", $dt);
            $data['bayi'] = $arr[0];
            $data['ibu'] = $arr[1];
            $data['id'] = $arr[2];
            $this->load->view('backend/admin/Approval/approval_jadi', $data);
    }
    //tampil modals untuk tampilan klik akta akan diambil YBS
    public function ambil(){
            $dt = $this->input->post('id');
            $arr = explode(",", $dt);
            $data['bayi'] = $arr[0];
            $data['ibu'] = $arr[1];
            $data['id'] = $arr[2];   
            $this->load->view('backend/admin/Approval/approval_ambil', $data);
    }

    //fungsi untuk menampilkan persetujuan pengambilan akta
    public function cek()
        {
            $id_akta  = $this->input->post('id_al',TRUE);
            $A  = mysql_real_escape_string($this->input->post('no_pendaftaran',TRUE));
            $B  = $this->input->post('tgl_daftar',TRUE);
            $C  = mysql_real_escape_string($this->input->post('kode_unik',TRUE));
            $ctrl = substr($id_akta,0,2);

            if ($ctrl=='AL') {
                $ST = $this->Akta_kelahiran_model->check($A,$B,$C);//return an object not array
                $id_query = $ST->id_al;
                $re = base_url("approval/index/AL");
                $JENIS = "Akta Kelahiran";
            }elseif ($ctrl=='AM') {
                $ST = $this->Akta_kematian_model->check($A,$B,$C);//return an object not array
                $id_query = $ST->id_am;
                $re = base_url("approval/index/AM");
                $JENIS = "Akta Kematian";
            }elseif ($ctrl=='AP') {
                $ST = $this->Akta_kematian_model->check($A,$B,$C);//return an object not array
                $id_query = $ST->id_am;
                $re = base_url("approval/index/AM");
                $JENIS = "Akta Perkawinan";
            }elseif ($ctrl=='AC') {
                $ST = $this->Akta_kematian_model->check($A,$B,$C);//return an object not array
                $id_query = $ST->id_am;
                $re = base_url("approval/index/AM");
                $JENIS = "Akta Perceraian";
            }
            else {
                $re = base_url("dashboard");
            }
            
            if (isset($id_query) && $id_query==$id_akta ) {
                //jika 3 data login cocok maka
                $data = array(
                'sb'  => ' sidebar-collapse',  
                'id_al'     => $id_query,
                'nik_pengaju'      => $ST->nik_pengaju,
                'nama'      => $ST->nama,
                's_no_daftar'=> $ST->no_registrasi,
                'tgl_daftar'=>  $ST->tgl_registrasi,
                'conten'    => 'backend/admin/Approval/approval_surat',
                'nama_user' => $this->session->userdata('nama_user'),
                'jenis'     => $JENIS
             );
                $this->load->view('backend/dashboard/index', $data);
            }else{//jika tidak, pop up notifikasi
                echo "<script language=\"Javascript\">\n";
                echo "window.alert('Q=> Data Pendaftaran Tidak Ditemukan')";
                header("refresh:0; $re");
                echo "</script>";
            }

        }

    //fungsi create ke tb.approval melalui "saya sudah selesai"
    public function create_action($value,$nik) 
    {   
        $id = "APV".date("ymdHis");
        $c = substr($value, 0, 2);
        if ($c=="AL") {
            $jensi="Akta Kelahiran";
            $true = $this->Akta_kelahiran_model->get_by_id($value);
            $bayi = $this->Data_bayi_model->get_by_al($true->id_al);
            $tgl_terjadi  = $bayi->tgl_kelahiran; $jenis = "akta_kelahiran";
            $id_upd = $true->id_al; $f_id = 'id_al';
            $re = site_url("b2_19/selesai/".$this->session->userdata('s_idal'));
        }elseif ($c=="AM") {
            $jensi="Akta Kematian";
            $true = $this->Akta_kematian_model->get_by_id($value);
            $jenazah = $this->Data_jenazah_model->get_by_al($true->id_am);
            $tgl_terjadi  = $jenazah->tgl_kematian; $jenis = "akta_kematian";
            $id_upd = $true->id_am; $f_id = 'id_am';
            $re = site_url("b2_19/selesai/".$this->session->userdata('s_idam'));
        }elseif ($c=="AP") {
            $jensi="Akta Perkawinan";
            $true = $this->Akta_perkawinan_model->get_by_id($value);
            $perkawinan = $this->Data_perkawinan_model->get_by_al($true->id_ap);
            $tgl_terjadi  = $perkawinan->tgl_pemberkatan; $jenis = "akta_perkawinan";
            $id_upd = $true->id_ap; $f_id = 'id_ap';
            $re = site_url("b2_19/selesai/".$this->session->userdata('s_idap'));
        }elseif ($c=="AC") {
            $jensi="Akta Perceraian";
            $true = $this->Akta_perceraian_model->get_by_id($value);
            $cerai = $this->perceraian->get_by_al($true->id_ac);
            $tgl_terjadi  = $cerai->tgl_putusan; $jenis = "akta_perceraian";
            $id_upd = $true->id_ac; $f_id = 'id_ac';
            $re = site_url("b2_19/selesai/".$this->session->userdata('s_idac'));
        }
        //echo "string";exit();
        $NODAFTAR = $this->session->userdata('s_no_daftar');

  
        if ((isset($true))&&($NODAFTAR == $true->no_registrasi)) {
            $data = array(
        		'id_akta' => $value,
        		'id_approval' => $id,
                'selesai' => date("Y-m-d"),
        	    );
            $hasil = $this->Approval_model->get_by_al($value);
            $exist = count($hasil);
            if ($exist==0) {
                $rule = $this->param->get_by_jenis($jenis);

                $tgl_terjadi       = date("Y-m-d",strtotime($tgl_terjadi));
                $tgl_sekarang      = date("Y-m-d");

                $h1 = new DateTime($tgl_terjadi);
                $h2 = new DateTime($tgl_sekarang);
                $waktu      = $h1->diff($h2); 

                if ($waktu->days > $rule->durasi) {
                    $up = array('denda' => $rule->denda );
                    $this->param->update_denda($f_id,$id_upd, $up,$jenis);
                }
                $dt = $this->Dps_model->get_by_nik($nik);
                $NAPEN = $dt->nama_lengkap;
                $uname = $dt->ps_alamat."_".$dt->ps_rw;
                $dt = $this->User_model->get_by_uname($uname);

                $item = array('jenis' => $jensi, 'no_registrasi' => $NODAFTAR, 'nama_pendaftar' => $NAPEN, 'rw'=> $dt->nama_user );

                $sms = array(
                    'TextDecoded' => message_rw($item),
                    'DestinationNumber' => $dt->no_hp, 
                    );
                $this->Approval_model->insert($data);
                $this->Outbox_model->insert($sms);
            }elseif ($hasil->perbaikan=='1') {
                $id_akta = $value;
                $ok['perbaikan'] = '0';
                $this->Approval_model->update($id_akta, $ok);

            }
            
            $this->session->set_flashdata('message', "
                        <div class='alert alert-success alert-dismissable'>
                      <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                        <h4><i class='icon fa fa-ban'></i> SELESAI!</h4>
                           <p>Data Formulir Pendaftaran Anda Telah Selesai, 
                           akan segera masuk ke tahap Approval
                           </p>
                           <p>Tahap Selanjutnya adalah melakukan Monitoring dan Mendatangi Kelurahan Anda Untuk melakukan
                           Approval berkas anda.
                           </p>
                           <p>Silahkan Keluar dari halaman pendaftaran ini dengan cara MEMILIH MENU LAIN yang ada di atas.
                           </p>
                           <p>Terimakasih :)
                           </p>
                           
                    </div>
                        ");
                    redirect($re);
        }else{
            echo "<script language=\"Javascript\">\n";
                echo "window.alert('Data Formulir Pendaftaran Tidak Ditemukan')";
                header("refresh:0; ../../");
                echo "</script>";
        }

    }

    //fungsi tampilkan halaman verifikasi online
    public function verifikasi($id,$no) 
    {
            $this->_access();
            $keyword = substr($id, 0, 2);
            $re = base_url().'approval/index/'.$keyword;
            $ID_USER = $this->session->userdata('id_user');

            $on_trans = $this->Approval_model->cek_on_trans($id);
            $C = $on_trans->on_trans!=NULL;


            if ($C = $on_trans->on_trans!=NULL) {
                echo "<script language=\"Javascript\">\n";
                echo "window.alert('Maaf, Data Pendaftaran Akta Sedang Dilakukan Verifikasi, Silahkan Tunggu')";
                header("refresh:0; $re");
                echo "</script>";
            }
            if($C!=1){
                $this->Approval_model->make_on_trans($id,$ID_USER);
            }             
            
            if ($keyword=='AL') {
                $akta = $this->Akta_kelahiran_model->get_by_al($id);
                $bayi = $this->Data_bayi_model->get_by_al($id);
                $IBU    = $this->Ortu_bayi_model->get_by_bayi($bayi->id_bayi,"IBU");
                $AYAH   = $this->Ortu_bayi_model->get_by_bayi($bayi->id_bayi,"AYAH");
                $S1     = $this->Data_saksi_model->get_by_al($id,1);
                $S2     = $this->Data_saksi_model->get_by_al($id,2);
                $PELAPOR = $this->Data_pelapor_model->get_by_al($id,2);
                $BERKAS = $this->Berkas_lahir_model->get_by_al($id);

                $data = array(
                        'bayi_data' => $bayi,
                        'ibu_data'  => $IBU,
                        'ayah_data'  => $AYAH,
                        'pelapor_data'  => $PELAPOR,
                        'saksi1_data'  => $S1,
                        'saksi2_data'  => $S2,
                        'berkas_data'   => $BERKAS,
                        'no_registrasi' => $no,
                        'no_hp' => $akta->no_hp,
                        'conten'    => 'backend/admin/Approval/verifikasi_form',
                    );

            }elseif ($keyword=='AM') {
                $akta = $this->Akta_perceraian_model->get_by_am($id);
                $jenazah = $this->Data_jenazah_model->get_by_am($id);
                $IBU    = $this->Ortu_jenazah_model->get_by_jenazah($jenazah->id_jenazah,"IBU");
                $AYAH   = $this->Ortu_jenazah_model->get_by_jenazah($jenazah->id_jenazah,"AYAH");
                $S1     = $this->Data_saksi_model->get_by_al($id,1);
                $S2     = $this->Data_saksi_model->get_by_al($id,2);
                $PELAPOR = $this->Data_pelapor_model->get_by_al($id,2);
                $BERKAS = $this->Berkas_kematian_model->get_by_al($id);

                $data = array(
                        'jenazah_data' => $jenazah,
                        'ibu_data'  => $IBU,
                        'ayah_data'  => $AYAH,
                        'pelapor_data'  => $PELAPOR,
                        'saksi1_data'  => $S1,
                        'saksi2_data'  => $S2,
                        'berkas_data'   => $BERKAS,
                        'no_registrasi' => $no,
                        'no_hp' => $akta->no_hp,
                        'conten'    => 'backend/admin/Approval/verifikasi_form_j',
                    );

            }elseif ($keyword=='AP') {
                $akta = $this->Akta_perkawinan_model->get_by_al($id);
                $SUAMI  = $this->mempelai->get_by_al($id,'SUAMI');
                $IBU_S    = $this->ortu_m->get_by_mempelai($SUAMI->id_mempelai,"IBU");
                $AYAH_S   = $this->ortu_m->get_by_mempelai($SUAMI->id_mempelai,"AYAH");

                $ISTRI  = $this->mempelai->get_by_al($id,'ISTRI');
                $IBU_I    = $this->ortu_m->get_by_mempelai($ISTRI->id_mempelai,"IBU");
                $AYAH_I   = $this->ortu_m->get_by_mempelai($ISTRI->id_mempelai,"AYAH");

                $S1     = $this->Data_saksi_model->get_by_al($id,1);
                $S2     = $this->Data_saksi_model->get_by_al($id,2);
                $PERKAWINAN = $this->perkawinan->get_by_al($id);
                $ANAK       = $this->anak->get_by_al($PERKAWINAN->id_dataper);
                $BERKAS = $this->berkas->get_by_al($id);

                $data = array(
                        'suami_data' => $SUAMI,
                        'ibu_data_s'  => $IBU_S,
                        'ayah_data_s'  => $AYAH_S,
                        'istri_data' => $ISTRI,
                        'ibu_data_i'  => $IBU_I,
                        'ayah_data_i'  => $AYAH_I,
                        'perkawinan'  => $PERKAWINAN,
                        'saksi1_data'  => $S1,
                        'saksi2_data'  => $S2,
                        'berkas_data'   => $BERKAS,
                        'anak_data'   => $ANAK,
                        'no_registrasi' => $no,
                        'no_hp' => $akta->no_hp,
                        'conten'    => 'backend/admin/Approval/verifikasi_form_p',
                    );
            }elseif ($keyword=='AC') {
                $akta = $this->Akta_perceraian_model->get_by_al($id);
                $SUAMI  = $this->bercerai->get_by_al($id,'SUAMI');

                $ISTRI  = $this->bercerai->get_by_al($id,'ISTRI');

                $PERCERAIAN = $this->perceraian->get_by_al($id);
                $BERKAS = $this->berkas_c->get_by_al($id);

                $data = array(
                        'suami_data' => $SUAMI,
                        'istri_data' => $ISTRI,
                        'perceraian'  => $PERCERAIAN,
                        'berkas_data'   => $BERKAS,
                        'no_registrasi' => $no,
                        'no_hp' => $akta->no_hp,
                        'conten'    => 'backend/admin/Approval/verifikasi_form_c',
                    );
            }

        
            $data['z']         = 'active';
            $data['z4']         = 'active';
            $data['nama_user'] = $this->session->userdata('nama_user');
            $data['status']    = $this->session->userdata('status');
            $data['action']    = site_url('approval/update_action');
         $this->load->view('backend/dashboard/index', $data);

    }
    
    //fungsi untuk update status verifikasi berdasarkan aktor
    public function update_action() 
    {
        $this->_rules();
        $s = $this->session->userdata('status');
        $id_akta = $this->input->post('id_akta', TRUE);
        $berkas = $this->input->post('verifikasi',TRUE);
        $no_pendaftaran = $this->input->post('no_pendaftaran',TRUE);
        $no_hp = $this->input->post('no_hp',TRUE);

        if (FALSE) {
            echo "string";
        } else {
            $data = array(
		      "by_$s"     => $berkas,
		      "status_$s" => $this->input->post('keterangan',TRUE),
	    );
            if ($s=="DUKCAPIL") {
                if (($berkas!='') && ($berkas!='revisi')) {
                    $data['progres'] = "diproses";
                }
                $data['oleh'] = $this->session->userdata('nama_user');
                
            }
            if (($berkas!='') && ($berkas!='revisi')) {
               $data['locked'] = 1;
            }else{
                $data['locked'] = 0;
            }

            if($berkas=='revisi'){
                $data['perbaikan'] = 1;
                 $item = array(  'no_pendaftaran' => $no_pendaftaran,
                        'oleh' => $s,
                        'keterangan' => $this->input->post('keterangan',TRUE),   
                );
                $sms = array(
                    'TextDecoded' => revisi($item),
                    'DestinationNumber' => $no_hp, 
                    );
                $this->Outbox_model->insert($sms);
            }
            //print_r($data);echo "$id_akta";exit();

            $this->Approval_model->update($id_akta, $data);
            $this->session->set_flashdata('message', "
                <div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                <h4><i class='glyphicon glyphicon-ok'></i> Berhasil!</h4>
                    Data Berhasil Diverifikasi, tersimpan dalam sistem !
            </div>
                ");
            $keyword = substr($id_akta, 0, 2);
                redirect(site_url("approval/index/".$keyword));
            
        }
    }

    //FUNGSI Untuk set nilai tb.approval bahwa akta sudah diambil
    public function akta($status,$id_akta){
        $ctrl = substr($id_akta,0,2);
        $re = base_url().'approval/index/'.$ctrl;

            $verified = $this->Approval_model->get_progres($id_akta);
            if ($verified->progres==NULL) {
                $this->session->set_flashdata('message', "
                <div class='alert alert-danger alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                    <h4><i class='glyphicon glyphicon-remove'></i> $verified->no_regis !!</h4>
                        Anda Tidak Diperkenankan Mengubah Staus \"JADI\", Sebelum Melakukan Verifikasi !
                </div>
                ");
                redirect($re);
            }

        $data['progres'] = $status;
        if ($status=="diambil") {
            $data['tgl_ambil'] = date("Y-m-d");
        }
        $this->Approval_model->update($id_akta, $data);


        $this->session->set_flashdata('message', "
                <div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                <h4><i class='glyphicon glyphicon-ok'></i> Berhasil!</h4>
                    Status Akta Telah Berhasil Diperbaharui => Berkas Jadi !
            </div>
                ");
            $keyword = substr($id_akta, 0, 2);
                redirect(site_url('approval/index/'.$keyword));
            
    }

    //fungsi untuk batasi hak akses per fungsi
    public function _access(){
        $status = $this->session->userdata('who');
            if($status!="ADMIN"){
                redirect('error404');
            }
    }

    public function _rules() 
    {
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}