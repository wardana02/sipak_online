<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Akta_kematian extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Akta_kematian_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $akta_kematian = $this->Akta_kematian_model->get_all();

        $data = array(
            'akta_kematian_data' => $akta_kematian
        );

        $this->load->view('akta_kematian_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Akta_kematian_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_am' => $row->id_am,
		'nik_pengaju' => $row->nik_pengaju,
		'nama' => $row->nama,
		'no_hp' => $row->no_hp,
		'no_registrasi' => $row->no_registrasi,
		'tgl_registrasi' => $row->tgl_registrasi,
		'kode_unik' => $row->kode_unik,
		'denda' => $row->denda,
		'ip_network' => $row->ip_network,
	    );
            $this->load->view('akta_kematian_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('akta_kematian'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('akta_kematian/create_action'),
	    'id_am' => set_value('id_am'),
	    'nik_pengaju' => set_value('nik_pengaju'),
	    'nama' => set_value('nama'),
	    'no_hp' => set_value('no_hp'),
	    'no_registrasi' => set_value('no_registrasi'),
	    'tgl_registrasi' => set_value('tgl_registrasi'),
	    'kode_unik' => set_value('kode_unik'),
	    'denda' => set_value('denda'),
	    'ip_network' => set_value('ip_network'),
	);
        $this->load->view('akta_kematian_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nik_pengaju' => $this->input->post('nik_pengaju',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'no_hp' => $this->input->post('no_hp',TRUE),
		'no_registrasi' => $this->input->post('no_registrasi',TRUE),
		'tgl_registrasi' => $this->input->post('tgl_registrasi',TRUE),
		'kode_unik' => $this->input->post('kode_unik',TRUE),
		'denda' => $this->input->post('denda',TRUE),
		'ip_network' => $this->input->post('ip_network',TRUE),
	    );

            $this->Akta_kematian_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('akta_kematian'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Akta_kematian_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('akta_kematian/update_action'),
		'id_am' => set_value('id_am', $row->id_am),
		'nik_pengaju' => set_value('nik_pengaju', $row->nik_pengaju),
		'nama' => set_value('nama', $row->nama),
		'no_hp' => set_value('no_hp', $row->no_hp),
		'no_registrasi' => set_value('no_registrasi', $row->no_registrasi),
		'tgl_registrasi' => set_value('tgl_registrasi', $row->tgl_registrasi),
		'kode_unik' => set_value('kode_unik', $row->kode_unik),
		'denda' => set_value('denda', $row->denda),
		'ip_network' => set_value('ip_network', $row->ip_network),
	    );
            $this->load->view('akta_kematian_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('akta_kematian'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_am', TRUE));
        } else {
            $data = array(
		'nik_pengaju' => $this->input->post('nik_pengaju',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'no_hp' => $this->input->post('no_hp',TRUE),
		'no_registrasi' => $this->input->post('no_registrasi',TRUE),
		'tgl_registrasi' => $this->input->post('tgl_registrasi',TRUE),
		'kode_unik' => $this->input->post('kode_unik',TRUE),
		'denda' => $this->input->post('denda',TRUE),
		'ip_network' => $this->input->post('ip_network',TRUE),
	    );

            $this->Akta_kematian_model->update($this->input->post('id_am', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('akta_kematian'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Akta_kematian_model->get_by_id($id);

        if ($row) {
            $this->Akta_kematian_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('akta_kematian'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('akta_kematian'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nik_pengaju', 'nik pengaju', 'trim|required');
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('no_hp', 'no hp', 'trim|required');
	$this->form_validation->set_rules('no_registrasi', 'no registrasi', 'trim|required');
	$this->form_validation->set_rules('tgl_registrasi', 'tgl registrasi', 'trim|required');
	$this->form_validation->set_rules('kode_unik', 'kode unik', 'trim|required');
	$this->form_validation->set_rules('denda', 'denda', 'trim|required');
	$this->form_validation->set_rules('ip_network', 'ip network', 'trim|required');

	$this->form_validation->set_rules('id_am', 'id_am', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Akta_kematian.php */
/* Location: ./application/controllers/Akta_kematian.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-04-03 18:35:56 */
/* http://harviacode.com */