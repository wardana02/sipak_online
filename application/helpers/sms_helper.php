<?php

	function message_register($data){
		return "Gunakan NO.REG:$data[s_no_daftar],KODE UNIK: $data[s_kode],tanggal daftar: $data[tgl_daftar].Segera Lengkapi data pendaftaran $data[jenis],maksimal 7 hari.TERIMAKASIH";
	}

	function message_rw($data){
		return "VERIFIKASI,RW:$data[rw].Silahkan verifikasi=>$data[jenis],Nomor Pendafataran=>$data[no_registrasi],Atas Nama Pendaftar=>$data[nama_pendaftar].";
	}

	function revisi($data){
		return "REVISI,Nomor Pendaftaran : $data[no_pendaftaran]. Silahkan perbaiki data pendaftaran. Pe-Revisi => $data[oleh], Keterangan => $data[keterangan].";
	}

	function sms_jadi($data){
		return "AKTA JADI,Nomor Pendaftaran:$data[no_pendaftaran].Silahkan Diambil dengan membawa bukti pendaftaran. Pelayanan Senin s.d. Jumat, 08.00-15.00 WIB.";
	}


?>