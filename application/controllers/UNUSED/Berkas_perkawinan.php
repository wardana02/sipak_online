<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Berkas_perkawinan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Berkas_perkawinan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $berkas_perkawinan = $this->Berkas_perkawinan_model->get_all();

        $data = array(
            'berkas_perkawinan_data' => $berkas_perkawinan
        );

        $this->load->view('berkas_perkawinan_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Berkas_perkawinan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_berkas' => $row->id_berkas,
		'id_ap' => $row->id_ap,
		'sk_pernikahan' => $row->sk_pernikahan,
		'kk_suami' => $row->kk_suami,
		'ktp_suami' => $row->ktp_suami,
		'al_suami' => $row->al_suami,
		'kk_istri' => $row->kk_istri,
		'ktp_istri' => $row->ktp_istri,
		'al_istri' => $row->al_istri,
		'sk_kelurahan' => $row->sk_kelurahan,
		'am_ayah_suami' => $row->am_ayah_suami,
		'am_ibu_suami' => $row->am_ibu_suami,
		'am_ayah_istri' => $row->am_ayah_istri,
		'am_ibu_istri' => $row->am_ibu_istri,
		'ktp_saksi1' => $row->ktp_saksi1,
		'ktp_saksi2' => $row->ktp_saksi2,
		'pasfoto' => $row->pasfoto,
	    );
            $this->load->view('berkas_perkawinan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('berkas_perkawinan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('berkas_perkawinan/create_action'),
	    'id_berkas' => set_value('id_berkas'),
	    'id_ap' => set_value('id_ap'),
	    'sk_pernikahan' => set_value('sk_pernikahan'),
	    'kk_suami' => set_value('kk_suami'),
	    'ktp_suami' => set_value('ktp_suami'),
	    'al_suami' => set_value('al_suami'),
	    'kk_istri' => set_value('kk_istri'),
	    'ktp_istri' => set_value('ktp_istri'),
	    'al_istri' => set_value('al_istri'),
	    'sk_kelurahan' => set_value('sk_kelurahan'),
	    'am_ayah_suami' => set_value('am_ayah_suami'),
	    'am_ibu_suami' => set_value('am_ibu_suami'),
	    'am_ayah_istri' => set_value('am_ayah_istri'),
	    'am_ibu_istri' => set_value('am_ibu_istri'),
	    'ktp_saksi1' => set_value('ktp_saksi1'),
	    'ktp_saksi2' => set_value('ktp_saksi2'),
	    'pasfoto' => set_value('pasfoto'),
	);
        $this->load->view('berkas_perkawinan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_ap' => $this->input->post('id_ap',TRUE),
		'sk_pernikahan' => $this->input->post('sk_pernikahan',TRUE),
		'kk_suami' => $this->input->post('kk_suami',TRUE),
		'ktp_suami' => $this->input->post('ktp_suami',TRUE),
		'al_suami' => $this->input->post('al_suami',TRUE),
		'kk_istri' => $this->input->post('kk_istri',TRUE),
		'ktp_istri' => $this->input->post('ktp_istri',TRUE),
		'al_istri' => $this->input->post('al_istri',TRUE),
		'sk_kelurahan' => $this->input->post('sk_kelurahan',TRUE),
		'am_ayah_suami' => $this->input->post('am_ayah_suami',TRUE),
		'am_ibu_suami' => $this->input->post('am_ibu_suami',TRUE),
		'am_ayah_istri' => $this->input->post('am_ayah_istri',TRUE),
		'am_ibu_istri' => $this->input->post('am_ibu_istri',TRUE),
		'ktp_saksi1' => $this->input->post('ktp_saksi1',TRUE),
		'ktp_saksi2' => $this->input->post('ktp_saksi2',TRUE),
		'pasfoto' => $this->input->post('pasfoto',TRUE),
	    );

            $this->Berkas_perkawinan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('berkas_perkawinan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Berkas_perkawinan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('berkas_perkawinan/update_action'),
		'id_berkas' => set_value('id_berkas', $row->id_berkas),
		'id_ap' => set_value('id_ap', $row->id_ap),
		'sk_pernikahan' => set_value('sk_pernikahan', $row->sk_pernikahan),
		'kk_suami' => set_value('kk_suami', $row->kk_suami),
		'ktp_suami' => set_value('ktp_suami', $row->ktp_suami),
		'al_suami' => set_value('al_suami', $row->al_suami),
		'kk_istri' => set_value('kk_istri', $row->kk_istri),
		'ktp_istri' => set_value('ktp_istri', $row->ktp_istri),
		'al_istri' => set_value('al_istri', $row->al_istri),
		'sk_kelurahan' => set_value('sk_kelurahan', $row->sk_kelurahan),
		'am_ayah_suami' => set_value('am_ayah_suami', $row->am_ayah_suami),
		'am_ibu_suami' => set_value('am_ibu_suami', $row->am_ibu_suami),
		'am_ayah_istri' => set_value('am_ayah_istri', $row->am_ayah_istri),
		'am_ibu_istri' => set_value('am_ibu_istri', $row->am_ibu_istri),
		'ktp_saksi1' => set_value('ktp_saksi1', $row->ktp_saksi1),
		'ktp_saksi2' => set_value('ktp_saksi2', $row->ktp_saksi2),
		'pasfoto' => set_value('pasfoto', $row->pasfoto),
	    );
            $this->load->view('berkas_perkawinan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('berkas_perkawinan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_berkas', TRUE));
        } else {
            $data = array(
		'id_ap' => $this->input->post('id_ap',TRUE),
		'sk_pernikahan' => $this->input->post('sk_pernikahan',TRUE),
		'kk_suami' => $this->input->post('kk_suami',TRUE),
		'ktp_suami' => $this->input->post('ktp_suami',TRUE),
		'al_suami' => $this->input->post('al_suami',TRUE),
		'kk_istri' => $this->input->post('kk_istri',TRUE),
		'ktp_istri' => $this->input->post('ktp_istri',TRUE),
		'al_istri' => $this->input->post('al_istri',TRUE),
		'sk_kelurahan' => $this->input->post('sk_kelurahan',TRUE),
		'am_ayah_suami' => $this->input->post('am_ayah_suami',TRUE),
		'am_ibu_suami' => $this->input->post('am_ibu_suami',TRUE),
		'am_ayah_istri' => $this->input->post('am_ayah_istri',TRUE),
		'am_ibu_istri' => $this->input->post('am_ibu_istri',TRUE),
		'ktp_saksi1' => $this->input->post('ktp_saksi1',TRUE),
		'ktp_saksi2' => $this->input->post('ktp_saksi2',TRUE),
		'pasfoto' => $this->input->post('pasfoto',TRUE),
	    );

            $this->Berkas_perkawinan_model->update($this->input->post('id_berkas', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('berkas_perkawinan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Berkas_perkawinan_model->get_by_id($id);

        if ($row) {
            $this->Berkas_perkawinan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('berkas_perkawinan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('berkas_perkawinan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_ap', 'id ap', 'trim|required');
	$this->form_validation->set_rules('sk_pernikahan', 'sk pernikahan', 'trim|required');
	$this->form_validation->set_rules('kk_suami', 'kk suami', 'trim|required');
	$this->form_validation->set_rules('ktp_suami', 'ktp suami', 'trim|required');
	$this->form_validation->set_rules('al_suami', 'al suami', 'trim|required');
	$this->form_validation->set_rules('kk_istri', 'kk istri', 'trim|required');
	$this->form_validation->set_rules('ktp_istri', 'ktp istri', 'trim|required');
	$this->form_validation->set_rules('al_istri', 'al istri', 'trim|required');
	$this->form_validation->set_rules('sk_kelurahan', 'sk kelurahan', 'trim|required');
	$this->form_validation->set_rules('am_ayah_suami', 'am ayah suami', 'trim|required');
	$this->form_validation->set_rules('am_ibu_suami', 'am ibu suami', 'trim|required');
	$this->form_validation->set_rules('am_ayah_istri', 'am ayah istri', 'trim|required');
	$this->form_validation->set_rules('am_ibu_istri', 'am ibu istri', 'trim|required');
	$this->form_validation->set_rules('ktp_saksi1', 'ktp saksi1', 'trim|required');
	$this->form_validation->set_rules('ktp_saksi2', 'ktp saksi2', 'trim|required');
	$this->form_validation->set_rules('pasfoto', 'pasfoto', 'trim|required');

	$this->form_validation->set_rules('id_berkas', 'id_berkas', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Berkas_perkawinan.php */
/* Location: ./application/controllers/Berkas_perkawinan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-04-13 20:47:41 */
/* http://harviacode.com */