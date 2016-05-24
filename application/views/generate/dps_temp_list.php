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
        <h2 style="margin-top:0px">Dps_temp List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('dps_temp/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('dps_temp/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('dps_temp'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>NIK</th>
		<th>Nama Lengkap</th>
		<th>Tmp Lahir</th>
		<th>Tgl Lahir</th>
		<th>Jk</th>
		<th>Gol Darah</th>
		<th>Agama</th>
		<th>Status Perkawinan</th>
		<th>Ps Alamat</th>
		<th>Ps Rt</th>
		<th>Ps Rw</th>
		<th>Ps Kelurahan</th>
		<th>Ps Kecamatan</th>
		<th>Pekerjaan</th>
		<th>Action</th>
            </tr><?php
            foreach ($dps_temp_data as $dps_temp)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $dps_temp->NIK ?></td>
			<td><?php echo $dps_temp->nama_lengkap ?></td>
			<td><?php echo $dps_temp->tmp_lahir ?></td>
			<td><?php echo $dps_temp->tgl_lahir ?></td>
			<td><?php echo $dps_temp->jk ?></td>
			<td><?php echo $dps_temp->gol_darah ?></td>
			<td><?php echo $dps_temp->agama ?></td>
			<td><?php echo $dps_temp->status_perkawinan ?></td>
			<td><?php echo $dps_temp->ps_alamat ?></td>
			<td><?php echo $dps_temp->ps_rt ?></td>
			<td><?php echo $dps_temp->ps_rw ?></td>
			<td><?php echo $dps_temp->ps_kelurahan ?></td>
			<td><?php echo $dps_temp->ps_kecamatan ?></td>
			<td><?php echo $dps_temp->pekerjaan ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('dps_temp/read/'.$dps_temp->ID),'Read'); 
				echo ' | '; 
				echo anchor(site_url('dps_temp/update/'.$dps_temp->ID),'Update'); 
				echo ' | '; 
				echo anchor(site_url('dps_temp/delete/'.$dps_temp->ID),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
		<?php echo anchor(site_url('dps_temp/excel'), 'Excel', 'class="btn btn-primary"'); ?>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>