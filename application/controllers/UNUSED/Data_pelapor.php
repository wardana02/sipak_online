<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Data_pelapor extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Data_pelapor_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data_pelapor = $this->Data_pelapor_model->get_all();

        $data = array(
            'data_pelapor_data' => $data_pelapor
        );

        $this->load->view('data_pelapor_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Data_pelapor_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_pelapor' => $row->id_pelapor,
		'id_akta' => $row->id_akta,
		'nik' => $row->nik,
		'nama' => $row->nama,
		'umur' => $row->umur,
		'a_desa' => $row->a_desa,
		'a_kecamatan' => $row->a_kecamatan,
		'a_kabkota' => $row->a_kabkota,
		'a_provinsi' => $row->a_provinsi,
		'jk' => $row->jk,
		'pekerjaan' => $row->pekerjaan,
	    );
            $this->load->view('data_pelapor_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_pelapor'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('data_pelapor/create_action'),
	    'id_pelapor' => set_value('id_pelapor'),
	    'id_akta' => set_value('id_akta'),
	    'nik' => set_value('nik'),
	    'nama' => set_value('nama'),
	    'umur' => set_value('umur'),
	    'a_desa' => set_value('a_desa'),
	    'a_kecamatan' => set_value('a_kecamatan'),
	    'a_kabkota' => set_value('a_kabkota'),
	    'a_provinsi' => set_value('a_provinsi'),
	    'jk' => set_value('jk'),
	    'pekerjaan' => set_value('pekerjaan'),
	);
        $this->load->view('data_pelapor_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_akta' => $this->input->post('id_akta',TRUE),
		'nik' => $this->input->post('nik',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'umur' => $this->input->post('umur',TRUE),
		'a_desa' => $this->input->post('a_desa',TRUE),
		'a_kecamatan' => $this->input->post('a_kecamatan',TRUE),
		'a_kabkota' => $this->input->post('a_kabkota',TRUE),
		'a_provinsi' => $this->input->post('a_provinsi',TRUE),
		'jk' => $this->input->post('jk',TRUE),
		'pekerjaan' => $this->input->post('pekerjaan',TRUE),
	    );

            $this->Data_pelapor_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('data_pelapor'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Data_pelapor_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('data_pelapor/update_action'),
		'id_pelapor' => set_value('id_pelapor', $row->id_pelapor),
		'id_akta' => set_value('id_akta', $row->id_akta),
		'nik' => set_value('nik', $row->nik),
		'nama' => set_value('nama', $row->nama),
		'umur' => set_value('umur', $row->umur),
		'a_desa' => set_value('a_desa', $row->a_desa),
		'a_kecamatan' => set_value('a_kecamatan', $row->a_kecamatan),
		'a_kabkota' => set_value('a_kabkota', $row->a_kabkota),
		'a_provinsi' => set_value('a_provinsi', $row->a_provinsi),
		'jk' => set_value('jk', $row->jk),
		'pekerjaan' => set_value('pekerjaan', $row->pekerjaan),
	    );
            $this->load->view('data_pelapor_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_pelapor'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_pelapor', TRUE));
        } else {
            $data = array(
		'id_akta' => $this->input->post('id_akta',TRUE),
		'nik' => $this->input->post('nik',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'umur' => $this->input->post('umur',TRUE),
		'a_desa' => $this->input->post('a_desa',TRUE),
		'a_kecamatan' => $this->input->post('a_kecamatan',TRUE),
		'a_kabkota' => $this->input->post('a_kabkota',TRUE),
		'a_provinsi' => $this->input->post('a_provinsi',TRUE),
		'jk' => $this->input->post('jk',TRUE),
		'pekerjaan' => $this->input->post('pekerjaan',TRUE),
	    );

            $this->Data_pelapor_model->update($this->input->post('id_pelapor', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('data_pelapor'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Data_pelapor_model->get_by_id($id);

        if ($row) {
            $this->Data_pelapor_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('data_pelapor'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_pelapor'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_akta', 'id akta', 'trim|required');
	$this->form_validation->set_rules('nik', 'nik', 'trim|required');
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('umur', 'umur', 'trim|required');
	$this->form_validation->set_rules('a_desa', 'a desa', 'trim|required');
	$this->form_validation->set_rules('a_kecamatan', 'a kecamatan', 'trim|required');
	$this->form_validation->set_rules('a_kabkota', 'a kabkota', 'trim|required');
	$this->form_validation->set_rules('a_provinsi', 'a provinsi', 'trim|required');
	$this->form_validation->set_rules('jk', 'jk', 'trim|required');
	$this->form_validation->set_rules('pekerjaan', 'pekerjaan', 'trim|required');

	$this->form_validation->set_rules('id_pelapor', 'id_pelapor', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Data_pelapor.php */
/* Location: ./application/controllers/Data_pelapor.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-03-21 01:14:14 */
/* http://harviacode.com */