<!doctype html>
<html>
    <head>
    </head>
    <body>
        <h2 style="margin-top:0px">Balas Pesan Ke <?php echo $Number ?></h2>
        <form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="Number">Number <?php echo form_error('Number') ?></label>
            <input type="text" readonly="" class="form-control" name="DestinationNumber" id="DestinationNumber" value="<?php echo $Number; ?>" />
        </div>

	    <div class="form-group">
            <label for="Name">Isi Pesan Balasan <?php echo form_error('Name') ?></label>
            <textarea class="form-control" rows="3" name="TextDecoded" id="TextDecoded" required placeholder="TextDecoded"><?php echo $TextDecoded; ?></textarea>
        </div>
	    
	    <input type="hidden" name="ID" value="<?php echo $ID; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	</form>
    </body>
</html>