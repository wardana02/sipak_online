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
        <h2 style="margin-top:0px">Dps_temp <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label class="col-lg-2 control-label" for="varchar">NIK</label>
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="NIK" id="NIK" value="<?php echo $NIK; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $NIK; ?>" />
                <p class="help-block"><?php echo form_error('NIK') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label class="col-lg-2 control-label" for="varchar">Nama Lengkap</label>
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="nama_lengkap" id="nama_lengkap" value="<?php echo $nama_lengkap; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $nama_lengkap; ?>" />
                <p class="help-block"><?php echo form_error('nama_lengkap') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label class="col-lg-2 control-label" for="varchar">Tmp Lahir</label>
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="tmp_lahir" id="tmp_lahir" value="<?php echo $tmp_lahir; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $tmp_lahir; ?>" />
                <p class="help-block"><?php echo form_error('tmp_lahir') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label class="col-lg-2 control-label" for="date">Tgl Lahir</label>
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
            <label class="col-lg-2 control-label" for="varchar">Jk</label>
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="jk" id="jk" value="<?php echo $jk; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $jk; ?>" />
                <p class="help-block"><?php echo form_error('jk') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label class="col-lg-2 control-label" for="varchar">Gol Darah</label>
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="gol_darah" id="gol_darah" value="<?php echo $gol_darah; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $gol_darah; ?>" />
                <p class="help-block"><?php echo form_error('gol_darah') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label class="col-lg-2 control-label" for="varchar">Agama</label>
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="agama" id="agama" value="<?php echo $agama; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $agama; ?>" />
                <p class="help-block"><?php echo form_error('agama') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label class="col-lg-2 control-label" for="varchar">Status Perkawinan</label>
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="status_perkawinan" id="status_perkawinan" value="<?php echo $status_perkawinan; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $status_perkawinan; ?>" />
                <p class="help-block"><?php echo form_error('status_perkawinan') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label class="col-lg-2 control-label" for="varchar">Ps Alamat</label>
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="ps_alamat" id="ps_alamat" value="<?php echo $ps_alamat; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $ps_alamat; ?>" />
                <p class="help-block"><?php echo form_error('ps_alamat') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label class="col-lg-2 control-label" for="varchar">Ps Rt</label>
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="ps_rt" id="ps_rt" value="<?php echo $ps_rt; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $ps_rt; ?>" />
                <p class="help-block"><?php echo form_error('ps_rt') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label class="col-lg-2 control-label" for="varchar">Ps Rw</label>
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="ps_rw" id="ps_rw" value="<?php echo $ps_rw; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $ps_rw; ?>" />
                <p class="help-block"><?php echo form_error('ps_rw') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label class="col-lg-2 control-label" for="varchar">Ps Kelurahan</label>
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="ps_kelurahan" id="ps_kelurahan" value="<?php echo $ps_kelurahan; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $ps_kelurahan; ?>" />
                <p class="help-block"><?php echo form_error('ps_kelurahan') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label class="col-lg-2 control-label" for="varchar">Ps Kecamatan</label>
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="ps_kecamatan" id="ps_kecamatan" value="<?php echo $ps_kecamatan; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $ps_kecamatan; ?>" />
                <p class="help-block"><?php echo form_error('ps_kecamatan') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label class="col-lg-2 control-label" for="varchar">Pekerjaan</label>
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="pekerjaan" id="pekerjaan" value="<?php echo $pekerjaan; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $pekerjaan; ?>" />
                <p class="help-block"><?php echo form_error('pekerjaan') ?></p>
            </div>
        </div>
	    <input type="hidden" name="ID" value="<?php echo $ID; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('dps_temp') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>