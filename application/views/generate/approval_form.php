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
        <h2 style="margin-top:0px">Approval <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Id Akta <?php echo form_error('id_akta') ?></label>
            <input type="text" class="form-control" name="id_akta" id="id_akta" placeholder="Id Akta" value="<?php echo $id_akta; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">By Rw <?php echo form_error('by_rw') ?></label>
            <input type="text" class="form-control" name="by_rw" id="by_rw" placeholder="By Rw" value="<?php echo $by_rw; ?>" />
        </div>
	    <div class="form-group">
            <label for="status_rw">Status Rw <?php echo form_error('status_rw') ?></label>
            <textarea class="form-control" rows="3" name="status_rw" id="status_rw" placeholder="Status Rw"><?php echo $status_rw; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="varchar">By Kelurahan <?php echo form_error('by_kelurahan') ?></label>
            <input type="text" class="form-control" name="by_kelurahan" id="by_kelurahan" placeholder="By Kelurahan" value="<?php echo $by_kelurahan; ?>" />
        </div>
	    <div class="form-group">
            <label for="status_kelurahan">Status Kelurahan <?php echo form_error('status_kelurahan') ?></label>
            <textarea class="form-control" rows="3" name="status_kelurahan" id="status_kelurahan" placeholder="Status Kelurahan"><?php echo $status_kelurahan; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="varchar">By Dukcapil <?php echo form_error('by_dukcapil') ?></label>
            <input type="text" class="form-control" name="by_dukcapil" id="by_dukcapil" placeholder="By Dukcapil" value="<?php echo $by_dukcapil; ?>" />
        </div>
	    <div class="form-group">
            <label for="status_dukcapil">Status Dukcapil <?php echo form_error('status_dukcapil') ?></label>
            <textarea class="form-control" rows="3" name="status_dukcapil" id="status_dukcapil" placeholder="Status Dukcapil"><?php echo $status_dukcapil; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="varchar">Progres <?php echo form_error('progres') ?></label>
            <input type="text" class="form-control" name="progres" id="progres" placeholder="Progres" value="<?php echo $progres; ?>" />
        </div>
	    <input type="hidden" name="id_approval" value="<?php echo $id_approval; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('approval') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>