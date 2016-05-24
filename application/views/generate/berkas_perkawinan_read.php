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
        <h2 style="margin-top:0px">Berkas_perkawinan Read</h2>
        <table class="table">
	    <tr><td>Id Ap</td><td><?php echo $id_ap; ?></td></tr>
	    <tr><td>Sk Pernikahan</td><td><?php echo $sk_pernikahan; ?></td></tr>
	    <tr><td>Kk Suami</td><td><?php echo $kk_suami; ?></td></tr>
	    <tr><td>Ktp Suami</td><td><?php echo $ktp_suami; ?></td></tr>
	    <tr><td>Al Suami</td><td><?php echo $al_suami; ?></td></tr>
	    <tr><td>Kk Istri</td><td><?php echo $kk_istri; ?></td></tr>
	    <tr><td>Ktp Istri</td><td><?php echo $ktp_istri; ?></td></tr>
	    <tr><td>Al Istri</td><td><?php echo $al_istri; ?></td></tr>
	    <tr><td>Sk Kelurahan</td><td><?php echo $sk_kelurahan; ?></td></tr>
	    <tr><td>Am Ayah Suami</td><td><?php echo $am_ayah_suami; ?></td></tr>
	    <tr><td>Am Ibu Suami</td><td><?php echo $am_ibu_suami; ?></td></tr>
	    <tr><td>Am Ayah Istri</td><td><?php echo $am_ayah_istri; ?></td></tr>
	    <tr><td>Am Ibu Istri</td><td><?php echo $am_ibu_istri; ?></td></tr>
	    <tr><td>Ktp Saksi1</td><td><?php echo $ktp_saksi1; ?></td></tr>
	    <tr><td>Ktp Saksi2</td><td><?php echo $ktp_saksi2; ?></td></tr>
	    <tr><td>Pasfoto</td><td><?php echo $pasfoto; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('berkas_perkawinan') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>