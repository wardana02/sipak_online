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
        <h2 style="margin-top:0px">Data_perceraian Read</h2>
        <table class="table">
	    <tr><td>Id Ac</td><td><?php echo $id_ac; ?></td></tr>
	    <tr><td>Yang Mengajukan</td><td><?php echo $yang_mengajukan; ?></td></tr>
	    <tr><td>No Akta Perkawinan</td><td><?php echo $no_akta_perkawinan; ?></td></tr>
	    <tr><td>Tgl Akta Perkawinan</td><td><?php echo $tgl_akta_perkawinan; ?></td></tr>
	    <tr><td>Tmp Pencatatan</td><td><?php echo $tmp_pencatatan; ?></td></tr>
	    <tr><td>No Putusan</td><td><?php echo $no_putusan; ?></td></tr>
	    <tr><td>Tgl Putusan</td><td><?php echo $tgl_putusan; ?></td></tr>
	    <tr><td>Tkt Peradilan</td><td><?php echo $tkt_peradilan; ?></td></tr>
	    <tr><td>Tmp Peradilan</td><td><?php echo $tmp_peradilan; ?></td></tr>
	    <tr><td>Nama Lembaga</td><td><?php echo $nama_lembaga; ?></td></tr>
	    <tr><td>Sebab</td><td><?php echo $sebab; ?></td></tr>
	    <tr><td>Tgl Melapor</td><td><?php echo $tgl_melapor; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('data_perceraianx') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>