<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $user = $this->User_model->get_all();
        $data = array(
            'modal_title'=> "Detail Data User dan Aparatur",
            'modal_read'=> base_url('user/read'),
            'conten'    => 'backend/admin/User/user_list',
            'q'         => 'active','q2'         => 'active',
            'nama_user' => $this->session->userdata('nama_user'),
            'status'    => $this->session->userdata('status'),
            'user_data' => $user
        );
        $this->load->view('backend/dashboard/index', $data);
    }

    public function aparatur()
    {
        $user = $this->User_model->get_all();
        $data = array(
            'modal_title'=> "Detail Data Aparatur",
            'modal_read'=> base_url('user/read'),
            'conten'    => 'backend/admin/User/aparatur_list',
            'q'         => 'active','q1'         => 'active',
            'nama_user' => $this->session->userdata('nama_user'),
            'status'    => $this->session->userdata('status'),
            'user_data' => $user
        );
        $this->load->view('backend/dashboard/index', $data);
    }
    public function modal()
    {
        
        $this->load->view('backend/admin/User/modal');
    }

    public function read($id) 
    {
        $id = $this->input->post('id');
        $row = $this->User_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_user' => $row->id_user,
		'previlage' => $row->previlage,
		'username' => $row->username,
		'password' => $row->password,
		'jabatan' => $row->jabatan,
		'last_log' => $row->last_log,
		'nama_user' => $row->nama_user,
        'no_hp' => $row->no_hp,
	    );
            $this->load->view('backend/admin/User/user_read', $data);
        } else {
            echo "Record Not Found";
        }
    }

    public function create() 
    {
        $data = array(
            'q'         => 'active',
            'nama_user' => $this->session->userdata('nama_user'),
            'status'    => $this->session->userdata('status'),
            'title' => 'Tambah Data User Sistem Capil Online Baru',
            'button' => 'Create',
            'require'   => "required=''",
            'action' => site_url('user/create_action'),
	    'id_user' => set_value('id_user'),
	    'previlage' => set_value('previlage'),
	    'username' => set_value('username'),
	    'password' => set_value('password'),
	    'jabatan' => set_value('jabatan'),
	    'nama_user' => set_value('nama_user'),
        'no_hp' => set_value('no_hp'),
	);
        $data['conten'] = "backend/admin/User/user_form";
            $this->load->view('backend/dashboard/index', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            echo "tidak valid";
            $this->create();
        } else {
            $data = array(
        'id_user' => "USR".date("ymdHis"),
		'previlage' => $this->input->post('previlage',TRUE),
		'username' => $this->input->post('username',TRUE),
		'password' => sha1($this->input->post('password',TRUE)),
		'jabatan' => $this->input->post('jabatan',TRUE),
		'nama_user' => $this->input->post('nama_user',TRUE),
        'no_hp' => $this->input->post('no_hp',TRUE),
        'aktif' => "0",
	    );

            $this->User_model->insert($data);
            $this->session->set_flashdata('message', "
                <div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                <h4><i class='glyphicon glyphicon-ok'></i> Berhasil!</h4>
                    Data User Baru Berhasil Ditambahkan !
            </div>
                ");
            redirect(site_url('user'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->User_model->get_by_id($id);

        if ($row) {
            $data = array(
                'conten'    => 'backend/admin/User/user_form',
                'q'         => 'active',
                'nama_user' => $this->session->userdata('nama_user'),
                'status'    => $this->session->userdata('status'),
                'title' => 'Ubah Data User Sistem Capil Online',
                'button' => 'Update',
                'action' => site_url('user/update_action'),
		'id_user' => set_value('id_user', $row->id_user),
		'previlage' => set_value('previlage', $row->previlage),
		'username' => set_value('username', $row->username),
		'jabatan' => set_value('jabatan', $row->jabatan),
		'nama_user' => set_value('nama_user', $row->nama_user),
        'no_hp' => set_value('no_hp', $row->no_hp),
	    );
            $this->load->view('backend/dashboard/index', $data);
        } else {
            $this->session->set_flashdata('message', "
                <div class='alert alert-danger alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                <h4><i class='icon fa fa-ban'></i> Gagal!</h4>
                    Maaf, Data Tidak Ditemukan
            </div>
                ");
            redirect(site_url('user'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_user', TRUE));
        } else {
            $data = array(
		'previlage' => $this->input->post('previlage',TRUE),
		'username' => $this->input->post('username',TRUE),
		'jabatan' => $this->input->post('jabatan',TRUE),
		'last_log' => $this->input->post('last_log',TRUE),
		'nama_user' => $this->input->post('nama_user',TRUE),
        'no_hp' => $this->input->post('no_hp',TRUE),
	    );
            if ($this->input->post('password')!='') {
                 $data['password'] = sha1($this->input->post('password',TRUE));
            }

            //print_r($data);exit();
           

            $this->User_model->update($this->input->post('id_user', TRUE), $data);
            $this->session->set_flashdata('message', "
                <div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                <h4><i class='icon fa fa-ban'></i> Berhasil!</h4>
                    Data Berhasil Diperbaharui, !
            </div>
                ");
            redirect(site_url('user'));
        }
    }

    public function ubah($value,$id){
        $data = array('aktif' => $value,);
        $this->User_model->update($id, $data);
            $this->session->set_flashdata('message', "
                <div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                <h4><i class='icon fa fa-ban'></i> Berhasil!</h4>
                    Data Berhasil Diperbaharui, !
            </div>
                ");
            redirect(site_url('user'));
    }
    
    public function delete($id) 
    {
        $row = $this->User_model->get_by_id($id);

        if ($row) {
            $this->User_model->delete($id);
            $this->session->set_flashdata('message', "
                <div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                <h4><i class='icon fa fa-ban'></i> Berhasil!</h4>
                    Data Berhasil Di Hapus!
            </div>
                ");
            redirect(site_url('user'));
        } else {
           $this->session->set_flashdata('message', "
                <div class='alert alert-danger alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                <h4><i class='icon fa fa-ban'></i> Gagal!</h4>
                    Maaf, Data Gagal Di Hapus.
            </div>
                ");
            redirect(site_url('user'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('previlage', 'previlage', 'trim|required');
	$this->form_validation->set_rules('username', 'username', 'trim|required');
	$this->form_validation->set_rules('jabatan', 'jabatan', 'required');
	$this->form_validation->set_rules('nama_user', 'nama user', 'required');
    $this->form_validation->set_rules('no_hp', 'nama no_hp', 'numeric|required');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-03-15 16:08:24 */
/* http://harviacode.com */