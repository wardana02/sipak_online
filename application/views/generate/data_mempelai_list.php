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
                <h2 style="margin-top:0px">Data_mempelai List</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('data_mempelai/create'), 'Create', 'class="btn btn-primary"'); ?>
	    </div>
        </div>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Id Ap</th>
		    <th>No Kk</th>
		    <th>Nik</th>
		    <th>Nama</th>
		    <th>Tmp Lahir</th>
		    <th>Tgl Lahir</th>
		    <th>Pendidikan Terakhir</th>
		    <th>Agama</th>
		    <th>Nm Organisasi</th>
		    <th>Pekerjaan</th>
		    <th>Anak Ke</th>
		    <th>Status Sebelum Nikah</th>
		    <th>Perkawinan Ke</th>
		    <th>Istri Ke</th>
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
            foreach ($data_mempelai_data as $data_mempelai)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $data_mempelai->id_ap ?></td>
		    <td><?php echo $data_mempelai->no_kk ?></td>
		    <td><?php echo $data_mempelai->nik ?></td>
		    <td><?php echo $data_mempelai->nama ?></td>
		    <td><?php echo $data_mempelai->tmp_lahir ?></td>
		    <td><?php echo $data_mempelai->tgl_lahir ?></td>
		    <td><?php echo $data_mempelai->pendidikan_terakhir ?></td>
		    <td><?php echo $data_mempelai->agama ?></td>
		    <td><?php echo $data_mempelai->nm_organisasi ?></td>
		    <td><?php echo $data_mempelai->pekerjaan ?></td>
		    <td><?php echo $data_mempelai->anak_ke ?></td>
		    <td><?php echo $data_mempelai->status_sebelum_nikah ?></td>
		    <td><?php echo $data_mempelai->perkawinan_ke ?></td>
		    <td><?php echo $data_mempelai->istri_ke ?></td>
		    <td><?php echo $data_mempelai->status_mempelai ?></td>
		    <td><?php echo $data_mempelai->a_alamat ?></td>
		    <td><?php echo $data_mempelai->a_desa ?></td>
		    <td><?php echo $data_mempelai->a_kecamatan ?></td>
		    <td><?php echo $data_mempelai->a_kabkota ?></td>
		    <td style="text-align:center" width="200px">
			<?php 
			echo anchor(site_url('data_mempelai/read/'.$data_mempelai->id_mempelai),'Read'); 
			echo ' | '; 
			echo anchor(site_url('data_mempelai/update/'.$data_mempelai->id_mempelai),'Update'); 
			echo ' | '; 
			echo anchor(site_url('data_mempelai/delete/'.$data_mempelai->id_mempelai),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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