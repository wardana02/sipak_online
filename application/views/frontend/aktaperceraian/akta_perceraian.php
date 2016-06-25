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
                      <div class="col-sm-12">
                          <div class="col-sm-12 alert alert-warning fade in">
                             <center><h4>
                          <?php
                            if ($app->by_rw=='revisi') {
                              echo "<strong>Harap Revisi!</strong> ".$app->status_rw." Kemudian Pilih Tombol Oke, Sudah Selesai";
                            }elseif ($app->by_kelurahan=='revisi') {
                              echo "<strong>Harap Revisi!</strong> ".$app->status_kelurahan;
                            }elseif ($app->by_dukcapil=='revisi') {
                              echo "<strong>Harap Revisi!</strong> ".$app->status_dukcapil;
                            } else{
                              echo "<i class='glyphicon glyphicon-tag'></i><strong> Isi Formulir</strong> ";
                            }
                          ?>
                          </h4></center>
                          </div>
                          </div>
                          <header class="panel-heading">
                              Formulir Akta Perceraian Online
                          </header>

                          <center>
                            <header class="panel-heading btn btn-primary">
                                1. Formulir Akta Perceraian
                            </header>
                            <a href="<?php echo site_url('b2_19/berkas/'.$ID_AC) ?>">
                            <header class="panel-heading btn btn-default">
                                2. Berkas Akta Perceraian
                            </header></a>
                            <a href="<?php echo "$selesai";?>" onclick="javasciprt: return confirm('Anda Yakin Telah Melengkapi Data dan Masuk Tahap Verifikasi?? ?')">
                          <header class="panel-heading btn btn-default">
                              3. Oke, Saya Selesai
                          </header></a>
                          </center>
                          <div class="panel-body">
                              <div class="stepy-tab">
                                  <ul id="default-titles" class="stepy-titles clearfix">
                                      <li id="default-title-0" class="current-step">
                                          <div>Data Suami</div>
                                      </li>
                                      <li id="default-title-1" class="">
                                          <div>Data Istri</div>
                                      </li>
                                      <li id="default-title-3" class="">
                                          <div>Data Perkawinan</div>
                                      </li>
                                      <li id="default-title-4" class="">
                                          <div>Selesai</div>
                                      </li>
                                  </ul>
                              </div>


                              <form class="form-horizontal" method="post" action="<?php echo $action; ?>" id="default">
                  <!--DATA SUAMI DAN ORANGTUA NYA-->

                                  <fieldset title="Data Suami" class="step" id="default-step-0">

                                  <div class="alert alert-info fade in">
                                       <center><h4>
                                          <strong>Lengkapi!</strong> 
                                          Data Mempelai Pria / Suami
                                          </h4></center>
                                      </div>


                                      <legend> </legend>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">NIK</label>
                                          <div class="col-lg-8">
                                              <input type="text" name="s_nik" id="s_nik" onkeypress="return runScript(event)" maxlength="16" value="<?php echo $s_nik; ?>" class="form-control tooltips" data-toggle="tooltip"  data-original-title="NIK Diisikan Tanpa Huruf & Spasi" required>
                                              <p class="help-block"><?php echo form_error('s_nik') ?></p>
                                          </div>
                                          <div class="col-lg-2">
                                            <a class="btn btn-info" href="javascript:void(0)" onclick="updateDataSuami()">Cek NIK !!</a>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Nomor KK</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="s_no_kk" id="s_no_kk" onkeypress="return runScript(event)" maxlength="16" value="<?php echo $s_no_kk; ?>" class="form-control tooltips" data-toggle="tooltip " data-original-title="Nomor KK Diisikan Tanpa Huruf & Spasi" required>
                                              <p class="help-block"><?php echo form_error('s_no_kk') ?></p>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Nama Lengkap</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="s_nama" readonly="" id="s_nama" value="<?php echo $s_nama; ?>" class="form-control tooltips" data-toggle="tooltip " data-original-title="Isi Dengan Format Penulisan Seperti Contoh" required>
                                              <p class="help-block"><?php echo form_error('s_nama') ?></p>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Tempat Lahir</label>
                                          <div class="col-lg-4">
                                              <input type="text" class="form-control tooltips"  name="s_tmp_lahir" id="s_tmp_lahir" value="<?php echo $s_tmp_lahir; ?>"  data-toggle="tooltip " data-original-title="Isi Dengan Nama Kabupaten / Kota" readonly="">
                                          </div>
                                          <label class="col-lg-2 control-label">Tanggal Lahir</label>
                                          <div class="col-lg-3">
                                              <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012" class="input-append date dpYears">
                                                  <input type="text" name="s_tgl_lahir" id="s_tgl_lahir" readonly="" value="<?php echo $s_tgl_lahir; ?>" size="16" class="form-control">
                                                      <span class="input-group-btn add-on">
                                                        <button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
                                                      </span>
                                              </div>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Alamat</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="s_a_alamat" readonly="" id="s_a_alamat" value="<?php echo $s_a_alamat; ?>" class="form-control tooltips" placeholder="" data-toggle="tooltip " placeholder="" data-original-title="Isi Dengan Nama Dusun/Jalan" >
                                              <p class="help-block"><?php echo form_error('s_a_alamat') ?></p>
                                          </div>
                                      </div>


                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Desa/Kelurahan</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="s_a_desa" readonly="" id="s_a_desa" value="<?php echo $s_a_desa; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Desa Alamat">
                                              <p class="help-block"><?php echo form_error('s_a_desa') ?></p>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Kecamatan</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="s_a_kecamatan" readonly="" id="s_a_kecamatan" value="<?php echo $s_a_kecamatan; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Kecamatan Alamat">
                                              <p class="help-block"><?php echo form_error('pa_kecamatan') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Kabupaten/Kota</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="s_a_kabkota" readonly="" id="s_a_kabkota" value="<?php echo $s_a_kabkota; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Kabupaten/Kota Alamat">
                                              <p class="help-block"><?php echo form_error('pa_kabkota') ?></p>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Provinsi</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="s_a_provinsi" readonly="" id="s_a_provinsi" value="<?php echo $s_a_provinsi; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Proinsi Alamat">
                                              <p class="help-block"><?php echo form_error('s_a_provinsi') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Pendidikan Terakhir</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="s_pendidikan_terakhir" id="s_pendidikan_terakhir" value="<?php echo $s_pendidikan_terakhir; ?>" class="form-control tooltips" placeholder="" data-toggle="tooltip " data-original-title="Isi dengan Derajat pendidikan terkahir yang telah selesai ditempuh"  >
                                              <p class="help-block"><?php echo form_error('s_pendidikan_terakhir') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Agama (Sesuai Pada Data KTP)</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="s_agama" disabled="" id="s_agama" value="<?php echo $s_agama; ?>" disabled="" class="form-control tooltips" data-toggle="tooltip " data-original-title="Isi Dengan Nama Organisasi Penghayat Kepercayaan" >
                                              <p class="help-block"><?php echo form_error('s_agama') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Nama Organisasi Penghayat Kepecrayaan</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="s_nama_organisasi" disabled="" id="s_nama_organisasi" value="<?php echo $s_nama_organisasi; ?>" disabled="" class="form-control tooltips" data-toggle="tooltip " data-original-title="Isi Dengan Nama Organisasi Penghayat Kepercayaan" >
                                              <p class="help-block"><?php echo form_error('s_nama_organisasi') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Pekerjaan</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="s_pekerjaan" id="s_pekerjaan" value="<?php echo $s_pekerjaan; ?>" readonly="" class="form-control tooltips" data-toggle="tooltip " data-original-title="Isi Dengan Nama Organisasi Penghayat Kepercayaan" >
                                              <p class="help-block"><?php echo form_error('s_pekerjaan') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Perceraian Yang Ke-</label>
                                          <div class="col-lg-10">
                                              <input type="text" class="form-control tooltips" onkeypress="return runScript(event)" maxlength="2" name="s_perceraian_ke" value="<?php echo $s_perceraian_ke; ?>" data-toggle="tooltip " placeholder="" data-original-title="Perceraian yang ke.... diisi yang menunjukan urutan perceraian ke berapa yang dilakukan oleh suami" >
                                              <p class="help-block"><?php echo form_error('s_perceraian_ke') ?></p> 
                                          </div>
                                      </div>

                                      <br><hr>
                                 </fieldset>


                  <!--DATA ISTRI DAN ORANGTUA NYA-->
                                  <fieldset title="Data Istri" class="step" id="default-step-1" >
                                      <legend> </legend>
                                      <div class="alert alert-info fade in">
                                       <center><h4>
                                          <strong>Lengkapi!</strong> 
                                          Data Mempelai Wanita / Istri
                                          </h4></center>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">NIK</label>
                                          <div class="col-lg-8">
                                              <input type="text" name="i_nik" id="i_nik" onkeypress="return runScript(event)" maxlength="16" value="<?php echo $i_nik; ?>" class="form-control tooltips" data-toggle="tooltip"  data-original-title="NIK Diisikan Tanpa Huruf & Spasi" required>
                                              <p class="help-block"><?php echo form_error('i_nik') ?></p>
                                          </div>
                                          <div class="col-lg-2">
                                            <a class="btn btn-info" href="javascript:void(0)" onclick="updateDataIstri()">Cek NIK !!</a>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Nomor KK</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="i_no_kk" id="i_no_kk" onkeypress="return runScript(event)" maxlength="16" value="<?php echo $i_no_kk; ?>" class="form-control tooltips" data-toggle="tooltip " data-original-title="Nomor KK Diisikan Tanpa Huruf & Spasi" required>
                                              <p class="help-block"><?php echo form_error('i_no_kk') ?></p>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Nama Lengkap</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="i_nama" readonly="" id="i_nama" value="<?php echo $i_nama; ?>" class="form-control tooltips" data-toggle="tooltip " data-original-title="Isi Dengan Format Penulisan Seperti Contoh" required>
                                              <p class="help-block"><?php echo form_error('i_nama') ?></p>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Tempat Lahir</label>
                                          <div class="col-lg-4">
                                              <input type="text" class="form-control tooltips"  name="i_tmp_lahir" id="i_tmp_lahir" value="<?php echo $i_tmp_lahir; ?>"  data-toggle="tooltip " data-original-title="Isi Dengan Nama Kabupaten / Kota" readonly="">
                                          </div>
                                          <label class="col-lg-2 control-label">Tanggal Lahir</label>
                                          <div class="col-lg-3">
                                              <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012" class="input-append date dpYears">
                                                  <input type="text" name="i_tgl_lahir" id="i_tgl_lahir" readonly="" value="<?php echo $i_tgl_lahir; ?>" size="16" class="form-control">
                                                      <span class="input-group-btn add-on">
                                                        <button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
                                                      </span>
                                              </div>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Alamat</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="i_a_alamat" readonly="" id="i_a_alamat" value="<?php echo $i_a_alamat; ?>" class="form-control tooltips" placeholder="" data-toggle="tooltip " placeholder="" data-original-title="Isi Dengan Nama Dusun/Jalan" >
                                              <p class="help-block"><?php echo form_error('i_a_alamat') ?></p>
                                          </div>
                                      </div>


                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Desa/Kelurahan</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="i_a_desa" readonly="" id="i_a_desa" value="<?php echo $i_a_desa; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Desa Alamat">
                                              <p class="help-block"><?php echo form_error('i_a_desa') ?></p>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Kecamatan</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="i_a_kecamatan" readonly="" id="i_a_kecamatan" value="<?php echo $i_a_kecamatan; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Kecamatan Alamat">
                                              <p class="help-block"><?php echo form_error('pa_kecamatan') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Kabupaten/Kota</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="i_a_kabkota" readonly="" id="i_a_kabkota" value="<?php echo $i_a_kabkota; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Kabupaten/Kota Alamat">
                                              <p class="help-block"><?php echo form_error('pa_kabkota') ?></p>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Provinsi</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="i_a_provinsi" readonly="" id="i_a_provinsi" value="<?php echo $i_a_provinsi; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Proinsi Alamat">
                                              <p class="help-block"><?php echo form_error('i_a_provinsi') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Pendidikan Terakhir</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="i_pendidikan_terakhir" id="i_pendidikan_terakhir" value="<?php echo $i_pendidikan_terakhir; ?>" class="form-control tooltips" data-toggle="tooltip" data-original-title="Isi dengan Derajat pendidikan terkahir yang telah selesai ditempuh" >
                                              <p class="help-block"><?php echo form_error('i_pendidikan_terakhir') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Agama (Sesuai Pada Data KTP)</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="i_agama" disabled="" id="i_agama" value="<?php echo $i_agama; ?>" disabled="" class="form-control tooltips" data-toggle="tooltip " data-original-title="Isi Dengan Nama Organisasi Penghayat Kepercayaan" >
                                              <p class="help-block"><?php echo form_error('i_agama') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Nama Organisasi Penghayat Kepecrayaan</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="i_nama_organisasi" id="i_nama_organisasi" value="<?php echo $i_nama_organisasi; ?>" disabled="" class="form-control tooltips" data-toggle="tooltip " data-original-title="Isi Dengan Nama Organisasi Penghayat Kepercayaan" >
                                              <p class="help-block"><?php echo form_error('i_nama_organisasi') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Pekerjaan</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="i_pekerjaan" id="i_pekerjaan" value="<?php echo $i_pekerjaan; ?>" readonly="" class="form-control tooltips" data-toggle="tooltip " data-original-title="Pekerjaan Dari Data Suami, Sesuai dengan Elemen data pada KTP" >
                                              <p class="help-block"><?php echo form_error('i_pekerjaan') ?></p>
                                          </div>
                                      </div>
                                      <br><hr>

                                 </fieldset>

                      <!--DATA CATATAN PERKAWINAN-->
                                  <fieldset title="Perkawinan" class="step" id="default-step-1" >
                                      <legend> </legend>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Yang Mengajukan Perceraian</label>
                                          <div class="col-lg-10">
                                            <div class="radios">
                                              <label class="label_radio r_on" for="radio-01">
                                                  <input name="yang_mengajukan" value="Suami" <?php if($yang_mengajukan=='Suami') echo "checked=''"; ?> type="radio" > Suami
                                              </label>
                                              <label class="label_radio r_off" for="radio-02">
                                                  <input name="yang_mengajukan" value="Istri" <?php if($yang_mengajukan=='Istri') echo "checked=''"; ?> type="radio"> Istri
                                              </label>
                                          </div>
                                          <p class="help-block"><?php echo form_error('yang_mengajukan') ?></p>
                                          </div>
                                      </div>
                                      
                                      <div class="form-group">
                                        <label class="col-lg-2 control-label">Nomor Akta Perkawinan</label>
                                          <div class="col-lg-4">
                                                <input type="text" class="form-control tooltips" name="no_akta_perkawinan" id="no_akta_perkawinan" value="<?php echo $no_akta_perkawinan; ?>" data-toggle="tooltip" data-original-title="Nomor akta perkawinan diisi sesuai dengan nomor yang tertulis sesuai dengan akta perkawinan" value="<?php echo $no_akta_perkawinan; ?>" />
                                                <p class="help-block"><?php echo form_error('no_akta_perkawinan') ?></p>
                                            </div>

                                          <div  class="col-lg-1"></div>
                                          <label class="col-lg-1 control-label">Tanggal Akta Perkawinan</label>
                                            <div class="col-lg-3">
                                                <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="2016-06-01" class="input-append date dpYears">
                                                       <input type="text" readonly="" name="tgl_akta_perkawinan" id="tgl_akta_perkawinan" value="<?php echo $tgl_akta_perkawinan; ?>" size="16" class="form-control">
                                                        <span class="input-group-btn add-on">
                                                          <button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
                                                        </span>
                                                </div>
                                                <p class="help-block"><?php echo form_error('tgl_akta_perkawinan') ?></p>
                                            </div>
                                      </div>

                                      

                                      <div class="form-group">
                                            <label class="col-lg-2 control-label" for="varchar">Tempat Pencatatan Perkawinan</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control tooltips" name="tmp_pencatatan" id="tmp_pencatatan" value="<?php echo $tmp_pencatatan; ?>" data-toggle="tooltip" data-original-title="Tempat pencatatan perceraian diisi sesuai dengan tempat pencatatan perceraian dilaksanakan" value="<?php echo $tmp_pencatatan; ?>" />
                                                <p class="help-block"><?php echo form_error('tmp_pencatatan') ?></p>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                        <label class="col-lg-2 control-label">Nomor Putusan Pengadilan</label>
                                          <div class="col-lg-4">
                                                <input type="text" class="form-control tooltips" name="no_putusan" id="no_putusan" value="<?php echo $no_putusan; ?>" data-toggle="tooltip" data-original-title="Nomor surat keterangan panitera Pengadilan diisi sesuai dengan Nomor surat keterangan panitera Pengadilan" value="<?php echo $no_putusan; ?>" />
                                                <p class="help-block"><?php echo form_error('no_putusan') ?></p>
                                            </div>
                                          <div  class="col-lg-1"></div>
                                          <label class="col-lg-1 control-label">Tanggal Putusan Pengadilan</label>
                                            <div class="col-lg-3">
                                                <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="2016-06-01" class="input-append date dpYears">
                                                       <input type="text" readonly="" name="tgl_putusan" id="tgl_putusan" value="<?php echo $tgl_putusan; ?>" size="16" class="form-control">
                                                        <span class="input-group-btn add-on">
                                                          <button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
                                                        </span>
                                                </div>
                                                <p class="help-block"><?php echo form_error('tgl_putusan') ?></p>
                                            </div>
                                      </div>

                                      <!--value="<?php echo $tmp_peradilan; ?>"-->
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Nama & Tempat Peradilan Pemutus Perkara</label>
                                          <div class="col-lg-10">
                                              <select class="form-control" name="tkt_peradilan" id="tkt_peradilan">
                                                <option value="Pengadilan Negeri">Pengadilan Negeri</option>
                                                <option value="Pengadilan Agama">Pengadilan Agama</option>
                                                <option value="Pengadilan Tinggi Negeri">Pengadilan Tinggi Negeri</option>
                                                <option value="Pengadilan Tinggi Agama">Pengadilan Tinggi Agama</option>
                                                <option value="Mahkamah Agung">Mahkamah Agung</option>
                                            </select>
                                            <p class="help-block"><?php echo form_error('tkt_peradilan') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                        <label class="col-lg-2 control-label" for="varchar">Tempat kedudukan/lembaga Peradilan</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control tooltips" name="tmp_peradilan" id="tmp_peradilan" value="<?php echo $tmp_peradilan; ?>" data-toggle="tooltip" data-original-title="Tempat Lembaga Peradilan diisi sesuai dengan lokasi keberadan Pengadilan" value="<?php echo $tmp_peradilan; ?>" />
                                            <p class="help-block"><?php echo form_error('tmp_peradilan') ?></p>
                                        </div>
        </div>

                                      <div class="form-group">
                                            <label class="col-lg-2 control-label" for="varchar">Nama Lembaga Peradilan yang Menerbitkan Putusan Perceraian</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control tooltips" name="nama_lembaga" id="nama_lembaga" value="<?php echo $nama_lembaga; ?>" data-toggle="tooltip" data-original-title="Nama lembaga peradilan yang menerbitkan Putusan Perceraian diisi sesuai dengan lokasi keberadaan Pengadilan" value="<?php echo $nama_lembaga; ?>" />
                                                <p class="help-block"><?php echo form_error('nama_lembaga') ?></p>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                          <label class="col-lg-2 control-label">Sebab Terjadinya Perceraian</label>
                                          <div class="col-lg-10">
                                              <div class="radios">
                                                <label class="label_radio r_on" for="radio-01">
                                                    <input name="sebab" value="Berbuat Zina" <?php if($sebab=='Berbuat Zina') echo "checked=''"; ?> type="radio" > Berbuat Zina
                                                </label>
                                                <label class="label_radio r_off" for="radio-02">
                                                    <input name="sebab" value="Pemabuk" <?php if($sebab=='Pemabuk') echo "checked=''"; ?> type="radio"> Pemabuk/Pemadat
                                                </label>
                                                <label class="label_radio r_off" for="radio-02">
                                                    <input name="sebab" value="Penjudi" <?php if($sebab=='Penjudi') echo "checked=''"; ?> type="radio"> Penjudi
                                                </label>
                                                <label class="label_radio r_off" for="radio-02">
                                                    <input name="sebab" value="Meninggalkan Pasangan Lenih 2 Tahun Tanpa Izin/alasan Yang Sah" <?php if($sebab=='Meninggalkan Pasangan Lenih 2 Tahun Tanpa Izin/alasan Yang Sah') echo "checked=''"; ?> type="radio"> Meninggalkan Pasangan Lenih 2 Tahun Tanpa Izin/alasan Yang Sah
                                                </label>
                                                <label class="label_radio r_off" for="radio-02">
                                                    <input name="sebab" value="Hukuman Penjara Diatas 5 Tahun atau Lebih Berat" <?php if($sebab=='Hukuman Penjara Diatas 5 Tahun atau Lebih Berat') echo "checked=''"; ?> type="radio"> Hukuman Penjara Diatas 5 Tahun atau Lebih Berat
                                                </label>
                                                <label class="label_radio r_off" for="radio-02">
                                                    <input name="sebab" value="Melakukan Kekejaman" <?php if($sebab=='Melakukan Kekejaman') echo "checked=''"; ?> type="radio"> Melakukan Kekejaman
                                                </label>
                                                <label class="label_radio r_off" for="radio-02">
                                                    <input name="sebab" value="Mendapat Cacat Badan/Penyakit" <?php if($sebab=='Mendapat Cacat Badan/Penyakit') echo "checked=''"; ?> type="radio"> Mendapat Cacat Badan/Penyakit
                                                </label>
                                                <label class="label_radio r_off" for="radio-02">
                                                    <input name="sebab" value="Perselisihan/Pertengkaran Terus Menerus" <?php if($sebab=='Perselisihan/Pertengkaran Terus Menerus') echo "checked=''"; ?> type="radio"> Perselisihan/Pertengkaran Terus Menerus
                                                </label>

                                              </div>
                                              <p class="help-block"><?php echo form_error('sebab') ?></p>    
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                      </div>

                                      <div class="form-group">
                                            <label class="col-lg-2 control-label" for="date">Tgl Melapor</label>
                                            <div class="col-lg-9">
                                                <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="2016-06-01" class="input-append date dpYears">
                                                       <input type="text" readonly="" name="tgl_melapor" id="tgl_melapor" value="<?php if($tgl_melapor=="0000-00-00") echo date("Y-m-d"); else echo $tgl_melapor; ?>" size="16" class="form-control">
                                                        <span class="input-group-btn add-on">
                                                          <button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
                                                        </span>
                                                </div>
                                                <p class="help-block"><?php echo form_error('tgl_melapor') ?></p>
                                            </div>
                                        </div>

                                  </fieldset>
               
                                  <fieldset title="Selesai" class="step" id="default-step-2" >
                                  <center>
                                    <h3>Pastikan Data Yang Anda Isikan Benar, Kemudian Klik Tombol "Simpan Formulir" untuk menyimpan data Kelengkapan formulir
                                  persyaratan pengajuan Akta Perceraian.</h3>
                                  </center>
                                  
                                      <legend> </legend>
                                      <div class="alert alert-info fade in">
                                       <center><h4>
                                          <strong>Layanan SMS Tracking Dokumen</strong><br> 
                                          dengan format "STATUS_NOMOR PENDAFTARAN" kirim sms ke 0857-25-4858-10
                                          </h4></center>
                                      </div>
                                  </fieldset>
                                  <input type="hidden" name="id_ac" value="<?php echo $ID_AC?>">
                                  <input type="hidden" name="id_ms" value="<?php echo $s_id_bercerai?>">
                                  <input type="hidden" name="id_mi" value="<?php echo $i_id_bercerai?>">
                                  <input type="hidden" name="id_perceraian" value="<?php echo $id_datacerai?>">
                                  

                                  <input type="submit" class="finish btn btn-danger" value="Simpan Formulir!!"/>
                              </form>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>