<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Berkas_lahir extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Berkas_lahir_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $berkas_lahir = $this->Berkas_lahir_model->get_all();

        $data = array(
            'berkas_lahir_data' => $berkas_lahir
        );

        $this->load->view('berkas_lahir_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Berkas_lahir_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_berkas' => $row->id_berkas,
		'id_AL' => $row->id_AL,
		'sk_lahir' => $row->sk_lahir,
		'akta_nikah_ortu' => $row->akta_nikah_ortu,
		'kk_baru' => $row->kk_baru,
		'ktp_ortu1' => $row->ktp_ortu1,
		'ktp_ortu2' => $row->ktp_ortu2,
		'ktp_saksi1' => $row->ktp_saksi1,
		'ktp_saksi2' => $row->ktp_saksi2,
	    );
            $this->load->view('berkas_lahir_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('berkas_lahir'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('berkas_lahir/create_action'),
	    'id_berkas' => set_value('id_berkas'),
	    'id_AL' => set_value('id_AL'),
	    'sk_lahir' => set_value('sk_lahir'),
	    'akta_nikah_ortu' => set_value('akta_nikah_ortu'),
	    'kk_baru' => set_value('kk_baru'),
	    'ktp_ortu1' => set_value('ktp_ortu1'),
	    'ktp_ortu2' => set_value('ktp_ortu2'),
	    'ktp_saksi1' => set_value('ktp_saksi1'),
	    'ktp_saksi2' => set_value('ktp_saksi2'),
	);
        $this->load->view('berkas_lahir_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_AL' => $this->input->post('id_AL',TRUE),
		'sk_lahir' => $this->input->post('sk_lahir',TRUE),
		'akta_nikah_ortu' => $this->input->post('akta_nikah_ortu',TRUE),
		'kk_baru' => $this->input->post('kk_baru',TRUE),
		'ktp_ortu1' => $this->input->post('ktp_ortu1',TRUE),
		'ktp_ortu2' => $this->input->post('ktp_ortu2',TRUE),
		'ktp_saksi1' => $this->input->post('ktp_saksi1',TRUE),
		'ktp_saksi2' => $this->input->post('ktp_saksi2',TRUE),
	    );

            $this->Berkas_lahir_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('berkas_lahir'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Berkas_lahir_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('berkas_lahir/update_action'),
		'id_berkas' => set_value('id_berkas', $row->id_berkas),
		'id_AL' => set_value('id_AL', $row->id_AL),
		'sk_lahir' => set_value('sk_lahir', $row->sk_lahir),
		'akta_nikah_ortu' => set_value('akta_nikah_ortu', $row->akta_nikah_ortu),
		'kk_baru' => set_value('kk_baru', $row->kk_baru),
		'ktp_ortu1' => set_value('ktp_ortu1', $row->ktp_ortu1),
		'ktp_ortu2' => set_value('ktp_ortu2', $row->ktp_ortu2),
		'ktp_saksi1' => set_value('ktp_saksi1', $row->ktp_saksi1),
		'ktp_saksi2' => set_value('ktp_saksi2', $row->ktp_saksi2),
	    );
            $this->load->view('berkas_lahir_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('berkas_lahir'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_berkas', TRUE));
        } else {
            $data = array(
		'id_AL' => $this->input->post('id_AL',TRUE),
		'sk_lahir' => $this->input->post('sk_lahir',TRUE),
		'akta_nikah_ortu' => $this->input->post('akta_nikah_ortu',TRUE),
		'kk_baru' => $this->input->post('kk_baru',TRUE),
		'ktp_ortu1' => $this->input->post('ktp_ortu1',TRUE),
		'ktp_ortu2' => $this->input->post('ktp_ortu2',TRUE),
		'ktp_saksi1' => $this->input->post('ktp_saksi1',TRUE),
		'ktp_saksi2' => $this->input->post('ktp_saksi2',TRUE),
	    );

            $this->Berkas_lahir_model->update($this->input->post('id_berkas', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('berkas_lahir'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Berkas_lahir_model->get_by_id($id);

        if ($row) {
            $this->Berkas_lahir_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('berkas_lahir'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('berkas_lahir'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_AL', 'id al', 'trim|required');
	$this->form_validation->set_rules('sk_lahir', 'sk lahir', 'trim|required');
	$this->form_validation->set_rules('akta_nikah_ortu', 'akta nikah ortu', 'trim|required');
	$this->form_validation->set_rules('kk_baru', 'kk baru', 'trim|required');
	$this->form_validation->set_rules('ktp_ortu1', 'ktp ortu1', 'trim|required');
	$this->form_validation->set_rules('ktp_ortu2', 'ktp ortu2', 'trim|required');
	$this->form_validation->set_rules('ktp_saksi1', 'ktp saksi1', 'trim|required');
	$this->form_validation->set_rules('ktp_saksi2', 'ktp saksi2', 'trim|required');

	$this->form_validation->set_rules('id_berkas', 'id_berkas', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Berkas_lahir.php */
/* Location: ./application/controllers/Berkas_lahir.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-03-23 21:36:18 */
/* http://harviacode.com */