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
                <h2 style="margin-top:0px">Berkas_lahir List</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('berkas_lahir/create'), 'Create', 'class="btn btn-primary"'); ?>
	    </div>
        </div>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Id AL</th>
		    <th>Sk Lahir</th>
		    <th>Akta Nikah Ortu</th>
		    <th>Kk Baru</th>
		    <th>Ktp Ortu1</th>
		    <th>Ktp Ortu2</th>
		    <th>Ktp Saksi1</th>
		    <th>Ktp Saksi2</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($berkas_lahir_data as $berkas_lahir)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $berkas_lahir->id_AL ?></td>
		    <td><?php echo $berkas_lahir->sk_lahir ?></td>
		    <td><?php echo $berkas_lahir->akta_nikah_ortu ?></td>
		    <td><?php echo $berkas_lahir->kk_baru ?></td>
		    <td><?php echo $berkas_lahir->ktp_ortu1 ?></td>
		    <td><?php echo $berkas_lahir->ktp_ortu2 ?></td>
		    <td><?php echo $berkas_lahir->ktp_saksi1 ?></td>
		    <td><?php echo $berkas_lahir->ktp_saksi2 ?></td>
		    <td style="text-align:center" width="200px">
			<?php 
			echo anchor(site_url('berkas_lahir/read/'.$berkas_lahir->id_berkas),'Read'); 
			echo ' | '; 
			echo anchor(site_url('berkas_lahir/update/'.$berkas_lahir->id_berkas),'Update'); 
			echo ' | '; 
			echo anchor(site_url('berkas_lahir/delete/'.$berkas_lahir->id_berkas),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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