<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Data_perkawinan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Data_perkawinan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data_perkawinan = $this->Data_perkawinan_model->get_all();

        $data = array(
            'data_perkawinan_data' => $data_perkawinan
        );

        $this->load->view('data_perkawinan_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Data_perkawinan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_dataper' => $row->id_dataper,
		'id_ap' => $row->id_ap,
		'tgl_pemberkatan' => $row->tgl_pemberkatan,
		'hari_lapor' => $row->hari_lapor,
		'tgl_lapor' => $row->tgl_lapor,
		'pukul' => $row->pukul,
		'agama' => $row->agama,
		'nama_organisasi' => $row->nama_organisasi,
		'nama_peradilan' => $row->nama_peradilan,
		'nomor_putusan' => $row->nomor_putusan,
		'tgl_putusan' => $row->tgl_putusan,
		'nama_pemuka' => $row->nama_pemuka,
	    );
            $this->load->view('data_perkawinan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_perkawinan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('data_perkawinan/create_action'),
	    'id_dataper' => set_value('id_dataper'),
	    'id_ap' => set_value('id_ap'),
	    'tgl_pemberkatan' => set_value('tgl_pemberkatan'),
	    'hari_lapor' => set_value('hari_lapor'),
	    'tgl_lapor' => set_value('tgl_lapor'),
	    'pukul' => set_value('pukul'),
	    'agama' => set_value('agama'),
	    'nama_organisasi' => set_value('nama_organisasi'),
	    'nama_peradilan' => set_value('nama_peradilan'),
	    'nomor_putusan' => set_value('nomor_putusan'),
	    'tgl_putusan' => set_value('tgl_putusan'),
	    'nama_pemuka' => set_value('nama_pemuka'),
	);
        $this->load->view('data_perkawinan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_ap' => $this->input->post('id_ap',TRUE),
		'tgl_pemberkatan' => $this->input->post('tgl_pemberkatan',TRUE),
		'hari_lapor' => $this->input->post('hari_lapor',TRUE),
		'tgl_lapor' => $this->input->post('tgl_lapor',TRUE),
		'pukul' => $this->input->post('pukul',TRUE),
		'agama' => $this->input->post('agama',TRUE),
		'nama_organisasi' => $this->input->post('nama_organisasi',TRUE),
		'nama_peradilan' => $this->input->post('nama_peradilan',TRUE),
		'nomor_putusan' => $this->input->post('nomor_putusan',TRUE),
		'tgl_putusan' => $this->input->post('tgl_putusan',TRUE),
		'nama_pemuka' => $this->input->post('nama_pemuka',TRUE),
	    );

            $this->Data_perkawinan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('data_perkawinan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Data_perkawinan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('data_perkawinan/update_action'),
		'id_dataper' => set_value('id_dataper', $row->id_dataper),
		'id_ap' => set_value('id_ap', $row->id_ap),
		'tgl_pemberkatan' => set_value('tgl_pemberkatan', $row->tgl_pemberkatan),
		'hari_lapor' => set_value('hari_lapor', $row->hari_lapor),
		'tgl_lapor' => set_value('tgl_lapor', $row->tgl_lapor),
		'pukul' => set_value('pukul', $row->pukul),
		'agama' => set_value('agama', $row->agama),
		'nama_organisasi' => set_value('nama_organisasi', $row->nama_organisasi),
		'nama_peradilan' => set_value('nama_peradilan', $row->nama_peradilan),
		'nomor_putusan' => set_value('nomor_putusan', $row->nomor_putusan),
		'tgl_putusan' => set_value('tgl_putusan', $row->tgl_putusan),
		'nama_pemuka' => set_value('nama_pemuka', $row->nama_pemuka),
	    );
            $this->load->view('data_perkawinan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_perkawinan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_dataper', TRUE));
        } else {
            $data = array(
		'id_ap' => $this->input->post('id_ap',TRUE),
		'tgl_pemberkatan' => $this->input->post('tgl_pemberkatan',TRUE),
		'hari_lapor' => $this->input->post('hari_lapor',TRUE),
		'tgl_lapor' => $this->input->post('tgl_lapor',TRUE),
		'pukul' => $this->input->post('pukul',TRUE),
		'agama' => $this->input->post('agama',TRUE),
		'nama_organisasi' => $this->input->post('nama_organisasi',TRUE),
		'nama_peradilan' => $this->input->post('nama_peradilan',TRUE),
		'nomor_putusan' => $this->input->post('nomor_putusan',TRUE),
		'tgl_putusan' => $this->input->post('tgl_putusan',TRUE),
		'nama_pemuka' => $this->input->post('nama_pemuka',TRUE),
	    );

            $this->Data_perkawinan_model->update($this->input->post('id_dataper', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('data_perkawinan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Data_perkawinan_model->get_by_id($id);

        if ($row) {
            $this->Data_perkawinan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('data_perkawinan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_perkawinan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_ap', 'id ap', 'trim|required');
	$this->form_validation->set_rules('tgl_pemberkatan', 'tgl pemberkatan', 'trim|required');
	$this->form_validation->set_rules('hari_lapor', 'hari lapor', 'trim|required');
	$this->form_validation->set_rules('tgl_lapor', 'tgl lapor', 'trim|required');
	$this->form_validation->set_rules('pukul', 'pukul', 'trim|required');
	$this->form_validation->set_rules('agama', 'agama', 'trim|required');
	$this->form_validation->set_rules('nama_organisasi', 'nama organisasi', 'trim|required');
	$this->form_validation->set_rules('nama_peradilan', 'nama peradilan', 'trim|required');
	$this->form_validation->set_rules('nomor_putusan', 'nomor putusan', 'trim|required');
	$this->form_validation->set_rules('tgl_putusan', 'tgl putusan', 'trim|required');
	$this->form_validation->set_rules('nama_pemuka', 'nama pemuka', 'trim|required');

	$this->form_validation->set_rules('id_dataper', 'id_dataper', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Data_perkawinan.php */
/* Location: ./application/controllers/Data_perkawinan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-04-13 20:48:17 */
/* http://harviacode.com */