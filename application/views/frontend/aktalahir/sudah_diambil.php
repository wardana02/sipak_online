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
                            
                            <h2 style="margin-top:0px">Tanda Bukti Pengambilan Akta</h2>
                        <table class="table" width="300">
                        <tr>
                          <td colspan="2"><p> 
                          <?php echo "
                          Dengan ini menyatakan bahwa saya selaku Pendaftar";?>
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
                          <td colspan="2"> Telah menerima Hasil Jadi dari Akta yang saya daftarkan pada, Dengan memilik Tombol
                          berikut, saya menyatakan ini sebagai bukti tanda terima yang sah. Terimakasih</td>
                        </tr>
                        <tr>
                          <td>Tanggal Pengambilan </td><td><b><?php echo dateindo($tgl_ambil);?></b></td>
                        </tr>
                        <tr>
                          <td>Diserahkan Oleh Petugas </td><td><b><?php echo $oleh;?></b></td>
                        </tr>
                        <tr>
                          <td colspan="2"><a href=<?php echo base_url("home");?> class="btn btn-large btn-danger">Keluar Dari Halaman Ini!</a></td>
                        </tr>
                        </table>
                            
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>

