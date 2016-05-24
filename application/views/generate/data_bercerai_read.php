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
        <h2 style="margin-top:0px">Data_bercerai Read</h2>
        <table class="table">
	    <tr><td>Id Ac</td><td><?php echo $id_ac; ?></td></tr>
	    <tr><td>No Kk</td><td><?php echo $no_kk; ?></td></tr>
	    <tr><td>Nik</td><td><?php echo $nik; ?></td></tr>
	    <tr><td>Nama</td><td><?php echo $nama; ?></td></tr>
	    <tr><td>Tmp Lahir</td><td><?php echo $tmp_lahir; ?></td></tr>
	    <tr><td>Tgl Lahir</td><td><?php echo $tgl_lahir; ?></td></tr>
	    <tr><td>Pendidikan Terakhir</td><td><?php echo $pendidikan_terakhir; ?></td></tr>
	    <tr><td>Agama</td><td><?php echo $agama; ?></td></tr>
	    <tr><td>Nm Organisasi</td><td><?php echo $nm_organisasi; ?></td></tr>
	    <tr><td>Pekerjaan</td><td><?php echo $pekerjaan; ?></td></tr>
	    <tr><td>Perceraian Ke</td><td><?php echo $perceraian_ke; ?></td></tr>
	    <tr><td>Status Mempelai</td><td><?php echo $status_mempelai; ?></td></tr>
	    <tr><td>A Alamat</td><td><?php echo $a_alamat; ?></td></tr>
	    <tr><td>A Desa</td><td><?php echo $a_desa; ?></td></tr>
	    <tr><td>A Kecamatan</td><td><?php echo $a_kecamatan; ?></td></tr>
	    <tr><td>A Kabkota</td><td><?php echo $a_kabkota; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('data_bercerai') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>