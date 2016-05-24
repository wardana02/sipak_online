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
        <h2 style="margin-top:0px">Akta_perkawinan <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nik Pengaju <?php echo form_error('nik_pengaju') ?></label>
            <input type="text" class="form-control" name="nik_pengaju" id="nik_pengaju" placeholder="Nik Pengaju" value="<?php echo $nik_pengaju; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama <?php echo form_error('nama') ?></label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">No Kk <?php echo form_error('no_kk') ?></label>
            <input type="text" class="form-control" name="no_kk" id="no_kk" placeholder="No Kk" value="<?php echo $no_kk; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">No Hp <?php echo form_error('no_hp') ?></label>
            <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="No Hp" value="<?php echo $no_hp; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">No Registrasi <?php echo form_error('no_registrasi') ?></label>
            <input type="text" class="form-control" name="no_registrasi" id="no_registrasi" placeholder="No Registrasi" value="<?php echo $no_registrasi; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Tgl Registrasi <?php echo form_error('tgl_registrasi') ?></label>
            <input type="text" class="form-control" name="tgl_registrasi" id="tgl_registrasi" placeholder="Tgl Registrasi" value="<?php echo $tgl_registrasi; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kode Unik <?php echo form_error('kode_unik') ?></label>
            <input type="text" class="form-control" name="kode_unik" id="kode_unik" placeholder="Kode Unik" value="<?php echo $kode_unik; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Denda <?php echo form_error('denda') ?></label>
            <input type="text" class="form-control" name="denda" id="denda" placeholder="Denda" value="<?php echo $denda; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Ip Network <?php echo form_error('ip_network') ?></label>
            <input type="text" class="form-control" name="ip_network" id="ip_network" placeholder="Ip Network" value="<?php echo $ip_network; ?>" />
        </div>
	    <input type="hidden" name="id_ap" value="<?php echo $id_ap; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('akta_perkawinan') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>