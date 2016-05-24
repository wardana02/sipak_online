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
        <h2 style="margin-top:0px">Akta_perceraian <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nik Pengaju
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="nik_pengaju" id="nik_pengaju" value="<?php echo $nik_pengaju; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $nik_pengaju; ?>" />
                <p class="help-block"><?php echo form_error('nik_pengaju') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label for="varchar">Nama
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="nama" id="nama" value="<?php echo $nama; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $nama; ?>" />
                <p class="help-block"><?php echo form_error('nama') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label for="varchar">No Kk
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="no_kk" id="no_kk" value="<?php echo $no_kk; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $no_kk; ?>" />
                <p class="help-block"><?php echo form_error('no_kk') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label for="varchar">No Hp
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="no_hp" id="no_hp" value="<?php echo $no_hp; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $no_hp; ?>" />
                <p class="help-block"><?php echo form_error('no_hp') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label for="varchar">No Registrasi
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="no_registrasi" id="no_registrasi" value="<?php echo $no_registrasi; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $no_registrasi; ?>" />
                <p class="help-block"><?php echo form_error('no_registrasi') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label for="datetime">Tgl Registrasi
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="tgl_registrasi" id="tgl_registrasi" value="<?php echo $tgl_registrasi; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $tgl_registrasi; ?>" />
                <p class="help-block"><?php echo form_error('tgl_registrasi') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label for="varchar">Kode Unik
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="kode_unik" id="kode_unik" value="<?php echo $kode_unik; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $kode_unik; ?>" />
                <p class="help-block"><?php echo form_error('kode_unik') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label for="int">Denda
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="denda" id="denda" value="<?php echo $denda; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $denda; ?>" />
                <p class="help-block"><?php echo form_error('denda') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label for="varchar">Ip Network
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="ip_network" id="ip_network" value="<?php echo $ip_network; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $ip_network; ?>" />
                <p class="help-block"><?php echo form_error('ip_network') ?></p>
            </div>
        </div>
	    <input type="hidden" name="id_ac" value="<?php echo $id_ac; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('akta_perceraian') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>