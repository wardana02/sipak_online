<section id="">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
              <div class="col-lg-1"></div>
                  <div class="col-lg-10">

                      <section class="panel">
                      <center>
                      <?php echo "
                        <h2>Akta Kelahiran Online</h2>
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

                          <center>
                          <header class="panel-heading btn btn-primary">
                              1. Formulir Akta Kelahiran
                          </header>
                          <a href="<?php echo site_url('b2_01/berkas/'.$ID_AL) ?>">
                          <header class="panel-heading btn btn-default">
                              2. Berkas Akta Kelahiran
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
                                          <div>Data Bayi</div>
                                      </li>
                                      <li id="default-title-1" class="">
                                          <div>Data Ibu</div>
                                      </li>
                                      <li id="default-title-2" class="">
                                          <div>Data Ayah</div>
                                      </li>
                                      <li id="default-title-3" class="">
                                          <div>Data Pelapor</div>
                                      </li>
                                      <li id="default-title-4" class="">
                                          <div>Data Saksi 1</div>
                                      </li>
                                      <li id="default-title-5" class="">
                                          <div>Data Saksi 2</div>
                                      </li>
                                      <li id="default-title-6" class="">
                                          <div>Selesai</div>
                                      </li>
                                  </ul>
                              </div>
                              <form class="form-horizontal" method="post" action="<?php echo $action; ?>" id="default">
                                  <fieldset title="Data Bayi" class="step" id="default-step-0">
                                      <legend> </legend>
                                      <div class="alert alert-info fade in">
                                       <center><h4>
                                          <strong>Lengkapi!</strong> 
                                          Data Identitas Bayi
                                          </h4></center>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Nama Bayi </label>
                                          <div class="col-lg-10">
                                              <input type="text" name="nama" value="<?php echo $nama; ?>" class="form-control tooltips" data-toggle="tooltip " data-original-title="Isi Dengan Huruf Seperti Contoh">
                                              <p class="help-block"><?php echo form_error('nama') ?></p>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Jenis Kelamin</label>
                                          <div class="col-lg-10">
                                            <div class="radios">
                                              <label class="label_radio r_on" for="radio-01">
                                                  <input name="jk" value="Laki-Laki" <?php if($jk=='Laki-Laki') echo "checked=''"; ?> type="radio" > Laki-Laki
                                              </label>
                                              <label class="label_radio r_off" for="radio-02">
                                                  <input name="jk" value="Perempuan" <?php if($jk=='Perempuan') echo "checked=''"; ?> type="radio"> Perempuan
                                              </label>
                                          </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Tempat Dilahirkan</label>
                                          <div class="col-lg-10">
                                              <select name="tmp_lahir" class="form-control">
                                                <option value="<?php echo $tmp_lahir; ?>"><?php echo $tmp_lahir; ?></option>
                                                <option value="Rumah Sakit/Rumah Bersalin">Rumah Sakit/Rumah Bersalin</option>
                                                <option value="Puskesmas">Puskesmas</option>
                                                <option value="Polindes">Polindes</option>
                                                <option value="Rumah">Rumah</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Tempat Kelahiran</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="tmp_kelahiran" value="<?php echo $tmp_kelahiran; ?>" class="form-control tooltips" data-toggle="tooltip " data-original-title="Isi Dengan Nama Kabupaten / Kota">
                                              <p class="help-block"><?php echo form_error('tmp_kelahiran') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Hari Kelahiran</label>
                                          <div class="col-lg-10">
                                              <select name="hari_kelahiran" class="form-control">
                                                <option value="<?php echo $hari_kelahiran; ?>"><?php echo $hari_kelahiran; ?></option>
                                                <option value="Senin">Senin</option>
                                                <option value="Selasa">Selasa</option>
                                                <option value="Rabu">Rabu</option>
                                                <option value="Kamis">Kamis</option>
                                                <option value="Jumat">Jumat</option>
                                                <option value="Sabtu">Sabtu</option>
                                                <option value="Minggu">Minggu</option>
                                            </select>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Tanggal Kelahiran</label>
                                          <div class="col-lg-4">
                                              <div data-date-viewmode="years" data-date-format="yyyy-mm-dd"  data-date="2016-02-23" class="input-append date dpYears">
                                                  <input type="text" name="tgl_kelahiran" value="<?php echo $tgl_kelahiran; ?>" readonly="" size="16" class="form-control">
                                                      <span class="input-group-btn add-on">
                                                        <button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
                                                      </span>
                                                      <p class="help-block"><?php echo form_error('tgl_kelahiran') ?></p>
                                              </div>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Pukul</label>
                                            <div class="col-lg-4">
                                                <div class="input-group bootstrap-timepicker">
                                                    <input type="text" value="<?php echo $pukul; ?>" readonly name="pukul" class="form-control timepicker-24">
                                                      <span class="input-group-btn">
                                                      <button class="btn btn-danger" type="button"><i class="fa fa-clock-o"></i></button>
                                                      </span>
                                                </div>
                                                <p class="help-block"><?php echo form_error('tgl_kelahiran') ?></p>
                                            </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Jenis Kelahiran</label>
                                          <div class="col-lg-4">
                                              <select name="jenis_kelahiran" class="form-control">
                                                <option value="<?php echo $jenis_kelahiran; ?>"><?php echo $jenis_kelahiran; ?></option>
                                                <option value="Kelahiran Tunggal">Kelahiran Tunggal</option>
                                                <option value="Kembar 2">Kembar 2</option>
                                                <option value="Kembar 3">Kembar 3</option>
                                                <option value="Kembar 4">Kembar 4</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Kelahiran Ke-</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="kelahiran_ke" value="<?php echo $kelahiran_ke; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="1" data-original-title="Isi Dengan Format Angka">
                                              <p class="help-block"><?php echo form_error('kelahiran_ke') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Penolong Kelahiran</label>
                                          <div class="col-lg-10">
                                              <select name="penolong" class="form-control">
                                                <option value="<?php echo $penolong; ?>"><?php echo $penolong; ?></option>
                                                <option value="Dokter">Dokter</option>
                                                <option value="Bidan/Perawat">Bidan/Perawat</option>
                                                <option value="Dukun">Dukun</option>
                                                <option value="Lainyya">Lainyya</option>
                                            </select>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Berat Bayi</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="berat_bayi" class="form-control tooltips" data-toggle="tooltip" value="<?php echo $berat_bayi; ?>" data-original-title="Berat Bayi Dalam satuan Kg">
                                               <p class="help-block"><?php echo form_error('berat_bayi') ?></p>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Panjang Bayi</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="panjang_bayi" class="form-control tooltips" data-toggle="tooltip " value="<?php echo $panjang_bayi; ?>" data-original-title="Panjang Bayi Dalam satuan m">
                                               <p class="help-block"><?php echo form_error('panjang_bayi') ?></p>
                                          </div>
                                      </div>
                                  </fieldset>


                                  <fieldset title="Data Ibu" class="step" id="default-step-1" >
                                      <legend> </legend>
                                      <div class="alert alert-info fade in">
                                       <center><h4>
                                          <strong>Lengkapi!</strong> 
                                          Data Ibu dari Bayi
                                          </h4></center>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">NIK</label>
                                          <div class="col-lg-8">
                                              <input type="text" onkeypress="return runScript(event)"  maxlength="16" name="i_nik" id="i_nik" required value="<?php echo $i_nik; ?>" class="form-control tooltips"data-toggle="tooltip " data-original-title="Isi Dengan Benar NIK" >
                                              <p class="help-block"><?php echo form_error('i_nik') ?></p>
                                          </div>
                                          <div class="col-lg-2">
                                            <a class="btn btn-info" href="javascript:void(0)" onclick="updateDataIbu()">Cek NIK !!</a>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Nama Lengkap</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="i_nama" id="i_nama" readonly="" value="<?php echo $i_nama; ?>" class="form-control tooltips" placeholder="" data-toggle="tooltip " placeholder="" data-original-title="Isi Dengan Benar NIK" >
                                              <p class="help-block"><?php echo form_error('i_nama') ?></p>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Tanggal Lahir</label>
                                          <div class="col-lg-4">
                                              <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="2012-02-23" class="input-append date dpYears">
                                                  <input type="text" name="i_tgl_lahir" id="i_tgl_lahir" readonly=""  value="<?php echo $i_tgl_lahir; ?>" size="16" class="form-control">
                                                      <span class="input-group-btn add-on">
                                                        <button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
                                                      </span>
                                                  <p class="help-block"><?php echo form_error('i_tgl_lahir') ?></p>
                                              </div>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Umur</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="i_umur" id="i_umur" onkeypress="return runScript(event)" value="<?php echo $i_umur; ?>" class="form-control tooltips"  data-toggle="tooltip " placeholder="" data-original-title="Masukan Angka Umur">
                                              <p class="help-block"><?php echo form_error('i_umur') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Pekerjaan</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="i_pekerjaan" readonly="" id="i_pekerjaan" value="<?php echo $i_pekerjaan; ?>" class="form-control tooltips" placeholder="" data-toggle="tooltip " placeholder="" data-original-title="Isi Dengan Nama Dusun/Jalan" >
                                              <p class="help-block"><?php echo form_error('i_pekerjaan') ?></p>
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
                                              <p class="help-block"><?php echo form_error('i_a_kecamatan') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Kabupaten/Kota</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="i_a_kabkota" readonly="" id="i_a_kabkota" value="<?php echo $i_a_kabkota; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Kabupaten/Kota Alamat">
                                              <p class="help-block"><?php echo form_error('i_a_kabkota') ?></p>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Provinsi</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="i_a_provinsi" readonly="" id="i_a_provinsi" value="<?php echo $i_a_provinsi; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Proinsi Alamat">
                                              <p class="help-block"><?php echo form_error('i_a_provinsi') ?></p>
                                          </div>
                                      </div>


                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Tanggal Pencatanan Perkawinan</label>
                                          <div class="col-lg-9">
                                            <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="2016-02-23" class="input-append date dpYears">
                                                  <input type="hidden" name="status" value="Data Istri" >
                                                  <input type="text" name="tgl_pencatatan_kawin" readonly="" value="<?php echo $i_tgl_pencatatan_kawin; ?>" size="16" class="form-control">
                                                      <span class="input-group-btn add-on">
                                                        <button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
                                                      </span>
                                                  <p class="help-block"><?php echo form_error('tgl_pencatatan_kawin') ?></p>
                                              </div>    
                                          </div>
                                      </div>
                                  </fieldset>


                                  <fieldset title="Data Ayah" class="step" id="default-step-1" >
                                      <legend> </legend>
                                      <div class="alert alert-info fade in">
                                       <center><h4>
                                          <strong>Lengkapi!</strong> 
                                          Data Ayah dari Bayi
                                          </h4></center>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">NIK</label>
                                          <div class="col-lg-8">
                                              <input type="text" onkeypress="return runScript(event)" maxlength="16" name="a_nik" id="a_nik" value="<?php echo $a_nik; ?>" class="form-control tooltips" placeholder="" data-toggle="tooltip " placeholder="" data-original-title="Isi Dengan Benar NIK" >
                                              <p class="help-block"><?php echo form_error('a_nik') ?></p>
                                          </div>
                                          <div class="col-lg-2">
                                            <a class="btn btn-info" href="javascript:void(0)" onclick="updateDataAyah()">Cek NIK !!</a>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Nama Lengkap</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="a_nama" readonly="" id="a_nama" value="<?php echo $a_nama; ?>" class="form-control tooltips" placeholder="" data-toggle="tooltip " placeholder="" data-original-title="Isi Dengan Benar NIK" >
                                              <p class="help-block"><?php echo form_error('a_nama') ?></p>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Tanggal Lahir</label>
                                          <div class="col-lg-4">
                                              <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012" class="input-append date dpYears">
                                                  <input type="text" name="a_tgl_lahir" id="a_tgl_lahir" readonly="" value="<?php echo $a_tgl_lahir; ?>" size="16" class="form-control">
                                                      <span class="input-group-btn add-on">
                                                        <button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
                                                      </span>
                                                  <p class="help-block"><?php echo form_error('a_tgl_lahir') ?></p>
                                              </div>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Umur</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="a_umur" onkeypress="return runScript(event)" id="a_umur" value="<?php echo $a_umur; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Masukan Angka Umur">
                                              <p class="help-block"><?php echo form_error('a_umur') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Pekerjaan</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="a_pekerjaan" readonly="" id="a_pekerjaan" value="<?php echo $a_pekerjaan; ?>" class="form-control tooltips" placeholder="" data-toggle="tooltip " placeholder="" data-original-title="Isi Dengan Nama Dusun/Jalan" >
                                              <p class="help-block"><?php echo form_error('a_pekerjaan') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Alamat</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="a_a_alamat" readonly="" id="a_a_alamat" value="<?php echo $a_a_alamat; ?>" class="form-control tooltips" data-toggle="tooltip " data-original-title="Isi Dengan Nama Dusun/Jalan" >
                                              <p class="help-block"><?php echo form_error('a_a_alamat') ?></p>
                                          </div>
                                      </div>


                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Desa/Kelurahan</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="a_a_desa" readonly="" id="a_a_desa" value="<?php echo $a_a_desa; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Desa Alamat">
                                              <p class="help-block"><?php echo form_error('a_a_desa') ?></p>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Kecamatan</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="a_a_kecamatan" readonly="" id="a_a_kecamatan" value="<?php echo $a_a_kecamatan; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Kecamatan Alamat">
                                              <p class="help-block"><?php echo form_error('a_a_kecamatan') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Kabupaten/Kota</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="a_a_kabkota" readonly="" id="a_a_kabkota" value="<?php echo $a_a_kabkota; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Kabupaten/Kota Alamat">
                                              <p class="help-block"><?php echo form_error('a_a_kabkota') ?></p>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Provinsi</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="a_a_provinsi" readonly="" id="a_a_provinsi" value="<?php echo $a_a_provinsi; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Proinsi Alamat">
                                              <p class="help-block"><?php echo form_error('a_a_provinsi') ?></p>
                                          </div>
                                      </div>

                                  </fieldset>

                                  <fieldset title="Data Pelapor" class="step" id="default-step-1" >
                                      <legend> </legend>
                                      <div class="alert alert-info fade in">
                                       <center><h4>
                                          <strong>Lengkapi!</strong> 
                                          Data Pelapor Kelahiran
                                          </h4></center>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">NIK</label>
                                          <div class="col-lg-8">
                                              <input type="text" onkeypress="return runScript(event)" maxlength="16" name="p_nik" id="p_nik" value="<?php echo $p_nik; ?>" class="form-control tooltips" data-toggle="tooltip " data-original-title="Isi Dengan Benar NIK" >
                                              <p class="help-block"><?php echo form_error('p_nik') ?></p>
                                          </div>
                                          <div class="col-lg-2">
                                            <a class="btn btn-info" href="javascript:void(0)" onclick="updateDataPelapor()">Cek NIK !!</a>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Nama Lengkap</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="p_nama" readonly="" id="p_nama" value="<?php echo $p_nama; ?>" class="form-control tooltips" placeholder="" data-toggle="tooltip " placeholder="" data-original-title="Isi Dengan Benar NIK" >
                                              <p class="help-block"><?php echo form_error('p_nama') ?></p>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Pekerjaan</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="p_pekerjaan" readonly="" id="p_pekerjaan" value="<?php echo $p_pekerjaan; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="15:00" data-original-title="Gunakan Format 24Jam">
                                              <p class="help-block"><?php echo form_error('p_pekerjaan') ?></p>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Umur</label>
                                          <div class="col-lg-4">
                                              <input type="text" onkeypress="return runScript(event)" name="p_umur" value="<?php echo $p_umur; ?>" class="form-control tooltips" data-toggle="tooltip " data-original-title="Masukan Angka Umur">
                                              <p class="help-block"><?php echo form_error('p_umur') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Jenis Kelamin</label>
                                          <div class="col-lg-10">
                                            <div class="radios">
                                              <label class="label_radio r_on" for="radio-01">
                                                  <input name="p_jk" id="p_jk" <?php if($p_jk=='LAKI-LAKI') echo "checked=''"; ?> value="LAKI-LAKI" type="radio" > Laki-Laki
                                              </label>
                                              <label class="label_radio r_off" for="radio-02">
                                                  <input name="p_jk" id="p_jk" <?php if($p_jk=='PEREMPUAN') echo "checked=''"; ?> value="PEREMPUAN" type="radio"> Perempuan
                                              </label>
                                          </div>
                                          </div>
                                      </div>



                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Alamat</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="p_a_alamat" readonly="" id="p_a_alamat" value="<?php echo $p_a_alamat; ?>" class="form-control tooltips" placeholder="" data-toggle="tooltip " placeholder="" data-original-title="Isi Dengan Nama Dusun/Jalan" >
                                              <p class="help-block"><?php echo form_error('p_a_alamat') ?></p>
                                          </div>
                                      </div>


                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Desa/Kelurahan</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="p_a_desa" readonly="" id="p_a_desa" value="<?php echo $p_a_desa; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Desa Alamat">
                                              <p class="help-block"><?php echo form_error('p_a_desa') ?></p>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Kecamatan</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="p_a_kecamatan" readonly="" id="p_a_kecamatan" value="<?php echo $p_a_kecamatan; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Kecamatan Alamat">
                                              <p class="help-block"><?php echo form_error('p_a_kecamatan') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Kabupaten/Kota</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="p_a_kabkota" readonly="" id="p_a_kabkota" value="<?php echo $p_a_kabkota; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Kabupaten/Kota Alamat">
                                              <p class="help-block"><?php echo form_error('p_a_kabkota') ?></p>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Provinsi</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="p_a_provinsi" readonly="" id="p_a_provinsi" value="<?php echo $p_a_provinsi; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Proinsi Alamat">
                                              <p class="help-block"><?php echo form_error('p_a_provinsi') ?></p>
                                          </div>
                                      </div>
                                  </fieldset>

                                  <fieldset title="Data Saksi 1" class="step" id="default-step-1" >
                                      <legend> </legend>
                                      <div class="alert alert-info fade in">
                                       <center><h4>
                                          <strong>Lengkapi!</strong> 
                                          Data Saksi 1 Kelahiran
                                          </h4></center>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">NIK</label>
                                          <div class="col-lg-8">
                                              <input type="text" onkeypress="return runScript(event)" maxlength="16" name="s1_nik" id="s1_nik" value="<?php echo $s1_nik; ?>" class="form-control tooltips" data-toggle="tooltip" data-original-title="Isi Dengan Benar NIK" >
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
                                          <label class="col-lg-2 control-label">Umur</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="s1_umur" onkeypress="return runScript(event)" id="s1_umur" value="<?php echo $s1_umur; ?>" class="form-control tooltips" data-toggle="tooltip " data-original-title="Masukan Angka Umur">
                                              <p class="help-block"><?php echo form_error('s1_umur') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Pekerjaan</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="s1_pekerjaan" readonly="" id="s1_pekerjaan" value="<?php echo $s1_pekerjaan; ?>" class="form-control tooltips" placeholder="" data-toggle="tooltip " placeholder="" data-original-title="Isi Dengan Nama Dusun/Jalan" >
                                              <p class="help-block"><?php echo form_error('s1_pekerjaan') ?></p>
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
                                              <p class="help-block"><?php echo form_error('s1_a_kabkota') ?></p>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Provinsi</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="s1_a_provinsi" readonly="" id="s1_a_provinsi" value="<?php echo $s1_a_provinsi; ?>" class="form-control tooltips" data-toggle="tooltip " data-original-title="Proinsi Alamat">
                                              <p class="help-block"><?php echo form_error('s1_a_provinsi') ?></p>
                                          </div>
                                      </div>

                                  </fieldset>
                                  <fieldset title="Data Saksi 2" class="step" id="default-step-1" >
                                      <legend> </legend>
                                      <div class="alert alert-info fade in">
                                       <center><h4>
                                          <strong>Lengkapi!</strong> 
                                          Data Saksi 2 Kelahiran
                                          </h4></center>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">NIK</label>
                                          <div class="col-lg-8">
                                              <input type="text" onkeypress="return runScript(event)" maxlength="16" name="s2_nik" id="s2_nik" value="<?php echo $s2_nik; ?>" class="form-control tooltips" data-toggle="tooltip" data-original-title="Isi Dengan Benar NIK" >
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
                                          <label class="col-lg-2 control-label">Umur</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="s2_umur" id="s2_umur" onkeypress="return runScript(event)" value="<?php echo $s2_umur; ?>" class="form-control tooltips" data-toggle="tooltip " data-original-title="Masukan Angka Umur">
                                              <p class="help-block"><?php echo form_error('s2_umur') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Pekerjaan</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="s2_pekerjaan" readonly="" id="s2_pekerjaan" value="<?php echo $s2_pekerjaan; ?>" class="form-control tooltips" placeholder="" data-toggle="tooltip " placeholder="" data-original-title="Isi Dengan Nama Dusun/Jalan" >
                                              <p class="help-block"><?php echo form_error('s2_pekerjaan') ?></p>
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
                                              <p class="help-block"><?php echo form_error('s2a_kabkota') ?></p>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Provinsi</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="s2_a_provinsi" readonly="" id="s2_a_provinsi" value="<?php echo $s2_a_provinsi; ?>" class="form-control tooltips" data-toggle="tooltip " data-original-title="Proinsi Alamat">
                                              <p class="help-block"><?php echo form_error('s2_a_provinsi') ?></p>
                                          </div>
                                      </div>

                                  </fieldset>
                                  <fieldset title="Selesai" class="step" id="default-step-2" >
                                  <center>
                                    <h3>Pastikan Data Yang Anda Isikan Benar, Kemudian Upload Kelengkapan berkas
                                  persyaratan pengajuan Akta Kelahiran.</h3>
                                  </center>
                                  
                                      <legend> </legend>
                                      <div class="alert alert-info fade in">
                                       <center><h4>
                                          <strong>Layanan SMS Tracking Dokumen</strong><br> 
                                          dengan format "STATUS_NOMOR PENDAFTARAN" kirim sms ke 0857-25-4858-10
                                          </h4></center>
                                      </div>
                                  </fieldset>
                                  <input type="hidden" name="id_al" value="<?php echo $ID_AL?>">
                                  <input type="hidden" name="id_bayi" value="<?php echo $id_bayi?>">
                                  <input type="hidden" name="id_pelapor" value="<?php echo $p_id_pelapor?>">
                                  <input type="hidden" name="id_saksi1" value="<?php echo $s1_id_saksi?>">
                                  <input type="hidden" name="id_saksi2" value="<?php echo $s2_id_saksi?>">
                                  <input type="hidden" name="id_ortu1" value="<?php echo $i_id_ortu?>">
                                  <input type="hidden" name="id_ortu2" value="<?php echo $a_id_ortu?>">

                                  <input type="submit" class="finish btn btn-danger" value="Simpan Data Formulir!"/>
                              </form>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>