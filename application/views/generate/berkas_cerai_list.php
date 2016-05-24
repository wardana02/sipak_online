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
                <h2 style="margin-top:0px">Berkas_cerai List</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('berkas_cerai/create'), 'Create', 'class="btn btn-primary"'); ?>
	    </div>
        </div>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Id Ac</th>
		    <th>Sk Pengadilan</th>
		    <th>Surat Panitera Pn</th>
		    <th>Kk</th>
		    <th>Ktp Suami</th>
		    <th>Ktp Istri</th>
		    <th>Surat Kuasa</th>
		    <th>Ktp Kuasa</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($berkas_cerai_data as $berkas_cerai)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $berkas_cerai->id_ac ?></td>
		    <td><?php echo $berkas_cerai->sk_pengadilan ?></td>
		    <td><?php echo $berkas_cerai->surat_panitera_pn ?></td>
		    <td><?php echo $berkas_cerai->kk ?></td>
		    <td><?php echo $berkas_cerai->ktp_suami ?></td>
		    <td><?php echo $berkas_cerai->ktp_istri ?></td>
		    <td><?php echo $berkas_cerai->surat_kuasa ?></td>
		    <td><?php echo $berkas_cerai->ktp_kuasa ?></td>
		    <td style="text-align:center" width="200px">
			<?php 
			echo anchor(site_url('berkas_cerai/read/'.$berkas_cerai->id_berkas),'Read'); 
			echo ' | '; 
			echo anchor(site_url('berkas_cerai/update/'.$berkas_cerai->id_berkas),'Update'); 
			echo ' | '; 
			echo anchor(site_url('berkas_cerai/delete/'.$berkas_cerai->id_berkas),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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