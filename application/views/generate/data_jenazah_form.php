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
        <h2 style="margin-top:0px">Data_jenazah <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Id AM <?php echo form_error('id_AM') ?></label>
            <input type="text" class="form-control" name="id_AM" id="id_AM" placeholder="Id AM" value="<?php echo $id_AM; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama <?php echo form_error('nama') ?></label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Jk <?php echo form_error('jk') ?></label>
            <input type="text" class="form-control" name="jk" id="jk" placeholder="Jk" value="<?php echo $jk; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Tmp Lahir <?php echo form_error('tmp_lahir') ?></label>
            <input type="text" class="form-control" name="tmp_lahir" id="tmp_lahir" placeholder="Tmp Lahir" value="<?php echo $tmp_lahir; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Umur <?php echo form_error('umur') ?></label>
            <input type="text" class="form-control" name="umur" id="umur" placeholder="Umur" value="<?php echo $umur; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Tgl Lahir <?php echo form_error('tgl_lahir') ?></label>
            <input type="text" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Tgl Lahir" value="<?php echo $tgl_lahir; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Agama <?php echo form_error('agama') ?></label>
            <input type="text" class="form-control" name="agama" id="agama" placeholder="Agama" value="<?php echo $agama; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Pekerjaan <?php echo form_error('pekerjaan') ?></label>
            <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan" value="<?php echo $pekerjaan; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Tgl Kematian <?php echo form_error('tgl_kematian') ?></label>
            <input type="text" class="form-control" name="tgl_kematian" id="tgl_kematian" placeholder="Tgl Kematian" value="<?php echo $tgl_kematian; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Menerangkan <?php echo form_error('menerangkan') ?></label>
            <input type="text" class="form-control" name="menerangkan" id="menerangkan" placeholder="Menerangkan" value="<?php echo $menerangkan; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Anak Ke <?php echo form_error('anak_ke') ?></label>
            <input type="text" class="form-control" name="anak_ke" id="anak_ke" placeholder="Anak Ke" value="<?php echo $anak_ke; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Sebab Kematian <?php echo form_error('sebab_kematian') ?></label>
            <input type="text" class="form-control" name="sebab_kematian" id="sebab_kematian" placeholder="Sebab Kematian" value="<?php echo $sebab_kematian; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Tmp Kematian <?php echo form_error('tmp_kematian') ?></label>
            <input type="text" class="form-control" name="tmp_kematian" id="tmp_kematian" placeholder="Tmp Kematian" value="<?php echo $tmp_kematian; ?>" />
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
	    <input type="hidden" name="id_jenazah" value="<?php echo $id_jenazah; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('data_jenazah') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>