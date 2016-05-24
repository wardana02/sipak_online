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
                <h2 style="margin-top:0px">Data_saksi List</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('data_saksi/create'), 'Create', 'class="btn btn-primary"'); ?>
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
		    <th>A Alamat</th>
		    <th>A Desa</th>
		    <th>A Kecamatan</th>
		    <th>A Kabkota</th>
		    <th>A Provinsi</th>
		    <th>Pekerjaan</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($data_saksi_data as $data_saksi)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $data_saksi->id_akta ?></td>
		    <td><?php echo $data_saksi->nik ?></td>
		    <td><?php echo $data_saksi->nama ?></td>
		    <td><?php echo $data_saksi->umur ?></td>
		    <td><?php echo $data_saksi->a_alamat ?></td>
		    <td><?php echo $data_saksi->a_desa ?></td>
		    <td><?php echo $data_saksi->a_kecamatan ?></td>
		    <td><?php echo $data_saksi->a_kabkota ?></td>
		    <td><?php echo $data_saksi->a_provinsi ?></td>
		    <td><?php echo $data_saksi->pekerjaan ?></td>
		    <td style="text-align:center" width="200px">
			<?php 
			echo anchor(site_url('data_saksi/read/'.$data_saksi->id_saksi),'Read'); 
			echo ' | '; 
			echo anchor(site_url('data_saksi/update/'.$data_saksi->id_saksi),'Update'); 
			echo ' | '; 
			echo anchor(site_url('data_saksi/delete/'.$data_saksi->id_saksi),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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