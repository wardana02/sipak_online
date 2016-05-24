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
                <h2 style="margin-top:0px">Approval List</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('approval/create'), 'Create', 'class="btn btn-primary"'); ?>
	    </div>
        </div>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Id Akta</th>
		    <th>By Rw</th>
		    <th>Status Rw</th>
		    <th>By Kelurahan</th>
		    <th>Status Kelurahan</th>
		    <th>By Dukcapil</th>
		    <th>Status Dukcapil</th>
		    <th>Progres</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($approval_data as $approval)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $approval->id_akta ?></td>
		    <td><?php echo $approval->by_rw ?></td>
		    <td><?php echo $approval->status_rw ?></td>
		    <td><?php echo $approval->by_kelurahan ?></td>
		    <td><?php echo $approval->status_kelurahan ?></td>
		    <td><?php echo $approval->by_dukcapil ?></td>
		    <td><?php echo $approval->status_dukcapil ?></td>
		    <td><?php echo $approval->progres ?></td>
		    <td style="text-align:center" width="200px">
			<?php 
			echo anchor(site_url('approval/read/'.$approval->id_approval),'Read'); 
			echo ' | '; 
			echo anchor(site_url('approval/update/'.$approval->id_approval),'Update'); 
			echo ' | '; 
			echo anchor(site_url('approval/delete/'.$approval->id_approval),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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