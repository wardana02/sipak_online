<?php

	function message_register($data){
		return "Gunakan NO.REG: $data[s_no_daftar],KODE UNIK: $data[s_kode],tanggal daftar: $data[tgl_daftar].Segera Lengkapi data pendaftaran $data[jenis],maksimal 7 hari.TERIMAKASIH";
	}

	function message_rw($data){
		return "VERIFIKASI,RW:$data[rw].Silahkan verifikasi=>$data[jenis],Nomor Pendafataran=>$data[no_registrasi],Atas Nama Pendaftar=>$data[nama_pendaftar].";
	}

	function revisi($data){
		return "REVISI. Silahkan perbaiki data pendaftaran: $data[no_pendaftaran]. Pe-Revisi => $data[oleh] / $data[keterangan].";
	}

	function sms_jadi($data){
		return "AKTA JADI,No. Pendaftaran: $data[no_pendaftaran].Silahkan Diambil dengan membawa bukti pendaftaran. Pelayanan Senin s.d. Jumat, 08.00-15.00 WIB.";
	}


?>