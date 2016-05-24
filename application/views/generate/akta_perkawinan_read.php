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
        <h2 style="margin-top:0px">Akta_perkawinan Read</h2>
        <table class="table">
	    <tr><td>Nik Pengaju</td><td><?php echo $nik_pengaju; ?></td></tr>
	    <tr><td>Nama</td><td><?php echo $nama; ?></td></tr>
	    <tr><td>No Kk</td><td><?php echo $no_kk; ?></td></tr>
	    <tr><td>No Hp</td><td><?php echo $no_hp; ?></td></tr>
	    <tr><td>No Registrasi</td><td><?php echo $no_registrasi; ?></td></tr>
	    <tr><td>Tgl Registrasi</td><td><?php echo $tgl_registrasi; ?></td></tr>
	    <tr><td>Kode Unik</td><td><?php echo $kode_unik; ?></td></tr>
	    <tr><td>Denda</td><td><?php echo $denda; ?></td></tr>
	    <tr><td>Ip Network</td><td><?php echo $ip_network; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('akta_perkawinan') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>