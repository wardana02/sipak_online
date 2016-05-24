<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Data_bercerai extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Data_bercerai_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data_bercerai = $this->Data_bercerai_model->get_all();

        $data = array(
            'data_bercerai_data' => $data_bercerai
        );

        $this->load->view('data_bercerai_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Data_bercerai_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_bercerai' => $row->id_bercerai,
		'id_ac' => $row->id_ac,
		'no_kk' => $row->no_kk,
		'nik' => $row->nik,
		'nama' => $row->nama,
		'tmp_lahir' => $row->tmp_lahir,
		'tgl_lahir' => $row->tgl_lahir,
		'pendidikan_terakhir' => $row->pendidikan_terakhir,
		'agama' => $row->agama,
		'nm_organisasi' => $row->nm_organisasi,
		'pekerjaan' => $row->pekerjaan,
		'perceraian_ke' => $row->perceraian_ke,
		'status_mempelai' => $row->status_mempelai,
		'a_alamat' => $row->a_alamat,
		'a_desa' => $row->a_desa,
		'a_kecamatan' => $row->a_kecamatan,
		'a_kabkota' => $row->a_kabkota,
	    );
            $this->load->view('data_bercerai_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_bercerai'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('data_bercerai/create_action'),
	    'id_bercerai' => set_value('id_bercerai'),
	    'id_ac' => set_value('id_ac'),
	    'no_kk' => set_value('no_kk'),
	    'nik' => set_value('nik'),
	    'nama' => set_value('nama'),
	    'tmp_lahir' => set_value('tmp_lahir'),
	    'tgl_lahir' => set_value('tgl_lahir'),
	    'pendidikan_terakhir' => set_value('pendidikan_terakhir'),
	    'agama' => set_value('agama'),
	    'nm_organisasi' => set_value('nm_organisasi'),
	    'pekerjaan' => set_value('pekerjaan'),
	    'perceraian_ke' => set_value('perceraian_ke'),
	    'status_mempelai' => set_value('status_mempelai'),
	    'a_alamat' => set_value('a_alamat'),
	    'a_desa' => set_value('a_desa'),
	    'a_kecamatan' => set_value('a_kecamatan'),
	    'a_kabkota' => set_value('a_kabkota'),
	);
        $this->load->view('data_bercerai_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_ac' => $this->input->post('id_ac',TRUE),
		'no_kk' => $this->input->post('no_kk',TRUE),
		'nik' => $this->input->post('nik',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'tmp_lahir' => $this->input->post('tmp_lahir',TRUE),
		'tgl_lahir' => $this->input->post('tgl_lahir',TRUE),
		'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir',TRUE),
		'agama' => $this->input->post('agama',TRUE),
		'nm_organisasi' => $this->input->post('nm_organisasi',TRUE),
		'pekerjaan' => $this->input->post('pekerjaan',TRUE),
		'perceraian_ke' => $this->input->post('perceraian_ke',TRUE),
		'status_mempelai' => $this->input->post('status_mempelai',TRUE),
		'a_alamat' => $this->input->post('a_alamat',TRUE),
		'a_desa' => $this->input->post('a_desa',TRUE),
		'a_kecamatan' => $this->input->post('a_kecamatan',TRUE),
		'a_kabkota' => $this->input->post('a_kabkota',TRUE),
	    );

            $this->Data_bercerai_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('data_bercerai'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Data_bercerai_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('data_bercerai/update_action'),
		'id_bercerai' => set_value('id_bercerai', $row->id_bercerai),
		'id_ac' => set_value('id_ac', $row->id_ac),
		'no_kk' => set_value('no_kk', $row->no_kk),
		'nik' => set_value('nik', $row->nik),
		'nama' => set_value('nama', $row->nama),
		'tmp_lahir' => set_value('tmp_lahir', $row->tmp_lahir),
		'tgl_lahir' => set_value('tgl_lahir', $row->tgl_lahir),
		'pendidikan_terakhir' => set_value('pendidikan_terakhir', $row->pendidikan_terakhir),
		'agama' => set_value('agama', $row->agama),
		'nm_organisasi' => set_value('nm_organisasi', $row->nm_organisasi),
		'pekerjaan' => set_value('pekerjaan', $row->pekerjaan),
		'perceraian_ke' => set_value('perceraian_ke', $row->perceraian_ke),
		'status_mempelai' => set_value('status_mempelai', $row->status_mempelai),
		'a_alamat' => set_value('a_alamat', $row->a_alamat),
		'a_desa' => set_value('a_desa', $row->a_desa),
		'a_kecamatan' => set_value('a_kecamatan', $row->a_kecamatan),
		'a_kabkota' => set_value('a_kabkota', $row->a_kabkota),
	    );
            $this->load->view('data_bercerai_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_bercerai'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_bercerai', TRUE));
        } else {
            $data = array(
		'id_ac' => $this->input->post('id_ac',TRUE),
		'no_kk' => $this->input->post('no_kk',TRUE),
		'nik' => $this->input->post('nik',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'tmp_lahir' => $this->input->post('tmp_lahir',TRUE),
		'tgl_lahir' => $this->input->post('tgl_lahir',TRUE),
		'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir',TRUE),
		'agama' => $this->input->post('agama',TRUE),
		'nm_organisasi' => $this->input->post('nm_organisasi',TRUE),
		'pekerjaan' => $this->input->post('pekerjaan',TRUE),
		'perceraian_ke' => $this->input->post('perceraian_ke',TRUE),
		'status_mempelai' => $this->input->post('status_mempelai',TRUE),
		'a_alamat' => $this->input->post('a_alamat',TRUE),
		'a_desa' => $this->input->post('a_desa',TRUE),
		'a_kecamatan' => $this->input->post('a_kecamatan',TRUE),
		'a_kabkota' => $this->input->post('a_kabkota',TRUE),
	    );

            $this->Data_bercerai_model->update($this->input->post('id_bercerai', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('data_bercerai'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Data_bercerai_model->get_by_id($id);

        if ($row) {
            $this->Data_bercerai_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('data_bercerai'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_bercerai'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_ac', 'id ac', 'trim|required');
	$this->form_validation->set_rules('no_kk', 'no kk', 'trim|required');
	$this->form_validation->set_rules('nik', 'nik', 'trim|required');
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('tmp_lahir', 'tmp lahir', 'trim|required');
	$this->form_validation->set_rules('tgl_lahir', 'tgl lahir', 'trim|required');
	$this->form_validation->set_rules('pendidikan_terakhir', 'pendidikan terakhir', 'trim|required');
	$this->form_validation->set_rules('agama', 'agama', 'trim|required');
	$this->form_validation->set_rules('nm_organisasi', 'nm organisasi', 'trim|required');
	$this->form_validation->set_rules('pekerjaan', 'pekerjaan', 'trim|required');
	$this->form_validation->set_rules('perceraian_ke', 'perceraian ke', 'trim|required');
	$this->form_validation->set_rules('status_mempelai', 'status mempelai', 'trim|required');
	$this->form_validation->set_rules('a_alamat', 'a alamat', 'trim|required');
	$this->form_validation->set_rules('a_desa', 'a desa', 'trim|required');
	$this->form_validation->set_rules('a_kecamatan', 'a kecamatan', 'trim|required');
	$this->form_validation->set_rules('a_kabkota', 'a kabkota', 'trim|required');

	$this->form_validation->set_rules('id_bercerai', 'id_bercerai', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Data_bercerai.php */
/* Location: ./application/controllers/Data_bercerai.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-04-21 19:49:13 */
/* http://harviacode.com */