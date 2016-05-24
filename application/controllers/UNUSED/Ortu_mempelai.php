<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ortu_mempelai extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Ortu_mempelai_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $ortu_mempelai = $this->Ortu_mempelai_model->get_all();

        $data = array(
            'ortu_mempelai_data' => $ortu_mempelai
        );

        $this->load->view('ortu_mempelai_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Ortu_mempelai_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_ortu' => $row->id_ortu,
		'id_mempelai' => $row->id_mempelai,
		'nik' => $row->nik,
		'nama' => $row->nama,
		'agama' => $row->agama,
		'nama_organisasi' => $row->nama_organisasi,
		'tmp_lahir' => $row->tmp_lahir,
		'tgl_lahir' => $row->tgl_lahir,
		'a_desa' => $row->a_desa,
		'a_kecamatan' => $row->a_kecamatan,
		'a_kabkota' => $row->a_kabkota,
		'a_provinsi' => $row->a_provinsi,
		'pekerjaan' => $row->pekerjaan,
		'status' => $row->status,
	    );
            $this->load->view('ortu_mempelai_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('ortu_mempelai'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('ortu_mempelai/create_action'),
	    'id_ortu' => set_value('id_ortu'),
	    'id_mempelai' => set_value('id_mempelai'),
	    'nik' => set_value('nik'),
	    'nama' => set_value('nama'),
	    'agama' => set_value('agama'),
	    'nama_organisasi' => set_value('nama_organisasi'),
	    'tmp_lahir' => set_value('tmp_lahir'),
	    'tgl_lahir' => set_value('tgl_lahir'),
	    'a_desa' => set_value('a_desa'),
	    'a_kecamatan' => set_value('a_kecamatan'),
	    'a_kabkota' => set_value('a_kabkota'),
	    'a_provinsi' => set_value('a_provinsi'),
	    'pekerjaan' => set_value('pekerjaan'),
	    'status' => set_value('status'),
	);
        $this->load->view('ortu_mempelai_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_mempelai' => $this->input->post('id_mempelai',TRUE),
		'nik' => $this->input->post('nik',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'agama' => $this->input->post('agama',TRUE),
		'nama_organisasi' => $this->input->post('nama_organisasi',TRUE),
		'tmp_lahir' => $this->input->post('tmp_lahir',TRUE),
		'tgl_lahir' => $this->input->post('tgl_lahir',TRUE),
		'a_desa' => $this->input->post('a_desa',TRUE),
		'a_kecamatan' => $this->input->post('a_kecamatan',TRUE),
		'a_kabkota' => $this->input->post('a_kabkota',TRUE),
		'a_provinsi' => $this->input->post('a_provinsi',TRUE),
		'pekerjaan' => $this->input->post('pekerjaan',TRUE),
		'status' => $this->input->post('status',TRUE),
	    );

            $this->Ortu_mempelai_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('ortu_mempelai'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Ortu_mempelai_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('ortu_mempelai/update_action'),
		'id_ortu' => set_value('id_ortu', $row->id_ortu),
		'id_mempelai' => set_value('id_mempelai', $row->id_mempelai),
		'nik' => set_value('nik', $row->nik),
		'nama' => set_value('nama', $row->nama),
		'agama' => set_value('agama', $row->agama),
		'nama_organisasi' => set_value('nama_organisasi', $row->nama_organisasi),
		'tmp_lahir' => set_value('tmp_lahir', $row->tmp_lahir),
		'tgl_lahir' => set_value('tgl_lahir', $row->tgl_lahir),
		'a_desa' => set_value('a_desa', $row->a_desa),
		'a_kecamatan' => set_value('a_kecamatan', $row->a_kecamatan),
		'a_kabkota' => set_value('a_kabkota', $row->a_kabkota),
		'a_provinsi' => set_value('a_provinsi', $row->a_provinsi),
		'pekerjaan' => set_value('pekerjaan', $row->pekerjaan),
		'status' => set_value('status', $row->status),
	    );
            $this->load->view('ortu_mempelai_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('ortu_mempelai'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_ortu', TRUE));
        } else {
            $data = array(
		'id_mempelai' => $this->input->post('id_mempelai',TRUE),
		'nik' => $this->input->post('nik',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'agama' => $this->input->post('agama',TRUE),
		'nama_organisasi' => $this->input->post('nama_organisasi',TRUE),
		'tmp_lahir' => $this->input->post('tmp_lahir',TRUE),
		'tgl_lahir' => $this->input->post('tgl_lahir',TRUE),
		'a_desa' => $this->input->post('a_desa',TRUE),
		'a_kecamatan' => $this->input->post('a_kecamatan',TRUE),
		'a_kabkota' => $this->input->post('a_kabkota',TRUE),
		'a_provinsi' => $this->input->post('a_provinsi',TRUE),
		'pekerjaan' => $this->input->post('pekerjaan',TRUE),
		'status' => $this->input->post('status',TRUE),
	    );

            $this->Ortu_mempelai_model->update($this->input->post('id_ortu', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('ortu_mempelai'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Ortu_mempelai_model->get_by_id($id);

        if ($row) {
            $this->Ortu_mempelai_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('ortu_mempelai'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('ortu_mempelai'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_mempelai', 'id mempelai', 'trim|required');
	$this->form_validation->set_rules('nik', 'nik', 'trim|required');
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('agama', 'agama', 'trim|required');
	$this->form_validation->set_rules('nama_organisasi', 'nama organisasi', 'trim|required');
	$this->form_validation->set_rules('tmp_lahir', 'tmp lahir', 'trim|required');
	$this->form_validation->set_rules('tgl_lahir', 'tgl lahir', 'trim|required');
	$this->form_validation->set_rules('a_desa', 'a desa', 'trim|required');
	$this->form_validation->set_rules('a_kecamatan', 'a kecamatan', 'trim|required');
	$this->form_validation->set_rules('a_kabkota', 'a kabkota', 'trim|required');
	$this->form_validation->set_rules('a_provinsi', 'a provinsi', 'trim|required');
	$this->form_validation->set_rules('pekerjaan', 'pekerjaan', 'trim|required');
	$this->form_validation->set_rules('status', 'status', 'trim|required');

	$this->form_validation->set_rules('id_ortu', 'id_ortu', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Ortu_mempelai.php */
/* Location: ./application/controllers/Ortu_mempelai.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-04-13 20:48:29 */
/* http://harviacode.com */