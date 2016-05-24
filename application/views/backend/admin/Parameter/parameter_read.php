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
        <h2 style="margin-top:0px">Parameter Read</h2>
        <table class="table">
	    <tr><td>Jenis</td><td><?php echo $jenis; ?></td></tr>
	    <tr><td>Denda</td><td><?php echo $denda; ?></td></tr>
	    <tr><td>Durasi</td><td><?php echo $durasi; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('parameter2') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>