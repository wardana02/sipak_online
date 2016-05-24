<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ortu_jenazah extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Ortu_jenazah_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $ortu_jenazah = $this->Ortu_jenazah_model->get_all();

        $data = array(
            'ortu_jenazah_data' => $ortu_jenazah
        );

        $this->load->view('ortu_jenazah_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Ortu_jenazah_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_ortu' => $row->id_ortu,
		'id_jenazah' => $row->id_jenazah,
		'nik' => $row->nik,
		'nama' => $row->nama,
		'tgl_lahir' => $row->tgl_lahir,
		'umur' => $row->umur,
		'pekerjaan' => $row->pekerjaan,
		'a_alamat' => $row->a_alamat,
		'a_desa' => $row->a_desa,
		'a_kecamatan' => $row->a_kecamatan,
		'a_kabkota' => $row->a_kabkota,
		'a_provinsi' => $row->a_provinsi,
		'status' => $row->status,
	    );
            $this->load->view('ortu_jenazah_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('ortu_jenazah'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('ortu_jenazah/create_action'),
	    'id_ortu' => set_value('id_ortu'),
	    'id_jenazah' => set_value('id_jenazah'),
	    'nik' => set_value('nik'),
	    'nama' => set_value('nama'),
	    'tgl_lahir' => set_value('tgl_lahir'),
	    'umur' => set_value('umur'),
	    'pekerjaan' => set_value('pekerjaan'),
	    'a_alamat' => set_value('a_alamat'),
	    'a_desa' => set_value('a_desa'),
	    'a_kecamatan' => set_value('a_kecamatan'),
	    'a_kabkota' => set_value('a_kabkota'),
	    'a_provinsi' => set_value('a_provinsi'),
	    'status' => set_value('status'),
	);
        $this->load->view('ortu_jenazah_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_jenazah' => $this->input->post('id_jenazah',TRUE),
		'nik' => $this->input->post('nik',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'tgl_lahir' => $this->input->post('tgl_lahir',TRUE),
		'umur' => $this->input->post('umur',TRUE),
		'pekerjaan' => $this->input->post('pekerjaan',TRUE),
		'a_alamat' => $this->input->post('a_alamat',TRUE),
		'a_desa' => $this->input->post('a_desa',TRUE),
		'a_kecamatan' => $this->input->post('a_kecamatan',TRUE),
		'a_kabkota' => $this->input->post('a_kabkota',TRUE),
		'a_provinsi' => $this->input->post('a_provinsi',TRUE),
		'status' => $this->input->post('status',TRUE),
	    );

            $this->Ortu_jenazah_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('ortu_jenazah'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Ortu_jenazah_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('ortu_jenazah/update_action'),
		'id_ortu' => set_value('id_ortu', $row->id_ortu),
		'id_jenazah' => set_value('id_jenazah', $row->id_jenazah),
		'nik' => set_value('nik', $row->nik),
		'nama' => set_value('nama', $row->nama),
		'tgl_lahir' => set_value('tgl_lahir', $row->tgl_lahir),
		'umur' => set_value('umur', $row->umur),
		'pekerjaan' => set_value('pekerjaan', $row->pekerjaan),
		'a_alamat' => set_value('a_alamat', $row->a_alamat),
		'a_desa' => set_value('a_desa', $row->a_desa),
		'a_kecamatan' => set_value('a_kecamatan', $row->a_kecamatan),
		'a_kabkota' => set_value('a_kabkota', $row->a_kabkota),
		'a_provinsi' => set_value('a_provinsi', $row->a_provinsi),
		'status' => set_value('status', $row->status),
	    );
            $this->load->view('ortu_jenazah_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('ortu_jenazah'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_ortu', TRUE));
        } else {
            $data = array(
		'id_jenazah' => $this->input->post('id_jenazah',TRUE),
		'nik' => $this->input->post('nik',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'tgl_lahir' => $this->input->post('tgl_lahir',TRUE),
		'umur' => $this->input->post('umur',TRUE),
		'pekerjaan' => $this->input->post('pekerjaan',TRUE),
		'a_alamat' => $this->input->post('a_alamat',TRUE),
		'a_desa' => $this->input->post('a_desa',TRUE),
		'a_kecamatan' => $this->input->post('a_kecamatan',TRUE),
		'a_kabkota' => $this->input->post('a_kabkota',TRUE),
		'a_provinsi' => $this->input->post('a_provinsi',TRUE),
		'status' => $this->input->post('status',TRUE),
	    );

            $this->Ortu_jenazah_model->update($this->input->post('id_ortu', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('ortu_jenazah'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Ortu_jenazah_model->get_by_id($id);

        if ($row) {
            $this->Ortu_jenazah_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('ortu_jenazah'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('ortu_jenazah'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_jenazah', 'id jenazah', 'trim|required');
	$this->form_validation->set_rules('nik', 'nik', 'trim|required');
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('tgl_lahir', 'tgl lahir', 'trim|required');
	$this->form_validation->set_rules('umur', 'umur', 'trim|required');
	$this->form_validation->set_rules('pekerjaan', 'pekerjaan', 'trim|required');
	$this->form_validation->set_rules('a_alamat', 'a alamat', 'trim|required');
	$this->form_validation->set_rules('a_desa', 'a desa', 'trim|required');
	$this->form_validation->set_rules('a_kecamatan', 'a kecamatan', 'trim|required');
	$this->form_validation->set_rules('a_kabkota', 'a kabkota', 'trim|required');
	$this->form_validation->set_rules('a_provinsi', 'a provinsi', 'trim|required');
	$this->form_validation->set_rules('status', 'status', 'trim|required');

	$this->form_validation->set_rules('id_ortu', 'id_ortu', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Ortu_jenazah.php */
/* Location: ./application/controllers/Ortu_jenazah.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-04-03 19:26:42 */
/* http://harviacode.com */