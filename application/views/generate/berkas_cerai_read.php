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
        <h2 style="margin-top:0px">Berkas_cerai Read</h2>
        <table class="table">
	    <tr><td>Id Ac</td><td><?php echo $id_ac; ?></td></tr>
	    <tr><td>Sk Pengadilan</td><td><?php echo $sk_pengadilan; ?></td></tr>
	    <tr><td>Surat Panitera Pn</td><td><?php echo $surat_panitera_pn; ?></td></tr>
	    <tr><td>Kk</td><td><?php echo $kk; ?></td></tr>
	    <tr><td>Ktp Suami</td><td><?php echo $ktp_suami; ?></td></tr>
	    <tr><td>Ktp Istri</td><td><?php echo $ktp_istri; ?></td></tr>
	    <tr><td>Surat Kuasa</td><td><?php echo $surat_kuasa; ?></td></tr>
	    <tr><td>Ktp Kuasa</td><td><?php echo $ktp_kuasa; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('berkas_cerai') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>