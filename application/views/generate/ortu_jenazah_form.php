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
        <h2 style="margin-top:0px">Ortu_jenazah <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Id Jenazah <?php echo form_error('id_jenazah') ?></label>
            <input type="text" class="form-control" name="id_jenazah" id="id_jenazah" placeholder="Id Jenazah" value="<?php echo $id_jenazah; ?>" />
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
            <label for="date">Tgl Lahir <?php echo form_error('tgl_lahir') ?></label>
            <input type="text" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Tgl Lahir" value="<?php echo $tgl_lahir; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Umur <?php echo form_error('umur') ?></label>
            <input type="text" class="form-control" name="umur" id="umur" placeholder="Umur" value="<?php echo $umur; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Pekerjaan <?php echo form_error('pekerjaan') ?></label>
            <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan" value="<?php echo $pekerjaan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">A Alamat <?php echo form_error('a_alamat') ?></label>
            <input type="text" class="form-control" name="a_alamat" id="a_alamat" placeholder="A Alamat" value="<?php echo $a_alamat; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">A Desa <?php echo form_error('a_desa') ?></label>
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
            <label for="varchar">Status <?php echo form_error('status') ?></label>
            <input type="text" class="form-control" name="status" id="status" placeholder="Status" value="<?php echo $status; ?>" />
        </div>
	    <input type="hidden" name="id_ortu" value="<?php echo $id_ortu; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('ortu_jenazah') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>