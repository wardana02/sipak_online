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
                <h2 style="margin-top:0px">Ortu_bayi List</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('ortu_bayi/create'), 'Create', 'class="btn btn-primary"'); ?>
	    </div>
        </div>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Id Bayi</th>
		    <th>Nik</th>
		    <th>Nama</th>
		    <th>Tgl Lahir</th>
		    <th>Umur</th>
		    <th>Pekerjaan</th>
		    <th>A Alamat</th>
		    <th>A Desa</th>
		    <th>A Kecamatan</th>
		    <th>A Kabkota</th>
		    <th>A Provinsi</th>
		    <th>Tgl Pencatatan Kawin</th>
		    <th>Status</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($ortu_bayi_data as $ortu_bayi)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $ortu_bayi->id_bayi ?></td>
		    <td><?php echo $ortu_bayi->nik ?></td>
		    <td><?php echo $ortu_bayi->nama ?></td>
		    <td><?php echo $ortu_bayi->tgl_lahir ?></td>
		    <td><?php echo $ortu_bayi->umur ?></td>
		    <td><?php echo $ortu_bayi->pekerjaan ?></td>
		    <td><?php echo $ortu_bayi->a_alamat ?></td>
		    <td><?php echo $ortu_bayi->a_desa ?></td>
		    <td><?php echo $ortu_bayi->a_kecamatan ?></td>
		    <td><?php echo $ortu_bayi->a_kabkota ?></td>
		    <td><?php echo $ortu_bayi->a_provinsi ?></td>
		    <td><?php echo $ortu_bayi->tgl_pencatatan_kawin ?></td>
		    <td><?php echo $ortu_bayi->status ?></td>
		    <td style="text-align:center" width="200px">
			<?php 
			echo anchor(site_url('ortu_bayi/read/'.$ortu_bayi->id_ortu),'Read'); 
			echo ' | '; 
			echo anchor(site_url('ortu_bayi/update/'.$ortu_bayi->id_ortu),'Update'); 
			echo ' | '; 
			echo anchor(site_url('ortu_bayi/delete/'.$ortu_bayi->id_ortu),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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