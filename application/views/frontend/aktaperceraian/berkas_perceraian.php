<section id="">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
              <div class="col-lg-1"></div>
                  <div class="col-lg-10">

                      <section class="panel">
                      <center>
                      <?php echo "
                        <h2>Akta Perceraian Online</h2>
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
                            <a href="<?php echo "$berkas";?>">
                          <header class="panel-heading btn btn-default">
                              1. Formulir Akta Perceraian
                          </header></a>
                          
                          <header class="panel-heading btn btn-primary">
                              2. Berkas Akta Perceraian
                          </header>
                          <a href="<?php echo "$selesai";?>" onclick="javasciprt: return confirm('Anda Yakin Telah Melengkapi Data dan Masuk Tahap Verifikasi?? ?')">
                          <header class="panel-heading btn btn-default">
                              3. Oke, Saya Selesai
                          </header></a>

                          </center>
                          
                          




                          <div class="panel-body">
                              <div class="stepy-tab">
                                  <ul id="form-upload-titles" class="stepy-titles clearfix">
                                      <li id="form-upload-title-0" class="current-step">
                                          <div>Daftar Berkas</div>
                                      </li>
                                      <li id="form-upload-title-1" class="">
                                          <div>UnggahBerkas</div>
                                      </li>
                                      <li id="form-upload-title-6" class="">
                                          <div>Selesai</div>
                                      </li>
                                  </ul>
                              </div>
                              <form class="form-horizontal" method="post" action="<?php echo site_url("b2_19/loop/$ID_AC") ?>" enctype="multipart/form-data" id="form-upload">
                                  <fieldset title="Daftar Berkas" class="step" id="form-upload-step-0">
                                      <legend> </legend>
                                      <h3>Unggah berkas guna kelengkapan dokumen akta kelahiran anda.</h3>
                                      <h4>Daftar berkas yang harus anda upload</h4>
                                      <table class="table table-striped table-advance table-hover">
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Nomor</th>
                                  <th><i class="fa fa-bullhorn"></i> Nama Berkas</th>
                                  <th><i class=" fa fa-edit"></i> Keterangaan</th>
                              </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                  <td><a href="#">1</a></td>
                                  <td><b><?php echo $judul['0'];?></b></td>
                                  <td>Berupa Hasil scan Surat Keterangan Kelahiran bayi yang dikeluarkan oleh rumahsakit/ instansi tempat kelahiran bayi</td>
                                  </tr>
                                  <tr>
                                  <td><a href="#">2</a></td>
                                  <td><b><?php echo $judul['1'];?></b></td>
                                  <td>Berupa Hasil scan Surat Keterangan Kelahiran bayi yang dikeluarkan oleh rumahsakit/ instansi tempat kelahiran bayi</td>
                                  </tr>
                                  <tr>
                                  <td><a href="#">3</a></td>
                                  <td><b><?php echo $judul['2'];?></b></td>
                                  <td>Berupa Hasil scan Surat Keterangan Kelahiran bayi yang dikeluarkan oleh rumahsakit/ instansi tempat kelahiran bayi</td>
                                  </tr>
                                  <tr>
                                  <td><a href="#">4</a></td>
                                  <td><b><?php echo $judul['3'];?></b></td>
                                  <td>Berupa Hasil scan Surat Keterangan Kelahiran bayi yang dikeluarkan oleh rumahsakit/ instansi tempat kelahiran bayi</td>
                                  </tr>
                                  <tr>
                                  <td><a href="#">5</a></td>
                                  <td><b><?php echo $judul['4'];?></b></td>
                                  <td>Berupa Hasil scan Surat Keterangan Kelahiran bayi yang dikeluarkan oleh rumahsakit/ instansi tempat kelahiran bayi</td>
                                  </tr>
                                  <tr>
                                  <td><a href="#">6</a></td>
                                  <td><b><?php echo $judul['5'];?></b></td>
                                  <td>Berupa Hasil scan Surat Keterangan Kelahiran bayi yang dikeluarkan oleh rumahsakit/ instansi tempat kelahiran bayi</td>
                                  </tr>
                                  <tr>
                                  <td><a href="#">7</a></td>
                                  <td><b><?php echo $judul['6'];?></b></td>
                                  <td>Berupa Hasil scan Surat Keterangan Kelahiran bayi yang dikeluarkan oleh rumahsakit/ instansi tempat kelahiran bayi</td>
                                  </tr>
                                 
                               
                              </tbody>
                          </table>
                                     
                                      
                                  </fieldset>


                                  <fieldset title="UnggahBerkas" class="step" id="form-upload-step-1" >
                                      <legend> </legend>
                                      <center>
                                        <h4><p>
                                        Lampirkan hasil scan berkas dokumen surat keterangan 
                                        kelahiran yang dikeluarkan oleh tempat/instansi terjadinya kelahiran
                                        </p></h4>
                                      </center><br><br>

                                      <div class="col-lg-12">
                                      <?php $i=0;$n=0;$num=0; foreach ($loop as $key => $value) {
                                          $i++;
                                          if ($i>2) { ?>
                                          <div class="col-lg-4">
                                          <table class="table table-striped table-advance table-hover">
                                          <td>
                                          <center>
                                              <b><?php echo $i-2; echo ". ".$judul[$num];?></b><br>
                                          <?php 
                                            if ($data->$value=='') {
                                              echo "<span class='label label-danger'>BERKAS KOSONG</span>";
                                            }else{echo"<span class='label label-success'>BERKAS TERSIMPAN</span>";}
                                          ?><br>
                                          <div class="fileupload fileupload-new" data-provides="fileupload">
                                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                            <?php if ($data->$value=='') {
                                                                echo "<img src= ".base_url("assets/frontend2/img/u26972115.jpg")." alt=Data Berkas>";
                                                            }else{
                                                                echo "<img src= base_url(assets/uploads/$NODAFTAR/$data->$value); alt=Data Berkas>";
                                                            }
                                                            ?>
                                                                
                                                            </div>
                                                            <div class="fileupload-preview fileupload-exists thumbnail" style="width: 200px; height: 150px; line-height: 20px;"></div>
                                                            <div>
                                                             <span class="btn btn-primary btn-file">
                                                             <span class="fileupload-new"><i class="glyphicon glyphicon-pencil"></i> Pilih Berkas</span>
                                                             <span class="fileupload-exists"><i class="fa fa-undo"></i> Ganti</span>
                                                             <input type="file" name="<?php echo $value;?>" class="default">
                                                             </span>
                                                             <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Batalkan</a>
                                                            </div>
                                                        </div>
                                                      </center>

                                          </td>
                                          </table>
                                          </div>
                                          <?php $n++; $num++; } } ?>
                                          </div>
                                    

                                  </fieldset>
                                
                                  <fieldset title="Selesai" class="step" id="form-upload-step-2" >
                                  <center>
                                    <h3>Pastikan Berkas Yang Anda Unggah Benar, Kemudian Klik Selesai Agar Kelengkapan berkas
                                  persyaratan pengajuan Akta Kelahiran anda diproses.</h3>
                                  </center>
                                  
                                      <legend> </legend>
                                      
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Layanan SMS Tracking Dokumen</label>
                                          <div class="col-lg-10">
                                              <p class="form-control-static">
                                                  denga format "STATUS_NOMOR PENDAFTARAN" kirim sms ke 0857-25-4858-10 </p>
                                          </div><br><br>

                                      </div>
                                      <center>
                                      <h4>Data Berkas Anda Yang Telah Terunggah</h4>
                                      <div class="form-group"></center>
                                          
                                  </fieldset>
                                  <input type="text" name="id_al" value="<?php echo $ID_AC?>">
                                  <input type="text" name="id_berkas" value="<?php echo $id_berkas?>">

                                  <input type="submit" class="finish btn btn-danger" value="Simpan Data Formulir!"/>
                              </form>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>

  