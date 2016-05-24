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
        <h2 style="margin-top:0px">Berkas_lahir <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Id AL <?php echo form_error('id_AL') ?></label>
            <input type="text" class="form-control" name="id_AL" id="id_AL" placeholder="Id AL" value="<?php echo $id_AL; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Sk Lahir <?php echo form_error('sk_lahir') ?></label>
            <input type="text" class="form-control" name="sk_lahir" id="sk_lahir" placeholder="Sk Lahir" value="<?php echo $sk_lahir; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Akta Nikah Ortu <?php echo form_error('akta_nikah_ortu') ?></label>
            <input type="text" class="form-control" name="akta_nikah_ortu" id="akta_nikah_ortu" placeholder="Akta Nikah Ortu" value="<?php echo $akta_nikah_ortu; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kk Baru <?php echo form_error('kk_baru') ?></label>
            <input type="text" class="form-control" name="kk_baru" id="kk_baru" placeholder="Kk Baru" value="<?php echo $kk_baru; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Ktp Ortu1 <?php echo form_error('ktp_ortu1') ?></label>
            <input type="text" class="form-control" name="ktp_ortu1" id="ktp_ortu1" placeholder="Ktp Ortu1" value="<?php echo $ktp_ortu1; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Ktp Ortu2 <?php echo form_error('ktp_ortu2') ?></label>
            <input type="text" class="form-control" name="ktp_ortu2" id="ktp_ortu2" placeholder="Ktp Ortu2" value="<?php echo $ktp_ortu2; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Ktp Saksi1 <?php echo form_error('ktp_saksi1') ?></label>
            <input type="text" class="form-control" name="ktp_saksi1" id="ktp_saksi1" placeholder="Ktp Saksi1" value="<?php echo $ktp_saksi1; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Ktp Saksi2 <?php echo form_error('ktp_saksi2') ?></label>
            <input type="text" class="form-control" name="ktp_saksi2" id="ktp_saksi2" placeholder="Ktp Saksi2" value="<?php echo $ktp_saksi2; ?>" />
        </div>
	    <input type="hidden" name="id_berkas" value="<?php echo $id_berkas; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('berkas_lahir') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>