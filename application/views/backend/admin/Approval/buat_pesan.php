<!doctype html>
<html>
    <head>
    
    </head>
    <body>
        <h2 style="margin-top:0px"><?= $regis?> </h2>
        <table class="table">
        <tr>
          <td colspan="2">Kirim pesan peringatan untuk melengkapi formulir pendaftaran </td>
        </tr>
        <tr>
          <td><b>Nama Pendaftar </b></td><td><b><?php echo $nama;?></b></td>
        </tr> 
        <tr>
          <td><b>Nomor Tujuan </b></td><td><b><?php echo $nomor;?></b></td>
        </tr>
        <tr>
          <td><b>Waktu Tenggang </b></td><td><b><?php echo $nomor;?></b></td>
        </tr>
	       </table>
         <a href=<?php echo base_url("approval/do_pesan/".$nomor."/".$regis."/".$re)?> class="btn btn-large btn-success">Ya, Kirim Pesan Sekarang!!</a>
        </body>
</html>