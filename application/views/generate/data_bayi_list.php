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
                <h2 style="margin-top:0px">Data_bayi List</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('data_bayi/create'), 'Create', 'class="btn btn-primary"'); ?>
	    </div>
        </div>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Id AL</th>
		    <th>Nama</th>
		    <th>Jk</th>
		    <th>Tmp Lahir</th>
		    <th>Tmp Kelahiran</th>
		    <th>Tgl Kelahiran</th>
		    <th>Hari Kelahiran</th>
		    <th>Panjang Bayi</th>
		    <th>Berat Bayi</th>
		    <th>Penolong</th>
		    <th>Kelahiran Ke</th>
		    <th>Jenis Kelahiran</th>
		    <th>Pukul</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($data_bayi_data as $data_bayi)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $data_bayi->id_AL ?></td>
		    <td><?php echo $data_bayi->nama ?></td>
		    <td><?php echo $data_bayi->jk ?></td>
		    <td><?php echo $data_bayi->tmp_lahir ?></td>
		    <td><?php echo $data_bayi->tmp_kelahiran ?></td>
		    <td><?php echo $data_bayi->tgl_kelahiran ?></td>
		    <td><?php echo $data_bayi->hari_kelahiran ?></td>
		    <td><?php echo $data_bayi->panjang_bayi ?></td>
		    <td><?php echo $data_bayi->berat_bayi ?></td>
		    <td><?php echo $data_bayi->penolong ?></td>
		    <td><?php echo $data_bayi->kelahiran_ke ?></td>
		    <td><?php echo $data_bayi->jenis_kelahiran ?></td>
		    <td><?php echo $data_bayi->pukul ?></td>
		    <td style="text-align:center" width="200px">
			<?php 
			echo anchor(site_url('data_bayi/read/'.$data_bayi->id_bayi),'Read'); 
			echo ' | '; 
			echo anchor(site_url('data_bayi/update/'.$data_bayi->id_bayi),'Update'); 
			echo ' | '; 
			echo anchor(site_url('data_bayi/delete/'.$data_bayi->id_bayi),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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