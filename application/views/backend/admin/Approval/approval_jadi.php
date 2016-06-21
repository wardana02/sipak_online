<!doctype html>
<html>
    <head>
    
    </head>
    <body>
        <h2 style="margin-top:0px">Verifikasi Berkas Akta Jadi</h2>
        <table class="table">
        <tr>
          <td colspan="2">Anda Yakin Bahwa Berkas dan Kelengkapan <?= $head; ?> Atas</td>
        </tr>
        <tr>
          <td><b><?php echo $h1;?></b></td><td><b><?php echo $i1;?></b></td>
        </tr> 
        <tr>
          <td><b><?php echo $h2;?></b></td><td><b><?php echo $i2;?></b></td>
        </tr>
        <tr>
          <td colspan="2">sudah Jadi??</td>
        </tr>
	       </table>
         <a href=<?php echo base_url("approval/akta/jadi/".$id."/".$tname."/".$no_regis)?> class="btn btn-large btn-success">Oke, Berkas Akta Sudah Jadi!!</a>
        </body>
</html>