<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Dps List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>NIK</th>
		<th>Nama Lengkap</th>
		<th>Tmp Lahir</th>
		<th>Tgl Lahir</th>
		<th>Jk</th>
		<th>Gol Darah</th>
		<th>Agama</th>
		<th>Status Perkawinan</th>
		<th>Ps Alamat</th>
		<th>Ps Rt</th>
		<th>Ps Rw</th>
		<th>Ps Kelurahan</th>
		<th>Ps Kecamatan</th>
		<th>Pekerjaan</th>
		
            </tr><?php
            foreach ($dpse_data as $dpse)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $dpse->NIK ?></td>
		      <td><?php echo $dpse->nama_lengkap ?></td>
		      <td><?php echo $dpse->tmp_lahir ?></td>
		      <td><?php echo $dpse->tgl_lahir ?></td>
		      <td><?php echo $dpse->jk ?></td>
		      <td><?php echo $dpse->gol_darah ?></td>
		      <td><?php echo $dpse->agama ?></td>
		      <td><?php echo $dpse->status_perkawinan ?></td>
		      <td><?php echo $dpse->ps_alamat ?></td>
		      <td><?php echo $dpse->ps_rt ?></td>
		      <td><?php echo $dpse->ps_rw ?></td>
		      <td><?php echo $dpse->ps_kelurahan ?></td>
		      <td><?php echo $dpse->ps_kecamatan ?></td>
		      <td><?php echo $dpse->pekerjaan ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>