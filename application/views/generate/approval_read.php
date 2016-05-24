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
        <h2 style="margin-top:0px">Approval Read</h2>
        <table class="table">
	    <tr><td>Id Akta</td><td><?php echo $id_akta; ?></td></tr>
	    <tr><td>By Rw</td><td><?php echo $by_rw; ?></td></tr>
	    <tr><td>Status Rw</td><td><?php echo $status_rw; ?></td></tr>
	    <tr><td>By Kelurahan</td><td><?php echo $by_kelurahan; ?></td></tr>
	    <tr><td>Status Kelurahan</td><td><?php echo $status_kelurahan; ?></td></tr>
	    <tr><td>By Dukcapil</td><td><?php echo $by_dukcapil; ?></td></tr>
	    <tr><td>Status Dukcapil</td><td><?php echo $status_dukcapil; ?></td></tr>
	    <tr><td>Progres</td><td><?php echo $progres; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('approval') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>