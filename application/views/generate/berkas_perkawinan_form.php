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
        <h2 style="margin-top:0px">Berkas_perkawinan <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Id Ap <?php echo form_error('id_ap') ?></label>
            <input type="text" class="form-control" name="id_ap" id="id_ap" placeholder="Id Ap" value="<?php echo $id_ap; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Sk Pernikahan <?php echo form_error('sk_pernikahan') ?></label>
            <input type="text" class="form-control" name="sk_pernikahan" id="sk_pernikahan" placeholder="Sk Pernikahan" value="<?php echo $sk_pernikahan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kk Suami <?php echo form_error('kk_suami') ?></label>
            <input type="text" class="form-control" name="kk_suami" id="kk_suami" placeholder="Kk Suami" value="<?php echo $kk_suami; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Ktp Suami <?php echo form_error('ktp_suami') ?></label>
            <input type="text" class="form-control" name="ktp_suami" id="ktp_suami" placeholder="Ktp Suami" value="<?php echo $ktp_suami; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Al Suami <?php echo form_error('al_suami') ?></label>
            <input type="text" class="form-control" name="al_suami" id="al_suami" placeholder="Al Suami" value="<?php echo $al_suami; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kk Istri <?php echo form_error('kk_istri') ?></label>
            <input type="text" class="form-control" name="kk_istri" id="kk_istri" placeholder="Kk Istri" value="<?php echo $kk_istri; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Ktp Istri <?php echo form_error('ktp_istri') ?></label>
            <input type="text" class="form-control" name="ktp_istri" id="ktp_istri" placeholder="Ktp Istri" value="<?php echo $ktp_istri; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Al Istri <?php echo form_error('al_istri') ?></label>
            <input type="text" class="form-control" name="al_istri" id="al_istri" placeholder="Al Istri" value="<?php echo $al_istri; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Sk Kelurahan <?php echo form_error('sk_kelurahan') ?></label>
            <input type="text" class="form-control" name="sk_kelurahan" id="sk_kelurahan" placeholder="Sk Kelurahan" value="<?php echo $sk_kelurahan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Am Ayah Suami <?php echo form_error('am_ayah_suami') ?></label>
            <input type="text" class="form-control" name="am_ayah_suami" id="am_ayah_suami" placeholder="Am Ayah Suami" value="<?php echo $am_ayah_suami; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Am Ibu Suami <?php echo form_error('am_ibu_suami') ?></label>
            <input type="text" class="form-control" name="am_ibu_suami" id="am_ibu_suami" placeholder="Am Ibu Suami" value="<?php echo $am_ibu_suami; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Am Ayah Istri <?php echo form_error('am_ayah_istri') ?></label>
            <input type="text" class="form-control" name="am_ayah_istri" id="am_ayah_istri" placeholder="Am Ayah Istri" value="<?php echo $am_ayah_istri; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Am Ibu Istri <?php echo form_error('am_ibu_istri') ?></label>
            <input type="text" class="form-control" name="am_ibu_istri" id="am_ibu_istri" placeholder="Am Ibu Istri" value="<?php echo $am_ibu_istri; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Ktp Saksi1 <?php echo form_error('ktp_saksi1') ?></label>
            <input type="text" class="form-control" name="ktp_saksi1" id="ktp_saksi1" placeholder="Ktp Saksi1" value="<?php echo $ktp_saksi1; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Ktp Saksi2 <?php echo form_error('ktp_saksi2') ?></label>
            <input type="text" class="form-control" name="ktp_saksi2" id="ktp_saksi2" placeholder="Ktp Saksi2" value="<?php echo $ktp_saksi2; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Pasfoto <?php echo form_error('pasfoto') ?></label>
            <input type="text" class="form-control" name="pasfoto" id="pasfoto" placeholder="Pasfoto" value="<?php echo $pasfoto; ?>" />
        </div>
	    <input type="hidden" name="id_berkas" value="<?php echo $id_berkas; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('berkas_perkawinan') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>