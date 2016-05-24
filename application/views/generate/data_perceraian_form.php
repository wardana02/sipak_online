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
        <h2 style="margin-top:0px">Data_perceraian <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label class="col-lg-2 control-label" for="varchar">Id Ac</label>
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="id_ac" id="id_ac" value="<?php echo $id_ac; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $id_ac; ?>" />
                <p class="help-block"><?php echo form_error('id_ac') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label class="col-lg-2 control-label" for="varchar">Yang Mengajukan</label>
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="yang_mengajukan" id="yang_mengajukan" value="<?php echo $yang_mengajukan; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $yang_mengajukan; ?>" />
                <p class="help-block"><?php echo form_error('yang_mengajukan') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label class="col-lg-2 control-label" for="varchar">No Akta Perkawinan</label>
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="no_akta_perkawinan" id="no_akta_perkawinan" value="<?php echo $no_akta_perkawinan; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $no_akta_perkawinan; ?>" />
                <p class="help-block"><?php echo form_error('no_akta_perkawinan') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label class="col-lg-2 control-label" for="date">Tgl Akta Perkawinan</label>
            <div class="col-lg-9">
                <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012" class="input-append date dpYears">
                       <input type="text" readonly="" name="tgl_akta_perkawinan" id="tgl_akta_perkawinan" value="<?php echo $tgl_akta_perkawinan; ?>" size="16" class="form-control">
                        <span class="input-group-btn add-on">
                          <button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
                        </span>
                </div>
                <p class="help-block"><?php echo form_error('tgl_akta_perkawinan') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label class="col-lg-2 control-label" for="varchar">Tmp Pencatatan</label>
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="tmp_pencatatan" id="tmp_pencatatan" value="<?php echo $tmp_pencatatan; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $tmp_pencatatan; ?>" />
                <p class="help-block"><?php echo form_error('tmp_pencatatan') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label class="col-lg-2 control-label" for="varchar">No Putusan</label>
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="no_putusan" id="no_putusan" value="<?php echo $no_putusan; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $no_putusan; ?>" />
                <p class="help-block"><?php echo form_error('no_putusan') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label class="col-lg-2 control-label" for="date">Tgl Putusan</label>
            <div class="col-lg-9">
                <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012" class="input-append date dpYears">
                       <input type="text" readonly="" name="tgl_putusan" id="tgl_putusan" value="<?php echo $tgl_putusan; ?>" size="16" class="form-control">
                        <span class="input-group-btn add-on">
                          <button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
                        </span>
                </div>
                <p class="help-block"><?php echo form_error('tgl_putusan') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label class="col-lg-2 control-label" for="varchar">Tkt Peradilan</label>
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="tkt_peradilan" id="tkt_peradilan" value="<?php echo $tkt_peradilan; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $tkt_peradilan; ?>" />
                <p class="help-block"><?php echo form_error('tkt_peradilan') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label class="col-lg-2 control-label" for="varchar">Tmp Peradilan</label>
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="tmp_peradilan" id="tmp_peradilan" value="<?php echo $tmp_peradilan; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $tmp_peradilan; ?>" />
                <p class="help-block"><?php echo form_error('tmp_peradilan') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label class="col-lg-2 control-label" for="varchar">Nama Lembaga</label>
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="nama_lembaga" id="nama_lembaga" value="<?php echo $nama_lembaga; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $nama_lembaga; ?>" />
                <p class="help-block"><?php echo form_error('nama_lembaga') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label class="col-lg-2 control-label" for="varchar">Sebab</label>
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="sebab" id="sebab" value="<?php echo $sebab; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $sebab; ?>" />
                <p class="help-block"><?php echo form_error('sebab') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label class="col-lg-2 control-label" for="date">Tgl Melapor</label>
            <div class="col-lg-9">
                <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012" class="input-append date dpYears">
                       <input type="text" readonly="" name="tgl_melapor" id="tgl_melapor" value="<?php echo $tgl_melapor; ?>" size="16" class="form-control">
                        <span class="input-group-btn add-on">
                          <button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
                        </span>
                </div>
                <p class="help-block"><?php echo form_error('tgl_melapor') ?></p>
            </div>
        </div>
	    <input type="hidden" name="id_datacerai" value="<?php echo $id_datacerai; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('data_perceraianx') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>