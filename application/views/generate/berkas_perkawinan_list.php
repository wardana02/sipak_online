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
                <h2 style="margin-top:0px">Berkas_perkawinan List</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('berkas_perkawinan/create'), 'Create', 'class="btn btn-primary"'); ?>
	    </div>
        </div>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Id Ap</th>
		    <th>Sk Pernikahan</th>
		    <th>Kk Suami</th>
		    <th>Ktp Suami</th>
		    <th>Al Suami</th>
		    <th>Kk Istri</th>
		    <th>Ktp Istri</th>
		    <th>Al Istri</th>
		    <th>Sk Kelurahan</th>
		    <th>Am Ayah Suami</th>
		    <th>Am Ibu Suami</th>
		    <th>Am Ayah Istri</th>
		    <th>Am Ibu Istri</th>
		    <th>Ktp Saksi1</th>
		    <th>Ktp Saksi2</th>
		    <th>Pasfoto</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($berkas_perkawinan_data as $berkas_perkawinan)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $berkas_perkawinan->id_ap ?></td>
		    <td><?php echo $berkas_perkawinan->sk_pernikahan ?></td>
		    <td><?php echo $berkas_perkawinan->kk_suami ?></td>
		    <td><?php echo $berkas_perkawinan->ktp_suami ?></td>
		    <td><?php echo $berkas_perkawinan->al_suami ?></td>
		    <td><?php echo $berkas_perkawinan->kk_istri ?></td>
		    <td><?php echo $berkas_perkawinan->ktp_istri ?></td>
		    <td><?php echo $berkas_perkawinan->al_istri ?></td>
		    <td><?php echo $berkas_perkawinan->sk_kelurahan ?></td>
		    <td><?php echo $berkas_perkawinan->am_ayah_suami ?></td>
		    <td><?php echo $berkas_perkawinan->am_ibu_suami ?></td>
		    <td><?php echo $berkas_perkawinan->am_ayah_istri ?></td>
		    <td><?php echo $berkas_perkawinan->am_ibu_istri ?></td>
		    <td><?php echo $berkas_perkawinan->ktp_saksi1 ?></td>
		    <td><?php echo $berkas_perkawinan->ktp_saksi2 ?></td>
		    <td><?php echo $berkas_perkawinan->pasfoto ?></td>
		    <td style="text-align:center" width="200px">
			<?php 
			echo anchor(site_url('berkas_perkawinan/read/'.$berkas_perkawinan->id_berkas),'Read'); 
			echo ' | '; 
			echo anchor(site_url('berkas_perkawinan/update/'.$berkas_perkawinan->id_berkas),'Update'); 
			echo ' | '; 
			echo anchor(site_url('berkas_perkawinan/delete/'.$berkas_perkawinan->id_berkas),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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