<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Data_perceraian extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Data_perceraian_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data_perceraian = $this->Data_perceraian_model->get_all();

        $data = array(
            'data_perceraian_data' => $data_perceraian
        );

        $this->load->view('data_perceraian_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Data_perceraian_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_datacerai' => $row->id_datacerai,
		'id_ac' => $row->id_ac,
		'yang mengajukan' => $row->yang mengajukan,
		'no_akta_perkawinan' => $row->no_akta_perkawinan,
		'tgl_akta_perkawinan' => $row->tgl_akta_perkawinan,
		'tmp_pencatatan' => $row->tmp_pencatatan,
		'no_putusan' => $row->no_putusan,
		'tgl_putusan' => $row->tgl_putusan,
		'tkt_peradilan' => $row->tkt_peradilan,
		'tmp_peradilan' => $row->tmp_peradilan,
		'nama_lembaga' => $row->nama_lembaga,
		'sebab' => $row->sebab,
		'tgl_melapor' => $row->tgl_melapor,
	    );
            $this->load->view('data_perceraian_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_perceraian'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('data_perceraian/create_action'),
	    'id_datacerai' => set_value('id_datacerai'),
	    'id_ac' => set_value('id_ac'),
	    'yang mengajukan' => set_value('yang mengajukan'),
	    'no_akta_perkawinan' => set_value('no_akta_perkawinan'),
	    'tgl_akta_perkawinan' => set_value('tgl_akta_perkawinan'),
	    'tmp_pencatatan' => set_value('tmp_pencatatan'),
	    'no_putusan' => set_value('no_putusan'),
	    'tgl_putusan' => set_value('tgl_putusan'),
	    'tkt_peradilan' => set_value('tkt_peradilan'),
	    'tmp_peradilan' => set_value('tmp_peradilan'),
	    'nama_lembaga' => set_value('nama_lembaga'),
	    'sebab' => set_value('sebab'),
	    'tgl_melapor' => set_value('tgl_melapor'),
	);
        $this->load->view('data_perceraian_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_ac' => $this->input->post('id_ac',TRUE),
		'yang mengajukan' => $this->input->post('yang mengajukan',TRUE),
		'no_akta_perkawinan' => $this->input->post('no_akta_perkawinan',TRUE),
		'tgl_akta_perkawinan' => $this->input->post('tgl_akta_perkawinan',TRUE),
		'tmp_pencatatan' => $this->input->post('tmp_pencatatan',TRUE),
		'no_putusan' => $this->input->post('no_putusan',TRUE),
		'tgl_putusan' => $this->input->post('tgl_putusan',TRUE),
		'tkt_peradilan' => $this->input->post('tkt_peradilan',TRUE),
		'tmp_peradilan' => $this->input->post('tmp_peradilan',TRUE),
		'nama_lembaga' => $this->input->post('nama_lembaga',TRUE),
		'sebab' => $this->input->post('sebab',TRUE),
		'tgl_melapor' => $this->input->post('tgl_melapor',TRUE),
	    );

            $this->Data_perceraian_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('data_perceraian'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Data_perceraian_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('data_perceraian/update_action'),
		'id_datacerai' => set_value('id_datacerai', $row->id_datacerai),
		'id_ac' => set_value('id_ac', $row->id_ac),
		'yang mengajukan' => set_value('yang mengajukan', $row->yang mengajukan),
		'no_akta_perkawinan' => set_value('no_akta_perkawinan', $row->no_akta_perkawinan),
		'tgl_akta_perkawinan' => set_value('tgl_akta_perkawinan', $row->tgl_akta_perkawinan),
		'tmp_pencatatan' => set_value('tmp_pencatatan', $row->tmp_pencatatan),
		'no_putusan' => set_value('no_putusan', $row->no_putusan),
		'tgl_putusan' => set_value('tgl_putusan', $row->tgl_putusan),
		'tkt_peradilan' => set_value('tkt_peradilan', $row->tkt_peradilan),
		'tmp_peradilan' => set_value('tmp_peradilan', $row->tmp_peradilan),
		'nama_lembaga' => set_value('nama_lembaga', $row->nama_lembaga),
		'sebab' => set_value('sebab', $row->sebab),
		'tgl_melapor' => set_value('tgl_melapor', $row->tgl_melapor),
	    );
            $this->load->view('data_perceraian_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_perceraian'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_datacerai', TRUE));
        } else {
            $data = array(
		'id_ac' => $this->input->post('id_ac',TRUE),
		'yang mengajukan' => $this->input->post('yang mengajukan',TRUE),
		'no_akta_perkawinan' => $this->input->post('no_akta_perkawinan',TRUE),
		'tgl_akta_perkawinan' => $this->input->post('tgl_akta_perkawinan',TRUE),
		'tmp_pencatatan' => $this->input->post('tmp_pencatatan',TRUE),
		'no_putusan' => $this->input->post('no_putusan',TRUE),
		'tgl_putusan' => $this->input->post('tgl_putusan',TRUE),
		'tkt_peradilan' => $this->input->post('tkt_peradilan',TRUE),
		'tmp_peradilan' => $this->input->post('tmp_peradilan',TRUE),
		'nama_lembaga' => $this->input->post('nama_lembaga',TRUE),
		'sebab' => $this->input->post('sebab',TRUE),
		'tgl_melapor' => $this->input->post('tgl_melapor',TRUE),
	    );

            $this->Data_perceraian_model->update($this->input->post('id_datacerai', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('data_perceraian'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Data_perceraian_model->get_by_id($id);

        if ($row) {
            $this->Data_perceraian_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('data_perceraian'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_perceraian'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_ac', 'id ac', 'trim|required');
	$this->form_validation->set_rules('yang mengajukan', 'yang mengajukan', 'trim|required');
	$this->form_validation->set_rules('no_akta_perkawinan', 'no akta perkawinan', 'trim|required');
	$this->form_validation->set_rules('tgl_akta_perkawinan', 'tgl akta perkawinan', 'trim|required');
	$this->form_validation->set_rules('tmp_pencatatan', 'tmp pencatatan', 'trim|required');
	$this->form_validation->set_rules('no_putusan', 'no putusan', 'trim|required');
	$this->form_validation->set_rules('tgl_putusan', 'tgl putusan', 'trim|required');
	$this->form_validation->set_rules('tkt_peradilan', 'tkt peradilan', 'trim|required');
	$this->form_validation->set_rules('tmp_peradilan', 'tmp peradilan', 'trim|required');
	$this->form_validation->set_rules('nama_lembaga', 'nama lembaga', 'trim|required');
	$this->form_validation->set_rules('sebab', 'sebab', 'trim|required');
	$this->form_validation->set_rules('tgl_melapor', 'tgl melapor', 'trim|required');

	$this->form_validation->set_rules('id_datacerai', 'id_datacerai', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Data_perceraian.php */
/* Location: ./application/controllers/Data_perceraian.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-04-21 19:49:22 */
/* http://harviacode.com */