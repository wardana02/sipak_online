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
        <h2 style="margin-top:0px">Data_mempelai <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Id Ap <?php echo form_error('id_ap') ?></label>
            <input type="text" class="form-control" name="id_ap" id="id_ap" placeholder="Id Ap" value="<?php echo $id_ap; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">No Kk <?php echo form_error('no_kk') ?></label>
            <input type="text" class="form-control" name="no_kk" id="no_kk" placeholder="No Kk" value="<?php echo $no_kk; ?>" />
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
            <label for="varchar">Tmp Lahir <?php echo form_error('tmp_lahir') ?></label>
            <input type="text" class="form-control" name="tmp_lahir" id="tmp_lahir" placeholder="Tmp Lahir" value="<?php echo $tmp_lahir; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Tgl Lahir <?php echo form_error('tgl_lahir') ?></label>
            <input type="text" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Tgl Lahir" value="<?php echo $tgl_lahir; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Pendidikan Terakhir <?php echo form_error('pendidikan_terakhir') ?></label>
            <input type="text" class="form-control" name="pendidikan_terakhir" id="pendidikan_terakhir" placeholder="Pendidikan Terakhir" value="<?php echo $pendidikan_terakhir; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Agama <?php echo form_error('agama') ?></label>
            <input type="text" class="form-control" name="agama" id="agama" placeholder="Agama" value="<?php echo $agama; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nm Organisasi <?php echo form_error('nm_organisasi') ?></label>
            <input type="text" class="form-control" name="nm_organisasi" id="nm_organisasi" placeholder="Nm Organisasi" value="<?php echo $nm_organisasi; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Pekerjaan <?php echo form_error('pekerjaan') ?></label>
            <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan" value="<?php echo $pekerjaan; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Anak Ke <?php echo form_error('anak_ke') ?></label>
            <input type="text" class="form-control" name="anak_ke" id="anak_ke" placeholder="Anak Ke" value="<?php echo $anak_ke; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Status Sebelum Nikah <?php echo form_error('status_sebelum_nikah') ?></label>
            <input type="text" class="form-control" name="status_sebelum_nikah" id="status_sebelum_nikah" placeholder="Status Sebelum Nikah" value="<?php echo $status_sebelum_nikah; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Perkawinan Ke <?php echo form_error('perkawinan_ke') ?></label>
            <input type="text" class="form-control" name="perkawinan_ke" id="perkawinan_ke" placeholder="Perkawinan Ke" value="<?php echo $perkawinan_ke; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Istri Ke <?php echo form_error('istri_ke') ?></label>
            <input type="text" class="form-control" name="istri_ke" id="istri_ke" placeholder="Istri Ke" value="<?php echo $istri_ke; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Status Mempelai <?php echo form_error('status_mempelai') ?></label>
            <input type="text" class="form-control" name="status_mempelai" id="status_mempelai" placeholder="Status Mempelai" value="<?php echo $status_mempelai; ?>" />
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
	    <input type="hidden" name="id_mempelai" value="<?php echo $id_mempelai; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('data_mempelai') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>