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
                  <h3><?php echo $s_al;?><sup style="font-size: 20px"> data</sup></h3>
                  <p>Pendaftaran Akta Kelahiran</p>
                </div>
                <div class="icon">
                  <i class=""></i>
                </div>
                <a href=<?php echo base_url("approval/index/AL");?> class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php echo $s_am;?><sup style="font-size: 20px"> data</sup></h3>
                  <p>Pendaftaran Akta Kematian</p>
                </div>
                <div class="icon">
                  <i class=""></i>
                </div>
                <a href=<?php echo base_url("approval/index/AM");?> class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo $s_ap;?><sup style="font-size: 20px"> data</sup></h3>
                  <p>Pendaftaran Akta Perkawinan</p>
                </div>
                <div class="icon">
                  <i class=""></i>
                </div>
                <a href=<?php echo base_url("approval/index/AP");?> class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php echo $s_ac;?><sup style="font-size: 20px"> data</sup></h3>
                  <p>Pendaftaran Akta Perceraian</p>
                </div>
                <div class="icon">
                  <i class=""></i>
                </div>
                <a href=<?php echo base_url("approval/index/AC");?> class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
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
              <!-- DIRECT CHAT -->
              <div class="box box-warning direct-chat direct-chat-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">SMS Pengaduan</h3>
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

            <div class="row">
            <div class="col-md-6">
              <!-- TABLE: LATEST ORDERS -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">4 Pengajuan Pelayanan Akta Kelahiran Terbaru</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table no-margin">
                      <thead>
                        <tr>
                          <th>No Pendaftaran</th>
                          <th>Nama Pengaju</th>
                          <th>Tanggal Daftar</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach ($data_al as $key) {

                        echo "
                        <tr>
                          <td><a href='#'' class='read' data-id=$key->id_approval >$key->no_registrasi</a></td>
                          <td>$key->nama</td>
                          <td><span class='label label-success'>$key->tgl_registrasi</span></td>
                        </tr> ";

                      } ?>
                      </tbody>
                    </table>
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->

            <div class="col-md-6">
              <!-- TABLE: LATEST ORDERS -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">4 Pengajuan Akta Kematian</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table no-margin">
                      <thead>
                        <tr>
                          <th>No Pendaftaran</th>
                          <th>Nama Pengaju</th>
                          <th>Tanggal Daftar</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach ($data_am as $key) {

                        echo "
                        <tr>
                          <td><a href='#'' class='read' data-id=$key->id_approval >$key->no_registrasi</a></td>
                          <td>$key->nama</td>
                          <td><span class='label label-success'>$key->tgl_registrasi</span></td>
                        </tr> ";

                      } ?>
                      </tbody>
                    </table>
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div>


          <div class="box col-sm-12">
            <div class="col-sm-12"><!--
            <center>
          
                  <h2>
                    Selamat Datang Di Sistem Informasi Koperasi Mahassiswa UNS<br>
                      <br><br><br>
  
                   Slideshow 1 
                    <li><img  src=<?=base_url('assets/img/15A.png');?> width="550" height="550" alt=""></li>
                

                  <br><br>

                 
                  <br><br>
              </center>-->

            </div>
        </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->