<section id="">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
              <div class="col-lg-1"></div>
                  <div class="col-lg-10">

                      <section class="panel">
                      <center>
                      <?php echo "
                        <h2>Akta Kematian Online</h2>
                        <h4>Nomor Pendaftaran : $NODAFTAR</h4>
                        <h4>a.n : $PENGAJU | $TELEPON </h4>";
                      ?>
                      </center>
                      <div class="col-md-12 text-center">
                          <div style="margin-top: 4px"  id="message">
                              <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                          </div>
                      </div><br>
                          
                            <center>
                          <a href="<?php echo "$formulir";?>">
                            <header class="panel-heading btn btn-default">
                                1. Formulir Akta Kematian
                            </header>
                          </a>
                          
                          <a href="<?php echo "$berkas";?>">
                            <header class="panel-heading btn btn-default">
                                2. Formulir Akta Kematian
                            </header>
                          </a>

                            <header class="panel-heading btn btn-primary">
                                3. Oke, Saya Selesai
                            </header>

                          </center>
                          
                          




                          <div class="panel-body">
                              <div class="stepy-tab">
                                  <ul id="form-upload-titles" class="stepy-titles clearfix">
                                      <li id="form-upload-title-6" class="">
                                          <div>Selesai</div>
                                      </li>
                                  </ul>
                              </div>
                              <form class="form-horizontal" method="post" action="#" enctype="multipart/form-data" id="form-upload">
                             
                                  <fieldset title="Selesai" class="step" id="form-upload-step-2" >
                                  <center>
                                  </center>
                                  
                                      <legend> </legend>
                                      
                                      <div class="alert alert-info fade in">
                                       <center><h4>
                                          <strong>Layanan SMS Tracking Dokumen!!</strong> <br><br>
                                          dengan format "STATUS_NOMOR PENDAFTARAN" kirim sms ke 0857-25-4858-10 
                                          </h4></center>
                                      </div>
                                      <center>
                                      <div class="alert alert-warning fade in">
                                       <center><h4>
                                          <strong>Denda Administrasi!!</strong>
                                          Rp <?= $akta->denda ?> ,-
                                          </h4></center>
                                      </div> 

                                      <div class="alert alert-success fade in">
                                       <center><h4>
                                          <strong>Anda Sudah!!</strong>
                                          Mengisi Formulir Pendaftaran Akta Onlines
                                          </h4></center>
                                      </div>
                                      <div class="alert alert-success fade in">
                                       <center><h4>
                                          <strong>Anda Sudah!!</strong>
                                          Mengisi Data Berkas Pendaftaran
                                          </h4></center>
                                      </div> 
                                      <div class="alert alert-success fade in">
                                       <center><h4>
                                          <strong>Sekarang!!</strong>
                                          Tahap Verifikasi Data Pendaftaran
                                          </h4></center>
                                      </div>   
                                      <div class="form-group"></center>
                                          
                                  </fieldset>
                                  <input type="hidden" name="id_al" value="<?php echo $ID_AC?>">
                                  <input type="hidden" name="id_berkas" value="<?php echo $id_berkas?>">

                                  <a href="<?php echo base_url(home);?>" class="btn btn-danger">Keluar</a>
                              </form>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>

  