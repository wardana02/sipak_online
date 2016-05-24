<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pbk extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pbk_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $pbk = $this->Pbk_model->get_all();

        $data = array(
            'modal_title'=> "Tabah Data Kontak Baru",
            'modal_create'=> base_url('pbk/create'),
            'conten'    => 'backend/admin/Pbk/pbk_list',
            'd'         => 'active','d2'         => 'active',
            'nama_user' => $this->session->userdata('nama_user'),
            'status'    => $this->session->userdata('status'),
            'pbk_data' => $pbk
        );

        $this->load->view('backend/dashboard/index', $data);
    }

    public function read($id) 
    {
        $row = $this->Pbk_model->get_by_id($id);
        if ($row) {
            $data = array(
		'ID' => $row->ID,
		'GroupID' => $row->GroupID,
		'Name' => $row->Name,
		'Number' => $row->Number,
	    );
            $this->load->view('pbk_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pbk'));
        }
    }

    public function create() 
    {
        $data = array(
            'conten'    => 'backend/admin/Pbk/pbk_form',
            'd'         => 'active','d2'         => 'active',
            'nama_user' => $this->session->userdata('nama_user'),
            'status'    => $this->session->userdata('status'),
            'title' => 'Tambah Data Kontak SMS Gateway Capil Online',
            'head' => 'Data Kontak Sistem SMS Gateway',
            'button' => 'Create',
            'action' => site_url('pbk/create_action'),
	    'ID' => set_value('ID'),
	    'GroupID' => set_value('GroupID'),
	    'Name' => set_value('Name'),
	    'Number' => set_value('Number'),
	);
         $this->load->view('backend/admin/Pbk/pbk_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'GroupID' => $this->input->post('GroupID',TRUE),
		'Name' => $this->input->post('Name',TRUE),
		'Number' => $this->input->post('Number',TRUE),
	    );

            $this->Pbk_model->insert($data);
            $this->session->set_flashdata('message', "
                <div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                <h4><i class='icon fa fa-ban'></i> Berhasil!</h4>
                    Data User Baru Berhasil Ditambahkan !
            </div>
                ");
            redirect(site_url('pbk'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pbk_model->get_by_id($id);

        if ($row) {
            $data = array(
            'conten'    => 'backend/admin/Pbk/pbk_form2',
            'd'         => 'active','d2'         => 'active',
            'nama_user' => $this->session->userdata('nama_user'),
            'status'    => $this->session->userdata('status'),
            'title' => 'Ubah Data Kontak SMS Gateway Capil Online',
            'head' => 'Data Kontak Sistem SMS Gateway',
                'button' => 'Update',
                'action' => site_url('pbk/update_action'),
		'ID' => set_value('ID', $row->ID),
		'GroupID' => set_value('GroupID', $row->GroupID),
		'Name' => set_value('Name', $row->Name),
		'Number' => set_value('Number', $row->Number),
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
            redirect(site_url('pbk'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('ID', TRUE));
        } else {
            $data = array(
		'GroupID' => $this->input->post('GroupID',TRUE),
		'Name' => $this->input->post('Name',TRUE),
		'Number' => $this->input->post('Number',TRUE),
	    );

            $this->Pbk_model->update($this->input->post('ID', TRUE), $data);
            $this->session->set_flashdata('message', "
                <div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                <h4><i class='icon fa fa-ban'></i> Berhasil!</h4>
                    Data User Baru Berhasil Ditambahkan !
            </div>
                ");
            redirect(site_url('pbk'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pbk_model->get_by_id($id);

        if ($row) {
            $this->Pbk_model->delete($id);
            $this->session->set_flashdata('message', "
                <div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                <h4><i class='icon fa fa-ban'></i> Berhasil!</h4>
                    Data Kontak Berhasil Dihapus !
            </div>
                ");
            redirect(site_url('pbk'));
        } else {
            $this->session->set_flashdata('message', "
                <div class='alert alert-danger alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                <h4><i class='icon fa fa-ban'></i> Gagal!</h4>
                    Maaf, Data Gagal Terhapus, Suatu Hal Terjadi.
            </div>
                ");
            redirect(site_url('pbk'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('GroupID', 'groupid', 'trim|required');
	$this->form_validation->set_rules('Name', 'name', 'trim|required');
	$this->form_validation->set_rules('Number', 'number', 'trim|required');

	$this->form_validation->set_rules('ID', 'ID', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Pbk.php */
/* Location: ./application/controllers/Pbk.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-03-15 23:25:21 */
/* http://harviacode.com */