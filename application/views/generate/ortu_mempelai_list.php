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
                <h2 style="margin-top:0px">Ortu_mempelai List</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('ortu_mempelai/create'), 'Create', 'class="btn btn-primary"'); ?>
	    </div>
        </div>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Id Mempelai</th>
		    <th>Nik</th>
		    <th>Nama</th>
		    <th>Agama</th>
		    <th>Nama Organisasi</th>
		    <th>Tmp Lahir</th>
		    <th>Tgl Lahir</th>
		    <th>A Desa</th>
		    <th>A Kecamatan</th>
		    <th>A Kabkota</th>
		    <th>A Provinsi</th>
		    <th>Pekerjaan</th>
		    <th>Status</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($ortu_mempelai_data as $ortu_mempelai)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $ortu_mempelai->id_mempelai ?></td>
		    <td><?php echo $ortu_mempelai->nik ?></td>
		    <td><?php echo $ortu_mempelai->nama ?></td>
		    <td><?php echo $ortu_mempelai->agama ?></td>
		    <td><?php echo $ortu_mempelai->nama_organisasi ?></td>
		    <td><?php echo $ortu_mempelai->tmp_lahir ?></td>
		    <td><?php echo $ortu_mempelai->tgl_lahir ?></td>
		    <td><?php echo $ortu_mempelai->a_desa ?></td>
		    <td><?php echo $ortu_mempelai->a_kecamatan ?></td>
		    <td><?php echo $ortu_mempelai->a_kabkota ?></td>
		    <td><?php echo $ortu_mempelai->a_provinsi ?></td>
		    <td><?php echo $ortu_mempelai->pekerjaan ?></td>
		    <td><?php echo $ortu_mempelai->status ?></td>
		    <td style="text-align:center" width="200px">
			<?php 
			echo anchor(site_url('ortu_mempelai/read/'.$ortu_mempelai->id_ortu),'Read'); 
			echo ' | '; 
			echo anchor(site_url('ortu_mempelai/update/'.$ortu_mempelai->id_ortu),'Update'); 
			echo ' | '; 
			echo anchor(site_url('ortu_mempelai/delete/'.$ortu_mempelai->id_ortu),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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