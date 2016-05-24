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
                <h2 style="margin-top:0px">Data_pelapor List</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('data_pelapor/create'), 'Create', 'class="btn btn-primary"'); ?>
	    </div>
        </div>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Id Akta</th>
		    <th>Nik</th>
		    <th>Nama</th>
		    <th>Umur</th>
		    <th>A Desa</th>
		    <th>A Kecamatan</th>
		    <th>A Kabkota</th>
		    <th>A Provinsi</th>
		    <th>Jk</th>
		    <th>Pekerjaan</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($data_pelapor_data as $data_pelapor)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $data_pelapor->id_akta ?></td>
		    <td><?php echo $data_pelapor->nik ?></td>
		    <td><?php echo $data_pelapor->nama ?></td>
		    <td><?php echo $data_pelapor->umur ?></td>
		    <td><?php echo $data_pelapor->a_desa ?></td>
		    <td><?php echo $data_pelapor->a_kecamatan ?></td>
		    <td><?php echo $data_pelapor->a_kabkota ?></td>
		    <td><?php echo $data_pelapor->a_provinsi ?></td>
		    <td><?php echo $data_pelapor->jk ?></td>
		    <td><?php echo $data_pelapor->pekerjaan ?></td>
		    <td style="text-align:center" width="200px">
			<?php 
			echo anchor(site_url('data_pelapor/read/'.$data_pelapor->id_pelapor),'Read'); 
			echo ' | '; 
			echo anchor(site_url('data_pelapor/update/'.$data_pelapor->id_pelapor),'Update'); 
			echo ' | '; 
			echo anchor(site_url('data_pelapor/delete/'.$data_pelapor->id_pelapor),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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