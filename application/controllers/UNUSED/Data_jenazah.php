<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Data_jenazah extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Data_jenazah_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data_jenazah = $this->Data_jenazah_model->get_all();

        $data = array(
            'data_jenazah_data' => $data_jenazah
        );

        $this->load->view('data_jenazah_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Data_jenazah_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_jenazah' => $row->id_jenazah,
		'id_AM' => $row->id_AM,
		'nama' => $row->nama,
		'jk' => $row->jk,
		'tmp_lahir' => $row->tmp_lahir,
		'umur' => $row->umur,
		'tgl_lahir' => $row->tgl_lahir,
		'agama' => $row->agama,
		'pekerjaan' => $row->pekerjaan,
		'tgl_kematian' => $row->tgl_kematian,
		'menerangkan' => $row->menerangkan,
		'anak_ke' => $row->anak_ke,
		'sebab_kematian' => $row->sebab_kematian,
		'tmp_kematian' => $row->tmp_kematian,
		'a_alamat' => $row->a_alamat,
		'a_desa' => $row->a_desa,
		'a_kecamatan' => $row->a_kecamatan,
		'a_kabkota' => $row->a_kabkota,
	    );
            $this->load->view('data_jenazah_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_jenazah'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('data_jenazah/create_action'),
	    'id_jenazah' => set_value('id_jenazah'),
	    'id_AM' => set_value('id_AM'),
	    'nama' => set_value('nama'),
	    'jk' => set_value('jk'),
	    'tmp_lahir' => set_value('tmp_lahir'),
	    'umur' => set_value('umur'),
	    'tgl_lahir' => set_value('tgl_lahir'),
	    'agama' => set_value('agama'),
	    'pekerjaan' => set_value('pekerjaan'),
	    'tgl_kematian' => set_value('tgl_kematian'),
	    'menerangkan' => set_value('menerangkan'),
	    'anak_ke' => set_value('anak_ke'),
	    'sebab_kematian' => set_value('sebab_kematian'),
	    'tmp_kematian' => set_value('tmp_kematian'),
	    'a_alamat' => set_value('a_alamat'),
	    'a_desa' => set_value('a_desa'),
	    'a_kecamatan' => set_value('a_kecamatan'),
	    'a_kabkota' => set_value('a_kabkota'),
	);
        $this->load->view('data_jenazah_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_AM' => $this->input->post('id_AM',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'jk' => $this->input->post('jk',TRUE),
		'tmp_lahir' => $this->input->post('tmp_lahir',TRUE),
		'umur' => $this->input->post('umur',TRUE),
		'tgl_lahir' => $this->input->post('tgl_lahir',TRUE),
		'agama' => $this->input->post('agama',TRUE),
		'pekerjaan' => $this->input->post('pekerjaan',TRUE),
		'tgl_kematian' => $this->input->post('tgl_kematian',TRUE),
		'menerangkan' => $this->input->post('menerangkan',TRUE),
		'anak_ke' => $this->input->post('anak_ke',TRUE),
		'sebab_kematian' => $this->input->post('sebab_kematian',TRUE),
		'tmp_kematian' => $this->input->post('tmp_kematian',TRUE),
		'a_alamat' => $this->input->post('a_alamat',TRUE),
		'a_desa' => $this->input->post('a_desa',TRUE),
		'a_kecamatan' => $this->input->post('a_kecamatan',TRUE),
		'a_kabkota' => $this->input->post('a_kabkota',TRUE),
	    );

            $this->Data_jenazah_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('data_jenazah'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Data_jenazah_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('data_jenazah/update_action'),
		'id_jenazah' => set_value('id_jenazah', $row->id_jenazah),
		'id_AM' => set_value('id_AM', $row->id_AM),
		'nama' => set_value('nama', $row->nama),
		'jk' => set_value('jk', $row->jk),
		'tmp_lahir' => set_value('tmp_lahir', $row->tmp_lahir),
		'umur' => set_value('umur', $row->umur),
		'tgl_lahir' => set_value('tgl_lahir', $row->tgl_lahir),
		'agama' => set_value('agama', $row->agama),
		'pekerjaan' => set_value('pekerjaan', $row->pekerjaan),
		'tgl_kematian' => set_value('tgl_kematian', $row->tgl_kematian),
		'menerangkan' => set_value('menerangkan', $row->menerangkan),
		'anak_ke' => set_value('anak_ke', $row->anak_ke),
		'sebab_kematian' => set_value('sebab_kematian', $row->sebab_kematian),
		'tmp_kematian' => set_value('tmp_kematian', $row->tmp_kematian),
		'a_alamat' => set_value('a_alamat', $row->a_alamat),
		'a_desa' => set_value('a_desa', $row->a_desa),
		'a_kecamatan' => set_value('a_kecamatan', $row->a_kecamatan),
		'a_kabkota' => set_value('a_kabkota', $row->a_kabkota),
	    );
            $this->load->view('data_jenazah_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_jenazah'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_jenazah', TRUE));
        } else {
            $data = array(
		'id_AM' => $this->input->post('id_AM',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'jk' => $this->input->post('jk',TRUE),
		'tmp_lahir' => $this->input->post('tmp_lahir',TRUE),
		'umur' => $this->input->post('umur',TRUE),
		'tgl_lahir' => $this->input->post('tgl_lahir',TRUE),
		'agama' => $this->input->post('agama',TRUE),
		'pekerjaan' => $this->input->post('pekerjaan',TRUE),
		'tgl_kematian' => $this->input->post('tgl_kematian',TRUE),
		'menerangkan' => $this->input->post('menerangkan',TRUE),
		'anak_ke' => $this->input->post('anak_ke',TRUE),
		'sebab_kematian' => $this->input->post('sebab_kematian',TRUE),
		'tmp_kematian' => $this->input->post('tmp_kematian',TRUE),
		'a_alamat' => $this->input->post('a_alamat',TRUE),
		'a_desa' => $this->input->post('a_desa',TRUE),
		'a_kecamatan' => $this->input->post('a_kecamatan',TRUE),
		'a_kabkota' => $this->input->post('a_kabkota',TRUE),
	    );

            $this->Data_jenazah_model->update($this->input->post('id_jenazah', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('data_jenazah'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Data_jenazah_model->get_by_id($id);

        if ($row) {
            $this->Data_jenazah_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('data_jenazah'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_jenazah'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_AM', 'id am', 'trim|required');
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('jk', 'jk', 'trim|required');
	$this->form_validation->set_rules('tmp_lahir', 'tmp lahir', 'trim|required');
	$this->form_validation->set_rules('umur', 'umur', 'trim|required');
	$this->form_validation->set_rules('tgl_lahir', 'tgl lahir', 'trim|required');
	$this->form_validation->set_rules('agama', 'agama', 'trim|required');
	$this->form_validation->set_rules('pekerjaan', 'pekerjaan', 'trim|required');
	$this->form_validation->set_rules('tgl_kematian', 'tgl kematian', 'trim|required');
	$this->form_validation->set_rules('menerangkan', 'menerangkan', 'trim|required');
	$this->form_validation->set_rules('anak_ke', 'anak ke', 'trim|required');
	$this->form_validation->set_rules('sebab_kematian', 'sebab kematian', 'trim|required');
	$this->form_validation->set_rules('tmp_kematian', 'tmp kematian', 'trim|required');
	$this->form_validation->set_rules('a_alamat', 'a alamat', 'trim|required');
	$this->form_validation->set_rules('a_desa', 'a desa', 'trim|required');
	$this->form_validation->set_rules('a_kecamatan', 'a kecamatan', 'trim|required');
	$this->form_validation->set_rules('a_kabkota', 'a kabkota', 'trim|required');

	$this->form_validation->set_rules('id_jenazah', 'id_jenazah', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Data_jenazah.php */
/* Location: ./application/controllers/Data_jenazah.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-04-03 19:26:23 */
/* http://harviacode.com */