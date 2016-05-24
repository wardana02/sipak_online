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
        <h2 style="margin-top:0px">Data_perkawinan <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Id Ap
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="id_ap" id="id_ap" value="<?php echo $id_ap; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $id_ap; ?>" />
                <p class="help-block"><?php echo form_error('id_ap') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label for="date">Tgl Pemberkatan
            <div class="col-lg-9">
                <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012" class="input-append date dpYears">
                       <input type="text" readonly="" name="tgl_pemberkatan" id="tgl_pemberkatan" value="<?php echo $tgl_pemberkatan; ?>" size="16" class="form-control">
                        <span class="input-group-btn add-on">
                          <button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
                        </span>
                </div>
                <p class="help-block"><?php echo form_error('tgl_pemberkatan') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label for="varchar">Hari Lapor
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="hari_lapor" id="hari_lapor" value="<?php echo $hari_lapor; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $hari_lapor; ?>" />
                <p class="help-block"><?php echo form_error('hari_lapor') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label for="date">Tgl Lapor
            <div class="col-lg-9">
                <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012" class="input-append date dpYears">
                       <input type="text" readonly="" name="tgl_lapor" id="tgl_lapor" value="<?php echo $tgl_lapor; ?>" size="16" class="form-control">
                        <span class="input-group-btn add-on">
                          <button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
                        </span>
                </div>
                <p class="help-block"><?php echo form_error('tgl_lapor') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label for="time">Pukul
            <div class="col-lg-9">
                <div class="input-group bootstrap-timepicker">
                        <input type="text" value="<?php echo $pukul; ?>" readonly name="pukul" id="pukul" class="form-control timepicker-24">
                           <span class="input-group-btn">
                           <button class="btn btn-danger" type="button"><i class="fa fa-clock-o"></i></button>
                           </span>
               </div>
                <p class="help-block"><?php echo form_error('pukul') ?></p>
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
            <label for="varchar">Nama Organisasi
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="nama_organisasi" id="nama_organisasi" value="<?php echo $nama_organisasi; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $nama_organisasi; ?>" />
                <p class="help-block"><?php echo form_error('nama_organisasi') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label for="varchar">Nama Peradilan
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="nama_peradilan" id="nama_peradilan" value="<?php echo $nama_peradilan; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $nama_peradilan; ?>" />
                <p class="help-block"><?php echo form_error('nama_peradilan') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label for="varchar">Nomor Putusan
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="nomor_putusan" id="nomor_putusan" value="<?php echo $nomor_putusan; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $nomor_putusan; ?>" />
                <p class="help-block"><?php echo form_error('nomor_putusan') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label for="date">Tgl Putusan
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
            <label for="varchar">Nama Pemuka
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="nama_pemuka" id="nama_pemuka" value="<?php echo $nama_pemuka; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $nama_pemuka; ?>" />
                <p class="help-block"><?php echo form_error('nama_pemuka') ?></p>
            </div>
        </div>
	    <input type="hidden" name="id_dataper" value="<?php echo $id_dataper; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('data_perkawinan2') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>