<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cetak extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Approval_model');
        $this->load->model('Akta_kelahiran_model');
        $this->load->model('Akta_kematian_model');
        $this->load->model('Akta_perkawinan_model');
        $this->load->model('Akta_perceraian_model');
        $this->load->model('Data_bayi_model');
        $this->load->model('Data_jenazah_model');
        $this->load->model('Ortu_bayi_model');
        $this->load->model('Ortu_jenazah_model');
        $this->load->model('Data_pelapor_model');
        $this->load->model('Data_saksi_model');
        $this->load->model('Berkas_lahir_model');
        $this->load->model('Berkas_kematian_model');

        $this->load->model('Akta_perkawinan_model','m_akta',TRUE);
			$this->load->model('Data_mempelai_model','mempelai',TRUE);
			$this->load->model('Ortu_mempelai_model','ortu',TRUE);
			$this->load->model('Data_perkawinan_model','perkawinan',TRUE);
			$this->load->model('Data_anak_model','anak',TRUE);
			$this->load->model('Berkas_perkawinan_model','m_berkas',TRUE);

		$this->load->model('Akta_perceraian_model','c_akta',TRUE);
			$this->load->model('Data_bercerai_model','c_mempelai',TRUE);
			$this->load->model('Data_perceraian_model','perceraian',TRUE);

		$this->load->helper('dateindo');
		$this->load->library('ciqrcode');
	}

	public function index()
	{
		//header("Content-Type: image/png");
		$params['data'] = "Mecoba Generae QR, by Aaji";
		
		$params['level'] = 'H';
		$params['size'] = 10;
		$params['savename'] = 'assets/img/qr/hasil.png';
		$data['qr'] = $this->ciqrcode->generate($params);
		$this->load->view('formulir/form_F201', $data);
	}


	public function form($id){

			$ctrl = substr($id,0,2);
			$re = base_url().'approval/index/'.$ctrl;

            $verified = $this->Approval_model->get_progres($id);
            if ($verified->progres==NULL) {
            	$this->session->set_flashdata('message', "
                <div class='alert alert-danger alert-dismissable'>
	              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
	                <h4><i class='glyphicon glyphicon-remove'></i> $verified->no_regis !!</h4>
	                    Anda Tidak Diperkenankan Cetak Formulir Sebelum Melakukan Verifikasi !
	            </div>
                ");
                redirect($re);
            }


			if ($ctrl=='AL') {
				$bayi = $this->Data_bayi_model->get_by_al($id);
                $IBU    = $this->Ortu_bayi_model->get_by_bayi($bayi->id_bayi,"IBU");
                $AYAH   = $this->Ortu_bayi_model->get_by_bayi($bayi->id_bayi,"AYAH");
                $S1     = $this->Data_saksi_model->get_by_al($id,1);
                $S2     = $this->Data_saksi_model->get_by_al($id,2);
                $PELAPOR = $this->Data_pelapor_model->get_by_al($id,2);

                $data = array(
                        'bayi_data' => $bayi,
                        'ibu_data'  => $IBU,
                        'ayah_data'  => $AYAH,
                        'pelapor_data'  => $PELAPOR,
                        'saksi1_data'  => $S1,
                        'saksi2_data'  => $S2,
                    );
                $form 	= "form_F201"; 
                $string = "BAYI : $bayi->nama || IBU : $IBU->nik => $IBU->nama || AYAH : $AYAH->nik => $AYAH->nama";
			}elseif ($ctrl=='AM') {
				$jenazah = $this->Data_jenazah_model->get_by_am($id);
                $IBU    = $this->Ortu_jenazah_model->get_by_jenazah($jenazah->id_jenazah,"IBU");
                $AYAH   = $this->Ortu_jenazah_model->get_by_jenazah($jenazah->id_jenazah,"AYAH");
                $S1     = $this->Data_saksi_model->get_by_al($id,1);
                $S2     = $this->Data_saksi_model->get_by_al($id,2);
                $PELAPOR = $this->Data_pelapor_model->get_by_al($id,2);

                $data = array(
                        'jenazah_data' => $jenazah,
                        'ibu_data'  => $IBU,
                        'ayah_data'  => $AYAH,
                        'pelapor_data'  => $PELAPOR,
                        'saksi1_data'  => $S1,
                        'saksi2_data'  => $S2,
                    );
                $form 	= "form_F229"; 
                $string = "JENAZAH : $jenazah->nama || IBU : $IBU->nik => $IBU->nama || AYAH : $AYAH->nik => $AYAH->nama";
			}elseif ($ctrl=='AP') {

				$row 	= $this->mempelai->get_by_al($id,'SUAMI');//data suami
        		$IBU_S 	= $this->ortu->get_by_mempelai($row->id_mempelai,"IBU");//data ibu=>suami
        		$AYAH_S	= $this->ortu->get_by_mempelai($row->id_mempelai,"AYAH");//data ayah=>suami

        		$row_istri= $this->mempelai->get_by_al($id,'ISTRI');//data istri
        		$IBU_I 	= $this->ortu->get_by_mempelai($row_istri->id_mempelai,"IBU");//data ibu=>istri
        		$AYAH_I	= $this->ortu->get_by_mempelai($row_istri->id_mempelai,"AYAH");//data ayah=>istri

        		$S1 	= $this->Data_saksi_model->get_by_al($id,1);//data saksi 1
        		$S2 	= $this->Data_saksi_model->get_by_al($id,2);//data saksi 2
        		$PERKAWINAN = $this->perkawinan->get_by_al($id);
        		$ANAK = $this->anak->get_by_al($PERKAWINAN->id_dataper);

                $data = array(
                        'suami_data' => $row,
                        'ibu_s_data'  => $IBU_S,
                        'ayah_s_data'  => $AYAH_S,
                        'istri_data' => $row_istri,
                        'ibu_i_data'  => $IBU_I,
                        'ayah_i_data'  => $AYAH_I,
                        'perkawinan_data'  => $PERKAWINAN,
                        'anak'		=> $ANAK,
                        'saksi1_data'  => $S1,
                        'saksi2_data'  => $S2,
                    );
                $form 	= "form_F212"; 
                $string = "AKTA PERKAWINAN / Mempelai : $row->nama dgn $row_istri->nama / Perkawinan : $PERKAWINAN->tgl_pemberkatan / Peradilan : $PERKAWINAN->nomor_putusan | $PERKAWINAN->tgl_putusan";
			}elseif ($ctrl=='AC') {
				$row 	= $this->c_mempelai->get_by_al($id,'SUAMI');//data suami
        		$row_istri= $this->c_mempelai->get_by_al($id,'ISTRI');//data istri
        		$PERCERAIAN = $this->perceraian->get_by_al($id);
        		

                $data = array(
                        'suami_data'  => $row,
                        'istri_data'  => $row_istri,
                        'perceraian_data'  => $PERCERAIAN,
                    );
                $form 	= "form_F219"; 
                $string = "AKTA PERCERAIAN / Nama : $row->nama dgn $row_istri->nama / Lapor : $PERCERAIAN->tgl_melapor / Peradilan : $PERCERAIAN->no_putusan | $PERCERAIAN->tgl_putusan";
			}

				

		$params['data'] = $string;
		$params['level'] = 'H';
		$params['size'] = 10;
		$params['savename'] = 'assets/img/qr/hasil.png';
		$data['qr'] = $this->ciqrcode->generate($params);


		$html = $this->load->view('formulir/'.$form,$data,TRUE);
		$pdfFilePath = "surat_tugas.pdf";
		$this->load->library("pdf");
		$param = 'P';
		$pdf = $this->pdf->load($param);
		$pdf->defaultheaderline = 1;
			$pdf->defaultfooterline = 1;

			$date = date('d-m-Y h:I:s');
			//$pdf->SetFooter('Cetak Data Buku by @aaji || Page{PAGENO} of {nb} || Printed at'.$date);
			$stylesheet = file_get_contents(base_url().'assets/mpdf_css/mpdfstyletables.css');

			$pdf->WriteHTML($stylesheet,1);

			//generate pdf file form the given HTML

			$pdf->WriteHTML($html,2);
			//pdf->debug = TRUE;

			//Output
			$pdf->Output($pdfFilePath,"I");
			//I=>WITH PREVIEW BROWSER
			//D=>DIRECT DOWNLOAD
		
	}

		public function registrasi($id){
			$keyword = substr($id, 0, 2);
			if ($keyword=='AL') {
				$akta = $this->Akta_kelahiran_model->get_by_al($id);
				$jenis = "AKTA KELAHIRAN";
			}elseif ($keyword=='AM') {
				$akta = $this->Akta_kematian_model->get_by_am($id);
				$jenis = "AKTA KEMATIAN";
			}elseif ($keyword=='AP') {
				$akta = $this->Akta_perkawinan_model->get_by_al($id);
				$jenis = "AKTA PERKAWINAN";
			}elseif ($keyword=='AC') {
				$akta = $this->Akta_perceraian_model->get_by_al($id);
				$jenis = "AKTA PERCERAIAN";
			}

				

                $data = array(
                        'akta_data' => $akta,
                    );
                $string = "PENDAFTARAN => $jenis || DATA PENDAFTAR : $akta->nik_pengaju => $akta->nama || REGISTRASI : $akta->no_registrasi => $akta->tgl_registrasi";

		$params['data'] = $string;
		$params['level'] = 'H';
		$params['size'] = 10;
		$params['savename'] = 'assets/img/qr/hasil.png';
		$data['qr'] = $this->ciqrcode->generate($params);


		$html = $this->load->view('formulir/bukti_registrasi',$data,TRUE);
		$pdfFilePath = "surat_tugas.pdf";
		$this->load->library("pdf");
		$param = 'L';
		$pdf = $this->pdf->load($param);
		$pdf->defaultheaderline = 1;
			$pdf->defaultfooterline = 1;

			$date = date('d-m-Y h:I:s');
			//$pdf->SetFooter('Cetak Data Buku by @aaji || Page{PAGENO} of {nb} || Printed at'.$date);
			$stylesheet = file_get_contents(base_url().'assets/mpdf_css/mpdfstyletables.css');

			$pdf->WriteHTML($stylesheet,1);

			//generate pdf file form the given HTML

			$pdf->WriteHTML($html,2);
			//pdf->debug = TRUE;

			//Output
			$pdf->Output($pdfFilePath,"I");
			//I=>WITH PREVIEW BROWSER
			//D=>DIRECT DOWNLOAD
		
	}

	


}