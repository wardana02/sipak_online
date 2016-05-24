<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Data_mempelai extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Data_mempelai_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data_mempelai = $this->Data_mempelai_model->get_all();

        $data = array(
            'data_mempelai_data' => $data_mempelai
        );

        $this->load->view('data_mempelai_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Data_mempelai_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_mempelai' => $row->id_mempelai,
		'id_ap' => $row->id_ap,
		'no_kk' => $row->no_kk,
		'nik' => $row->nik,
		'nama' => $row->nama,
		'tmp_lahir' => $row->tmp_lahir,
		'tgl_lahir' => $row->tgl_lahir,
		'pendidikan_terakhir' => $row->pendidikan_terakhir,
		'agama' => $row->agama,
		'nm_organisasi' => $row->nm_organisasi,
		'pekerjaan' => $row->pekerjaan,
		'anak_ke' => $row->anak_ke,
		'status_sebelum_nikah' => $row->status_sebelum_nikah,
		'perkawinan_ke' => $row->perkawinan_ke,
		'istri_ke' => $row->istri_ke,
		'status_mempelai' => $row->status_mempelai,
		'a_alamat' => $row->a_alamat,
		'a_desa' => $row->a_desa,
		'a_kecamatan' => $row->a_kecamatan,
		'a_kabkota' => $row->a_kabkota,
	    );
            $this->load->view('data_mempelai_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_mempelai'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('data_mempelai/create_action'),
	    'id_mempelai' => set_value('id_mempelai'),
	    'id_ap' => set_value('id_ap'),
	    'no_kk' => set_value('no_kk'),
	    'nik' => set_value('nik'),
	    'nama' => set_value('nama'),
	    'tmp_lahir' => set_value('tmp_lahir'),
	    'tgl_lahir' => set_value('tgl_lahir'),
	    'pendidikan_terakhir' => set_value('pendidikan_terakhir'),
	    'agama' => set_value('agama'),
	    'nm_organisasi' => set_value('nm_organisasi'),
	    'pekerjaan' => set_value('pekerjaan'),
	    'anak_ke' => set_value('anak_ke'),
	    'status_sebelum_nikah' => set_value('status_sebelum_nikah'),
	    'perkawinan_ke' => set_value('perkawinan_ke'),
	    'istri_ke' => set_value('istri_ke'),
	    'status_mempelai' => set_value('status_mempelai'),
	    'a_alamat' => set_value('a_alamat'),
	    'a_desa' => set_value('a_desa'),
	    'a_kecamatan' => set_value('a_kecamatan'),
	    'a_kabkota' => set_value('a_kabkota'),
	);
        $this->load->view('data_mempelai_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_ap' => $this->input->post('id_ap',TRUE),
		'no_kk' => $this->input->post('no_kk',TRUE),
		'nik' => $this->input->post('nik',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'tmp_lahir' => $this->input->post('tmp_lahir',TRUE),
		'tgl_lahir' => $this->input->post('tgl_lahir',TRUE),
		'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir',TRUE),
		'agama' => $this->input->post('agama',TRUE),
		'nm_organisasi' => $this->input->post('nm_organisasi',TRUE),
		'pekerjaan' => $this->input->post('pekerjaan',TRUE),
		'anak_ke' => $this->input->post('anak_ke',TRUE),
		'status_sebelum_nikah' => $this->input->post('status_sebelum_nikah',TRUE),
		'perkawinan_ke' => $this->input->post('perkawinan_ke',TRUE),
		'istri_ke' => $this->input->post('istri_ke',TRUE),
		'status_mempelai' => $this->input->post('status_mempelai',TRUE),
		'a_alamat' => $this->input->post('a_alamat',TRUE),
		'a_desa' => $this->input->post('a_desa',TRUE),
		'a_kecamatan' => $this->input->post('a_kecamatan',TRUE),
		'a_kabkota' => $this->input->post('a_kabkota',TRUE),
	    );

            $this->Data_mempelai_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('data_mempelai'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Data_mempelai_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('data_mempelai/update_action'),
		'id_mempelai' => set_value('id_mempelai', $row->id_mempelai),
		'id_ap' => set_value('id_ap', $row->id_ap),
		'no_kk' => set_value('no_kk', $row->no_kk),
		'nik' => set_value('nik', $row->nik),
		'nama' => set_value('nama', $row->nama),
		'tmp_lahir' => set_value('tmp_lahir', $row->tmp_lahir),
		'tgl_lahir' => set_value('tgl_lahir', $row->tgl_lahir),
		'pendidikan_terakhir' => set_value('pendidikan_terakhir', $row->pendidikan_terakhir),
		'agama' => set_value('agama', $row->agama),
		'nm_organisasi' => set_value('nm_organisasi', $row->nm_organisasi),
		'pekerjaan' => set_value('pekerjaan', $row->pekerjaan),
		'anak_ke' => set_value('anak_ke', $row->anak_ke),
		'status_sebelum_nikah' => set_value('status_sebelum_nikah', $row->status_sebelum_nikah),
		'perkawinan_ke' => set_value('perkawinan_ke', $row->perkawinan_ke),
		'istri_ke' => set_value('istri_ke', $row->istri_ke),
		'status_mempelai' => set_value('status_mempelai', $row->status_mempelai),
		'a_alamat' => set_value('a_alamat', $row->a_alamat),
		'a_desa' => set_value('a_desa', $row->a_desa),
		'a_kecamatan' => set_value('a_kecamatan', $row->a_kecamatan),
		'a_kabkota' => set_value('a_kabkota', $row->a_kabkota),
	    );
            $this->load->view('data_mempelai_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_mempelai'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_mempelai', TRUE));
        } else {
            $data = array(
		'id_ap' => $this->input->post('id_ap',TRUE),
		'no_kk' => $this->input->post('no_kk',TRUE),
		'nik' => $this->input->post('nik',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'tmp_lahir' => $this->input->post('tmp_lahir',TRUE),
		'tgl_lahir' => $this->input->post('tgl_lahir',TRUE),
		'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir',TRUE),
		'agama' => $this->input->post('agama',TRUE),
		'nm_organisasi' => $this->input->post('nm_organisasi',TRUE),
		'pekerjaan' => $this->input->post('pekerjaan',TRUE),
		'anak_ke' => $this->input->post('anak_ke',TRUE),
		'status_sebelum_nikah' => $this->input->post('status_sebelum_nikah',TRUE),
		'perkawinan_ke' => $this->input->post('perkawinan_ke',TRUE),
		'istri_ke' => $this->input->post('istri_ke',TRUE),
		'status_mempelai' => $this->input->post('status_mempelai',TRUE),
		'a_alamat' => $this->input->post('a_alamat',TRUE),
		'a_desa' => $this->input->post('a_desa',TRUE),
		'a_kecamatan' => $this->input->post('a_kecamatan',TRUE),
		'a_kabkota' => $this->input->post('a_kabkota',TRUE),
	    );

            $this->Data_mempelai_model->update($this->input->post('id_mempelai', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('data_mempelai'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Data_mempelai_model->get_by_id($id);

        if ($row) {
            $this->Data_mempelai_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('data_mempelai'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_mempelai'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_ap', 'id ap', 'trim|required');
	$this->form_validation->set_rules('no_kk', 'no kk', 'trim|required');
	$this->form_validation->set_rules('nik', 'nik', 'trim|required');
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('tmp_lahir', 'tmp lahir', 'trim|required');
	$this->form_validation->set_rules('tgl_lahir', 'tgl lahir', 'trim|required');
	$this->form_validation->set_rules('pendidikan_terakhir', 'pendidikan terakhir', 'trim|required');
	$this->form_validation->set_rules('agama', 'agama', 'trim|required');
	$this->form_validation->set_rules('nm_organisasi', 'nm organisasi', 'trim|required');
	$this->form_validation->set_rules('pekerjaan', 'pekerjaan', 'trim|required');
	$this->form_validation->set_rules('anak_ke', 'anak ke', 'trim|required');
	$this->form_validation->set_rules('status_sebelum_nikah', 'status sebelum nikah', 'trim|required');
	$this->form_validation->set_rules('perkawinan_ke', 'perkawinan ke', 'trim|required');
	$this->form_validation->set_rules('istri_ke', 'istri ke', 'trim|required');
	$this->form_validation->set_rules('status_mempelai', 'status mempelai', 'trim|required');
	$this->form_validation->set_rules('a_alamat', 'a alamat', 'trim|required');
	$this->form_validation->set_rules('a_desa', 'a desa', 'trim|required');
	$this->form_validation->set_rules('a_kecamatan', 'a kecamatan', 'trim|required');
	$this->form_validation->set_rules('a_kabkota', 'a kabkota', 'trim|required');

	$this->form_validation->set_rules('id_mempelai', 'id_mempelai', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Data_mempelai.php */
/* Location: ./application/controllers/Data_mempelai.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-04-13 20:48:09 */
/* http://harviacode.com */