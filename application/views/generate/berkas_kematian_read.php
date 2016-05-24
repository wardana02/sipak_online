<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Berkas_kematian Read</h2>
        <table class="table">
	    <tr><td>Id AM</td><td><?php echo $id_AM; ?></td></tr>
	    <tr><td>Sk Kematian</td><td><?php echo $sk_kematian; ?></td></tr>
	    <tr><td>Akta Nikah</td><td><?php echo $akta_nikah; ?></td></tr>
	    <tr><td>Akta Lahir</td><td><?php echo $akta_lahir; ?></td></tr>
	    <tr><td>Ktp Pelapor</td><td><?php echo $ktp_pelapor; ?></td></tr>
	    <tr><td>Kk Pelapor</td><td><?php echo $kk_pelapor; ?></td></tr>
	    <tr><td>Ktp Saksi1</td><td><?php echo $ktp_saksi1; ?></td></tr>
	    <tr><td>Ktp Saksi2</td><td><?php echo $ktp_saksi2; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('berkas_kematian') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>