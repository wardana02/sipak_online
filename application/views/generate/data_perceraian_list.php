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
                <h2 style="margin-top:0px">Data_perceraian List</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('data_perceraianx/create'), 'Create', 'class="btn btn-primary"'); ?>
	    </div>
        </div>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Id Ac</th>
		    <th>Yang Mengajukan</th>
		    <th>No Akta Perkawinan</th>
		    <th>Tgl Akta Perkawinan</th>
		    <th>Tmp Pencatatan</th>
		    <th>No Putusan</th>
		    <th>Tgl Putusan</th>
		    <th>Tkt Peradilan</th>
		    <th>Tmp Peradilan</th>
		    <th>Nama Lembaga</th>
		    <th>Sebab</th>
		    <th>Tgl Melapor</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($data_perceraianx_data as $data_perceraianx)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $data_perceraianx->id_ac ?></td>
		    <td><?php echo $data_perceraianx->yang_mengajukan ?></td>
		    <td><?php echo $data_perceraianx->no_akta_perkawinan ?></td>
		    <td><?php echo $data_perceraianx->tgl_akta_perkawinan ?></td>
		    <td><?php echo $data_perceraianx->tmp_pencatatan ?></td>
		    <td><?php echo $data_perceraianx->no_putusan ?></td>
		    <td><?php echo $data_perceraianx->tgl_putusan ?></td>
		    <td><?php echo $data_perceraianx->tkt_peradilan ?></td>
		    <td><?php echo $data_perceraianx->tmp_peradilan ?></td>
		    <td><?php echo $data_perceraianx->nama_lembaga ?></td>
		    <td><?php echo $data_perceraianx->sebab ?></td>
		    <td><?php echo $data_perceraianx->tgl_melapor ?></td>
		    <td style="text-align:center" width="200px">
			<?php 
			echo anchor(site_url('data_perceraianx/read/'.$data_perceraianx->id_datacerai),'Read'); 
			echo ' | '; 
			echo anchor(site_url('data_perceraianx/update/'.$data_perceraianx->id_datacerai),'Update'); 
			echo ' | '; 
			echo anchor(site_url('data_perceraianx/delete/'.$data_perceraianx->id_datacerai),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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