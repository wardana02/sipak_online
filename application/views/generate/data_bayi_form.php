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
        <h2 style="margin-top:0px">Data_bayi <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Id AL <?php echo form_error('id_AL') ?></label>
            <input type="text" class="form-control" name="id_AL" id="id_AL" placeholder="Id AL" value="<?php echo $id_AL; ?>" />
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
            <label for="varchar">Tmp Kelahiran <?php echo form_error('tmp_kelahiran') ?></label>
            <input type="text" class="form-control" name="tmp_kelahiran" id="tmp_kelahiran" placeholder="Tmp Kelahiran" value="<?php echo $tmp_kelahiran; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Tgl Kelahiran <?php echo form_error('tgl_kelahiran') ?></label>
            <input type="text" class="form-control" name="tgl_kelahiran" id="tgl_kelahiran" placeholder="Tgl Kelahiran" value="<?php echo $tgl_kelahiran; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Hari Kelahiran <?php echo form_error('hari_kelahiran') ?></label>
            <input type="text" class="form-control" name="hari_kelahiran" id="hari_kelahiran" placeholder="Hari Kelahiran" value="<?php echo $hari_kelahiran; ?>" />
        </div>
	    <div class="form-group">
            <label for="decimal">Panjang Bayi <?php echo form_error('panjang_bayi') ?></label>
            <input type="text" class="form-control" name="panjang_bayi" id="panjang_bayi" placeholder="Panjang Bayi" value="<?php echo $panjang_bayi; ?>" />
        </div>
	    <div class="form-group">
            <label for="decimal">Berat Bayi <?php echo form_error('berat_bayi') ?></label>
            <input type="text" class="form-control" name="berat_bayi" id="berat_bayi" placeholder="Berat Bayi" value="<?php echo $berat_bayi; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Penolong <?php echo form_error('penolong') ?></label>
            <input type="text" class="form-control" name="penolong" id="penolong" placeholder="Penolong" value="<?php echo $penolong; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Kelahiran Ke <?php echo form_error('kelahiran_ke') ?></label>
            <input type="text" class="form-control" name="kelahiran_ke" id="kelahiran_ke" placeholder="Kelahiran Ke" value="<?php echo $kelahiran_ke; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Jenis Kelahiran <?php echo form_error('jenis_kelahiran') ?></label>
            <input type="text" class="form-control" name="jenis_kelahiran" id="jenis_kelahiran" placeholder="Jenis Kelahiran" value="<?php echo $jenis_kelahiran; ?>" />
        </div>
	    <div class="form-group">
            <label for="time">Pukul <?php echo form_error('pukul') ?></label>
            <input type="text" class="form-control" name="pukul" id="pukul" placeholder="Pukul" value="<?php echo $pukul; ?>" />
        </div>
	    <input type="hidden" name="id_bayi" value="<?php echo $id_bayi; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('data_bayi') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>