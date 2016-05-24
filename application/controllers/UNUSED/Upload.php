<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends CI_Controller {

	public function index()
	{
		$data['conten'] = "backend/admin/Upload/index";
		$this->load->view('backend/dashboard/index', $data);
	}

	public function upload()
	{
		if ( ! empty($_FILES))
		{

			$path_info  	=   pathinfo($_FILES['file']['name']);
            $fileExtension  =   $path_info['extension'];
            $YmdHis_papername   =   date('YmdHis');
            $nmfile = "file_".$YmdHis_papername;

			$config['upload_path'] = './assets/uploads/'.$YmdHis_papername;
			$config['allowed_types'] = 'gif|jpg|png|mp4|ogv|zip';
			$config['file_name'] = $nmfile;

			//$date = str_replace( ':', '', $date);
				if (!is_dir('assets/uploads/'.$YmdHis_papername)) {
				    mkdir('./assets/uploads/' . $YmdHis_papername, 0777, TRUE);

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
			}

			if ($errors > 0) {
				echo $errors . "File(s) cannot be uploaded";
			}

		}
		elseif ($this->input->post('file_to_remove')) 
		{
			$file_to_remove = $this->input->post('file_to_remove');
			unlink("./assets/uploads/" . $file_to_remove);	
		}
		else {
			$this->listFiles();
		}
	}

	private function listFiles()
	{
		$this->load->helper('file');
		$files = get_filenames("./assets/uploads");
		echo json_encode($files);
	}

}