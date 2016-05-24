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
        <h2 style="margin-top:0px">Data_pelapor <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Id Akta <?php echo form_error('id_akta') ?></label>
            <input type="text" class="form-control" name="id_akta" id="id_akta" placeholder="Id Akta" value="<?php echo $id_akta; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nik <?php echo form_error('nik') ?></label>
            <input type="text" class="form-control" name="nik" id="nik" placeholder="Nik" value="<?php echo $nik; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama <?php echo form_error('nama') ?></label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Umur <?php echo form_error('umur') ?></label>
            <input type="text" class="form-control" name="umur" id="umur" placeholder="Umur" value="<?php echo $umur; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">A Desa <?php echo form_error('a_desa') ?></label>
            <input type="text" class="form-control" name="a_desa" id="a_desa" placeholder="A Desa" value="<?php echo $a_desa; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">A Kecamatan <?php echo form_error('a_kecamatan') ?></label>
            <input type="text" class="form-control" name="a_kecamatan" id="a_kecamatan" placeholder="A Kecamatan" value="<?php echo $a_kecamatan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">A Kabkota <?php echo form_error('a_kabkota') ?></label>
            <input type="text" class="form-control" name="a_kabkota" id="a_kabkota" placeholder="A Kabkota" value="<?php echo $a_kabkota; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">A Provinsi <?php echo form_error('a_provinsi') ?></label>
            <input type="text" class="form-control" name="a_provinsi" id="a_provinsi" placeholder="A Provinsi" value="<?php echo $a_provinsi; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Jk <?php echo form_error('jk') ?></label>
            <input type="text" class="form-control" name="jk" id="jk" placeholder="Jk" value="<?php echo $jk; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Pekerjaan <?php echo form_error('pekerjaan') ?></label>
            <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan" value="<?php echo $pekerjaan; ?>" />
        </div>
	    <input type="hidden" name="id_pelapor" value="<?php echo $id_pelapor; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('data_pelapor') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>