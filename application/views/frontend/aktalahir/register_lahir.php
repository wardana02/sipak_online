<section id="">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
              <div class="col-lg-1"></div>
                  <div class="col-lg-10">

                      <section class="panel">
                      <center>
                      <br>
                      <img src=<?=base_url("assets/frontend2/img/f_icon/baby.png")?> width="50px">
                        <h2> Akta Kelahiran Online </h2>
                      </center>


                          <div class="panel-body">
                                   <center>
                                    <h3>Anda Sudah Terdaftar?</h3>
                                  <p> Anda telah mendaftarkan jenis pelayanan akta, terdapat revisi data Pendafaran dikarenakan suatu hal? Klik tombol berikut untuk dapat mengedit Data Pendaftaran anda!</p>
                                  
                              
                              <!--UNTUK SUDAH TERDAFTAR MUNCUL POP UP FORM-->
                              <a href="#myModal" data-toggle="modal" class="btn btn-lg btn-primary">
                                  Saya Sudah Terdaftar
                              </a>
                              </center>
                              <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">Data Pendaftar Lama</h4>
                                          </div>
                                          <div class="modal-body">

                                              <form role="form" method="post" action="<?php echo $cek; ?>">
                                                  <div class="form-group">
                                                      <label for="exampleInputEmail1">Nomor Pendaftaran</label>
                                                      <input type="text" class="form-control" name="no_pendaftaran" placeholder="Masukan Nomor Pendaftaran Dengan Huruf Kapital">
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="exampleInputPassword1">Tanggal Daftar</label>
                                                      <input name="tgl_daftar" class="form-control form-control-inline input-medium default-date-picker tooltips"  size="16" type="text"  value="" data-toggle="tooltip " data-original-title="Klik Untuk Pilih Tanggal" />
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="exampleInputEmail1">Kode Unik</label>
                                                      <input type="text" name="kode_unik" class="form-control" id="exampleInputEmail3" placeholder="Kode Unik Pendaftaran Yang Didapat">
                                                  </div>
                             
                                                  <button type="submit" class="btn btn-primary">Cek Sekarang!</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!--END OF UNTUK SUDAH TERDAFTAR MUNCUL POP UP FORM-->

                              <form class="form-horizontal" method="post" action="<?php echo $action; ?>" id="default">
                                  <fieldset title="Daftar Baru" class="step" id="default-step-2" >
                                  <center>
                                    <h3>Atau Akan Mengajukan Pelayanan Akta Baru?</h3>
                                  <p> Apabila akan mengajukan pelayanan akta baru, maka isi pada formulir berikut.
                                  Konfirmasi keberhasilan pendaftaran akan ditandai dengan SMS yang akan dikirimkan
                                  kenomor telepon yang anda isikan, setelah melengkapi data pada tahap selanjutnya. Sehingga pastikan nomor telepon yang anda isikan benar.</p>
                                  </center>
                                  
                                      <legend> </legend>
                                      <div class="form-group">
                                          <label for="varchar" class="col-lg-2 control-label">NIK <?php echo form_error('nik_pengaju') ?></label>
                                          <div class="col-lg-8">
                                              <input type="text" name="nik_pengaju" id="nik_pengaju" onkeypress="return runScript(event)" class="form-control tooltips" data-toggle="tooltip" required maxlength="16" data-original-title="Isi Dengan Benar NIK" >
                                          </div>
                                          <div class="col-lg-2">
                                            <a class="btn btn-info" href="javascript:void(0)" onclick="getPendaftar()">Cek NIK !!</a>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="varchar" class="col-lg-2 control-label">Nama Lengkap</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="nama" id="nama" class="form-control tooltips" data-toggle="tooltip" required="required" readonly="" data-original-title="Nama Akan Otomatis Tampil Sesuai dengan NIK" >
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="varchar" class="col-lg-2 control-label">Nomor KK <?php echo form_error('no_kk') ?></label>
                                          <div class="col-lg-10">
                                              <input type="text" name="no_kk" id="no_kk" maxlength="16" onkeypress="return runScript(event)" class="form-control tooltips" required data-toggle="tooltip" data-original-title="Isi Dengan Benar Nomor KK" >
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label" for="varchar">Nomor HP <?php echo form_error('no_hp') ?></label>
                                          <div class="col-lg-10">
                                              <input type="text" name="no_hp" id="no_hp" onkeypress="return runScript(event)" class="form-control tooltips" required data-toggle="tooltip " placeholder="" data-original-title="Isi Nomor Tanpa Spasi" >
                                          </div>
                                      </div>    
                                      
                                          
                                      <div class="form-group">
                                          <label class="col-lg-12 control-label"><b> Notabene :</b> Usahakan Seorang Pengaju pada Akta Kelahiran ini merupakan
                                          kepala keluarga atau orang yang masih tercantum dalam Satu Kartu Keluarga dengan Data Bayi. Karena akan berkaitan dengan Berkas Kartu
                                          Keluarga yang dilampirkan.</label>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-12 control-label"><b> Notabene :</b> Pastikan Nama Bayi Yang akan didaftarkan akta kelahiran sudah terdapat dalam Kartu Keluarga.</label>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label"><b> Layanan SMS Tracking : </b></label>
                                          <div class="col-lg-10">
                                              <p class="form-control-static">
                                                  dengan format "STATUS_NOMOR PENDAFTARAN" kirim sms ke 0857-25-4858-10 </p>
                                          </div>
                                      </div>
                                  </fieldset>
                                  <input type="submit" class="finish btn btn-primary" value="Daftarkan Sekarang!"/>
                              </form>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>