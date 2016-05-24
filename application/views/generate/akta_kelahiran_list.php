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
                <h2 style="margin-top:0px">Akta_kelahiran List</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('akta_kelahiran/create'), 'Create', 'class="btn btn-primary"'); ?>
	    </div>
        </div>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Nik Pengaju</th>
		    <th>No Kk</th>
		    <th>No Hp</th>
		    <th>No Registrasi</th>
		    <th>Tgl Registrasi</th>
		    <th>Kode Unik</th>
		    <th>Denda</th>
		    <th>Ip Network</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($akta_kelahiran_data as $akta_kelahiran)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $akta_kelahiran->nik_pengaju ?></td>
		    <td><?php echo $akta_kelahiran->no_kk ?></td>
		    <td><?php echo $akta_kelahiran->no_hp ?></td>
		    <td><?php echo $akta_kelahiran->no_registrasi ?></td>
		    <td><?php echo $akta_kelahiran->tgl_registrasi ?></td>
		    <td><?php echo $akta_kelahiran->kode_unik ?></td>
		    <td><?php echo $akta_kelahiran->denda ?></td>
		    <td><?php echo $akta_kelahiran->ip_network ?></td>
		    <td style="text-align:center" width="200px">
			<?php 
			echo anchor(site_url('akta_kelahiran/read/'.$akta_kelahiran->id_al),'Read'); 
			echo ' | '; 
			echo anchor(site_url('akta_kelahiran/update/'.$akta_kelahiran->id_al),'Update'); 
			echo ' | '; 
			echo anchor(site_url('akta_kelahiran/delete/'.$akta_kelahiran->id_al),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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