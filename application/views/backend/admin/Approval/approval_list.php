 <script language=javascript>
    setTimeout("location.href='<?= $re ?>'", 60000);
  </script>

 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
                <h2 style="margin-top:0px"><?php echo $head;?></h2>
            </div>
            <div class="col-md-12 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div><br>
            <div class="col-md-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"> 
                     </h3>
                </div><!-- /.box-header -->

                <div class="box-body">
                  <div class="">
                  
                <!--FRO GENERATE -->
             

                  <div class="row" data-find="_4">
            <div class="col-md-12">
              <!-- Custom Tabs (Pulled to the right) -->
              <div class="nav-tabs-custom" data-find="_11">
                <ul class="nav nav-tabs pull-right">
                  <li class="active"><a href="#tab_1-1" data-toggle="tab"> Tahap Verifikasi</a></li>
                  <li><a href="#tab_2-2" data-toggle="tab"> Tahap Pengisian Formulir</a></li>
                  <li class="pull-left header"><i class="fa fa-th"></i> Data Pendaftaran Akta Online</li>
                </ul>
                <div class="tab-content" data-find="_10">
                  <div class="tab-pane active" id="tab_1-1">
                  <!--TAB PERTAMA-->
                    <table class="table table-bordered table-striped" id="example1">
                        <thead style="background: #3c8dbc">
                            <tr style="color: #ffffff">
                              <th width="50px">No</th>
                              <th>No Pendaftaran</th>
                              <th>Tgl Pendaftaran</th>
                              <th><?php echo $nama2;?></th>
                              <th><?php echo $nama;?></th>
                              <th>R</th>
                              <th>RW</th>
                              <th>Kelurahan</th>
                              <th>Dukcapil</th> 
                              <th>Progres</th>
                              <th>Action</th>
                          </tr>
                        </thead>
        <tbody>
            <?php
            $start = 0;
            foreach ($approval_data as $approval)
            {
                ?>
                <tr>
            <td><?php echo ++$start ?></td>
            <td><?php echo $approval->no_registrasi ?></td>
            <td><?php echo dateindo($approval->tgl_registrasi) ?></td>
            <td><?php echo $approval->ibu ?></td>
            <td><?php echo $approval->nm ?></td>
            <td style="text-align:center"><?php if($approval->perbaikan == '1'){echo "<span class='label label-warning'><i class='glyphicon glyphicon-cog'></i></span>";}else {echo "<span class='label label-success'><i class='glyphicon glyphicon-thumbs-up'></i></span>";} ?></td>
            <td style="text-align:center"><?php if($approval->by_rw == 'revisi'){echo "<span class='label label-warning'><i class='glyphicon glyphicon-wrench'></i></span>";}elseif($approval->by_rw!=''){echo "<span class='label label-success'><i class='glyphicon glyphicon-ok'></i></span>";}else {echo "<span class='label label-danger'><i class='glyphicon glyphicon-remove'></i></span>";} ?></td>
            <td style="text-align:center"><?php if($approval->by_kelurahan == 'revisi'){echo "<span class='label label-warning'><i class='glyphicon glyphicon-wrench'></i></span>";}elseif($approval->by_kelurahan!=''){echo "<span class='label label-success'><i class='glyphicon glyphicon-ok'></i></span>";}else {echo "<span class='label label-danger'><i class='glyphicon glyphicon-remove'></i></span>";} ?></td>
            <td style="text-align:center"><?php if($approval->by_dukcapil == 'revisi'){echo "<span class='label label-warning'><i class='glyphicon glyphicon-wrench'></i></span>";}elseif($approval->by_dukcapil!=''){echo "<span class='label label-success'><i class='glyphicon glyphicon-ok'></i></span>";}else {echo "<span class='label label-danger'><i class='glyphicon glyphicon-remove'></i></span>";} ?></td>
            <td style="text-align:center">
            <?php if ($approval->progres == 'diproses') {
                                      echo "<span class='label label-warning '>Sedang Proses</span>";
                                  }elseif ($approval->progres == 'jadi'){
                                      echo "<span class='label label-info '>Dokumen Jadi</span>";
                                  }elseif ($approval->progres == 'diambil'){
                                      echo "<span class='label label-success '>Sudah Diambil</span>";
                                  }else{
                                      echo "<span class='label label-danger'>Belum Diverifikasi</span>";
                                  }?>
            </td>
            <td style="text-align:left" width="100px">
                        <div class="btn-group"> 
                                <button type="button" class="btn btn.bg-navy dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                  <span class="caret"></span>
                                  <span class="sr-only">Toggle Dropdown</span>Aksi
                                </button>

                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="#" class="read" data-id="<?php echo $approval->id_approval; ?>"> Lihat Status</a></li>
                                  <li><a href=<?php echo site_url('approval/verifikasi/'.$approval->id_akta.'/'.$approval->no_registrasi); ?>>Verifikasi</a></li>
                                  <?php if($status=="DUKCAPIL"){?>
                                  <li><a href=<?php echo site_url('cetak/form/'.$approval->id_akta); ?> target="_blank" onclick="javasciprt: return confirm('Anda Yakin Mencetak Formulir ?')">Cetak Formulir</a></li>
                                  <?php } if($status=="KELURAHAN"){?>
                                  <li><a href=<?php echo site_url('cetak/registrasi/'.$approval->id_akta); ?> target="_blank" onclick="javasciprt: return confirm('Anda Yakin Mencetak Bukti Registrasi? ?')">Cetak Bukti</a></li>
                                  <?php }elseif($status=="DUKCAPIL"){?>
                                  <li class="divider"></li>
                                  <li><a class="create" href="#" data-id="<?php echo "$approval->nm,$approval->ibu,$approval->id_akta,$tname,$approval->no_regis" ?>" >Akta Jadi</a></li>
                                  <li><a class="pengambilan" href="#" data-id="<?php echo "$approval->nm,$approval->ibu,$approval->id_akta" ?>" >Pengambilan Akta</a></li>
                                  <?php }?>
                                
                                </ul>
                              </div> 
                        </td>
            </tr>
                <?php
            }
            ?>
            </tbody>
        </table>

                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2-2">
                  <!--TAB KEDUA-->
                  <table class="table table-bordered table-striped" id="example2">
                        <thead style="background: #3c8dbc">
                            <tr style="color: #ffffff">
                              <th width="50px">No</th>
                              <th>No Pendaftaran</th>
                              <th>Tgl Pendaftaran</th>
                              <th>Nama Pendaftar</th>
                              <th>NIK</th>
                              <th>Tenggang Waktu</th>
                              <th>Action</th>
                          </tr>
                        </thead>
        <tbody>
            <?php
            $start = 0;
            foreach ($pendaftaran_data as $approval)
            {
              $date1=date("Y-m-d");
              $date2=$approval->tgl_registrasi;
              $datetime1 = new DateTime($date1);
              $datetime2 = new DateTime($date2);
              $difference = $datetime1->diff($datetime2);
                ?>
                <tr>
            <td><?php echo ++$start ?></td>
            <td><?php echo $approval->no_registrasi ?></td>
            <td><?php echo dateindo($approval->tgl_registrasi) ?></td>
            <td><?php echo $approval->nama ?></td>
            <td><?php echo $approval->nik_pengaju ?></td>
            <td><?php echo 7-$difference->days." Hari" ?></td>
            <td style="text-align:left" width="100px">
                        <div class="btn-group"> 
                                <button type="button" class="btn btn.bg-navy dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                  <span class="caret"></span>
                                  <span class="sr-only">Toggle Dropdown</span>Aksi
                                </button>

                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="#" class="create2" data-id="<?php echo "$approval->nama,$approval->no_hp,$approval->no_registrasi,$re"; ?>"> Kirim SMS</a></li>

                                </ul>
                              </div> 
                        </td>
            </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
                   
                  </div><!--TAB KEDUA-->
                  <!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div><!-- nav-tabs-custom -->
            </div><!-- /.col -->
          </div>
        

                <!--FRO GENERATE -->

                  </div><!-- /.mail-box-messages -->
                </div><!-- /.box-body -->
              </div><!-- /. box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->