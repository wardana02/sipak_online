<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ortu_bayi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Ortu_bayi_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $ortu_bayi = $this->Ortu_bayi_model->get_all();

        $data = array(
            'ortu_bayi_data' => $ortu_bayi
        );

        $this->load->view('ortu_bayi_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Ortu_bayi_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_ortu' => $row->id_ortu,
		'id_bayi' => $row->id_bayi,
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
		'tgl_pencatatan_kawin' => $row->tgl_pencatatan_kawin,
		'status' => $row->status,
	    );
            $this->load->view('ortu_bayi_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('ortu_bayi'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('ortu_bayi/create_action'),
	    'id_ortu' => set_value('id_ortu'),
	    'id_bayi' => set_value('id_bayi'),
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
	    'tgl_pencatatan_kawin' => set_value('tgl_pencatatan_kawin'),
	    'status' => set_value('status'),
	);
        $this->load->view('ortu_bayi_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_bayi' => $this->input->post('id_bayi',TRUE),
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
		'tgl_pencatatan_kawin' => $this->input->post('tgl_pencatatan_kawin',TRUE),
		'status' => $this->input->post('status',TRUE),
	    );

            $this->Ortu_bayi_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('ortu_bayi'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Ortu_bayi_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('ortu_bayi/update_action'),
		'id_ortu' => set_value('id_ortu', $row->id_ortu),
		'id_bayi' => set_value('id_bayi', $row->id_bayi),
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
		'tgl_pencatatan_kawin' => set_value('tgl_pencatatan_kawin', $row->tgl_pencatatan_kawin),
		'status' => set_value('status', $row->status),
	    );
            $this->load->view('ortu_bayi_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('ortu_bayi'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_ortu', TRUE));
        } else {
            $data = array(
		'id_bayi' => $this->input->post('id_bayi',TRUE),
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
		'tgl_pencatatan_kawin' => $this->input->post('tgl_pencatatan_kawin',TRUE),
		'status' => $this->input->post('status',TRUE),
	    );

            $this->Ortu_bayi_model->update($this->input->post('id_ortu', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('ortu_bayi'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Ortu_bayi_model->get_by_id($id);

        if ($row) {
            $this->Ortu_bayi_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('ortu_bayi'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('ortu_bayi'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_bayi', 'id bayi', 'trim|required');
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
	$this->form_validation->set_rules('tgl_pencatatan_kawin', 'tgl pencatatan kawin', 'trim|required');
	$this->form_validation->set_rules('status', 'status', 'trim|required');

	$this->form_validation->set_rules('id_ortu', 'id_ortu', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Ortu_bayi.php */
/* Location: ./application/controllers/Ortu_bayi.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-03-19 21:09:41 */
/* http://harviacode.com */