     <body class="body-404">

        <div class="container">
          <section class="error-wrapper">
          <div class="col-sm-3">
            <img class="img-responsive" src=<?=base_url("assets/frontend2/img/icon/search_icon.png")?> width="240">
          </div>
          <div class="col-sm-9">
            
              
              <h2>Tracking & Monitoring</h2>
              <h3>Monitoring Berkas Pengajuan Online</h3>
              <p class="page-404">Silahkan Masukan Nomor Pendaftaran dan Tanggal Pendaftaran Berkas Anda.</p>
            
              <div class="panel-body">
                <form role="form" class="form-horizontal" method="post" action="<?php echo $cek; ?>">
                                    <div class="form-group">
                                          <label class="col-lg-2">Nomor Pendaftaran</label>
                                          <div class="col-lg-6">
                                               <input type="text" class="form-control" name="no_pendaftaran" value="PF02170316001" placeholder="Masukan Nomor Pendaftaran Dengan Huruf Kapital">
                                          </div>
                                      </div>     

                                      <div class="form-group">
                                          <label class="col-lg-2">Tanggal Daftar</label>
                                          <div class="col-lg-6">
                                               <input name="tgl_daftar" class="form-control form-control-inline input-medium default-date-picker tooltips"  size="16" type="text"  value="" data-toggle="tooltip " data-original-title="Klik Untuk Pilih Tanggal" />
                                           </div>
                                       </div>
                                                  
                                      <div class="form-group">
                                           <label class="col-lg-2">Kode Unik</label>
                                            <div class="col-lg-6">
                                                <input type="text" name="kode_unik" class="form-control" value="VCuOhf" id="exampleInputEmail3" placeholder="Kode Unik Pendaftaran Yang Didapat">
                                                <input type="hidden" name="sub" value="sub">
                                             </div>
                                      </div>   


                                  <div class="form-group">
                                      <div class="col-lg-offset-3 col-lg-9">
                                          <button type="submit" class="btn btn-primary btn-shadow">Cari Sekarang !</button>
                                          <button type="reset" class="btn btn-danger btn-shadow">Reset</button>
                                          
                                      </div>
                                  </div>
                              </form>
              </div>


            </div>
          </section>

          
            <!--recent work end-->
        </div>

         <div class="row">
                  <div class="col-lg-2"></div>
                  <div class="col-lg-8">
                      <section class="panel">
                      <?php if((isset($hasil)) && $SUBMITED){ ?>
                          <header class="panel-heading">
                              <h2>Hasil Monitoring & Tracking Berkas</h2>
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Nomor</th>
                                  <th><i class="fa fa-bullhorn"></i> Keterangan</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Tanggal Approve</th>
                                  <th><i class=" fa fa-edit"></i> Status</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody> 
                              <tr>
                                  <td><a href="#">1</a></td>
                                  <td class="hidden-phone">Pendaftaran Selesai</td>
                                  <td><?php echo dateindo($hasil->selesai);?></td>
                                  <td><span class="label label-success label-mini">Diverifikasi</span></td>
                                
                              </tr>
                              <tr>
                                  <td><a href="#">2</a></td>
                                  <td class="hidden-phone">Disetujui Ketua RW</td>
                                  <td><?php echo dateindo($hasil->by_rw);?></td>
                                  <?php if ($hasil->by_rw == NULL) {
                                      echo "<td><span class='label label-danger label-mini'>Belum Diverifikasi</span></td>";
                                  }else{
                                      echo "<td><span class='label label-success label-mini'>Diverifikasi</span></td>";
                                    }?>
                                  
                                
                              </tr>
                              <tr>
                                  <td>
                                      <a href="#">3</a>
                                  </td>
                                  <td class="hidden-phone">Disetujui Kelurahan</td>
                                  <td><?php echo dateindo($hasil->by_kelurahan);?></td>
                                  <?php if ($hasil->by_kelurahan == NULL) {
                                      echo "<td><span class='label label-danger label-mini'>Belum Diverifikasi</span></td>";
                                  }elseif($SUBMITED==TRUE){
                                      echo "<td><span class='label label-success label-mini'>Diverifikasi</span></td>";
                                    }?>
                                  
                                
                              </tr>
                              <tr>
                                  <td>
                                      <a href="#">4</a>
                                  </td>
                                  <td class="hidden-phone">Disetujui Disdukcapil</td>
                                  <td><?php echo dateindo($hasil->by_dukcapil);?></td>
                                  <?php if ($hasil->by_dukcapil == NULL) {
                                      echo "<td><span class='label label-danger label-mini'>Belum Diverifikasi</span></td>";
                                  }else{
                                      echo "<td><span class='label label-success label-mini'>Diverifikasi</span></td>";
                                    }?>
                                  
                                
                              </tr>

                              <tr>
                                  <td>
                                      <a href="#">5</a>
                                  </td>
                                  <td class="hidden-phone">Status Pengerjaan Dokumen</td>
                                  <td><?php echo dateindo($hasil->tgl_ambil);?></td>
                                  <?php if ($hasil->progres == 'diproses') {
                                      echo "<td><span class='label label-warning label-mini'>Sedang Proses</span></td>";
                                  }elseif ($hasil->progres == 'jadi'){
                                      echo "<td><span class='label label-primary label-mini'>Dokumen Jadi</span></td>";
                                  }elseif ($hasil->progres == 'diambil'){
                                      echo "<td><span class='label label-success label-mini'>Sudah Diambil</span></td>";
                                  }else{
                                      echo "<td><span class='label label-danger'>Belum Diverifikasi</span></td>";
                                  }?>
                                  
                                
                              </tr>
                        

                              </tbody>
                          </table>
                          <?php } elseif($SUBMITED==TRUE){

                            echo "
                              <div class='alert alert-danger fade in'>
                              <center><h4>
                                 <strong>Maaf | </strong> 
                                   Data Tidak Ditemukan
                                   </h4></center>
                            </div>


                            ";
                            } ?>
                      </section>
                  </div>
              </div>
       
    </body>

     
     <!--container end-->
