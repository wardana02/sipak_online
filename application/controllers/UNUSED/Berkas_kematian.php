<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Berkas_kematian extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Berkas_kematian_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $berkas_kematian = $this->Berkas_kematian_model->get_all();

        $data = array(
            'berkas_kematian_data' => $berkas_kematian
        );

        $this->load->view('berkas_kematian_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Berkas_kematian_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_berkas' => $row->id_berkas,
		'id_AM' => $row->id_AM,
		'sk_kematian' => $row->sk_kematian,
		'akta_nikah' => $row->akta_nikah,
		'akta_lahir' => $row->akta_lahir,
		'ktp_pelapor' => $row->ktp_pelapor,
		'kk_pelapor' => $row->kk_pelapor,
		'ktp_saksi1' => $row->ktp_saksi1,
		'ktp_saksi2' => $row->ktp_saksi2,
	    );
            $this->load->view('berkas_kematian_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('berkas_kematian'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('berkas_kematian/create_action'),
	    'id_berkas' => set_value('id_berkas'),
	    'id_AM' => set_value('id_AM'),
	    'sk_kematian' => set_value('sk_kematian'),
	    'akta_nikah' => set_value('akta_nikah'),
	    'akta_lahir' => set_value('akta_lahir'),
	    'ktp_pelapor' => set_value('ktp_pelapor'),
	    'kk_pelapor' => set_value('kk_pelapor'),
	    'ktp_saksi1' => set_value('ktp_saksi1'),
	    'ktp_saksi2' => set_value('ktp_saksi2'),
	);
        $this->load->view('berkas_kematian_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_AM' => $this->input->post('id_AM',TRUE),
		'sk_kematian' => $this->input->post('sk_kematian',TRUE),
		'akta_nikah' => $this->input->post('akta_nikah',TRUE),
		'akta_lahir' => $this->input->post('akta_lahir',TRUE),
		'ktp_pelapor' => $this->input->post('ktp_pelapor',TRUE),
		'kk_pelapor' => $this->input->post('kk_pelapor',TRUE),
		'ktp_saksi1' => $this->input->post('ktp_saksi1',TRUE),
		'ktp_saksi2' => $this->input->post('ktp_saksi2',TRUE),
	    );

            $this->Berkas_kematian_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('berkas_kematian'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Berkas_kematian_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('berkas_kematian/update_action'),
		'id_berkas' => set_value('id_berkas', $row->id_berkas),
		'id_AM' => set_value('id_AM', $row->id_AM),
		'sk_kematian' => set_value('sk_kematian', $row->sk_kematian),
		'akta_nikah' => set_value('akta_nikah', $row->akta_nikah),
		'akta_lahir' => set_value('akta_lahir', $row->akta_lahir),
		'ktp_pelapor' => set_value('ktp_pelapor', $row->ktp_pelapor),
		'kk_pelapor' => set_value('kk_pelapor', $row->kk_pelapor),
		'ktp_saksi1' => set_value('ktp_saksi1', $row->ktp_saksi1),
		'ktp_saksi2' => set_value('ktp_saksi2', $row->ktp_saksi2),
	    );
            $this->load->view('berkas_kematian_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('berkas_kematian'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_berkas', TRUE));
        } else {
            $data = array(
		'id_AM' => $this->input->post('id_AM',TRUE),
		'sk_kematian' => $this->input->post('sk_kematian',TRUE),
		'akta_nikah' => $this->input->post('akta_nikah',TRUE),
		'akta_lahir' => $this->input->post('akta_lahir',TRUE),
		'ktp_pelapor' => $this->input->post('ktp_pelapor',TRUE),
		'kk_pelapor' => $this->input->post('kk_pelapor',TRUE),
		'ktp_saksi1' => $this->input->post('ktp_saksi1',TRUE),
		'ktp_saksi2' => $this->input->post('ktp_saksi2',TRUE),
	    );

            $this->Berkas_kematian_model->update($this->input->post('id_berkas', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('berkas_kematian'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Berkas_kematian_model->get_by_id($id);

        if ($row) {
            $this->Berkas_kematian_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('berkas_kematian'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('berkas_kematian'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_AM', 'id am', 'trim|required');
	$this->form_validation->set_rules('sk_kematian', 'sk kematian', 'trim|required');
	$this->form_validation->set_rules('akta_nikah', 'akta nikah', 'trim|required');
	$this->form_validation->set_rules('akta_lahir', 'akta lahir', 'trim|required');
	$this->form_validation->set_rules('ktp_pelapor', 'ktp pelapor', 'trim|required');
	$this->form_validation->set_rules('kk_pelapor', 'kk pelapor', 'trim|required');
	$this->form_validation->set_rules('ktp_saksi1', 'ktp saksi1', 'trim|required');
	$this->form_validation->set_rules('ktp_saksi2', 'ktp saksi2', 'trim|required');

	$this->form_validation->set_rules('id_berkas', 'id_berkas', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Berkas_kematian.php */
/* Location: ./application/controllers/Berkas_kematian.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-04-03 23:13:30 */
/* http://harviacode.com */