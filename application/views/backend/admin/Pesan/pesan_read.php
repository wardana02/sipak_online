<!doctype html>
<html>
    <head>
    
    </head>
    <body>
        <h2 style="margin-top:0px">Baca Data SMS</h2>
        <table class="table">
	    <tr><td>RW</td><td><?php if($by_rw=='revisi'){echo "<span class='label label-warning'><i class='glyphicon glyphicon-wrench'></i> Terdapat Revisi </span>";} elseif($by_rw != NULL){echo "<span class='label label-success'><i class='glyphicon glyphicon-ok'></i> Diverifikasi | ".dateindo($by_rw)."</span>";}else{echo "<span class='label label-danger'><i class='glyphicon glyphicon-remove'></i> Belum Diverifikasi</span>";} ?></td></tr>
	    <tr><td>Keterangan RW</td><td><?php echo $status_rw; ?></td></tr>
	    <tr><td>Kelurahan</td><td><?php if($by_kelurahan=='revisi'){echo "<span class='label label-warning'><i class='glyphicon glyphicon-wrench'></i> Terdapat Revisi </span>";} elseif($by_kelurahan != NULL){echo "<span class='label label-success'><i class='glyphicon glyphicon-ok'></i> Diverifikasi | ".dateindo($by_kelurahan)."</span>";}else{echo "<span class='label label-danger'><i class='glyphicon glyphicon-remove'></i> Belum Diverifikasi</span>";} ?></td></tr>
	    <tr><td>Keterangan Kelurahan</td><td><?php echo $status_kelurahan; ?></td></tr>
	    <tr><td>Dukcapil</td><td><?php if($by_dukcapil=='revisi'){echo "<span class='label label-warning'><i class='glyphicon glyphicon-wrench'></i> Terdapat Revisi  </span>";} elseif($by_dukcapil != NULL){echo "<span class='label label-success'><i class='glyphicon glyphicon-ok'></i> Diverifikasi | ".dateindo($by_dukcapil)."</span>";}else{echo "<span class='label label-danger'><i class='glyphicon glyphicon-remove'></i> Belum Diverifikasi</span>";} ?></td></tr>
	    <tr><td>Keterangan Dukcapil</td><td><?php echo $status_dukcapil; ?></td></tr>
	    <tr><td>Progres Berkas</td><td>
        <?php if ($progres == 'diproses') {
                                      echo "<span class='label label-warning'><i class='glyphicon glyphicon-ok'></i> Sedang Proses</span>";
                                  }elseif ($progres == 'jadi'){
                                      echo "<span class='label label-info'><i class='glyphicon glyphicon-ok'></i> Dokumen Jadi</span>";
                                  }elseif ($progres == 'diambil'){
                                      echo "<span class='label label-success'><i class='glyphicon glyphicon-ok'></i> Sudah Diambil | ".dateindo($tgl)." </span>";
                                  }else{
                                      echo "<span class='label label-danger'>Belum Diverifikasi</span>";
                                  }?>

        </td></tr>
	    </table>
        </body>
</html>