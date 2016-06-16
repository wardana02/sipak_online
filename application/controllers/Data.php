<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Data extends CI_Controller {
    function __construct(){
        parent::__construct();
         $this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
         $this->load->library('Export');
         $this->load->model('mread');
         $this->load->model('Dps_model');

         $this->load->model('Data_model','tables',TRUE);
    }
    public function index()
    {
        //echo "string";exit();
        $dps = $this->Dps_model->get_all();

        $data = array(
            'nama_user' =>  $this->session->userdata('nama_user'),
            'status'    =>  $this->session->userdata('status'),
            'b' =>  "active",'b2'   =>  "active",
            'dpse_data' => $dps,
            'conten' => 'backend/admin/Data/list',
        );

        $this->load->view('backend/dashboard/index', $data);
    }
    public function import()
    {
    	$data = array(
    				'nama_user'	=>	$this->session->userdata('nama_user'),
    				'status'	=>	$this->session->userdata('status'),
    				'b'	=>	"active",'b1'	=>	"active",
	        		'conten'	=>	"backend/admin/Data/iport",
	        		);
        $this->load->view('backend/dashboard/index', $data);
    }
    public function upload(){
        $fileName = time().$_FILES['file']['name'];
         
        $config['upload_path'] = './assets/dataexcel/'; //buat folder dengan nama assets di root folder
        $config['file_name'] = $fileName;
        $config['allowed_types'] = 'xls|xlsx|csv';
        $config['max_size'] = 10000;
         
        $this->load->library('upload');
        $this->upload->initialize($config);
         
        if(! $this->upload->do_upload('file') )
        $this->upload->display_errors();
             
        $media = $this->upload->data('file');
        $inputFileName = './assets/dataexcel/'.$fileName;
        
        //echo "$inputFileName";exit();
         
        try {
                $inputFileType = IOFactory::identify($inputFileName);
                $objReader = IOFactory::createReader($inputFileType);
                $objPHPExcel = $objReader->load($inputFileName);
            } catch(Exception $e) {
                die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
            }
 
            $sheet = $objPHPExcel->getSheet(0);
            $highestRow = $sheet->getHighestRow();
            $highestColumn = $sheet->getHighestColumn();
             
            for ($row = 2; $row <= $highestRow; $row++){                  //  Read a row of data into an array                 
                $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                                NULL,
                                                TRUE,
                                                FALSE);
                                                 
                //Sesuaikan sama nama kolom tabel di database                                
                 $data = array(
                    "NIK"=> $rowData[0][0],
                    "nama_lengkap"=> $rowData[0][1],
                    "tmp_lahir"=> $rowData[0][2],
                    "tgl_lahir"=> $rowData[0][3],
                    "jk"=> $rowData[0][4],
                    "gol_darah"=> $rowData[0][5],
                    "agama"=> $rowData[0][6],
                    "status_perkawinan"=> $rowData[0][7],
                    "ps_alamat"=> $rowData[0][8],
                    "ps_rt"=> $rowData[0][9],
                    "ps_rw"=> $rowData[0][10],
                    "ps_kelurahan"=> $rowData[0][11],
                    "ps_kecamatan"=> $rowData[0][12],
                    "pekerjaan"=> $rowData[0][13]
                );
                 
                //sesuaikan nama dengan nama tabel
                 $qi = "insert into dps 
				(nik,nama_lengkap,tmp_lahir,tgl_lahir,jk,gol_darah,agama,
				status_perkawinan,ps_alamat,ps_rt,ps_rw,ps_kelurahan,
				ps_kecamatan,pekerjaan) (
				select nik,nama_lengkap,tmp_lahir,tgl_lahir,jk,gol_darah,agama,
				status_perkawinan,ps_alamat,ps_rt,ps_rw,ps_kelurahan,ps_kecamatan,
				pekerjaan from dps_temp where dps_temp.nik NOT IN (select nik from dps))";

				$qu = "UPDATE dps CROSS JOIN
				(SELECT * FROM dps_temp WHERE nik IN (SELECT nik FROM dps)) as cari
				SET 
				dps.nama_lengkap=(cari.nama_lengkap),
				dps.tmp_lahir=(cari.tmp_lahir),
				dps.tgl_lahir=(cari.tgl_lahir),
				dps.jk=(cari.jk),
				dps.gol_darah=(cari.gol_darah),
				dps.agama=(cari.agama),
				dps.status_perkawinan=(cari.status_perkawinan),
				dps.ps_alamat=(cari.ps_alamat),
				dps.ps_rt=(cari.ps_rt),
				dps.ps_rw=(cari.ps_rw),
				dps.ps_kelurahan=(cari.ps_kelurahan),
				dps.ps_kecamatan=(cari.ps_kecamatan),
				dps.pekerjaan=(cari.pekerjaan)
				WHERE dps.nik=(cari.nik)";

                $insert = $this->db->insert("dps_temp",$data);
                $cu = $this->db->query("$qu");
                $cp = $this->db->query("$qi");
                $del = $this->db->query("DELETE FROM dps_temp");
                //delete_files($media['file_path']);
                     
            }
        redirect('data');
    }

        // download rekap excel
    public function export_excel()
    {
        $status = $this->session->userdata('status');


        $true = "A";
        if($status=='ADMIN'){

                  //query untuk ambil data
                $sql = $this->Dps_model->get_query_data();
                $nama_file = 'DataPendudukExport_' .date('d/m/Y');
            //echo "$sql";exit();
            //CALL TO EXPORT FILE
            $this->export->to_excel($sql,$nama_file); 

        }
        // parameter tidak lengkap
        else
        {
            $this->session->set_flashdata('pesan', 'Proses pembuatan data rekap (Excel) gagal. Parameter tidak lengkap.');
            redirect('data');
            
        }
    }

 
    function hapus_data(){
        $al = $this->mread->hitung("akta_kelahiran","id_al");
        if (count($al) > 0) {
            $a = $this->eksekusi($al,"akta_kelahiran","id_al");
        }

        $al = $this->mread->hitung("akta_kematian","id_am");
        if (count($al) > 0) {
            $b = $this->eksekusi($al,"akta_kematian","id_am");
        }


        $al = $this->mread->hitung("akta_perkawinan","id_ap");
        if (count($al) > 0) {
            $c = $this->eksekusi($al,"akta_perkawinan","id_ap");
        }

        $al = $this->mread->hitung("akta_perceraian","id_ac");
        if (count($al) > 0) {
            $d = $this->eksekusi($al,"akta_perceraian","id_ac");
        }

        $nilai = $a+$b+$c+$d;
        $re = base_url("dashboard");

        echo "<script language=\"Javascript\">\n";
        if ($nilai>0) {
            echo "window.alert('$nilai Data Pendaftaran Berhasil Dihapus!')";
        }else{
            echo "window.alert('Data Bersih, Tidak Ada Yang Dihapus.')";
        }
        
        header("refresh:0; $re");
        echo "</script>";
     
    }

    public function eksekusi($data,$tabel,$id){
        $nilai = 0;
        foreach ($data as $key) {

            $sb = substr($key->tgl_registrasi,0,10);
            $tgl  = explode('-', $sb);
            $t =  $tgl[0]."-".$tgl[1]."-".$tgl[2];

            $tgl_daftar        = date("Y-m-d",strtotime($t));
            $tgl_sekarang      = date("Y-m-d");

            $h1 = new DateTime($tgl_daftar);
            $h2 = new DateTime($tgl_sekarang);
            $waktu      = $h1->diff($h2); 
            if ($waktu->days > 7) {
                
                if ($tabel=="akta_kelahiran") {
                    $this->mread->hapus_lengkap_al($key->$id);echo "HAPUS IS AKTA LEHIR";
                }elseif ($tabel=="akta_kematian") {
                    $this->mread->hapus_lengkap_am($key->$id);echo "HAPUS IS AKTA M";
                }elseif ($tabel=="akta_perkawinan") {
                    $this->mread->hapus_lengkap_ap($key->$id);echo "HAPUS IS AKTA P";
                }elseif ($tabel=="akta_perceraian") {
                    $this->mread->hapus_lengkap_ac($key->$id);echo "HAPUS IS AKTA C";
                }
                $this->mread->hapus($tabel,$id,$key->$id);

                $nilai++;
            }
        }
        return $nilai;
    }

    public function tabel($name){
        echo "$name";
        $data['tabel'] = $this->tables->print_element($name);
        //print_r($data);exit();
        $this->load->view('table', $data);
    }
}



//sbase_url()."assets/ajax-zoom".$t_gallery->gallery_url