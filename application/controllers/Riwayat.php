<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Riwayat extends MY_Controller
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

        $wil = $this->session->userdata('wilayah');
        $ID_USER = $this->session->userdata('id_user');
        if ($kode=="AL") {
            $approval = $this->Approval_model->get_riwayat_al($wil);
            $head = "Data Pendaftaran Akta Kelahiran";
            $na = "Nama Bayi";$nc = "Nama Ibu"; $n = 'r1'; $tname = 'akta_kelahiran';
        }elseif ($kode=="AM") {
            $approval = $this->Approval_model->get_riwayat_am($wil);
             $head = "Data Pendafaran Akta Kematian";
             $na = "Nama Jenazah";$nc = "Nama Ibu"; $n = 'r2'; $tname = 'akta_kematian';
        }elseif ($kode=="AP") {
            $approval = $this->Approval_model->get_riwayat_ap($wil);
             $head = "Data Pendafaran Akta Perkawinan";
             $na = "Nama Suami";$nc = "Nama Istri"; $n = 'r3'; $tname = 'akta_perkawinan';
        }elseif ($kode=="AC") {
            $approval = $this->Approval_model->get_riwayat_ac($wil);
             $head = "Data Pendafaran Akta Perceraian";
             $na = "Nama Suami";$nc = "Nama Istri"; $n = 'r4'; $tname = 'akta_perceraian';
        }

        $data = array(
            'approval_data' => $approval,
            'modal_title'=> "Verifikasi Data Pendaftaran",
            'h1'    => $na,
            'h2'    => $nc,
            'head'  => $head,
            'nama'  => $na,
            'nama2'  => $nc,
            'tname'    => $tname,
            're'    => $kode,
            'modal_read'=> base_url('approval/read'),
            'modal_read2'=> base_url('approval/pengaju'),
            'modal_create'=> base_url('approval/jadi'),
            'modal_create2'=> base_url('approval/pesan'),
            'modal_pengambilan'=> base_url('approval/ambil'),
            'conten'    => 'backend/admin/Approval/riwayat_list',
            'r'         => 'active',$n         => 'active',
            'nama_user' => $this->session->userdata('nama_user'),
            'status'    => $this->session->userdata('status'),
        );

         $this->load->view('backend/dashboard/index', $data);
    }

}

?>