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
        <h2 style="margin-top:0px">Dps_temp Read</h2>
        <table class="table">
	    <tr><td>NIK</td><td><?php echo $NIK; ?></td></tr>
	    <tr><td>Nama Lengkap</td><td><?php echo $nama_lengkap; ?></td></tr>
	    <tr><td>Tmp Lahir</td><td><?php echo $tmp_lahir; ?></td></tr>
	    <tr><td>Tgl Lahir</td><td><?php echo $tgl_lahir; ?></td></tr>
	    <tr><td>Jk</td><td><?php echo $jk; ?></td></tr>
	    <tr><td>Gol Darah</td><td><?php echo $gol_darah; ?></td></tr>
	    <tr><td>Agama</td><td><?php echo $agama; ?></td></tr>
	    <tr><td>Status Perkawinan</td><td><?php echo $status_perkawinan; ?></td></tr>
	    <tr><td>Ps Alamat</td><td><?php echo $ps_alamat; ?></td></tr>
	    <tr><td>Ps Rt</td><td><?php echo $ps_rt; ?></td></tr>
	    <tr><td>Ps Rw</td><td><?php echo $ps_rw; ?></td></tr>
	    <tr><td>Ps Kelurahan</td><td><?php echo $ps_kelurahan; ?></td></tr>
	    <tr><td>Ps Kecamatan</td><td><?php echo $ps_kecamatan; ?></td></tr>
	    <tr><td>Pekerjaan</td><td><?php echo $pekerjaan; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('dps_temp') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>