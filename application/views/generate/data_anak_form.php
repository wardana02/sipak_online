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
        <h2 style="margin-top:0px">Data_anak <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Id Dataanak <?php echo form_error('id_dataanak') ?></label>
            <input type="text" class="form-control" name="id_dataanak" id="id_dataanak" placeholder="Id Dataanak" value="<?php echo $id_dataanak; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Id Dataper <?php echo form_error('id_dataper') ?></label>
            <input type="text" class="form-control" name="id_dataper" id="id_dataper" placeholder="Id Dataper" value="<?php echo $id_dataper; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama Anak <?php echo form_error('nama_anak') ?></label>
            <input type="text" class="form-control" name="nama_anak" id="nama_anak" placeholder="Nama Anak" value="<?php echo $nama_anak; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nomor Akta <?php echo form_error('nomor_akta') ?></label>
            <input type="text" class="form-control" name="nomor_akta" id="nomor_akta" placeholder="Nomor Akta" value="<?php echo $nomor_akta; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Tgl Akta <?php echo form_error('tgl_akta') ?></label>
            <input type="text" class="form-control" name="tgl_akta" id="tgl_akta" placeholder="Tgl Akta" value="<?php echo $tgl_akta; ?>" />
        </div>
	    <input type="hidden" name="" value="<?php echo $; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('data_anak') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>