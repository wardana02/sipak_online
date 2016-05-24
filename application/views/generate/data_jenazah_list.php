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
                <h2 style="margin-top:0px">Data_jenazah List</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('data_jenazah/create'), 'Create', 'class="btn btn-primary"'); ?>
	    </div>
        </div>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Id AM</th>
		    <th>Nama</th>
		    <th>Jk</th>
		    <th>Tmp Lahir</th>
		    <th>Umur</th>
		    <th>Tgl Lahir</th>
		    <th>Agama</th>
		    <th>Pekerjaan</th>
		    <th>Tgl Kematian</th>
		    <th>Menerangkan</th>
		    <th>Anak Ke</th>
		    <th>Sebab Kematian</th>
		    <th>Tmp Kematian</th>
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
            foreach ($data_jenazah_data as $data_jenazah)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $data_jenazah->id_AM ?></td>
		    <td><?php echo $data_jenazah->nama ?></td>
		    <td><?php echo $data_jenazah->jk ?></td>
		    <td><?php echo $data_jenazah->tmp_lahir ?></td>
		    <td><?php echo $data_jenazah->umur ?></td>
		    <td><?php echo $data_jenazah->tgl_lahir ?></td>
		    <td><?php echo $data_jenazah->agama ?></td>
		    <td><?php echo $data_jenazah->pekerjaan ?></td>
		    <td><?php echo $data_jenazah->tgl_kematian ?></td>
		    <td><?php echo $data_jenazah->menerangkan ?></td>
		    <td><?php echo $data_jenazah->anak_ke ?></td>
		    <td><?php echo $data_jenazah->sebab_kematian ?></td>
		    <td><?php echo $data_jenazah->tmp_kematian ?></td>
		    <td><?php echo $data_jenazah->a_alamat ?></td>
		    <td><?php echo $data_jenazah->a_desa ?></td>
		    <td><?php echo $data_jenazah->a_kecamatan ?></td>
		    <td><?php echo $data_jenazah->a_kabkota ?></td>
		    <td style="text-align:center" width="200px">
			<?php 
			echo anchor(site_url('data_jenazah/read/'.$data_jenazah->id_jenazah),'Read'); 
			echo ' | '; 
			echo anchor(site_url('data_jenazah/update/'.$data_jenazah->id_jenazah),'Update'); 
			echo ' | '; 
			echo anchor(site_url('data_jenazah/delete/'.$data_jenazah->id_jenazah),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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