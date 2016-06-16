<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Parameter extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Parameter_model');
        $this->load->library('form_validation');
    }

    public function index()
    {

        $parameter = $this->Parameter_model->get_all();

        $data = array(
                    'nama_user' =>  $this->session->userdata('nama_user'),
                    'status'    =>  $this->session->userdata('status'),
                    'parameter_data' => $parameter,
                    'b' =>  "active",'b4'   =>  "active",
                    'conten'    =>  "backend/admin/Parameter/parameter_list",
                    );
        $this->load->view('backend/dashboard/index', $data);

    }

    public function create() 
    {
        $data = array(
                    'nama_user' =>  $this->session->userdata('nama_user'),
                    'status'    =>  $this->session->userdata('status'),
                    'parameter_data' => $parameter,
                    'b' =>  "active",'b4'   =>  "active",
                    'conten'    =>  "backend/admin/Parameter/parameter_form",
                    'button' => 'Create',
                    'action' => site_url('parameter/create_action'),
                    'id_parameter' => set_value('id_parameter'),
                    'jenis' => set_value('jenis'),
                    'denda' => set_value('denda'),
                    'durasi' => set_value('durasi'),
                    );
        $this->load->view('backend/dashboard/index', $data);

    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'jenis' => $this->input->post('jenis',TRUE),
		'denda' => $this->input->post('denda',TRUE),
		'durasi' => $this->input->post('durasi',TRUE),
	    );

            $this->Parameter_model->insert($data);
            $this->session->set_flashdata('message', "
                        <div class='alert alert-success alert-dismissable'>
                      <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                        <h4><i class='icon fa fa-ban'></i> Berhasil!</h4>
                           <p>Data Parameter Berhasil Ditambahkan
                           </p>
                           
                    </div>
                        ");
            redirect(site_url('parameter'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Parameter_model->get_by_id($id);

        if ($row) {
            $data = array(
                'nama_user' =>  $this->session->userdata('nama_user'),
                    'status'    =>  $this->session->userdata('status'),
                    'parameter_data' => $parameter,
                    'b' =>  "active",'b4'   =>  "active",
                    'conten'    =>  "backend/admin/Parameter/parameter_form",

                'button' => 'Update',
                'action' => site_url('parameter/update_action'),
		'id_parameter' => set_value('id_parameter', $row->id_parameter),
		'jenis' => set_value('jenis', $row->jenis),
		'denda' => set_value('denda', $row->denda),
		'durasi' => set_value('durasi', $row->durasi),
	    );
            $this->load->view('backend/dashboard/index', $data);
        } else {
            $this->session->set_flashdata('message', "
                        <div class='alert alert-warning alert-dismissable'>
                      <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                        <h4><i class='icon fa fa-ban'></i> Oops!</h4>
                           <p>Data Parameter Tidak Ditemukan
                           </p>
                           
                    </div>
                        ");
            redirect(site_url('parameter'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_parameter', TRUE));
        } else {
            $data = array(
		'jenis' => $this->input->post('jenis',TRUE),
		'denda' => $this->input->post('denda',TRUE),
		'durasi' => $this->input->post('durasi',TRUE),
	    );

            $this->Parameter_model->update($this->input->post('id_parameter', TRUE), $data);
            $this->session->set_flashdata('message', "
                        <div class='alert alert-success alert-dismissable'>
                      <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                        <h4><i class='icon fa fa-ban'></i> Berhasil!</h4>
                           <p>Data Parameter Berhasil Diperbaharui
                           </p>
                           
                    </div>
                        ");
            redirect(site_url('parameter'));
        }
    }
    

    public function _rules() 
    {
	$this->form_validation->set_rules('jenis', 'jenis', 'trim|required');
	$this->form_validation->set_rules('denda', 'denda', 'trim|required');
	$this->form_validation->set_rules('durasi', 'durasi', 'trim|required');

	$this->form_validation->set_rules('id_parameter', 'id_parameter', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}
