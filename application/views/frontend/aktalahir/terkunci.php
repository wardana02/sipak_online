 <section id="">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
              <div class="col-lg-1"></div>
                  <div class="col-lg-10">

                      <section class="panel">
                      <center>
                      <?php echo "
                        <h2>Akta Kelahiran Online</h2>";
                      ?>
                      </center>
                      <div class="col-md-12 text-center">
                          <div style="margin-top: 4px"  id="message">
                              <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                          </div>
                      </div><br>
                          
                            <center> </center>
                          <div class="panel-body">
                            
                            <h2 style="margin-top:0px">Maaf Akun Pendaftaran Anda Tidak Boleh Di Edit.</h2>
                        <table class="table" width="300">
                        <tr>
                          <td colspan="2"><p> 
                          <?php echo "
                          <b>Mengapa?</b> <br>Karena data pendaftaran akta anda sedang dalam tahap Verifikasi. 
                          Sehingga anda tidak diizinkan untuk mengedit data pendaftaran anda.";?>
                          </p></td>
                        </tr>
                        <tr>
                          <td>Jenis Pendaftaran </td><td><b><?php echo "$jenis";?></b></td>
                        </tr>
                        <tr>
                          <td>Atas Nama </td><td><b><?php echo "$nama";?></b></td>
                        </tr>
                        <tr>
                          <td>Nomor Pendaftaran </td><td><b><?php echo "$s_no_daftar";?></b></td>
                        </tr>
                        <tr>
                          <td>Tanggal Pendaftaran </td><td><b><?php echo dateindo($tgl_daftar);?></b></td>
                        </tr>
                        <tr>
                          <td colspan="2"> Berikut adalah data riwayat verifikasi berkas anda :</td>
                        </tr>
                        
                        </table>

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
                                  }else{
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
                              <tr>
                          <td colspan="4"><a href=<?php echo base_url("home");?> class="btn btn-large btn-danger">Keluar Dari Halaman Ini!</a></td>
                        </tr>
                        

                              </tbody>
                          </table>


                            
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>

