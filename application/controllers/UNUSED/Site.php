<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {
	
	public function __construct(){
			parent::__construct();
			/*
			$this->load->model('Akta_kelahiran_model');
			$this->load->model('Data_bayi_model');
			$this->load->model('Data_saksi_model');
			$this->load->model('Data_pelapor_model');
			$this->load->model('Ortu_bayi_model');
			$this->load->model('Outbox_model');*/
			$this->load->model('File_model');

       		$this->load->library('form_validation');
       		$this->load->helper('string');
       		$this->load->helper('sms');
       		$R = $this->session->userdata('on_register');
       		if ($R == FALSE) {
    			//redirect('error404','refresh');
    		}
			
		}

	public function index()
	{
		$this->load->view("site");
	}

	public function upload()
	{
		if ( ! empty($_FILES))
		{

			$path_info  	=   pathinfo($_FILES['file']['name']);
            $fileExtension  =   $path_info['extension'];
            $YmdHis_papername   =   date('YmdH');
            $fl = $this->input->post('fl');
            $nmfile = $fl."_".$YmdHis_papername;
            $no = $this->session->userdata('s_no_daftar');

			$config['upload_path'] = './assets/uploads/'.$no;
			$config['allowed_types'] = 'jpg';
			$config['file_name'] = $nmfile;

			//$date = str_replace( ':', '', $date);
				if (!is_dir('assets/uploads/'.$no)) {
				    mkdir('./assets/uploads/' . $no, 0777, TRUE);

				}

			$this->load->library('upload');

			$files           = $_FILES;
			$number_of_files = count($_FILES['file']['name']);
			$errors = 0;

			// codeigniter upload just support one file
			// to upload. so we need a litte trick
			for ($i = 0; $i < $number_of_files; $i++)
			{
				$_FILES['file']['name'] = $files['file']['name'][$i];
				$_FILES['file']['type'] = $files['file']['type'][$i];
				$_FILES['file']['tmp_name'] = $files['file']['tmp_name'][$i];
				$_FILES['file']['error'] = $files['file']['error'][$i];
				$_FILES['file']['size'] = $files['file']['size'][$i];

				// we have to initialize before upload
				$this->upload->initialize($config);

				if (! $this->upload->do_upload("file")) {
					$errors++;
				}
				else{
					$data = array(
						'filename' => $nmfile,
						'title' => 'AKTA LAHIR',
						);
					$this->File_model->insert($data);
				}
			}

			if ($errors > 0) {
				echo $errors . "File(s) cannot be uploaded";
			}

		}
		elseif ($this->input->post('file_to_remove')) 
		{
			$file_to_remove = $this->input->post('file_to_remove');
			unlink("./assets/uploads/".$no."/". $file_to_remove);	
		}
		else {
			$this->listFiles();
		}
	}

	private function listFiles()
	{
		$this->load->helper('file');
		$files = get_filenames("./assets/uploads/$no/");
		echo json_encode($files);
	}

}