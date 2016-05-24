<?php

	//flas message success
			$this->session->set_flashdata('message', "
                <div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                <h4><i class='icon fa fa-ban'></i> Berhasil!</h4>
                    Data User Baru Berhasil Ditambahkan !
            </div>
                ");
            redirect(site_url('user'));


     //flash gagal
            $this->session->set_flashdata('message', "
                <div class='alert alert-danger alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                <h4><i class='icon fa fa-ban'></i> Gagal!</h4>
                    Maaf, Data Tidak Ditemukan
            </div>
                ");
            redirect(site_url('user'));

     //controller
            'conten'    => 'backend/admin/Pbk/pbk_form',
            'd'         => 'active','d2'         => 'active',
            'nama_user' => $this->session->userdata('nama_user'),
            'status'    => $this->session->userdata('status'),
            'title' => 'Tambah Data Kontak SMS Gateway Capil Online',
            'head' => 'Data Kontak Sistem SMS Gateway',

     ///load view controller
            $this->load->view('backend/dashboard/index', $data);


?>

