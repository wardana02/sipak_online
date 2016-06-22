<section id="">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
              <div class="col-lg-1"></div>
                  <div class="col-lg-10">

                      <section class="panel">
                      <center>
                      <?php echo "
                        <h2>Akta Perkawinan Online</h2>
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
                              Formulir Akta Perkawinan Online
                          </header>
                          <center>
                            <header class="panel-heading btn btn-primary">
                                1. Formulir Akta Perkawinan
                            </header>
                            <a href="<?php echo site_url('b2_12/berkas/'.$ID_AP) ?>">
                            <header class="panel-heading btn btn-default">
                                2. Berkas Akta Perkawinan
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
                                      <li id="default-title-2" class="">
                                          <div>Data Saksi</div>
                                      </li>
                                      <li id="default-title-3" class="">
                                          <div>Data Perkawinan</div>
                                      </li>
                                      <li id="default-title-3" class="">
                                          <div>Data Anak</div>
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
                                              <input type="text" name="s_nik" id="s_nik" value="<?= $s_nik; ?>" onkeypress="return runScript(event)"  maxlength="16" class="form-control tooltips" data-toggle="tooltip"  data-original-title="NIK Diisikan Tanpa Huruf & Spasi" required>
                                              <p class="help-block"><?php echo form_error('s_nik') ?></p>
                                          </div>
                                          <div class="col-lg-2">
                                            <a class="btn btn-info" href="javascript:void(0)" onclick="updateDataSuami()">Cek NIK !!</a>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Nomor KK</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="s_no_kk" id="s_no_kk" value="<?php echo $s_no_kk; ?>" onkeypress="return runScript(event)"  maxlength="16" class="form-control tooltips" data-toggle="tooltip " data-original-title="Nomor KK Diisikan Tanpa Huruf & Spasi" required>
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
                                          <label class="col-lg-2 control-label">Pendidikan Terakhir</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="s_pendidikan_terakhir" id="s_pendidikan_terakhir" value="<?php echo $s_pendidikan_terakhir; ?>" class="form-control tooltips" placeholder="" data-toggle="tooltip " data-original-title="" >
                                              <p class="help-block"><?php echo form_error('s_pendidikan_terakhir') ?></p>
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

                                      <script type="text/javascript">
                                        function agamaSuami() {
                                            var selMenu = document.getElementById('s_agama');
                                            var hasil = document.getElementById('s_nama_organisasi');
                                            if(selMenu.value == 'Penghayat Kepercayaan'){
                                              hasil.disabled = false;
                                            }   
                                            else{
                                              hasil.disabled = true;
                                            }    
                                        }
                                      </script>
                                      
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Agama / Penghayat Kepercayaan</label>
                                          <div class="col-lg-10">
                                              <select class="form-control" name="s_agama" id="s_agama" onChange="agamaSuami()">
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Budha">Budha</option>
                                                <option value="Konghucu">Konghucu</option>
                                                <option value="Penghayat Kepercayaan">Penghayat Kepercayaan</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>
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
                                              <input type="text" name="s_pekerjaan" id="s_pekerjaan" readonly="" value="<?php echo $s_pekerjaan; ?>" class="form-control tooltips" data-toggle="tooltip " data-original-title="Isi Dengan Nama Organisasi Penghayat Kepercayaan" >
                                              <p class="help-block"><?php echo form_error('s_pekerjaan') ?></p>
                                          </div>
                                      </div>

                                      

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Anak Ke-</label>
                                          <div class="col-lg-10">
                                              <input type="text" class="form-control tooltips" name="s_anak_ke" value="<?php echo $s_anak_ke; ?>" placeholder="" data-toggle="tooltip " data-original-title="Isi Dengan Angka" >
                                              <p class="help-block"><?php echo form_error('s_anak_ke') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Status Perkawinan Sebelum Nikah</label>
                                          <div class="col-lg-10">
                                              <div class="radios">
                                                <label class="label_radio r_on" for="radio-01">
                                                    <input name="s_status_sebelum_nikah" value="Belum Kawin" <?php if($s_status_sebelum_nikah=='Belum Kawin') echo "checked=''"; ?> type="radio" > Belum Kawin
                                                </label>
                                                <label class="label_radio r_off" for="radio-02">
                                                    <input name="s_status_sebelum_nikah" value="Kawin" <?php if($s_status_sebelum_nikah=='Kawin') echo "checked=''"; ?> type="radio"> Kawin
                                                </label>
                                                <label class="label_radio r_off" for="radio-02">
                                                    <input name="s_status_sebelum_nikah" value="Cerai Hidup" <?php if($s_status_sebelum_nikah=='Cerai Hidup') echo "checked=''"; ?> type="radio"> Cerai Hidup
                                                </label>
                                                <label class="label_radio r_off" for="radio-02">
                                                    <input name="s_status_sebelum_nikah" value="Cerai Mati" <?php if($s_status_sebelum_nikah=='Cerai Mati') echo "checked=''"; ?> type="radio"> Cerai Mati
                                                </label>
                                              </div>
                                              <p class="help-block"><?php echo form_error('s_status_sebelum_nikah') ?></p>    
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Perkawinan Yang Ke-</label>
                                          <div class="col-lg-10">
                                              <input type="text" class="form-control tooltips" name="s_perkawinan_ke" onkeypress="return runScript(event)" value="<?php echo $s_perkawinan_ke; ?>" data-toggle="tooltip " placeholder="" data-original-title="Isi dengan angka 1,2,3, dst" >
                                              <p class="help-block"><?php echo form_error('s_perkawinan_ke') ?></p> 
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Istri Yang Ke- (Pologami)</label>
                                          <div class="col-lg-10">
                                              <input type="text" class="form-control tooltips" name="s_istri_ke" onkeypress="return runScript(event)" value="<?php echo $s_istri_ke; ?>" ata-toggle="tooltip " placeholder="" data-original-title="Isi Dengan Format Angka 1,2,3, dst" >
                                              <p class="help-block"><?php echo form_error('s_istri_ke') ?></p>
                                          </div>
                                      </div>
                                      <br><hr>


                                      <div class="alert alert-info fade in">
                                       <center><h4>
                                          <strong>Lengkapi!</strong> 
                                          Data Ayah Dari Suami
                                          </h4></center>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">NIK</label>
                                          <div class="col-lg-8">
                                              <input type="text" name="as_nik" id="as_nik" onkeypress="return runScript(event)"  maxlength="16" value="<?php echo $as_nik; ?>" class="form-control tooltips" data-toggle="tooltip " data-original-title="NIK Diisikan Tanpa Huruf & Spasi" required>
                                          </div>
                                          <div class="col-lg-2">
                                            <a class="btn btn-info" href="javascript:void(0)" onclick="updateAyahSuami()">Cek NIK !!</a>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Nama Lengkap</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="as_nama" id="as_nama" readonly="" class="form-control tooltips" value="<?php echo $as_nama; ?>" data-toggle="tooltip " data-original-title="Isi Dengan Format Penulisan Seperti Contoh" required>
                                              <p class="help-block"><?php echo form_error('as_nama') ?></p>
                                          </div>
                                      </div>

                                      <script type="text/javascript">
                                        function agamaAyahSuami() {
                                            var selMenu = document.getElementById('as_agama');
                                            var hasil = document.getElementById('as_nama_organisasi');
                                            if(selMenu.value == 'Penghayat Kepercayaan'){
                                              hasil.disabled = false;
                                            }   
                                            else{
                                              hasil.disabled = true;
                                            }    
                                        }
                                      </script>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Agama / Penghayat Kepercayaan</label>
                                          <div class="col-lg-10">
                                              <select class="form-control" name="as_agama" id="as_agama" onchange="agamaAyahSuami()">
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Budha">Budha</option>
                                                <option value="Konghucu">Konghucu</option>
                                                <option value="Penghayat Kepercayaan">Penghayat Kepercayaan</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>
                                            <p class="help-block"><?php echo form_error('as_agama') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Nama Organisasi Penghayat Kepecrayaan</label>
                                          <div class="col-lg-10"> 
                                              <input type="text" name="as_nama_organisasi" id="as_nama_organisasi" class="form-control tooltips" value="<?php echo $as_nama_organisasi; ?>" disabled="" data-toggle="tooltip " placeholder="" data-original-title="Isi Dengan Nama Organisasi Penghayat Kepercayaan" >
                                              <p class="help-block"><?php echo form_error('as_nama_organisasi') ?></p>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Tempat Lahir</label>
                                          <div class="col-lg-4">
                                              <input type="text" class="form-control tooltips" name="as_tmp_lahir" id="as_tmp_lahir" readonly="" value="<?php echo $as_tmp_lahir; ?>" data-toggle="tooltip " data-original-title="Isi Dengan Nama Kabupaten / Kota">
                                              <p class="help-block"><?php echo form_error('as_tmp_lahir') ?></p>
                                          </div>
                                          <label class="col-lg-2 control-label">Tanggal Lahir</label>
                                          <div class="col-lg-3">
                                              <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012" class="input-append date dpYears">
                                                  <input type="text" name="as_tgl_lahir" id="as_tgl_lahir" readonly=""  value="<?php echo $as_tgl_lahir; ?>" size="16" class="form-control">
                                                      <span class="input-group-btn add-on">
                                                        <button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
                                                      </span>
                                              </div>
                                            <p class="help-block"><?php echo form_error('as_tgl_lahir') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Alamat</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="as_a_alamat" readonly="" id="as_a_alamat" value="<?php echo $as_a_alamat; ?>" class="form-control tooltips" placeholder="" data-toggle="tooltip " placeholder="" data-original-title="Isi Dengan Nama Dusun/Jalan" >
                                              <p class="help-block"><?php echo form_error('as_a_alamat') ?></p>
                                          </div>
                                      </div>


                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Desa/Kelurahan</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="as_a_desa" readonly="" id="as_a_desa" value="<?php echo $as_a_desa; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Desa Alamat">
                                              <p class="help-block"><?php echo form_error('as_a_desa') ?></p>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Kecamatan</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="as_a_kecamatan" readonly="" id="as_a_kecamatan" value="<?php echo $as_a_kecamatan; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Kecamatan Alamat">
                                              <p class="help-block"><?php echo form_error('as_a_kecamatan') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Kabupaten/Kota</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="as_a_kabkota" readonly="" id="as_a_kabkota" value="<?php echo $as_a_kabkota; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Kabupaten/Kota Alamat">
                                              <p class="help-block"><?php echo form_error('as_a_kabkota') ?></p>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Provinsi</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="as_a_provinsi" readonly="" id="as_a_provinsi" value="<?php echo $as_a_provinsi; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Proinsi Alamat">
                                              <p class="help-block"><?php echo form_error('as_a_provinsi') ?></p>
                                          </div>
                                      </div>
                                       <div class="form-group">
                                          <label class="col-lg-2 control-label">Pekerjaan</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="as_pekerjaan" id="as_pekerjaan" readonly="" class="form-control tooltips" value="<?php echo $as_pekerjaan; ?>" data-toggle="tooltip " data-original-title="NIK Diisikan Tanpa Huruf & Spasi" required>
                                              <p class="help-block"><?php echo form_error('as_pekerjaan') ?></p>
                                          </div>
                                      </div>
                                      <br><hr>
                                      <div class="alert alert-info fade in">
                                       <center><h4>
                                          <strong>Lengkapi!</strong> 
                                          Data Ibu Dari Suami
                                          </h4></center>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">NIK</label>
                                          <div class="col-lg-8">
                                              <input type="text" name="is_nik" id="is_nik" onkeypress="return runScript(event)"  maxlength="16" class="form-control tooltips" value="<?php echo $is_nik; ?>" data-toggle="tooltip " data-original-title="NIK Diisikan Tanpa Huruf & Spasi" required>
                                              <p class="help-block"><?php echo form_error('is_nik') ?></p>
                                          </div>
                                          <div class="col-lg-2">
                                            <a class="btn btn-info" href="javascript:void(0)" onclick="updateIbuSuami()">Cek NIK !!</a>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Nama Lengkap</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="is_nama" readonly="" id="is_nama" class="form-control tooltips" value="<?php echo $is_nama; ?>" data-toggle="tooltip " data-original-title="Isi Dengan Format Penulisan Seperti Contoh" required>
                                              <p class="help-block"><?php echo form_error('is_nama') ?></p>
                                          </div>
                                      </div>

                                      <script type="text/javascript">
                                        function agamaIbuSuami() {
                                            var selMenu = document.getElementById('is_agama');
                                            var hasil = document.getElementById('is_nama_organisasi');
                                            if(selMenu.value == 'Penghayat Kepercayaan'){
                                              hasil.disabled = false;
                                            }   
                                            else{
                                              hasil.disabled = true;
                                            }    
                                        }
                                      </script>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Agama / Penghayat Kepercayaan</label>
                                          <div class="col-lg-10">
                                              <select class="form-control" name="is_agama" id="is_agama" onchange="agamaIbuSuami()">
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Budha">Budha</option>
                                                <option value="Konghucu">Konghucu</option>
                                                <option value="Penghayat Kepercayaan">Penghayat Kepercayaan</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>
                                            <p class="help-block"><?php echo form_error('is_agama') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Nama Organisasi Penghayat Kepecrayaan</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="is_nama_organisasi" id="is_nama_organisasi" disabled="" class="form-control tooltips" value="<?php echo $is_nama_organisasi; ?>" placeholder="" data-toggle="tooltip " placeholder="" data-original-title="Isi Dengan Nama Organisasi Penghayat Kepercayaan" >
                                              <p class="help-block"><?php echo form_error('is_nama_organisasi') ?></p>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Tempat Lahir</label>
                                          <div class="col-lg-4">
                                              <input type="text" class="form-control tooltips" readonly="" name="is_tmp_lahir" id="is_tmp_lahir" value="<?php echo $is_tmp_lahir; ?>" data-toggle="tooltip " data-original-title="Isi Dengan Nama Kabupaten / Kota">
                                              <p class="help-block"><?php echo form_error('is_tmp_lahir') ?></p>
                                          </div>
                                          <label class="col-lg-2 control-label">Tanggal Lahir</label>
                                          <div class="col-lg-3">
                                              <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012" class="input-append date dpYears">
                                                  <input type="text" name="is_tgl_lahir" id="is_tgl_lahir" readonly=""  value="<?php echo $is_tgl_lahir; ?>" size="16" class="form-control">
                                                      <span class="input-group-btn add-on">
                                                        <button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
                                                      </span>
                                              </div>
                                            <p class="help-block"><?php echo form_error('is_tgl_lahir') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Alamat</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="is_a_alamat" readonly="" id="is_a_alamat" value="<?php echo $is_a_alamat; ?>" class="form-control tooltips" placeholder="" data-toggle="tooltip " placeholder="" data-original-title="Isi Dengan Nama Dusun/Jalan" >
                                              <p class="help-block"><?php echo form_error('is_a_alamat') ?></p>
                                          </div>
                                      </div>


                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Desa/Kelurahan</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="is_a_desa" readonly="" id="is_a_desa" value="<?php echo $is_a_desa; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Desa Alamat">
                                              <p class="help-block"><?php echo form_error('is_a_desa') ?></p>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Kecamatan</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="is_a_kecamatan" readonly="" id="is_a_kecamatan" value="<?php echo $is_a_kecamatan; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Kecamatan Alamat">
                                              <p class="help-block"><?php echo form_error('is_a_kecamatan') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Kabupaten/Kota</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="is_a_kabkota" readonly="" id="is_a_kabkota" value="<?php echo $is_a_kabkota; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Kabupaten/Kota Alamat">
                                              <p class="help-block"><?php echo form_error('as_a_kabkota') ?></p>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Provinsi</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="is_a_provinsi" readonly="" id="is_a_provinsi" value="<?php echo $is_a_provinsi; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Proinsi Alamat">
                                              <p class="help-block"><?php echo form_error('is_a_provinsi') ?></p>
                                          </div>
                                      </div>
                                       <div class="form-group">
                                          <label class="col-lg-2 control-label">Pekerjaan</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="is_pekerjaan" id="is_pekerjaan" readonly="" class="form-control tooltips" value="<?php echo $is_pekerjaan; ?>" data-toggle="tooltip " data-original-title="NIK Diisikan Tanpa Huruf & Spasi" required>
                                              <p class="help-block"><?php echo form_error('is_pekerjaan') ?></p>
                                          </div>
                                      </div>
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
                                              <input type="text" name="i_nik" id="i_nik" value="<?= $i_nik; ?>" onkeypress="return runScript(event)"  maxlength="16" class="form-control tooltips" data-toggle="tooltip"  data-original-title="NIK Diisikan Tanpa Huruf & Spasi" required>
                                              <p class="help-block"><?php echo form_error('i_nik') ?></p>
                                          </div>
                                          <div class="col-lg-2">
                                            <a class="btn btn-info" href="javascript:void(0)" onclick="updateDataIstri()">Cek NIK !!</a>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Nomor KK</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="i_no_kk" id="i_no_kk" value="<?php echo $i_no_kk; ?>" onkeypress="return runScript(event)"  maxlength="16" class="form-control tooltips" data-toggle="tooltip " data-original-title="Nomor KK Diisikan Tanpa Huruf & Spasi" required>
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
                                          <label class="col-lg-2 control-label">Pendidikan Terakhir</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="i_pendidikan_terakhir" id="i_pendidikan_terakhir" value="<?php echo $i_pendidikan_terakhir; ?>" class="form-control tooltips" placeholder="" data-toggle="tooltip " data-original-title="" >
                                              <p class="help-block"><?php echo form_error('i_pendidikan_terakhir') ?></p>
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

                                      <script type="text/javascript">
                                        function agamaIstri() {
                                            var selMenu = document.getElementById('i_agama');
                                            var hasil = document.getElementById('i_nama_organisasi');
                                            if(selMenu.value == 'Penghayat Kepercayaan'){
                                              hasil.disabled = false;
                                            }   
                                            else{
                                              hasil.disabled = true;
                                            }    
                                        }
                                      </script>
                                      
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Agama / Penghayat Kepercayaan</label>
                                          <div class="col-lg-10">
                                              <select class="form-control" name="i_agama" id="i_agama" onChange="agamaIstri()">
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Budha">Budha</option>
                                                <option value="Konghucu">Konghucu</option>
                                                <option value="Penghayat Kepercayaan">Penghayat Kepercayaan</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>
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
                                              <input type="text" name="i_pekerjaan" id="i_pekerjaan" readonly="" value="<?php echo $i_pekerjaan; ?>" class="form-control tooltips" data-toggle="tooltip " data-original-title="Isi Dengan Nama Organisasi Penghayat Kepercayaan" >
                                              <p class="help-block"><?php echo form_error('i_pekerjaan') ?></p>
                                          </div>
                                      </div>

                                      

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Anak Ke-</label>
                                          <div class="col-lg-10">
                                              <input type="text" class="form-control tooltips" onkeypress="return runScript(event)" name="i_anak_ke" value="<?php echo $i_anak_ke; ?>" placeholder="" data-toggle="tooltip " data-original-title="Isi Dengan Angka" >
                                              <p class="help-block"><?php echo form_error('i_anak_ke') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Status Perkawinan Sebelum Nikah</label>
                                          <div class="col-lg-10">
                                              <div class="radios">
                                                <label class="label_radio r_on" for="radio-01">
                                                    <input name="i_status_sebelum_nikah" value="Belum Kawin" <?php if($i_status_sebelum_nikah=='Belum Kawin') echo "checked=''"; ?> type="radio" > Belum Kawin
                                                </label>
                                                <label class="label_radio r_off" for="radio-02">
                                                    <input name="i_status_sebelum_nikah" value="Kawin" <?php if($i_status_sebelum_nikah=='Kawin') echo "checked=''"; ?> type="radio"> Kawin
                                                </label>
                                                <label class="label_radio r_off" for="radio-02">
                                                    <input name="i_status_sebelum_nikah" value="Cerai Hidup" <?php if($i_status_sebelum_nikah=='Cerai Hidup') echo "checked=''"; ?> type="radio"> Cerai Hidup
                                                </label>
                                                <label class="label_radio r_off" for="radio-02">
                                                    <input name="i_status_sebelum_nikah" value="Cerai Mati" <?php if($i_status_sebelum_nikah=='Cerai Mati') echo "checked=''"; ?> type="radio"> Cerai Mati
                                                </label>
                                              </div>
                                              <p class="help-block"><?php echo form_error('i_status_sebelum_nikah') ?></p>    
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Perkawinan Yang Ke-</label>
                                          <div class="col-lg-10">
                                              <input type="text" class="form-control tooltips" name="i_perkawinan_ke" onkeypress="return runScript(event)" value="<?php echo $i_perkawinan_ke; ?>" data-toggle="tooltip " placeholder="" data-original-title="Isi dengan angka 1,2,3, dst" >
                                              <p class="help-block"><?php echo form_error('i_perkawinan_ke') ?></p> 
                                          </div>
                                      </div>
                                      <br><hr>


                                      <div class="alert alert-info fade in">
                                       <center><h4>
                                          <strong>Lengkapi!</strong> 
                                          Data Ayah Dari Istri
                                          </h4></center>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">NIK</label>
                                          <div class="col-lg-8">
                                              <input type="text" name="ai_nik" id="ai_nik" onkeypress="return runScript(event)"  maxlength="16" value="<?php echo $ai_nik; ?>" class="form-control tooltips" data-toggle="tooltip " data-original-title="NIK Diisikan Tanpa Huruf & Spasi" required>
                                          </div>
                                          <div class="col-lg-2">
                                            <a class="btn btn-info" href="javascript:void(0)" onclick="updateAyahIstri()">Cek NIK !!</a>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Nama Lengkap</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="ai_nama" id="ai_nama" readonly="" class="form-control tooltips" value="<?php echo $ai_nama; ?>" data-toggle="tooltip " data-original-title="Isi Dengan Format Penulisan Seperti Contoh" required>
                                              <p class="help-block"><?php echo form_error('ai_nama') ?></p>
                                          </div>
                                      </div>

                                      <script type="text/javascript">
                                        function agamaAyahIstri() {
                                            var selMenu = document.getElementById('ai_agama');
                                            var hasil = document.getElementById('ai_nama_organisasi');
                                            if(selMenu.value == 'Penghayat Kepercayaan'){
                                              hasil.disabled = false;
                                            }   
                                            else{
                                              hasil.disabled = true;
                                            }    
                                        }
                                      </script>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Agama / Penghayat Kepercayaan</label>
                                          <div class="col-lg-10">
                                              <select class="form-control" name="ai_agama" id="ai_agama" onchange="agamaAyahIstri()">
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Budha">Budha</option>
                                                <option value="Konghucu">Konghucu</option>
                                                <option value="Penghayat Kepercayaan">Penghayat Kepercayaan</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>
                                            <p class="help-block"><?php echo form_error('ai_agama') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Nama Organisasi Penghayat Kepecrayaan</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="ai_nama_organisasi" id="ai_nama_organisasi" disabled="" class="form-control tooltips" value="<?php echo $ai_nama_organisasi; ?>" placeholder="" data-toggle="tooltip " placeholder="" data-original-title="Isi Dengan Nama Organisasi Penghayat Kepercayaan" >
                                              <p class="help-block"><?php echo form_error('ai_nama_organisasi') ?></p>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Tempat Lahir</label>
                                          <div class="col-lg-4">
                                              <input type="text" class="form-control tooltips" name="ai_tmp_lahir" id="ai_tmp_lahir" readonly="" value="<?php echo $ai_tmp_lahir; ?>" data-toggle="tooltip " data-original-title="Isi Dengan Nama Kabupaten / Kota">
                                              <p class="help-block"><?php echo form_error('ai_tmp_lahir') ?></p>
                                          </div>
                                          <label class="col-lg-2 control-label">Tanggal Lahir</label>
                                          <div class="col-lg-3">
                                              <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012" class="input-append date dpYears">
                                                  <input type="text" name="ai_tgl_lahir" id="ai_tgl_lahir" readonly=""  value="<?php echo $ai_tgl_lahir; ?>" size="16" class="form-control">
                                                      <span class="input-group-btn add-on">
                                                        <button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
                                                      </span>
                                              </div>
                                            <p class="help-block"><?php echo form_error('ai_tgl_lahir') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Alamat</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="ai_a_alamat" readonly="" id="ai_a_alamat" value="<?php echo $ai_a_alamat; ?>" class="form-control tooltips" placeholder="" data-toggle="tooltip " placeholder="" data-original-title="Isi Dengan Nama Dusun/Jalan" >
                                              <p class="help-block"><?php echo form_error('ai_a_alamat') ?></p>
                                          </div>
                                      </div>


                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Desa/Kelurahan</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="ai_a_desa" readonly="" id="ai_a_desa" value="<?php echo $ai_a_desa; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Desa Alamat">
                                              <p class="help-block"><?php echo form_error('ai_a_desa') ?></p>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Kecamatan</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="ai_a_kecamatan" readonly="" id="ai_a_kecamatan" value="<?php echo $ai_a_kecamatan; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Kecamatan Alamat">
                                              <p class="help-block"><?php echo form_error('ai_a_kecamatan') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Kabupaten/Kota</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="ai_a_kabkota" readonly="" id="ai_a_kabkota" value="<?php echo $ai_a_kabkota; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Kabupaten/Kota Alamat">
                                              <p class="help-block"><?php echo form_error('ai_a_kabkota') ?></p>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Provinsi</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="ai_a_provinsi" readonly="" id="ai_a_provinsi" value="<?php echo $ai_a_provinsi; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Proinsi Alamat">
                                              <p class="help-block"><?php echo form_error('ai_a_provinsi') ?></p>
                                          </div>
                                      </div>
                                       <div class="form-group">
                                          <label class="col-lg-2 control-label">Pekerjaan</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="ai_pekerjaan" id="ai_pekerjaan" readonly="" class="form-control tooltips" value="<?php echo $ai_pekerjaan; ?>" data-toggle="tooltip " data-original-title="NIK Diisikan Tanpa Huruf & Spasi" required>
                                              <p class="help-block"><?php echo form_error('ai_pekerjaan') ?></p>
                                          </div>
                                      </div>
                                      <br><hr>

                                      <div class="alert alert-info fade in">
                                       <center><h4>
                                          <strong>Lengkapi!</strong> 
                                          Data Ibu Dari Istri
                                          </h4></center>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">NIK</label>
                                          <div class="col-lg-8">
                                              <input type="text" name="ii_nik" id="ii_nik" class="form-control tooltips" onkeypress="return runScript(event)" maxlength="16" value="<?php echo $ii_nik; ?>" data-toggle="tooltip " data-original-title="NIK Diisikan Tanpa Huruf & Spasi" required>
                                              <p class="help-block"><?php echo form_error('ii_nik') ?></p>
                                          </div>
                                          <div class="col-lg-2">
                                            <a class="btn btn-info" href="javascript:void(0)" onclick="updateIbuIstri()">Cek NIK !!</a>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Nama Lengkap</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="ii_nama" readonly="" id="ii_nama" class="form-control tooltips" value="<?php echo $ii_nama; ?>" data-toggle="tooltip " data-original-title="Isi Dengan Format Penulisan Seperti Contoh" required>
                                              <p class="help-block"><?php echo form_error('ii_nama') ?></p>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Agama / Penghayat Kepercayaan</label>
                                          <div class="col-lg-10">
                                              <select class="form-control" name="ii_agama">
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Budha">Budha</option>
                                                <option value="Konghucu">Konghucu</option>
                                                <option value="Penghayat Kepercayaan">Penghayat Kepercayaan</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>
                                            <p class="help-block"><?php echo form_error('ii_agama') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Nama Organisasi Penghayat Kepecrayaan</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="ii_nama_organisasi" class="form-control tooltips" value="<?php echo $ii_nama_organisasi; ?>" placeholder="" data-toggle="tooltip " placeholder="" data-original-title="Isi Dengan Nama Organisasi Penghayat Kepercayaan" >
                                              <p class="help-block"><?php echo form_error('ii_nama_organisasi') ?></p>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Tempat Lahir</label>
                                          <div class="col-lg-4">
                                              <input type="text" class="form-control tooltips" readonly="" name="ii_tmp_lahir" id="ii_tmp_lahir" value="<?php echo $ii_tmp_lahir; ?>" data-toggle="tooltip " data-original-title="Isi Dengan Nama Kabupaten / Kota">
                                              <p class="help-block"><?php echo form_error('ii_tmp_lahir') ?></p>
                                          </div>
                                          <label class="col-lg-2 control-label">Tanggal Lahir</label>
                                          <div class="col-lg-3">
                                              <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012" class="input-append date dpYears">
                                                  <input type="text" name="ii_tgl_lahir" id="ii_tgl_lahir" readonly=""  value="<?php echo $ii_tgl_lahir; ?>" size="16" class="form-control">
                                                      <span class="input-group-btn add-on">
                                                        <button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
                                                      </span>
                                              </div>
                                            <p class="help-block"><?php echo form_error('ii_tgl_lahir') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Alamat</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="ii_a_alamat" readonly="" id="ii_a_alamat" value="<?php echo $ii_a_alamat; ?>" class="form-control tooltips" placeholder="" data-toggle="tooltip " placeholder="" data-original-title="Isi Dengan Nama Dusun/Jalan" >
                                              <p class="help-block"><?php echo form_error('ii_a_alamat') ?></p>
                                          </div>
                                      </div>


                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Desa/Kelurahan</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="ii_a_desa" readonly="" id="ii_a_desa" value="<?php echo $ii_a_desa; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Desa Alamat">
                                              <p class="help-block"><?php echo form_error('ii_a_desa') ?></p>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Kecamatan</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="ii_a_kecamatan" readonly="" id="ii_a_kecamatan" value="<?php echo $ii_a_kecamatan; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Kecamatan Alamat">
                                              <p class="help-block"><?php echo form_error('ii_a_kecamatan') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Kabupaten/Kota</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="ii_a_kabkota" readonly="" id="ii_a_kabkota" value="<?php echo $ii_a_kabkota; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Kabupaten/Kota Alamat">
                                              <p class="help-block"><?php echo form_error('ai_a_kabkota') ?></p>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Provinsi</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="ii_a_provinsi" readonly="" id="ii_a_provinsi" value="<?php echo $ii_a_provinsi; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Proinsi Alamat">
                                              <p class="help-block"><?php echo form_error('ii_a_provinsi') ?></p>
                                          </div>
                                      </div>
                                       <div class="form-group">
                                          <label class="col-lg-2 control-label">Pekerjaan</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="ii_pekerjaan" id="ii_pekerjaan" readonly="" class="form-control tooltips" value="<?php echo $ii_pekerjaan; ?>" data-toggle="tooltip " data-original-title="NIK Diisikan Tanpa Huruf & Spasi" required>
                                              <p class="help-block"><?php echo form_error('ii_pekerjaan') ?></p>
                                          </div>
                                      </div>
                                 </fieldset>

                    <!--DATA DUA ORANG SAKSI NYA-->
                                  <fieldset title="Data Saksi" class="step" id="default-step-1" >
                                  <div class="alert alert-info fade in">
                                       <center><h4>
                                          <strong>Lengkapi!</strong> 
                                          Data Saksi Ke-1 Perkawinan
                                          </h4></center>
                                      </div>
                                      <legend> </legend>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">NIK</label>
                                          <div class="col-lg-8">
                                              <input type="text" name="s1_nik" id="s1_nik" value="<?php echo $s1_nik; ?>" onkeypress="return runScript(event)" maxlength="16" class="form-control tooltips" data-toggle="tooltip" data-original-title="Isi Dengan Benar NIK" >
                                              <p class="help-block"><?php echo form_error('s1_nik') ?></p>
                                          </div>
                                          <div class="col-lg-2">
                                            <a class="btn btn-info" href="javascript:void(0)" onclick="updateDataSaksi1()">Cek NIK !!</a>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Nama Lengkap</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="s1_nama" readonly="" id="s1_nama" value="<?php echo $s1_nama; ?>" class="form-control tooltips" data-toggle="tooltip" data-original-title="Isi Dengan Benar Nama Lengkap" >
                                              <p class="help-block"><?php echo form_error('s1_nama') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Tempat Lahir</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="s1_tmp_lahir" readonly="" id="s1_tmp_lahir" value="<?php echo $s1_tmp_lahir; ?>" class="form-control tooltips" data-toggle="tooltip " data-original-title="Gunakan Format 24Jam">
                                              <p class="help-block"><?php echo form_error('s1_tmp_lahir') ?></p>
                                          </div>
                                          <div class="col-lg-1"></div>
                                          <label class="col-lg-1 control-label">Tanggal Lahir</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="s1_tgl_lahir" readonly="" id="s1_tgl_lahir" value="<?php echo $s1_tgl_lahir; ?>" class="form-control tooltips" data-toggle="tooltip " data-original-title="Gunakan Format 24Jam">
                                              <p class="help-block"><?php echo form_error('s1_tgl_lahir') ?></p>
                                          </div>
                                      </div>

                                      <script type="text/javascript">
                                        function agamaSaksi1() {
                                            var selMenu = document.getElementById('s1_agama');
                                            var hasil = document.getElementById('s1_nama_organisasi');
                                            if(selMenu.value == 'Penghayat Kepercayaan'){
                                              hasil.disabled = false;
                                            }   
                                            else{
                                              hasil.disabled = true;
                                            }    
                                        }
                                      </script>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Agama / Penghayat Kepercayaan</label>
                                          <div class="col-lg-10">
                                              <select class="form-control" name="s1_agama" id="s1_agama" onchange="agamaSaksi1()">
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Budha">Budha</option>
                                                <option value="Konghucu">Konghucu</option>
                                                <option value="Penghayat Kepercayaan">Penghayat Kepercayaan</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>
                                            <p class="help-block"><?php echo form_error('s1_agama') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Nama Organisasi Penghayat Kepecrayaan</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="s1_nama_organisasi" id="s1_nama_organisasi" disabled="" class="form-control tooltips" value="<?php echo $s1_nama_organisasi; ?>" placeholder="" data-toggle="tooltip " placeholder="" data-original-title="Isi Dengan Nama Organisasi Penghayat Kepercayaan" >
                                              <p class="help-block"><?php echo form_error('s1_nama_organisasi') ?></p>
                                          </div>
                                      </div>
                                 
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Alamat</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="s1_a_alamat" readonly="" id="s1_a_alamat" value="<?php echo $s1_a_alamat; ?>" class="form-control tooltips" data-toggle="tooltip" data-original-title="Isi Dengan Nama Dusun/Jalan" >
                                              <p class="help-block"><?php echo form_error('s1_a_alamat') ?></p>
                                          </div>
                                      </div>


                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Desa/Kelurahan</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="s1_a_desa" readonly="" id="s1_a_desa" value="<?php echo $s1_a_desa; ?>" class="form-control tooltips" data-toggle="tooltip " data-original-title="Desa Alamat">
                                              <p class="help-block"><?php echo form_error('s1_a_desa') ?></p>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Kecamatan</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="s1_a_kecamatan" readonly="" id="s1_a_kecamatan" value="<?php echo $s1_a_kecamatan; ?>" class="form-control tooltips" data-toggle="tooltip " data-original-title="Kecamatan Alamat">
                                              <p class="help-block"><?php echo form_error('s1_a_kecamatan') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Kabupaten/Kota</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="s1_a_kabkota" readonly="" id="s1_a_kabkota" value="<?php echo $s1_a_kabkota; ?>" class="form-control tooltips" data-toggle="tooltip " data-original-title="Kabupaten/Kota Alamat">
                                              <p class="help-block"><?php echo form_error('s1a_kabkota') ?></p>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Provinsi</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="s1_a_provinsi" readonly="" id="s1_a_provinsi" value="<?php echo $s1_a_provinsi; ?>" class="form-control tooltips" data-toggle="tooltip " data-original-title="Proinsi Alamat">
                                              <p class="help-block"><?php echo form_error('s1_a_provinsi') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Pekerjaan</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="s1_pekerjaan" readonly="" id="s1_pekerjaan" value="<?php echo $s1_pekerjaan; ?>" class="form-control tooltips" placeholder="" data-toggle="tooltip " placeholder="" data-original-title="Isi Dengan Nama Dusun/Jalan" >
                                              <p class="help-block"><?php echo form_error('s1_pekerjaan') ?></p>
                                          </div>
                                      </div>

                                        <br><hr>

                                      <div class="alert alert-info fade in">
                                       <center><h4>
                                          <strong>Lengkapi!</strong> 
                                          Data Saksi Ke-2 Perkawinan
                                          </h4></center>
                                      </div>

                                        <legend> </legend>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">NIK</label>
                                          <div class="col-lg-8">
                                              <input type="text" name="s2_nik" id="s2_nik" value="<?php echo $s2_nik; ?>" onkeypress="return runScript(event)" maxlength="16" class="form-control tooltips" data-toggle="tooltip" data-original-title="Isi Dengan Benar NIK" >
                                              <p class="help-block"><?php echo form_error('s2_nik') ?></p>
                                          </div>
                                          <div class="col-lg-2">
                                            <a class="btn btn-info" href="javascript:void(0)" onclick="updateDataSaksi2()">Cek NIK !!</a>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Nama Lengkap</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="s2_nama" readonly="" id="s2_nama" value="<?php echo $s2_nama; ?>" class="form-control tooltips" data-toggle="tooltip" data-original-title="Isi Dengan Benar Nama Lengkap" >
                                              <p class="help-block"><?php echo form_error('s2_nama') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Tempat Lahir</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="s2_tmp_lahir" readonly="" id="s2_tmp_lahir" value="<?php echo $s2_tmp_lahir; ?>" class="form-control tooltips" data-toggle="tooltip " data-original-title="Gunakan Format 24Jam">
                                              <p class="help-block"><?php echo form_error('s2_tmp_lahir') ?></p>
                                          </div>
                                          <div class="col-sm-1"></div>
                                          <label class="col-lg-1 control-label">Tanggal Lahir</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="s2_tgl_lahir" readonly="" id="s2_tgl_lahir" value="<?php echo $s2_tgl_lahir; ?>" class="form-control tooltips" data-toggle="tooltip " data-original-title="Gunakan Format 24Jam">
                                              <p class="help-block"><?php echo form_error('s2_tgl_lahir') ?></p>
                                          </div>
                                      </div>

                                      <script type="text/javascript">
                                        function agamaSaksi2() {
                                            var selMenu = document.getElementById('s2_agama');
                                            var hasil = document.getElementById('s2_nama_organisasi');
                                            if(selMenu.value == 'Penghayat Kepercayaan'){
                                              hasil.disabled = false;
                                            }   
                                            else{
                                              hasil.disabled = true;
                                            }    
                                        }
                                      </script>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Agama / Penghayat Kepercayaan</label>
                                          <div class="col-lg-10">
                                              <select class="form-control" name="s2_agama" id="s2_agama" onchange="agamaSaksi2()">
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Budha">Budha</option>
                                                <option value="Konghucu">Konghucu</option>
                                                <option value="Penghayat Kepercayaan">Penghayat Kepercayaan</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>
                                            <p class="help-block"><?php echo form_error('s2_agama') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Nama Organisasi Penghayat Kepecrayaan</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="s2_nama_organisasi" id="s2_nama_organisasi" disabled="" class="form-control tooltips" value="<?php echo $s2_nama_organisasi; ?>" placeholder="" data-toggle="tooltip " placeholder="" data-original-title="Isi Dengan Nama Organisasi Penghayat Kepercayaan" >
                                              <p class="help-block"><?php echo form_error('s2_nama_organisasi') ?></p>
                                          </div>
                                      </div>
                        
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Alamat</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="s2_a_alamat" readonly="" id="s2_a_alamat" value="<?php echo $s2_a_alamat; ?>" class="form-control tooltips" data-toggle="tooltip" data-original-title="Isi Dengan Nama Dusun/Jalan" >
                                              <p class="help-block"><?php echo form_error('s2_a_alamat') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Desa/Kelurahan</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="s2_a_desa" readonly="" id="s2_a_desa" value="<?php echo $s2_a_desa; ?>" class="form-control tooltips" data-toggle="tooltip " data-original-title="Desa Alamat">
                                              <p class="help-block"><?php echo form_error('s2_a_desa') ?></p>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Kecamatan</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="s2_a_kecamatan" readonly="" id="s2_a_kecamatan" value="<?php echo $s2_a_kecamatan; ?>" class="form-control tooltips" data-toggle="tooltip " data-original-title="Kecamatan Alamat">
                                              <p class="help-block"><?php echo form_error('s2_a_kecamatan') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Kabupaten/Kota</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="s2_a_kabkota" readonly="" id="s2_a_kabkota" value="<?php echo $s2_a_kabkota; ?>" class="form-control tooltips" data-toggle="tooltip " data-original-title="Kabupaten/Kota Alamat">
                                              <p class="help-block"><?php echo form_error('s2_a_kabkota') ?></p>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Provinsi</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="s2_a_provinsi" readonly="" id="s2_a_provinsi" value="<?php echo $s2_a_provinsi; ?>" class="form-control tooltips" data-toggle="tooltip " data-original-title="Proinsi Alamat">
                                              <p class="help-block"><?php echo form_error('s2_a_provinsi') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Pekerjaan</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="s2_pekerjaan" readonly="" id="s2_pekerjaan" value="<?php echo $s2_pekerjaan; ?>" class="form-control tooltips" placeholder="" data-toggle="tooltip " placeholder="" data-original-title="Isi Dengan Nama Dusun/Jalan" >
                                              <p class="help-block"><?php echo form_error('s2_pekerjaan') ?></p>
                                          </div>
                                      </div>

                                  </fieldset>

                      <!--DATA CATATAN PERKAWINAN-->
                                  <fieldset title="Perkawinan" class="step" id="default-step-1" >
                                      <legend> </legend>
                                      <div class="form-group">
                                        <label class="col-lg-2 control-label">Tanggal Pencatatan Perkawinan</label>
                                          <div class="col-lg-9">
                                            <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="2016-07-10" class="input-append date dpYears">
                                                   <input type="text" readonly="" name="tgl_pemberkatan" id="tgl_pemberkatan" value="<?php echo $tgl_pemberkatan; ?>" size="16" class="form-control">
                                                    <span class="input-group-btn add-on">
                                                      <button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
                                                    </span>
                                            </div>
                                            <p class="help-block"><?php echo form_error('tgl_pemberkatan') ?></p>
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label class="col-lg-2 control-label">Tanggal Pelaporan Perkawinan</label>
                                          <div class="col-lg-4">
                                              <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="2016-07-10" class="input-append date dpYears">
                                                     <input type="text" readonly="" name="tgl_lapor" id="tgl_lapor" value="<?php if($tgl_lapor=='')echo date("Y-m-d");else echo $tgl_lapor; ?>" size="16" class="form-control">
                                                      <span class="input-group-btn add-on">
                                                      </span>
                                              </div>
                                              <p class="help-block"><?php echo form_error('tgl_lapor') ?></p>
                                          </div>
                                          <div  class="col-lg-1"></div>
                                          <label class="col-lg-1 control-label">Pukul Melapor</label>
                                            <div class="col-lg-4">
                                                <div class="input-group bootstrap-timepicker">
                                                        <input type="text" value="<?php if($pukul=='')echo date("H:i:s");else echo $pukul; ?>" readonly name="pukul" id="pukul" class="form-control timepicker-24">
                                                           <span class="input-group-btn">
                                                           </span>
                                               </div>
                                                <p class="help-block"><?php echo form_error('pukul') ?></p>
                                            </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Hari Pelaporan</label>
                                          <div class="col-lg-10">
                                              <select name="hari_lapor" class="form-control">
                                                <option value="<?php echo $hari_lapor; ?>"><?php echo $hari_lapor; ?></option>
                                                <option value="SENIN">SENIN</option>
                                                <option value="SELASA">SELASA</option>
                                                <option value="RABU">RABU</option>
                                                <option value="KAMIS">KAMIS</option>
                                                <option value="JUMAT">JUMAT</option>
                                                <option value="SABTU">SABTU</option>
                                                <option value="MINGGU">MINGGU</option>
                                            </select>
                                          </div>
                                      </div>

                                      <script type="text/javascript">
                                        function agamaPerkawinan() {
                                            var selMenu = document.getElementById('agama');
                                            var hasil = document.getElementById('nama_organisasi');
                                            if(selMenu.value == 'Penghayat Kepercayaan'){
                                              hasil.disabled = false;
                                            }   
                                            else{
                                              hasil.disabled = true;
                                            }    
                                        }
                                      </script>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Agama / Penghayat Kepercayaan</label>
                                          <div class="col-lg-10">
                                              <select class="form-control" name="agama" id="agama" onchange="agamaPerkawinan()">
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Budha">Budha</option>
                                                <option value="Konghucu">Konghucu</option>
                                                <option value="Penghayat Kepercayaan">Penghayat Kepercayaan</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>
                                            <p class="help-block"><?php echo form_error('agama') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Nama Organisasi Penghayat Kepecrayaan</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="nama_organisasi" id="nama_organisasi" disabled="" class="form-control tooltips" value="<?php echo $nama_organisasi; ?>" data-toggle="tooltip" data-original-title="Isi Dengan Nama Organisasi Penghayat Kepercayaan" >
                                              <p class="help-block"><?php echo form_error('nama_organisasi') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Nama Badan Peradilan</label>
                                          <div class="col-lg-10">
                                              <input type="text" class="form-control tooltips" name="nama_peradilan" id="nama_peradilan" value="<?php echo $nama_peradilan; ?>" data-toggle="tooltip" data-original-title=" Nama pengadilan negeri diisi sesuai dengan Kab/Kota" value="<?php echo $nama_peradilan; ?>" />
                                              <p class="help-block"><?php echo form_error('nama_peradilan') ?></p>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Nomer Putusan Penetapan Pengadilan</label>
                                          <div class="col-lg-10">
                                              <input type="text" class="form-control tooltips" name="nomor_putusan" id="nomor_putusan" value="<?php echo $nomor_putusan; ?>" data-toggle="tooltip" data-original-title="Diisi sesuai nomor penetapan pengadilan negeri" value="<?php echo $nomor_putusan; ?>" />
                                              <p class="help-block"><?php echo form_error('nomor_putusan') ?></p></div>
                                      </div>

                                      <div class="form-group">
                                        <label class="col-lg-2 control-label">Tanggal Putusan Penetapan Pengadilan</label>
                                          <div class="col-lg-4">
                                              <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="2016-07-10" class="input-append date dpYears">
                                                     <input type="text" readonly="" name="tgl_putusan" id="tgl_putusan" value="<?php echo $tgl_putusan; ?>" size="16" class="form-control" data-toggle="tooltip" data-original-title="Nama Pe">
                                                      <span class="input-group-btn add-on">
                                                        <button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
                                                      </span>
                                              </div>
                                              <p class="help-block"><?php echo form_error('tgl_putusan') ?></p>
                                          </div>
                                      </div>


                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Nama Pemuka Agama/Penghayat</label>
                                          <div class="col-lg-10">
                                              <input type="text" class="form-control tooltips" name="nama_pemuka" id="nama_pemuka" value="<?php echo $nama_pemuka; ?>" data-toggle="tooltip" data-original-title="Nama Pemuka Agama/kepercayaan diisi sesuai dengan nama Pemuka Agama/kepercayaan  yang mengesahkan perkawinan." value="<?php echo $nama_pemuka; ?>" />
                                              <p class="help-block"><?php echo form_error('nama_pemuka') ?></p> </div>
                                      </div>
                                  </fieldset>

                                  <fieldset title="Data Anak" class="step" id="default-step-1" >
                                      <legend> </legend>

                                      <table class="table table-striped table-advance table-hover">
                                          <thead>
                                          <tr>
                                              <th><i class="fa fa-bullhorn"></i> Nomor</th>
                                              <th><i class="fa fa-bullhorn"></i> Nama Anak</th>
                                              <th><i class="fa fa-bullhorn"></i> Nomor Akta</th>
                                              <th class="hidden-phone"> Tanggal Akta</th>
                                              <th><i class=" fa fa-edit"></i> Opsi</th>
                                              <th></th>
                                          </tr>
                                          </thead>
                                          <tbody>
                                          <?php $i=1; foreach ($ANAK as $key) { ?> 
                                          <tr>
                                              <td><a href="#"><?php echo $i++ ;?></a></td>
                                              <td class="hidden-phone"><?php echo $key->nama_anak;?></td>
                                              <td><?php echo $key->nomor_akta;?></td>
                                              <td><?php echo dateindo($key->tgl_akta);?></td>
                                              <td><a href=<?php echo base_url("f2_12/hapus_anak/".$key->id_dataanak)?> class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> HAPUS </a></td>
                                          </tr>
                                          <?php } ?>
                                          </tbody>
                                     </table>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Tambahkan Jumlah Anak Yang Diakui</label>
                                          <div class="col-lg-10">
                                              <select name="jml_anak" id="jml_anak" class="form-control">
                                                <option value="0"> Tidak Ada (0)</option>
                                                <option value="1"> Satu (1)</option>
                                                <option value="2"> Dua (2)</option>
                                                <option value="3"> Tiga (3)</option>
                                                <option value="4"> Empat (4)</option>
                                                <option value="5"> Lima (5)</option>
                                                <option value="6"> Enam (6)</option>
                                            </select>
                                          </div>
                                      </div>

                                      <div id="anak">

                                      <script type="text/javascript">
                                        $("#jml_anak").change(function(){
                                                var jml_anak = {jml_anak:$("#jml_anak").val()};
                                                $.ajax({
                                                        type: "POST",
                                                        url : "<?php echo site_url('f2_12/jum_anak')?>",
                                                        data: jml_anak,
                                                        success: function(msg){
                                                            $('#anak').html(msg);
                                                        }
                                                    });
                                        });
                                       </script>      
                                      
                                  </fieldset>

                  
                                  <fieldset title="Selesai" class="step" id="default-step-2" >
                                  <center>
                                    <h3>Pastikan Data Yang Anda Isikan Benar, Kemudian Upload Kelengkapan berkas
                                  persyaratan pengajuan Akta Perceraian.</h3>
                                  </center>
                                  
                                      <legend> </legend>

                                      <div class="alert alert-info fade in">
                                       <center><h4>
                                          <strong>Layanan SMS Tracking Dokumen!</strong> 
                                          dengan format "STATUS_NOMOR PENDAFTARAN" kirim sms ke 0857-25-4858-10
                                          </h4></center>
                                      </div>
                                  </fieldset>
                                  <input type="hidden" name="id_ap" value="<?php echo $ID_AP?>">
                                  <input type="hidden" name="id_ms" value="<?php echo $s_id_mempelai?>">
                                  <input type="hidden" name="id_as" value="<?php echo $as_id_ortu?>">
                                  <input type="hidden" name="id_is" value="<?php echo $is_id_ortu?>">
                                  <input type="hidden" name="id_mi" value="<?php echo $i_id_mempelai?>">
                                  <input type="hidden" name="id_ai" value="<?php echo $ai_id_ortu?>">
                                  <input type="hidden" name="id_ii" value="<?php echo $ii_id_ortu?>">
                                  <input type="hidden" name="id_perkawinan" value="<?php echo $id_dataper?>">
                                  <input type="hidden" name="id_saksi1" value="<?php echo $s1_id_saksi?>">
                                  <input type="hidden" name="id_saksi2" value="<?php echo $s2_id_saksi?>">
                                  

                                  <input type="submit" class="finish btn btn-danger" value="Simpan Formulir!!"/>
                              </form>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>