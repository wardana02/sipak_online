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
        <h2 style="margin-top:0px">Data_bercerai <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Id Ac
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="id_ac" id="id_ac" value="<?php echo $id_ac; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $id_ac; ?>" />
                <p class="help-block"><?php echo form_error('id_ac') ?></p>
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
            <label for="varchar">Nik
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="nik" id="nik" value="<?php echo $nik; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $nik; ?>" />
                <p class="help-block"><?php echo form_error('nik') ?></p>
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
            <label for="varchar">Tmp Lahir
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="tmp_lahir" id="tmp_lahir" value="<?php echo $tmp_lahir; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $tmp_lahir; ?>" />
                <p class="help-block"><?php echo form_error('tmp_lahir') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label for="date">Tgl Lahir
            <div class="col-lg-9">
                <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012" class="input-append date dpYears">
                       <input type="text" readonly="" name="tgl_lahir" id="tgl_lahir" value="<?php echo $tgl_lahir; ?>" size="16" class="form-control">
                        <span class="input-group-btn add-on">
                          <button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
                        </span>
                </div>
                <p class="help-block"><?php echo form_error('tgl_lahir') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label for="varchar">Pendidikan Terakhir
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="pendidikan_terakhir" id="pendidikan_terakhir" value="<?php echo $pendidikan_terakhir; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $pendidikan_terakhir; ?>" />
                <p class="help-block"><?php echo form_error('pendidikan_terakhir') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label for="varchar">Agama
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="agama" id="agama" value="<?php echo $agama; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $agama; ?>" />
                <p class="help-block"><?php echo form_error('agama') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label for="varchar">Nm Organisasi
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="nm_organisasi" id="nm_organisasi" value="<?php echo $nm_organisasi; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $nm_organisasi; ?>" />
                <p class="help-block"><?php echo form_error('nm_organisasi') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label for="varchar">Pekerjaan
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="pekerjaan" id="pekerjaan" value="<?php echo $pekerjaan; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $pekerjaan; ?>" />
                <p class="help-block"><?php echo form_error('pekerjaan') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label for="int">Perceraian Ke
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="perceraian_ke" id="perceraian_ke" value="<?php echo $perceraian_ke; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $perceraian_ke; ?>" />
                <p class="help-block"><?php echo form_error('perceraian_ke') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label for="varchar">Status Mempelai
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="status_mempelai" id="status_mempelai" value="<?php echo $status_mempelai; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $status_mempelai; ?>" />
                <p class="help-block"><?php echo form_error('status_mempelai') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label for="varchar">A Alamat
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="a_alamat" id="a_alamat" value="<?php echo $a_alamat; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $a_alamat; ?>" />
                <p class="help-block"><?php echo form_error('a_alamat') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label for="varchar">A Desa
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="a_desa" id="a_desa" value="<?php echo $a_desa; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $a_desa; ?>" />
                <p class="help-block"><?php echo form_error('a_desa') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label for="varchar">A Kecamatan
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="a_kecamatan" id="a_kecamatan" value="<?php echo $a_kecamatan; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $a_kecamatan; ?>" />
                <p class="help-block"><?php echo form_error('a_kecamatan') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label for="varchar">A Kabkota
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="a_kabkota" id="a_kabkota" value="<?php echo $a_kabkota; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $a_kabkota; ?>" />
                <p class="help-block"><?php echo form_error('a_kabkota') ?></p>
            </div>
        </div>
	    <input type="hidden" name="id_bercerai" value="<?php echo $id_bercerai; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('data_bercerai') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>