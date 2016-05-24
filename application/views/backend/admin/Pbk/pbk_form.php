<!doctype html>
<html>
    <head>
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
            <textarea class="form-control" rows="3" name="Name" id="Name" required placeholder="Name"><?php echo $Name; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="Number">Number <?php echo form_error('Number') ?></label>
            <textarea class="form-control" rows="3" name="Number" id="Number" required placeholder="Number"><?php echo $Number; ?></textarea>
        </div>
	    <input type="hidden" name="ID" value="<?php echo $ID; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	</form>
    </body>
</html>