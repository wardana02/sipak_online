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
        <h2 style="margin-top:0px">Data_bayi Read</h2>
        <table class="table">
	    <tr><td>Id AL</td><td><?php echo $id_AL; ?></td></tr>
	    <tr><td>Nama</td><td><?php echo $nama; ?></td></tr>
	    <tr><td>Jk</td><td><?php echo $jk; ?></td></tr>
	    <tr><td>Tmp Lahir</td><td><?php echo $tmp_lahir; ?></td></tr>
	    <tr><td>Tmp Kelahiran</td><td><?php echo $tmp_kelahiran; ?></td></tr>
	    <tr><td>Tgl Kelahiran</td><td><?php echo $tgl_kelahiran; ?></td></tr>
	    <tr><td>Hari Kelahiran</td><td><?php echo $hari_kelahiran; ?></td></tr>
	    <tr><td>Panjang Bayi</td><td><?php echo $panjang_bayi; ?></td></tr>
	    <tr><td>Berat Bayi</td><td><?php echo $berat_bayi; ?></td></tr>
	    <tr><td>Penolong</td><td><?php echo $penolong; ?></td></tr>
	    <tr><td>Kelahiran Ke</td><td><?php echo $kelahiran_ke; ?></td></tr>
	    <tr><td>Jenis Kelahiran</td><td><?php echo $jenis_kelahiran; ?></td></tr>
	    <tr><td>Pukul</td><td><?php echo $pukul; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('data_bayi') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>