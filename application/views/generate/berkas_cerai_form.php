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
        <h2 style="margin-top:0px">Berkas_cerai <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Id Ac
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="id_ac" id="id_ac" value="<?php echo $id_ac; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $id_ac; ?>" />
                <p class="help-block"><?php echo form_error('id_ac') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label for="varchar">Sk Pengadilan
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="sk_pengadilan" id="sk_pengadilan" value="<?php echo $sk_pengadilan; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $sk_pengadilan; ?>" />
                <p class="help-block"><?php echo form_error('sk_pengadilan') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label for="varchar">Surat Panitera Pn
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="surat_panitera_pn" id="surat_panitera_pn" value="<?php echo $surat_panitera_pn; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $surat_panitera_pn; ?>" />
                <p class="help-block"><?php echo form_error('surat_panitera_pn') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label for="varchar">Kk
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="kk" id="kk" value="<?php echo $kk; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $kk; ?>" />
                <p class="help-block"><?php echo form_error('kk') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label for="varchar">Ktp Suami
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="ktp_suami" id="ktp_suami" value="<?php echo $ktp_suami; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $ktp_suami; ?>" />
                <p class="help-block"><?php echo form_error('ktp_suami') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label for="varchar">Ktp Istri
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="ktp_istri" id="ktp_istri" value="<?php echo $ktp_istri; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $ktp_istri; ?>" />
                <p class="help-block"><?php echo form_error('ktp_istri') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label for="varchar">Surat Kuasa
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="surat_kuasa" id="surat_kuasa" value="<?php echo $surat_kuasa; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $surat_kuasa; ?>" />
                <p class="help-block"><?php echo form_error('surat_kuasa') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label for="varchar">Ktp Kuasa
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="ktp_kuasa" id="ktp_kuasa" value="<?php echo $ktp_kuasa; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $ktp_kuasa; ?>" />
                <p class="help-block"><?php echo form_error('ktp_kuasa') ?></p>
            </div>
        </div>
	    <input type="hidden" name="id_berkas" value="<?php echo $id_berkas; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('berkas_cerai') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>