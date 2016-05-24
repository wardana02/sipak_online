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
        <h2 style="margin-top:0px">Ortu_bayi Read</h2>
        <table class="table">
	    <tr><td>Id Bayi</td><td><?php echo $id_bayi; ?></td></tr>
	    <tr><td>Nik</td><td><?php echo $nik; ?></td></tr>
	    <tr><td>Nama</td><td><?php echo $nama; ?></td></tr>
	    <tr><td>Tgl Lahir</td><td><?php echo $tgl_lahir; ?></td></tr>
	    <tr><td>Umur</td><td><?php echo $umur; ?></td></tr>
	    <tr><td>Pekerjaan</td><td><?php echo $pekerjaan; ?></td></tr>
	    <tr><td>A Alamat</td><td><?php echo $a_alamat; ?></td></tr>
	    <tr><td>A Desa</td><td><?php echo $a_desa; ?></td></tr>
	    <tr><td>A Kecamatan</td><td><?php echo $a_kecamatan; ?></td></tr>
	    <tr><td>A Kabkota</td><td><?php echo $a_kabkota; ?></td></tr>
	    <tr><td>A Provinsi</td><td><?php echo $a_provinsi; ?></td></tr>
	    <tr><td>Tgl Pencatatan Kawin</td><td><?php echo $tgl_pencatatan_kawin; ?></td></tr>
	    <tr><td>Status</td><td><?php echo $status; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('ortu_bayi') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>