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
        <h2 style="margin-top:0px">Berkas_kematian <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Id AM <?php echo form_error('id_AM') ?></label>
            <input type="text" class="form-control" name="id_AM" id="id_AM" placeholder="Id AM" value="<?php echo $id_AM; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Sk Kematian <?php echo form_error('sk_kematian') ?></label>
            <input type="text" class="form-control" name="sk_kematian" id="sk_kematian" placeholder="Sk Kematian" value="<?php echo $sk_kematian; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Akta Nikah <?php echo form_error('akta_nikah') ?></label>
            <input type="text" class="form-control" name="akta_nikah" id="akta_nikah" placeholder="Akta Nikah" value="<?php echo $akta_nikah; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Akta Lahir <?php echo form_error('akta_lahir') ?></label>
            <input type="text" class="form-control" name="akta_lahir" id="akta_lahir" placeholder="Akta Lahir" value="<?php echo $akta_lahir; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Ktp Pelapor <?php echo form_error('ktp_pelapor') ?></label>
            <input type="text" class="form-control" name="ktp_pelapor" id="ktp_pelapor" placeholder="Ktp Pelapor" value="<?php echo $ktp_pelapor; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kk Pelapor <?php echo form_error('kk_pelapor') ?></label>
            <input type="text" class="form-control" name="kk_pelapor" id="kk_pelapor" placeholder="Kk Pelapor" value="<?php echo $kk_pelapor; ?>" />
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
	    <a href="<?php echo site_url('berkas_kematian') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>