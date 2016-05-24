<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Berkas_cerai extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Berkas_cerai_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $berkas_cerai = $this->Berkas_cerai_model->get_all();

        $data = array(
            'berkas_cerai_data' => $berkas_cerai
        );

        $this->load->view('berkas_cerai_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Berkas_cerai_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_berkas' => $row->id_berkas,
		'id_ac' => $row->id_ac,
		'sk_pengadilan' => $row->sk_pengadilan,
		'surat_panitera_pn' => $row->surat_panitera_pn,
		'kk' => $row->kk,
		'ktp_suami' => $row->ktp_suami,
		'ktp_istri' => $row->ktp_istri,
		'surat_kuasa' => $row->surat_kuasa,
		'ktp_kuasa' => $row->ktp_kuasa,
	    );
            $this->load->view('berkas_cerai_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('berkas_cerai'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('berkas_cerai/create_action'),
	    'id_berkas' => set_value('id_berkas'),
	    'id_ac' => set_value('id_ac'),
	    'sk_pengadilan' => set_value('sk_pengadilan'),
	    'surat_panitera_pn' => set_value('surat_panitera_pn'),
	    'kk' => set_value('kk'),
	    'ktp_suami' => set_value('ktp_suami'),
	    'ktp_istri' => set_value('ktp_istri'),
	    'surat_kuasa' => set_value('surat_kuasa'),
	    'ktp_kuasa' => set_value('ktp_kuasa'),
	);
        $this->load->view('berkas_cerai_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_ac' => $this->input->post('id_ac',TRUE),
		'sk_pengadilan' => $this->input->post('sk_pengadilan',TRUE),
		'surat_panitera_pn' => $this->input->post('surat_panitera_pn',TRUE),
		'kk' => $this->input->post('kk',TRUE),
		'ktp_suami' => $this->input->post('ktp_suami',TRUE),
		'ktp_istri' => $this->input->post('ktp_istri',TRUE),
		'surat_kuasa' => $this->input->post('surat_kuasa',TRUE),
		'ktp_kuasa' => $this->input->post('ktp_kuasa',TRUE),
	    );

            $this->Berkas_cerai_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('berkas_cerai'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Berkas_cerai_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('berkas_cerai/update_action'),
		'id_berkas' => set_value('id_berkas', $row->id_berkas),
		'id_ac' => set_value('id_ac', $row->id_ac),
		'sk_pengadilan' => set_value('sk_pengadilan', $row->sk_pengadilan),
		'surat_panitera_pn' => set_value('surat_panitera_pn', $row->surat_panitera_pn),
		'kk' => set_value('kk', $row->kk),
		'ktp_suami' => set_value('ktp_suami', $row->ktp_suami),
		'ktp_istri' => set_value('ktp_istri', $row->ktp_istri),
		'surat_kuasa' => set_value('surat_kuasa', $row->surat_kuasa),
		'ktp_kuasa' => set_value('ktp_kuasa', $row->ktp_kuasa),
	    );
            $this->load->view('berkas_cerai_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('berkas_cerai'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_berkas', TRUE));
        } else {
            $data = array(
		'id_ac' => $this->input->post('id_ac',TRUE),
		'sk_pengadilan' => $this->input->post('sk_pengadilan',TRUE),
		'surat_panitera_pn' => $this->input->post('surat_panitera_pn',TRUE),
		'kk' => $this->input->post('kk',TRUE),
		'ktp_suami' => $this->input->post('ktp_suami',TRUE),
		'ktp_istri' => $this->input->post('ktp_istri',TRUE),
		'surat_kuasa' => $this->input->post('surat_kuasa',TRUE),
		'ktp_kuasa' => $this->input->post('ktp_kuasa',TRUE),
	    );

            $this->Berkas_cerai_model->update($this->input->post('id_berkas', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('berkas_cerai'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Berkas_cerai_model->get_by_id($id);

        if ($row) {
            $this->Berkas_cerai_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('berkas_cerai'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('berkas_cerai'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_ac', 'id ac', 'trim|required');
	$this->form_validation->set_rules('sk_pengadilan', 'sk pengadilan', 'trim|required');
	$this->form_validation->set_rules('surat_panitera_pn', 'surat panitera pn', 'trim|required');
	$this->form_validation->set_rules('kk', 'kk', 'trim|required');
	$this->form_validation->set_rules('ktp_suami', 'ktp suami', 'trim|required');
	$this->form_validation->set_rules('ktp_istri', 'ktp istri', 'trim|required');
	$this->form_validation->set_rules('surat_kuasa', 'surat kuasa', 'trim|required');
	$this->form_validation->set_rules('ktp_kuasa', 'ktp kuasa', 'trim|required');

	$this->form_validation->set_rules('id_berkas', 'id_berkas', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Berkas_cerai.php */
/* Location: ./application/controllers/Berkas_cerai.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-04-21 20:56:22 */
/* http://harviacode.com */