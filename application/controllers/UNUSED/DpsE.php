<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dpse extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Dpse_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $dpse = $this->Dpse_model->get_all();

        $data = array(
            'dpse_data' => $dpse
        );

        $this->load->view('dps_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Dpse_model->get_by_id($id);
        if ($row) {
            $data = array(
		'ID' => $row->ID,
		'NIK' => $row->NIK,
		'nama_lengkap' => $row->nama_lengkap,
		'tmp_lahir' => $row->tmp_lahir,
		'tgl_lahir' => $row->tgl_lahir,
		'jk' => $row->jk,
		'gol_darah' => $row->gol_darah,
		'agama' => $row->agama,
		'status_perkawinan' => $row->status_perkawinan,
		'ps_alamat' => $row->ps_alamat,
		'ps_rt' => $row->ps_rt,
		'ps_rw' => $row->ps_rw,
		'ps_kelurahan' => $row->ps_kelurahan,
		'ps_kecamatan' => $row->ps_kecamatan,
		'pekerjaan' => $row->pekerjaan,
	    );
            $this->load->view('dps_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('dpse'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('dpse/create_action'),
	    'ID' => set_value('ID'),
	    'NIK' => set_value('NIK'),
	    'nama_lengkap' => set_value('nama_lengkap'),
	    'tmp_lahir' => set_value('tmp_lahir'),
	    'tgl_lahir' => set_value('tgl_lahir'),
	    'jk' => set_value('jk'),
	    'gol_darah' => set_value('gol_darah'),
	    'agama' => set_value('agama'),
	    'status_perkawinan' => set_value('status_perkawinan'),
	    'ps_alamat' => set_value('ps_alamat'),
	    'ps_rt' => set_value('ps_rt'),
	    'ps_rw' => set_value('ps_rw'),
	    'ps_kelurahan' => set_value('ps_kelurahan'),
	    'ps_kecamatan' => set_value('ps_kecamatan'),
	    'pekerjaan' => set_value('pekerjaan'),
	);
        $this->load->view('dps_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'NIK' => $this->input->post('NIK',TRUE),
		'nama_lengkap' => $this->input->post('nama_lengkap',TRUE),
		'tmp_lahir' => $this->input->post('tmp_lahir',TRUE),
		'tgl_lahir' => $this->input->post('tgl_lahir',TRUE),
		'jk' => $this->input->post('jk',TRUE),
		'gol_darah' => $this->input->post('gol_darah',TRUE),
		'agama' => $this->input->post('agama',TRUE),
		'status_perkawinan' => $this->input->post('status_perkawinan',TRUE),
		'ps_alamat' => $this->input->post('ps_alamat',TRUE),
		'ps_rt' => $this->input->post('ps_rt',TRUE),
		'ps_rw' => $this->input->post('ps_rw',TRUE),
		'ps_kelurahan' => $this->input->post('ps_kelurahan',TRUE),
		'ps_kecamatan' => $this->input->post('ps_kecamatan',TRUE),
		'pekerjaan' => $this->input->post('pekerjaan',TRUE),
	    );

            $this->Dpse_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('dpse'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Dpse_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('dpse/update_action'),
		'ID' => set_value('ID', $row->ID),
		'NIK' => set_value('NIK', $row->NIK),
		'nama_lengkap' => set_value('nama_lengkap', $row->nama_lengkap),
		'tmp_lahir' => set_value('tmp_lahir', $row->tmp_lahir),
		'tgl_lahir' => set_value('tgl_lahir', $row->tgl_lahir),
		'jk' => set_value('jk', $row->jk),
		'gol_darah' => set_value('gol_darah', $row->gol_darah),
		'agama' => set_value('agama', $row->agama),
		'status_perkawinan' => set_value('status_perkawinan', $row->status_perkawinan),
		'ps_alamat' => set_value('ps_alamat', $row->ps_alamat),
		'ps_rt' => set_value('ps_rt', $row->ps_rt),
		'ps_rw' => set_value('ps_rw', $row->ps_rw),
		'ps_kelurahan' => set_value('ps_kelurahan', $row->ps_kelurahan),
		'ps_kecamatan' => set_value('ps_kecamatan', $row->ps_kecamatan),
		'pekerjaan' => set_value('pekerjaan', $row->pekerjaan),
	    );
            $this->load->view('dps_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('dpse'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('ID', TRUE));
        } else {
            $data = array(
		'NIK' => $this->input->post('NIK',TRUE),
		'nama_lengkap' => $this->input->post('nama_lengkap',TRUE),
		'tmp_lahir' => $this->input->post('tmp_lahir',TRUE),
		'tgl_lahir' => $this->input->post('tgl_lahir',TRUE),
		'jk' => $this->input->post('jk',TRUE),
		'gol_darah' => $this->input->post('gol_darah',TRUE),
		'agama' => $this->input->post('agama',TRUE),
		'status_perkawinan' => $this->input->post('status_perkawinan',TRUE),
		'ps_alamat' => $this->input->post('ps_alamat',TRUE),
		'ps_rt' => $this->input->post('ps_rt',TRUE),
		'ps_rw' => $this->input->post('ps_rw',TRUE),
		'ps_kelurahan' => $this->input->post('ps_kelurahan',TRUE),
		'ps_kecamatan' => $this->input->post('ps_kecamatan',TRUE),
		'pekerjaan' => $this->input->post('pekerjaan',TRUE),
	    );

            $this->Dpse_model->update($this->input->post('ID', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('dpse'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Dpse_model->get_by_id($id);

        if ($row) {
            $this->Dpse_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('dpse'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('dpse'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('NIK', 'nik', 'trim|required');
	$this->form_validation->set_rules('nama_lengkap', 'nama lengkap', 'trim|required');
	$this->form_validation->set_rules('tmp_lahir', 'tmp lahir', 'trim|required');
	$this->form_validation->set_rules('tgl_lahir', 'tgl lahir', 'trim|required');
	$this->form_validation->set_rules('jk', 'jk', 'trim|required');
	$this->form_validation->set_rules('gol_darah', 'gol darah', 'trim|required');
	$this->form_validation->set_rules('agama', 'agama', 'trim|required');
	$this->form_validation->set_rules('status_perkawinan', 'status perkawinan', 'trim|required');
	$this->form_validation->set_rules('ps_alamat', 'ps alamat', 'trim|required');
	$this->form_validation->set_rules('ps_rt', 'ps rt', 'trim|required');
	$this->form_validation->set_rules('ps_rw', 'ps rw', 'trim|required');
	$this->form_validation->set_rules('ps_kelurahan', 'ps kelurahan', 'trim|required');
	$this->form_validation->set_rules('ps_kecamatan', 'ps kecamatan', 'trim|required');
	$this->form_validation->set_rules('pekerjaan', 'pekerjaan', 'trim|required');

	$this->form_validation->set_rules('ID', 'ID', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "dps.xls";
        $judul = "dps";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "NIK");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Lengkap");
	xlsWriteLabel($tablehead, $kolomhead++, "Tmp Lahir");
	xlsWriteLabel($tablehead, $kolomhead++, "Tgl Lahir");
	xlsWriteLabel($tablehead, $kolomhead++, "Jk");
	xlsWriteLabel($tablehead, $kolomhead++, "Gol Darah");
	xlsWriteLabel($tablehead, $kolomhead++, "Agama");
	xlsWriteLabel($tablehead, $kolomhead++, "Status Perkawinan");
	xlsWriteLabel($tablehead, $kolomhead++, "Ps Alamat");
	xlsWriteLabel($tablehead, $kolomhead++, "Ps Rt");
	xlsWriteLabel($tablehead, $kolomhead++, "Ps Rw");
	xlsWriteLabel($tablehead, $kolomhead++, "Ps Kelurahan");
	xlsWriteLabel($tablehead, $kolomhead++, "Ps Kecamatan");
	xlsWriteLabel($tablehead, $kolomhead++, "Pekerjaan");

	foreach ($this->Dpse_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->NIK);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_lengkap);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tmp_lahir);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tgl_lahir);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jk);
	    xlsWriteLabel($tablebody, $kolombody++, $data->gol_darah);
	    xlsWriteLabel($tablebody, $kolombody++, $data->agama);
	    xlsWriteLabel($tablebody, $kolombody++, $data->status_perkawinan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->ps_alamat);
	    xlsWriteLabel($tablebody, $kolombody++, $data->ps_rt);
	    xlsWriteLabel($tablebody, $kolombody++, $data->ps_rw);
	    xlsWriteLabel($tablebody, $kolombody++, $data->ps_kelurahan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->ps_kecamatan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->pekerjaan);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=dps.doc");

        $data = array(
            'dps_data' => $this->Dpse_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('dps_doc',$data);
    }

}

/* End of file Dpse.php */
/* Location: ./application/controllers/Dpse.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-04-29 15:01:24 */
/* http://harviacode.com */