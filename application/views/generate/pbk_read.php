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
        <h2 style="margin-top:0px">Pbk Read</h2>
        <table class="table">
	    <tr><td>GroupID</td><td><?php echo $GroupID; ?></td></tr>
	    <tr><td>Name</td><td><?php echo $Name; ?></td></tr>
	    <tr><td>Number</td><td><?php echo $Number; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pbk2') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>