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
        <h2 style="margin-top:0px">Data_perkawinan Read</h2>
        <table class="table">
	    <tr><td>Id Ap</td><td><?php echo $id_ap; ?></td></tr>
	    <tr><td>Tgl Pemberkatan</td><td><?php echo $tgl_pemberkatan; ?></td></tr>
	    <tr><td>Hari Lapor</td><td><?php echo $hari_lapor; ?></td></tr>
	    <tr><td>Tgl Lapor</td><td><?php echo $tgl_lapor; ?></td></tr>
	    <tr><td>Pukul</td><td><?php echo $pukul; ?></td></tr>
	    <tr><td>Agama</td><td><?php echo $agama; ?></td></tr>
	    <tr><td>Nama Organisasi</td><td><?php echo $nama_organisasi; ?></td></tr>
	    <tr><td>Nama Peradilan</td><td><?php echo $nama_peradilan; ?></td></tr>
	    <tr><td>Nomor Putusan</td><td><?php echo $nomor_putusan; ?></td></tr>
	    <tr><td>Tgl Putusan</td><td><?php echo $tgl_putusan; ?></td></tr>
	    <tr><td>Nama Pemuka</td><td><?php echo $nama_pemuka; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('data_perkawinan2') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>