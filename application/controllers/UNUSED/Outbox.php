<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Outbox extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Outbox_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $outbox = $this->Outbox_model->get_all();

        $data = array(
            'outbox_data' => $outbox
        );

        $this->load->view('outbox_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Outbox_model->get_by_id($id);
        if ($row) {
            $data = array(
		'UpdatedInDB' => $row->UpdatedInDB,
		'InsertIntoDB' => $row->InsertIntoDB,
		'SendingDateTime' => $row->SendingDateTime,
		'SendBefore' => $row->SendBefore,
		'SendAfter' => $row->SendAfter,
		'Text' => $row->Text,
		'DestinationNumber' => $row->DestinationNumber,
		'Coding' => $row->Coding,
		'UDH' => $row->UDH,
		'Class' => $row->Class,
		'TextDecoded' => $row->TextDecoded,
		'ID' => $row->ID,
		'MultiPart' => $row->MultiPart,
		'RelativeValidity' => $row->RelativeValidity,
		'SenderID' => $row->SenderID,
		'SendingTimeOut' => $row->SendingTimeOut,
		'DeliveryReport' => $row->DeliveryReport,
		'CreatorID' => $row->CreatorID,
	    );
            $this->load->view('outbox_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('outbox'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('outbox/create_action'),
	    'UpdatedInDB' => set_value('UpdatedInDB'),
	    'InsertIntoDB' => set_value('InsertIntoDB'),
	    'SendingDateTime' => set_value('SendingDateTime'),
	    'SendBefore' => set_value('SendBefore'),
	    'SendAfter' => set_value('SendAfter'),
	    'Text' => set_value('Text'),
	    'DestinationNumber' => set_value('DestinationNumber'),
	    'Coding' => set_value('Coding'),
	    'UDH' => set_value('UDH'),
	    'Class' => set_value('Class'),
	    'TextDecoded' => set_value('TextDecoded'),
	    'ID' => set_value('ID'),
	    'MultiPart' => set_value('MultiPart'),
	    'RelativeValidity' => set_value('RelativeValidity'),
	    'SenderID' => set_value('SenderID'),
	    'SendingTimeOut' => set_value('SendingTimeOut'),
	    'DeliveryReport' => set_value('DeliveryReport'),
	    'CreatorID' => set_value('CreatorID'),
	);
        $this->load->view('outbox_form', $data);
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
		'SendBefore' => $this->input->post('SendBefore',TRUE),
		'SendAfter' => $this->input->post('SendAfter',TRUE),
		'Text' => $this->input->post('Text',TRUE),
		'DestinationNumber' => $this->input->post('DestinationNumber',TRUE),
		'Coding' => $this->input->post('Coding',TRUE),
		'UDH' => $this->input->post('UDH',TRUE),
		'Class' => $this->input->post('Class',TRUE),
		'TextDecoded' => $this->input->post('TextDecoded',TRUE),
		'MultiPart' => $this->input->post('MultiPart',TRUE),
		'RelativeValidity' => $this->input->post('RelativeValidity',TRUE),
		'SenderID' => $this->input->post('SenderID',TRUE),
		'SendingTimeOut' => $this->input->post('SendingTimeOut',TRUE),
		'DeliveryReport' => $this->input->post('DeliveryReport',TRUE),
		'CreatorID' => $this->input->post('CreatorID',TRUE),
	    );

            $this->Outbox_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('outbox'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Outbox_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('outbox/update_action'),
		'UpdatedInDB' => set_value('UpdatedInDB', $row->UpdatedInDB),
		'InsertIntoDB' => set_value('InsertIntoDB', $row->InsertIntoDB),
		'SendingDateTime' => set_value('SendingDateTime', $row->SendingDateTime),
		'SendBefore' => set_value('SendBefore', $row->SendBefore),
		'SendAfter' => set_value('SendAfter', $row->SendAfter),
		'Text' => set_value('Text', $row->Text),
		'DestinationNumber' => set_value('DestinationNumber', $row->DestinationNumber),
		'Coding' => set_value('Coding', $row->Coding),
		'UDH' => set_value('UDH', $row->UDH),
		'Class' => set_value('Class', $row->Class),
		'TextDecoded' => set_value('TextDecoded', $row->TextDecoded),
		'ID' => set_value('ID', $row->ID),
		'MultiPart' => set_value('MultiPart', $row->MultiPart),
		'RelativeValidity' => set_value('RelativeValidity', $row->RelativeValidity),
		'SenderID' => set_value('SenderID', $row->SenderID),
		'SendingTimeOut' => set_value('SendingTimeOut', $row->SendingTimeOut),
		'DeliveryReport' => set_value('DeliveryReport', $row->DeliveryReport),
		'CreatorID' => set_value('CreatorID', $row->CreatorID),
	    );
            $this->load->view('outbox_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('outbox'));
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
		'SendBefore' => $this->input->post('SendBefore',TRUE),
		'SendAfter' => $this->input->post('SendAfter',TRUE),
		'Text' => $this->input->post('Text',TRUE),
		'DestinationNumber' => $this->input->post('DestinationNumber',TRUE),
		'Coding' => $this->input->post('Coding',TRUE),
		'UDH' => $this->input->post('UDH',TRUE),
		'Class' => $this->input->post('Class',TRUE),
		'TextDecoded' => $this->input->post('TextDecoded',TRUE),
		'MultiPart' => $this->input->post('MultiPart',TRUE),
		'RelativeValidity' => $this->input->post('RelativeValidity',TRUE),
		'SenderID' => $this->input->post('SenderID',TRUE),
		'SendingTimeOut' => $this->input->post('SendingTimeOut',TRUE),
		'DeliveryReport' => $this->input->post('DeliveryReport',TRUE),
		'CreatorID' => $this->input->post('CreatorID',TRUE),
	    );

            $this->Outbox_model->update($this->input->post('ID', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('outbox'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Outbox_model->get_by_id($id);

        if ($row) {
            $this->Outbox_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('outbox'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('outbox'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('UpdatedInDB', 'updatedindb', 'trim|required');
	$this->form_validation->set_rules('InsertIntoDB', 'insertintodb', 'trim|required');
	$this->form_validation->set_rules('SendingDateTime', 'sendingdatetime', 'trim|required');
	$this->form_validation->set_rules('SendBefore', 'sendbefore', 'trim|required');
	$this->form_validation->set_rules('SendAfter', 'sendafter', 'trim|required');
	$this->form_validation->set_rules('Text', 'text', 'trim|required');
	$this->form_validation->set_rules('DestinationNumber', 'destinationnumber', 'trim|required');
	$this->form_validation->set_rules('Coding', 'coding', 'trim|required');
	$this->form_validation->set_rules('UDH', 'udh', 'trim|required');
	$this->form_validation->set_rules('Class', 'class', 'trim|required');
	$this->form_validation->set_rules('TextDecoded', 'textdecoded', 'trim|required');
	$this->form_validation->set_rules('MultiPart', 'multipart', 'trim|required');
	$this->form_validation->set_rules('RelativeValidity', 'relativevalidity', 'trim|required');
	$this->form_validation->set_rules('SenderID', 'senderid', 'trim|required');
	$this->form_validation->set_rules('SendingTimeOut', 'sendingtimeout', 'trim|required');
	$this->form_validation->set_rules('DeliveryReport', 'deliveryreport', 'trim|required');
	$this->form_validation->set_rules('CreatorID', 'creatorid', 'trim|required');

	$this->form_validation->set_rules('ID', 'ID', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Outbox.php */
/* Location: ./application/controllers/Outbox.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-03-17 19:38:10 */
/* http://harviacode.com */