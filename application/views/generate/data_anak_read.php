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
        <h2 style="margin-top:0px">Data_anak Read</h2>
        <table class="table">
	    <tr><td>Id Dataanak</td><td><?php echo $id_dataanak; ?></td></tr>
	    <tr><td>Id Dataper</td><td><?php echo $id_dataper; ?></td></tr>
	    <tr><td>Nama Anak</td><td><?php echo $nama_anak; ?></td></tr>
	    <tr><td>Nomor Akta</td><td><?php echo $nomor_akta; ?></td></tr>
	    <tr><td>Tgl Akta</td><td><?php echo $tgl_akta; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('data_anak') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>