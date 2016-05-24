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
        <h2 style="margin-top:0px">Berkas_lahir Read</h2>
        <table class="table">
	    <tr><td>Id AL</td><td><?php echo $id_AL; ?></td></tr>
	    <tr><td>Sk Lahir</td><td><?php echo $sk_lahir; ?></td></tr>
	    <tr><td>Akta Nikah Ortu</td><td><?php echo $akta_nikah_ortu; ?></td></tr>
	    <tr><td>Kk Baru</td><td><?php echo $kk_baru; ?></td></tr>
	    <tr><td>Ktp Ortu1</td><td><?php echo $ktp_ortu1; ?></td></tr>
	    <tr><td>Ktp Ortu2</td><td><?php echo $ktp_ortu2; ?></td></tr>
	    <tr><td>Ktp Saksi1</td><td><?php echo $ktp_saksi1; ?></td></tr>
	    <tr><td>Ktp Saksi2</td><td><?php echo $ktp_saksi2; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('berkas_lahir') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>