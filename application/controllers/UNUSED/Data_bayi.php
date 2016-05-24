<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Data_bayi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Data_bayi_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data_bayi = $this->Data_bayi_model->get_all();

        $data = array(
            'data_bayi_data' => $data_bayi
        );

        $this->load->view('generate/data_bayi_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Data_bayi_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_bayi' => $row->id_bayi,
		'id_AL' => $row->id_AL,
		'nama' => $row->nama,
		'jk' => $row->jk,
		'tmp_lahir' => $row->tmp_lahir,
		'tmp_kelahiran' => $row->tmp_kelahiran,
		'tgl_kelahiran' => $row->tgl_kelahiran,
		'hari_kelahiran' => $row->hari_kelahiran,
		'panjang_bayi' => $row->panjang_bayi,
		'berat_bayi' => $row->berat_bayi,
		'penolong' => $row->penolong,
		'kelahiran_ke' => $row->kelahiran_ke,
		'jenis_kelahiran' => $row->jenis_kelahiran,
		'pukul' => $row->pukul,
	    );
            $this->load->view('data_bayi_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_bayi'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('data_bayi/create_action'),
	    'id_bayi' => set_value('id_bayi'),
	    'id_AL' => set_value('id_AL'),
	    'nama' => set_value('nama'),
	    'jk' => set_value('jk'),
	    'tmp_lahir' => set_value('tmp_lahir'),
	    'tmp_kelahiran' => set_value('tmp_kelahiran'),
	    'tgl_kelahiran' => set_value('tgl_kelahiran'),
	    'hari_kelahiran' => set_value('hari_kelahiran'),
	    'panjang_bayi' => set_value('panjang_bayi'),
	    'berat_bayi' => set_value('berat_bayi'),
	    'penolong' => set_value('penolong'),
	    'kelahiran_ke' => set_value('kelahiran_ke'),
	    'jenis_kelahiran' => set_value('jenis_kelahiran'),
	    'pukul' => set_value('pukul'),
	);
        $this->load->view('generate/data_bayi_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_AL' => $this->input->post('id_AL',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'jk' => $this->input->post('jk',TRUE),
		'tmp_lahir' => $this->input->post('tmp_lahir',TRUE),
		'tmp_kelahiran' => $this->input->post('tmp_kelahiran',TRUE),
		'tgl_kelahiran' => $this->input->post('tgl_kelahiran',TRUE),
		'hari_kelahiran' => $this->input->post('hari_kelahiran',TRUE),
		'panjang_bayi' => $this->input->post('panjang_bayi',TRUE),
		'berat_bayi' => $this->input->post('berat_bayi',TRUE),
		'penolong' => $this->input->post('penolong',TRUE),
		'kelahiran_ke' => $this->input->post('kelahiran_ke',TRUE),
		'jenis_kelahiran' => $this->input->post('jenis_kelahiran',TRUE),
		'pukul' => $this->input->post('pukul',TRUE),
	    );

            $this->Data_bayi_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('data_bayi'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Data_bayi_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('data_bayi/update_action'),
		'id_bayi' => set_value('id_bayi', $row->id_bayi),
		'id_AL' => set_value('id_AL', $row->id_AL),
		'nama' => set_value('nama', $row->nama),
		'jk' => set_value('jk', $row->jk),
		'tmp_lahir' => set_value('tmp_lahir', $row->tmp_lahir),
		'tmp_kelahiran' => set_value('tmp_kelahiran', $row->tmp_kelahiran),
		'tgl_kelahiran' => set_value('tgl_kelahiran', $row->tgl_kelahiran),
		'hari_kelahiran' => set_value('hari_kelahiran', $row->hari_kelahiran),
		'panjang_bayi' => set_value('panjang_bayi', $row->panjang_bayi),
		'berat_bayi' => set_value('berat_bayi', $row->berat_bayi),
		'penolong' => set_value('penolong', $row->penolong),
		'kelahiran_ke' => set_value('kelahiran_ke', $row->kelahiran_ke),
		'jenis_kelahiran' => set_value('jenis_kelahiran', $row->jenis_kelahiran),
		'pukul' => set_value('pukul', $row->pukul),
	    );
            $this->load->view('data_bayi_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_bayi'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_bayi', TRUE));
        } else {
            $data = array(
		'id_AL' => $this->input->post('id_AL',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'jk' => $this->input->post('jk',TRUE),
		'tmp_lahir' => $this->input->post('tmp_lahir',TRUE),
		'tmp_kelahiran' => $this->input->post('tmp_kelahiran',TRUE),
		'tgl_kelahiran' => $this->input->post('tgl_kelahiran',TRUE),
		'hari_kelahiran' => $this->input->post('hari_kelahiran',TRUE),
		'panjang_bayi' => $this->input->post('panjang_bayi',TRUE),
		'berat_bayi' => $this->input->post('berat_bayi',TRUE),
		'penolong' => $this->input->post('penolong',TRUE),
		'kelahiran_ke' => $this->input->post('kelahiran_ke',TRUE),
		'jenis_kelahiran' => $this->input->post('jenis_kelahiran',TRUE),
		'pukul' => $this->input->post('pukul',TRUE),
	    );

            $this->Data_bayi_model->update($this->input->post('id_bayi', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('data_bayi'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Data_bayi_model->get_by_id($id);

        if ($row) {
            $this->Data_bayi_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('data_bayi'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_bayi'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_AL', 'id al', 'trim|required');
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('jk', 'jk', 'trim|required');
	$this->form_validation->set_rules('tmp_lahir', 'tmp lahir', 'trim|required');
	$this->form_validation->set_rules('tmp_kelahiran', 'tmp kelahiran', 'trim|required');
	$this->form_validation->set_rules('tgl_kelahiran', 'tgl kelahiran', 'trim|required');
	$this->form_validation->set_rules('hari_kelahiran', 'hari kelahiran', 'trim|required');
	$this->form_validation->set_rules('panjang_bayi', 'panjang bayi', 'trim|required|numeric');
	$this->form_validation->set_rules('berat_bayi', 'berat bayi', 'trim|required|numeric');
	$this->form_validation->set_rules('penolong', 'penolong', 'trim|required');
	$this->form_validation->set_rules('kelahiran_ke', 'kelahiran ke', 'trim|required');
	$this->form_validation->set_rules('jenis_kelahiran', 'jenis kelahiran', 'trim|required');
	$this->form_validation->set_rules('pukul', 'pukul', 'trim|required');

	$this->form_validation->set_rules('id_bayi', 'id_bayi', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Data_bayi.php */
/* Location: ./application/controllers/Data_bayi.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-03-16 22:22:05 */
/* http://harviacode.com */