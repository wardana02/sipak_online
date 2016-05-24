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
                <h2 style="margin-top:0px">Data_bercerai List</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('data_bercerai/create'), 'Create', 'class="btn btn-primary"'); ?>
	    </div>
        </div>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Id Ac</th>
		    <th>No Kk</th>
		    <th>Nik</th>
		    <th>Nama</th>
		    <th>Tmp Lahir</th>
		    <th>Tgl Lahir</th>
		    <th>Pendidikan Terakhir</th>
		    <th>Agama</th>
		    <th>Nm Organisasi</th>
		    <th>Pekerjaan</th>
		    <th>Perceraian Ke</th>
		    <th>Status Mempelai</th>
		    <th>A Alamat</th>
		    <th>A Desa</th>
		    <th>A Kecamatan</th>
		    <th>A Kabkota</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($data_bercerai_data as $data_bercerai)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $data_bercerai->id_ac ?></td>
		    <td><?php echo $data_bercerai->no_kk ?></td>
		    <td><?php echo $data_bercerai->nik ?></td>
		    <td><?php echo $data_bercerai->nama ?></td>
		    <td><?php echo $data_bercerai->tmp_lahir ?></td>
		    <td><?php echo $data_bercerai->tgl_lahir ?></td>
		    <td><?php echo $data_bercerai->pendidikan_terakhir ?></td>
		    <td><?php echo $data_bercerai->agama ?></td>
		    <td><?php echo $data_bercerai->nm_organisasi ?></td>
		    <td><?php echo $data_bercerai->pekerjaan ?></td>
		    <td><?php echo $data_bercerai->perceraian_ke ?></td>
		    <td><?php echo $data_bercerai->status_mempelai ?></td>
		    <td><?php echo $data_bercerai->a_alamat ?></td>
		    <td><?php echo $data_bercerai->a_desa ?></td>
		    <td><?php echo $data_bercerai->a_kecamatan ?></td>
		    <td><?php echo $data_bercerai->a_kabkota ?></td>
		    <td style="text-align:center" width="200px">
			<?php 
			echo anchor(site_url('data_bercerai/read/'.$data_bercerai->id_bercerai),'Read'); 
			echo ' | '; 
			echo anchor(site_url('data_bercerai/update/'.$data_bercerai->id_bercerai),'Update'); 
			echo ' | '; 
			echo anchor(site_url('data_bercerai/delete/'.$data_bercerai->id_bercerai),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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