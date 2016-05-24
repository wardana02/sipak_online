<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sentitems extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Sentitems_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $sentitems = $this->Sentitems_model->get_all();

        $data = array(
            'sentitems_data' => $sentitems
        );

        $this->load->view('sentitems_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Sentitems_model->get_by_id($id);
        if ($row) {
            $data = array(
		'UpdatedInDB' => $row->UpdatedInDB,
		'InsertIntoDB' => $row->InsertIntoDB,
		'SendingDateTime' => $row->SendingDateTime,
		'DeliveryDateTime' => $row->DeliveryDateTime,
		'Text' => $row->Text,
		'DestinationNumber' => $row->DestinationNumber,
		'Coding' => $row->Coding,
		'UDH' => $row->UDH,
		'SMSCNumber' => $row->SMSCNumber,
		'Class' => $row->Class,
		'TextDecoded' => $row->TextDecoded,
		'ID' => $row->ID,
		'SenderID' => $row->SenderID,
		'SequencePosition' => $row->SequencePosition,
		'Status' => $row->Status,
		'StatusError' => $row->StatusError,
		'TPMR' => $row->TPMR,
		'RelativeValidity' => $row->RelativeValidity,
		'CreatorID' => $row->CreatorID,
	    );
            $this->load->view('sentitems_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('sentitems'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('sentitems/create_action'),
	    'UpdatedInDB' => set_value('UpdatedInDB'),
	    'InsertIntoDB' => set_value('InsertIntoDB'),
	    'SendingDateTime' => set_value('SendingDateTime'),
	    'DeliveryDateTime' => set_value('DeliveryDateTime'),
	    'Text' => set_value('Text'),
	    'DestinationNumber' => set_value('DestinationNumber'),
	    'Coding' => set_value('Coding'),
	    'UDH' => set_value('UDH'),
	    'SMSCNumber' => set_value('SMSCNumber'),
	    'Class' => set_value('Class'),
	    'TextDecoded' => set_value('TextDecoded'),
	    'ID' => set_value('ID'),
	    'SenderID' => set_value('SenderID'),
	    'SequencePosition' => set_value('SequencePosition'),
	    'Status' => set_value('Status'),
	    'StatusError' => set_value('StatusError'),
	    'TPMR' => set_value('TPMR'),
	    'RelativeValidity' => set_value('RelativeValidity'),
	    'CreatorID' => set_value('CreatorID'),
	);
        $this->load->view('sentitems_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'UpdatedInDB' => $this->input->post('UpdatedInDB',TRUE),
		'InsertIntoDB' => $this->input->post('InsertIntoDB',TRUE),
		'SendingDateTime' => $this->input->post('SendingDateTime',TRUE),
		'DeliveryDateTime' => $this->input->post('DeliveryDateTime',TRUE),
		'Text' => $this->input->post('Text',TRUE),
		'DestinationNumber' => $this->input->post('DestinationNumber',TRUE),
		'Coding' => $this->input->post('Coding',TRUE),
		'UDH' => $this->input->post('UDH',TRUE),
		'SMSCNumber' => $this->input->post('SMSCNumber',TRUE),
		'Class' => $this->input->post('Class',TRUE),
		'TextDecoded' => $this->input->post('TextDecoded',TRUE),
		'SenderID' => $this->input->post('SenderID',TRUE),
		'Status' => $this->input->post('Status',TRUE),
		'StatusError' => $this->input->post('StatusError',TRUE),
		'TPMR' => $this->input->post('TPMR',TRUE),
		'RelativeValidity' => $this->input->post('RelativeValidity',TRUE),
		'CreatorID' => $this->input->post('CreatorID',TRUE),
	    );

            $this->Sentitems_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('sentitems'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Sentitems_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('sentitems/update_action'),
		'UpdatedInDB' => set_value('UpdatedInDB', $row->UpdatedInDB),
		'InsertIntoDB' => set_value('InsertIntoDB', $row->InsertIntoDB),
		'SendingDateTime' => set_value('SendingDateTime', $row->SendingDateTime),
		'DeliveryDateTime' => set_value('DeliveryDateTime', $row->DeliveryDateTime),
		'Text' => set_value('Text', $row->Text),
		'DestinationNumber' => set_value('DestinationNumber', $row->DestinationNumber),
		'Coding' => set_value('Coding', $row->Coding),
		'UDH' => set_value('UDH', $row->UDH),
		'SMSCNumber' => set_value('SMSCNumber', $row->SMSCNumber),
		'Class' => set_value('Class', $row->Class),
		'TextDecoded' => set_value('TextDecoded', $row->TextDecoded),
		'ID' => set_value('ID', $row->ID),
		'SenderID' => set_value('SenderID', $row->SenderID),
		'SequencePosition' => set_value('SequencePosition', $row->SequencePosition),
		'Status' => set_value('Status', $row->Status),
		'StatusError' => set_value('StatusError', $row->StatusError),
		'TPMR' => set_value('TPMR', $row->TPMR),
		'RelativeValidity' => set_value('RelativeValidity', $row->RelativeValidity),
		'CreatorID' => set_value('CreatorID', $row->CreatorID),
	    );
            $this->load->view('sentitems_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('sentitems'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('ID', TRUE));
        } else {
            $data = array(
		'UpdatedInDB' => $this->input->post('UpdatedInDB',TRUE),
		'InsertIntoDB' => $this->input->post('InsertIntoDB',TRUE),
		'SendingDateTime' => $this->input->post('SendingDateTime',TRUE),
		'DeliveryDateTime' => $this->input->post('DeliveryDateTime',TRUE),
		'Text' => $this->input->post('Text',TRUE),
		'DestinationNumber' => $this->input->post('DestinationNumber',TRUE),
		'Coding' => $this->input->post('Coding',TRUE),
		'UDH' => $this->input->post('UDH',TRUE),
		'SMSCNumber' => $this->input->post('SMSCNumber',TRUE),
		'Class' => $this->input->post('Class',TRUE),
		'TextDecoded' => $this->input->post('TextDecoded',TRUE),
		'SenderID' => $this->input->post('SenderID',TRUE),
		'Status' => $this->input->post('Status',TRUE),
		'StatusError' => $this->input->post('StatusError',TRUE),
		'TPMR' => $this->input->post('TPMR',TRUE),
		'RelativeValidity' => $this->input->post('RelativeValidity',TRUE),
		'CreatorID' => $this->input->post('CreatorID',TRUE),
	    );

            $this->Sentitems_model->update($this->input->post('ID', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('sentitems'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Sentitems_model->get_by_id($id);

        if ($row) {
            $this->Sentitems_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('sentitems'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('sentitems'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('UpdatedInDB', 'updatedindb', 'trim|required');
	$this->form_validation->set_rules('InsertIntoDB', 'insertintodb', 'trim|required');
	$this->form_validation->set_rules('SendingDateTime', 'sendingdatetime', 'trim|required');
	$this->form_validation->set_rules('DeliveryDateTime', 'deliverydatetime', 'trim|required');
	$this->form_validation->set_rules('Text', 'text', 'trim|required');
	$this->form_validation->set_rules('DestinationNumber', 'destinationnumber', 'trim|required');
	$this->form_validation->set_rules('Coding', 'coding', 'trim|required');
	$this->form_validation->set_rules('UDH', 'udh', 'trim|required');
	$this->form_validation->set_rules('SMSCNumber', 'smscnumber', 'trim|required');
	$this->form_validation->set_rules('Class', 'class', 'trim|required');
	$this->form_validation->set_rules('TextDecoded', 'textdecoded', 'trim|required');
	$this->form_validation->set_rules('SenderID', 'senderid', 'trim|required');
	$this->form_validation->set_rules('Status', 'status', 'trim|required');
	$this->form_validation->set_rules('StatusError', 'statuserror', 'trim|required');
	$this->form_validation->set_rules('TPMR', 'tpmr', 'trim|required');
	$this->form_validation->set_rules('RelativeValidity', 'relativevalidity', 'trim|required');
	$this->form_validation->set_rules('CreatorID', 'creatorid', 'trim|required');

	$this->form_validation->set_rules('ID', 'ID', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Sentitems.php */
/* Location: ./application/controllers/Sentitems.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-05-03 21:51:48 */
/* http://harviacode.com */