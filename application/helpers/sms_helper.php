<?php

	function message_register($data){
		return "DISDUKCAPIL SURAKARTA!!
		PENDAFTARAN BERHASIL!!. Pendafataran dokumen $data[jenis] diproses pada tanggal $data[tgl_daftar], dengan NO.REGISTRASI :
		$data[s_no_daftar], KODE UNIK : $data[s_kode]. Silahkan Lengkapi prosedur pendaftaran maksimal 7 Hari.
		Apabila melebihi batas waktu, maka sistem akan menghapus data pendafaran anda. TERIMAKASIH.
		";
	}

	function message_rw($data){
		return "VERIFIKASI, Ketua RW : $data[rw]. Silahkan anda melakukan verifikasi => $data[jenis], Nomor 
			Pendafataran => $data[no_registrasi], Atas Nama Pendaftar => $data[nama_pendaftar].
		";
	}

	function revisi($data){
		return "REVISI, Nomor Pendaftaran : $data[no_pendaftaran]. Silahkan perbaiki data pendaftaran. Pe-Revisi => $data[oleh], Keterangan => $data[keterangan].
		";
	}


?>