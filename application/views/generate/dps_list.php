<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <h2 style="margin-top:0px">Dps List</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('dpse/create'), 'Create', 'class="btn btn-primary"'); ?>
		<?php echo anchor(site_url('dpse/excel'), 'Excel', 'class="btn btn-primary"'); ?>
		<?php echo anchor(site_url('dpse/word'), 'Word', 'class="btn btn-primary"'); ?>
	    </div>
        </div>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
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
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($dpse_data as $dpse)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $dpse->NIK ?></td>
		    <td><?php echo $dpse->nama_lengkap ?></td>
		    <td><?php echo $dpse->tmp_lahir ?></td>
		    <td><?php echo $dpse->tgl_lahir ?></td>
		    <td><?php echo $dpse->jk ?></td>
		    <td><?php echo $dpse->gol_darah ?></td>
		    <td><?php echo $dpse->agama ?></td>
		    <td><?php echo $dpse->status_perkawinan ?></td>
		    <td><?php echo $dpse->ps_alamat ?></td>
		    <td><?php echo $dpse->ps_rt ?></td>
		    <td><?php echo $dpse->ps_rw ?></td>
		    <td><?php echo $dpse->ps_kelurahan ?></td>
		    <td><?php echo $dpse->ps_kecamatan ?></td>
		    <td><?php echo $dpse->pekerjaan ?></td>
		    <td style="text-align:center" width="200px">
			<?php 
			echo anchor(site_url('dpse/read/'.$dpse->ID),'Read'); 
			echo ' | '; 
			echo anchor(site_url('dpse/update/'.$dpse->ID),'Update'); 
			echo ' | '; 
			echo anchor(site_url('dpse/delete/'.$dpse->ID),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
			?>
		    </td>
	        </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#mytable").dataTable();
            });
        </script>
    </body>
</html>