      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Sistem Informasi Pelayanan Akta Online Kota Surakarta
            <small> </small>
          </h1>
        
        </section>

        <!-- Main content -->
        <section class="content">

          <!--ISINE -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $al;?><sup style="font-size: 20px"> data</sup></h3>
                  <p>Pendaftaran Akta Kelahiran</p>
                </div>
                <div class="icon">
                  <i class=""></i>
                </div>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php echo $am;?><sup style="font-size: 20px"> data</sup></h3>
                  <p>Pendaftaran Akta Kematian</p>
                </div>
                <div class="icon">
                  <i class=""></i>
                </div>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo $ap;?><sup style="font-size: 20px"> data</sup></h3>
                  <p>Pendaftaran Akta Perkawinan</p>
                </div>
                <div class="icon">
                  <i class=""></i>
                </div>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-purple">
                <div class="inner">
                  <h3><?php echo $ac;?><sup style="font-size: 20px"> data</sup></h3>
                  <p>Pendaftaran Akta Perceraian</p>
                </div>
                <div class="icon">
                  <i class=""></i>
                </div>
                </div>
            </div><!-- ./col -->
          </div>

          <div class="row">
          <div class="col-lg-12 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-blue">
                <div class="inner">
                  <h3><?php echo $data_hapus;?><sup style="font-size: 20px"> buah</sup></h3>
                  <p>Data Pendaftaran Lebih Dari 7 Hari</p>
                </div>
                <div class="icon">
                  <i class=""></i>
                </div>
                <a href=<?php echo base_url("data/hapus_data");?> class="small-box-footer">Bersihkan Data Pendaftaran <i class="fa fa-arrow-circle-right"></i></a>
              
                </div>
            </div><!-- ./col -->
          </div>


          <div class="row">
            <div class="col-md-8">
              <!-- TABLE: LATEST ORDERS -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Grafik Perbandingan Pengajuan Akta</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div id="container" style="height: 400px"></div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->

            <div class="col-md-4">
              <!-- TABLE: LATEST ORDERS -->
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title"> Chart Perbandingan Penduduk</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div id="g5" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            </div>

            

            <div class="row">
            <div class="col-md-6">
              <!-- DIRECT CHAT -->
              <div class="box box-warning direct-chat direct-chat-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">10 SMS Pengaduan</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <!-- Conversations are loaded here -->
                  <div class="direct-chat-messages">
                  <?php foreach ($pesan as $key) { ?>
                    <!-- Message to the right -->
                    <div class="direct-chat-msg right">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-right"> Warga</span>
                        <span class="direct-chat-timestamp pull-left"><?php echo "$key->ReceivingDateTime";?></span>
                      </div><!-- /.direct-chat-info -->
                      <img class="direct-chat-img" src=<?= base_url("assets/img/logo-jateng.jpg")?> alt="message user image"><!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                        <?php echo "$key->TextDecoded";?>
                      </div><!-- /.direct-chat-text -->
                    </div><!-- /.direct-chat-msg -->
                    <?php } ?>
                </div><!-- /.box-body -->
              </div><!--/.direct-chat -->
            </div>
            </div>
            

            <div class="col-md-6">
              <!-- TABLE: LATEST ORDERS -->
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">4 Terakhir Login</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Nama Pengguna</th>
                          <th>Jabatan</th>
                          <th>Last Log</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach ($user as $key) {

                        echo "
                        <tr>
                          <td><a href='#''>$key->nama_user</a></td>
                          <td>$key->jabatan</td>
                          <td><span class='label label-success'>$key->last_log</span></td>
                        </tr> ";

                      } ?>
                      </tbody>
                    </table>
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->