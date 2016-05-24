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
        <h2 style="margin-top:0px">Pbk <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">GroupID <?php echo form_error('GroupID') ?></label>
            <input type="text" class="form-control" name="GroupID" id="GroupID" placeholder="GroupID" value="<?php echo $GroupID; ?>" />
        </div>
	    <div class="form-group">
            <label for="Name">Name <?php echo form_error('Name') ?></label>
            <textarea class="form-control" rows="3" name="Name" id="Name" placeholder="Name"><?php echo $Name; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="Number">Number <?php echo form_error('Number') ?></label>
            <textarea class="form-control" rows="3" name="Number" id="Number" placeholder="Number"><?php echo $Number; ?></textarea>
        </div>
	    <input type="hidden" name="ID" value="<?php echo $ID; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pbk2') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>