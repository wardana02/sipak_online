<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Data_jenazah Read</h2>
        <table class="table">
	    <tr><td>Id AM</td><td><?php echo $id_AM; ?></td></tr>
	    <tr><td>Nama</td><td><?php echo $nama; ?></td></tr>
	    <tr><td>Jk</td><td><?php echo $jk; ?></td></tr>
	    <tr><td>Tmp Lahir</td><td><?php echo $tmp_lahir; ?></td></tr>
	    <tr><td>Umur</td><td><?php echo $umur; ?></td></tr>
	    <tr><td>Tgl Lahir</td><td><?php echo $tgl_lahir; ?></td></tr>
	    <tr><td>Agama</td><td><?php echo $agama; ?></td></tr>
	    <tr><td>Pekerjaan</td><td><?php echo $pekerjaan; ?></td></tr>
	    <tr><td>Tgl Kematian</td><td><?php echo $tgl_kematian; ?></td></tr>
	    <tr><td>Menerangkan</td><td><?php echo $menerangkan; ?></td></tr>
	    <tr><td>Anak Ke</td><td><?php echo $anak_ke; ?></td></tr>
	    <tr><td>Sebab Kematian</td><td><?php echo $sebab_kematian; ?></td></tr>
	    <tr><td>Tmp Kematian</td><td><?php echo $tmp_kematian; ?></td></tr>
	    <tr><td>A Alamat</td><td><?php echo $a_alamat; ?></td></tr>
	    <tr><td>A Desa</td><td><?php echo $a_desa; ?></td></tr>
	    <tr><td>A Kecamatan</td><td><?php echo $a_kecamatan; ?></td></tr>
	    <tr><td>A Kabkota</td><td><?php echo $a_kabkota; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('data_jenazah') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>