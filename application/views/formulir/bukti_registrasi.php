<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>-</title>
  <link href=<?=base_url("assets/mpdf_css/mpdfstyletables.css");?> rel="stylesheet" type="text/css" />
</head>

<body class="ft_splh">
<table width="579">
  <tr>
    <td align="center" colspan="2"><h2>PENDAFTARAN AKTA ONLINE</h2></td>
  </tr>
  <tr>
    <td align="center" class="br_bottom" colspan="2">DISPENDUKAPIL KOTA SURAKARTA</td>
  </tr>
  <tr><td colspan="2">&nbsp;</td></tr>
  <tr><td colspan="2">&nbsp;</td></tr>
  <tr><td><h3>Nomor Pendaftaran</h3></td><td><h3><?php echo $akta_data->no_registrasi;?></td></h3></tr>
  <tr><td><h3>Tanggal Pendaftaran</h3></td><td><h3><?php echo dateindo($akta_data->tgl_registrasi);?></h3></td></tr>
  <tr><td colspan="2">&nbsp;</td></tr>
  <tr><td colspan="2">&nbsp;</td></tr>
  <tr><td colspan="2" align="center"><h3> Pendaftaran Online Berhasil !!</h3></td></tr>
  <tr><td colspan="2" align="center"> Tanda Bukti Pendaftaran ini dianggap sah jika anda sudah 
  melengkapi semua dokumen dan kelengkapan.</td></tr>
  <tr><td colspan="2">&nbsp;</td></tr>
  <tr><td colspan="2">&nbsp;</td></tr>
  <tr><td colspan="2" align="center"><h3> Info Call Center : </h3></td></tr>
  <tr><td colspan="2" align="center"> Hot Line : (0271) 788122</td></tr>
  <tr><td colspan="2" align="center"> SMS Tracing : 0857-25-4858-10</td></tr>
  <tr><td colspan="2">&nbsp;</td></tr>
  <tr>
  <td align="center" colspan="2"> 
	<img src=<?php echo "$qr";?> width="200"/>
	</td>
	
  </tr>
</table>




    
 
</body>
</html>
